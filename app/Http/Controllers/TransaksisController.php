<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;
use App\Models\Buku;
use App\Models\Transaksi;

class TransaksisController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transaksi = Transaksi::all();
        $buku = Buku::all();
        $pembeli = Pembeli::all();
        return view('transaksi.create',compact('transaksi','buku','pembeli'));
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
            'jumlah' => 'required',
            'id_buk' => 'required',
            'id_pembel' => 'required',
            'tanggal' => 'required',
           
            
            
        ]);
        $transaksi = new Transaksi();
        $transaksi->jumlah = $request->jumlah;
        $transaksi->tanggal_transaksi = $request->tanggal;
        $transaksi->id_buku = $request->id_buk;
        $transaksi->id_pembeli = $request->id_pembel;


        $transaksi->save();
        session()->flash('succes','Data Berhasil Ditambahkan');
        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Buku::all();
        $pembeli = Pembeli::all();
        $transaksi = Transaksi::findOrfail($id);
        return view('transaksi.show', compact('transaksi','buku','pembeli'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = Buku::all();
        $pembeli = Pembeli::all();
        $transaksi = Transaksi::findOrfail($id);
        return view('transaksi.edit', compact('transaksi','buku','pembeli'));
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
            'jumlah' => 'required',
            'id_buk' => 'required',
            'id_pembel' => 'required',
            'tanggal' => 'required',
           
            
            
        ]);
        $transaksi = Transaksi::findOrfail($id);
        $transaksi->jumlah = $request->jumlah;
        $transaksi->tanggal_transaksi = $request->tanggal;
        $transaksi->id_buku = $request->id_buk;
        $transaksi->id_pembeli = $request->id_pembel;


        $transaksi->save();
        session()->flash('succes','Data Berhasil Ditambahkan');
        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrfail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('succes','Data Berhasil Dihapus');
    }
}
