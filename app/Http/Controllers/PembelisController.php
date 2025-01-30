<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;

class PembelisController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembeli = Pembeli::all();
        return view('pembeli.index', compact('pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pembeli = Pembeli::all();
        return view('pembeli.create',compact('pembeli'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'telepon' => 'required',
            'kelamin' => 'required',
            
            
        ]);
        $pembeli = new Pembeli();
        $pembeli->nama_pembeli = $request->nama;
        $pembeli->jenis_kelamin = $request->kelamin;
        $pembeli->telepon = $request->telepon;
        $pembeli->save();
        session()->flash('succes','Data Berhasil Ditambahkan');
        return redirect()->route('pembeli.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembeli = Pembeli::findOrfail($id);
        return view('pembeli.show', compact('pembeli'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembeli = Pembeli::findOrfail($id);
        return view('pembeli.edit', compact('pembeli'));
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
        $validatedData = $request->validate([
            'nama' => 'required',
            'telepon' => 'required',
            'kelamin' => 'required',
            
            
        ]);
        $pembeli =  Pembeli::findOrfail($id);
        $pembeli->nama_pembeli = $request->nama;
        $pembeli->jenis_kelamin = $request->kelamin;
        $pembeli->telepon = $request->telepon;
        $pembeli->save();
        session()->flash('succes','Data Berhasil Ditambahkan');
        return redirect()->route('pembeli.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembeli = Pembeli::findOrfail($id);
        $pembeli->delete();
        return redirect()->route('pembeli.index')->with('succes','Data Berhasil Dihapus');
    }
}
