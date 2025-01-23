<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produks;
use App\Models\kategoris;

class ProduksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = produks::all();
        return view('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategoris::all();
        return view('produk.create',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produk = new produks();
        $produk->nama_produk = $request->nama;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->id_kategori = $request->id_produk;

        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000,9999).$img->getClientOriginalName();
            $img->move('images/produk',$name);
            $produk->cover = $name;
        }

        $produk->save();
        session()->flash('succes','Data Berhasil Ditambahkan');
        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = kategoris::all();
        $produk = produks::findOrfail($id);
        return view('produk.show', compact('kategori','produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = kategoris::all();
        $produk = produks::findOrfail($id);
        return view('produk.edit', compact('produk','kategori'));
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
        $produk = produks::findOrfail($id);
        $produk->nama_produk = $request->nama;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->id_kategori = $request->id_produk;

        if ($request->hasFile('cover')) {
            $produk -> deleteImage();
            $img = $request->file('cover');
            $name = rand(1000,9999).$img->getClientOriginalName();
            $img->move('images/produk',$name);
            $produk->cover = $name;
        }

        $produk->save();
        session()->flash('succes','Data Berhasil Diubah');
        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = produks::findOrfail($id);
        $produk->delete();
        return redirect()->route('produk.index')->with('succes','Data Berhasil Dihapu');
    }
}
