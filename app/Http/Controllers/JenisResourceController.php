<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis;
Use Illuminate\Support\Str;

class JenisResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis = Jenis::all();
        return view('jenis', [
            'title' => 'Jenis HP',
        ], compact('jenis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createjenis');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $code = Str::upper(Str::substr($request->nama_hp, 0 ,3));

        Jenis::create([
            'nama_hp' => $request->nama_hp,
            'size' => $request->size,
            'camera' => $request->camera,
            'ram' => $request->ram,
            'storage' => $request->storage,
            'battery' => $request->battery,
            'merk_hp' => $request->merk_hp,
            'img_url' => $request->img_url
        ]);
        
        return redirect(route('jenis.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jenis = Jenis::where('id', $id)
            ->orderBy('nama_hp')
            ->get();
        return view('detailjenis',[
            'title' => 'Jenis',
        ], compact('jenis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenis = Jenis::where('id', '=', $id)->firstOrFail();
        return view('editjenis', compact('jenis'));
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
        $code = Str::upper(Str::substr($request->nama_hp, 0, 3));
        $jenis = Jenis::findorFail($id);
        $jenis->update([
            'nama_hp' => $request->nama_hp,
            'size' => $request->size,
            'camera' => $request->camera,
            'ram' => $request->ram,
            'storage' => $request->storage,
            'battery' => $request->battery,
            'merk_hp' => $request->merk_hp,
            'img_url' => $request->img_url
        ]);
        
        return redirect(route('jenis.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenis = Jenis::where('id', $id);
        $jenis->delete();
        return redirect(route('jenis.index'));
    }
}
