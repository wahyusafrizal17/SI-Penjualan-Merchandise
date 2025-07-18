<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Cart;
use App\Models\DetailUser;
use App\User;
use App\Models\TermsAndConditions;
use Auth;
use GuzzleHttp\Client;
use Response;
use Storage;
use Illuminate\Support\Facades\Hash;

class WelcomeController extends Controller
{
    public function index()
    {
        $data['setting']        = Setting::find(1);
        $data['product']        = Product::orderBy('id', 'asc')->paginate(8);
        $data['sliders']        = Slider::where('status', 0)->get();
        $data['utama']          = Slider::where('status', 1)->first();
        if(Auth::check() && Auth::user()->level == 'admin'){
            return redirect()->route('admin.dashboard');
        }
        return view('welcome',$data);
    }

    public function syaratDanKetentuan()
    {
        $data['tem']            = TermsAndConditions::find(1);
        $data['setting']        = Setting::find(1);
        return view('frontend.pages.syarat-dan-ketentuan',$data);
    }

    public function cekOngkir()
    {
        $data['provinces']      = \DB::table('tb_ro_provinces')->pluck('province_name','province_id');
        $data['setting']        = Setting::find(1);
        return view('frontend.pages.cek-ongkir',$data);
    }


    public function kabupatenDestination(Request $request)
    {
        if ($request->has('regency_id')) {
            $selected = $request->regency_id;
        } else {
            $selected = null;
        }

        $regencies = \DB::table('tb_ro_cities')
        ->where('province_id', $request->province)
        ->pluck('city_name', 'city_id');
        return \Form::select('city_destination_id', $regencies, $selected, ['class'=>'form-control','id'=>'kabupaten_destination','onChange'=>'loadkecamatanDestination()']);
    }

    public function kecamatanDestination(Request $request)
    {
        if ($request->has('district_id')) {
            $selected = $request->district_id;
        } else {
            $selected = null;
        }

        $district = \DB::table('tb_ro_subdistricts')
        ->where('city_id', $request->kabupaten)
        ->pluck('subdistrict_name', 'subdistrict_id');
        return \Form::select('district_destination_id', $district, $selected, ['class'=>'form-control','id'=>'kecamatan_destination']);
    }

    public function costDestination(Request $request)
    {
        $origin = Setting::find(1);

        $apikey         = $data['setting']->apikey_rajaongkir;
        $origin         = $origin->city_id;
        $destination    = $request->destination;
        $weight         = "1000";
        $courier        = $request->courier;

        $result = cekongkir($apikey,$origin,$destination,$weight,$courier);

        $data['costs'] = $result->rajaongkir->results;
        return view('frontend.cart.cost',$data);
    }

    public function cekHargaOngkir(Request $request)
    {
        $data['provinces']      = \DB::table('tb_ro_provinces')->pluck('province_name','province_id');
        $data['setting']        = Setting::find(1);
        
        $apikey         = $data['setting']->apikey_rajaongkir;
        $origin         = $request->city_id;
        $destination    = $request->city_destination_id;
        $weight         = $request->weight;
        $courier        = $request->courier;

        $result = cekongkir($apikey,$origin,$destination,$weight,$courier);

        $data['costs'] = $result->rajaongkir->results[0]->costs;
        $data['result'] = $result->rajaongkir->results;

        return view('frontend.pages.cek-ongkir', $data);
    }

    public function profile()
    {
        $data['user'] = User::where('id', Auth::user()->id)->with('detail')->first();

        if($data['user']['detail'])
        {
            $data['address'] = $data['user']['detail']->address;
            $data['phone'] = $data['user']['detail']->phone;

            if(!empty($data['user']['detail']->image)){
                $data['image']  = 'assets/img/profile/'.$data['user']['detail']->image.'';
            }else{
                $data['image'] = 'https://cdn.kibrispdr.org/data/user-profile-png-1.jpg';
            }
        }else{
            $data['phone'] = null;
            $data['address'] = null;
            $data['image'] = 'https://cdn.kibrispdr.org/data/user-profile-png-1.jpg';
        }

        return view('frontend.pages.profile', $data);
    }

    public function profileUpdate(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        $detail = DetailUser::where('user_id', $id)->first();

        $input = $request->all();

        if(!empty($request->password)){
            $input['password'] = Hash::make($request->password);
        }else{
            $input['password'] = $user->password;
        }

        if(empty($detail)){
            $detail = new DetailUser();
            $detail->user_id = $id;
        }
        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();    
            $destinationPath = 'assets/img/profile';
            $file->move($destinationPath,$file->getClientOriginalName());

            $detail->image = $fileName;
        }

        if(!empty($request->phone) || !empty($request->address)){
            $detail->phone = $request->phone;
            $detail->address = $request->address;
        }
        $detail->save();
        $user->update($input);

        alert()->success('Profile berhasil diubah' , 'Success');
        return redirect()->back();
    }
}
