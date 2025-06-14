<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi;
use App\Http\Requests\Materi\StoreRequest;
use App\Http\Requests\Materi\UpdateRequest;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['model'] = Materi::all();

        return view('materi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $input = $request->all();
        if($request->hasFile('banner')){
            $File = 'banner_' . date('Ymdhis').'.png';
            $Path = base_path().'/'.'public'.'/banner';
            $request->file('banner')->move($Path, $File);

            $input['banner'] = $File;
        }
        Materi::create($input);

        alert()->success('Data berhasil disimpan', 'Berhasil');
        return redirect('materi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['model'] = Materi::find($id);
        return view('materi.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $model = Materi::find($id);
        $input = $request->all();
        if($request->hasFile('banner')){
            $File = 'banner_' . date('Ymdhis').'.png';
            $Path = base_path().'/'.'public'.'/banner';
            $request->file('banner')->move($Path, $File);

            $input['banner'] = $File;
        }
        $model->update($input);

        alert()->success('Data berhasil diubah', 'Berhasil');
        return redirect('materi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Materi::find($id);
        $model->delete();

        alert()->success('Data berhasil dihapus', 'Berhasil');
        return redirect('materi');
    }

    public function delete(Request $request)
    {
        $category = Materi::find($request->id);
        $category->delete();

        return 'success';
    }
}
