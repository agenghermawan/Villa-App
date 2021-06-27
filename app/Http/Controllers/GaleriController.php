<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Galeri::all();
        return view('backend.galeri.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> all();
        $data['Photos'] = $request->file('Photos')->store('assets/fasilitas', 'public',$request->file('Photos')->GetClientOriginalName());

        Galeri::create($data);
        return redirect()->route('galeri.index');
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
        $data = Galeri::findOrFail($id);
        return view('backend.galeri.edit')->with([
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Galeri::findOrFail($id);
        $data = $request->all();
        $data['Photos'] = $request->file('Photos')->store('assets/fasilitas', 'public',$request->file('Photos')->GetClientOriginalName());

        $update = $item -> update($data);

        // $data = DB::table('galeri')
        //     ->where('id',$id)
        //     ->update([
        //     'Fasilitas' => $request -> Fasilitas,
        //     'Photos' =>  $request->file('Photos')->store('assets/fasilitas', 'public',$request->file('Photos')),
        //     'Deskripsi' => $request -> Deskripsi,
        // ]);
        return redirect()->route('galeri.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Galeri::findOrFail($id)->delete();
        return redirect()->route('galeri.index');
    }
}
