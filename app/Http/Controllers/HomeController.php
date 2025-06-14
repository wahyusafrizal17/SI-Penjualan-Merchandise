<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(\Auth::check() && \Auth::user()->level == 'super'){
            return redirect('materi');
        }else{
            return view('website.welcome');
        }
    }

    public function materi()
    {
        $data['materi'] = Materi::paginate(6);
        return view('website.materi', $data);
    }

    public function detail($id)
    {
        $data['materi'] = Materi::find($id);
        return view('website.detail', $data);
    }

    public function about()
    {
        return view('website.about');
    }
}
