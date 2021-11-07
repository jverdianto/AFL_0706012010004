<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merk;
Use Illuminate\Support\Str;

class MerkResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merk = Merk::all();
        return view('merk', [
            'title' => 'Merk HP',
        ], compact('merk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createmerk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $code = Str::upper(Str::substr($request->merk_code, 0 ,3));

        Merk::create([
            'merk_code' => $code,
            'nama_merk' => $request->nama_merk,
            'tahun' => $request->tahun,
            'pendiri' => $request->pendiri,
            'negara' => $request->negara,
            'img_url' => $request->img_url
        ]);
        
        return redirect(route('merk.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        $merk = Merk::where('merk_code', $code)
            ->orderBy('nama_merk')
            ->get();
        return view('detailmerk',[
            'title' => 'Merk',
        ], compact('merk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($merk_code)
    {
        $merk = Merk::where('merk_code', '=', $merk_code)->firstOrFail();
        return view('editmerk', compact('merk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $merk_code)
    {
        
        $merk = Merk::where('merk_code', $merk_code);

        $merk->update([
            'merk_code' => $request->merk_code,
            'nama_merk' => $request->nama_merk,
            'tahun' => $request->tahun,
            'pendiri' => $request->pendiri,
            'negara' => $request->negara,
            'img_url' => $request->img_url
        ]);
        
        return redirect(route('merk.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($merk_code)
    {
        $merk = Merk::where('merk_code', $merk_code);
        $merk->delete();
        return redirect(route('merk.index'));
    }
}
