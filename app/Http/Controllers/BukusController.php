<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Penerbit;
use App\Models\Genre;

class BukusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = Buku::all();
        $genre = Genre::all();
        $penerbit = Penerbit::all();
        return view('buku.create',compact('buku','genre','penerbit'));
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
            'harga' => 'required',
            'stok' => 'required',
            'id_penerbi' => 'required',
            'tanggal' => 'required',
            'id_genr' => 'required',
            
            
        ]);
        $buku = new Buku();
        $buku->nama_buku = $request->nama;
        $buku->harga = $request->harga;
        $buku->stok = $request->stok;
        $buku->id_penerbit = $request->id_penerbi;
        $buku->tanggal_terbit = $request->tanggal;
        $buku->id_genre = $request->id_genr;


        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $name = rand(1000,9999).$img->getClientOriginalName();
            $img->move('images/buku',$name);
            $buku->image = $name;
        }

        $buku->save();
        session()->flash('succes','Data Berhasil Ditambahkan');
        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $genre = Genre::all();
        $penerbit = Penerbit::all();
        $buku = Buku::findOrfail($id);
        return view('buku.show', compact('buku','genre','penerbit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genre = Genre::all();
        $penerbit = Penerbit::all();
        $buku = Buku::findOrfail($id);
        return view('buku.edit', compact('buku','genre','penerbit'));
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
            'harga' => 'required',
            'stok' => 'required',
            'id_penerbi' => 'required',
            'tanggal' => 'required',
            'id_genr' => 'required',
            
            
        ]);
        $buku =  Buku::findOrfail($id);
        $buku->nama_buku = $request->nama;
        $buku->harga = $request->harga;
        $buku->stok = $request->stok;
        $buku->id_penerbit = $request->id_penerbi;
        $buku->tanggal_terbit = $request->tanggal;
        $buku->id_genre = $request->id_genr;


      
        if ($request->hasFile('image')) {
            $buku -> deleteImage();
            $img = $request->file('image');
            $name = rand(1000,9999).$img->getClientOriginalName();
            $img->move('images/buku',$name);
            $buku->image = $name;
        }

        $buku->save();
        session()->flash('succes','Data Berhasil Ditambahkan');
        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::findOrfail($id);
        $buku->delete();
        return redirect()->route('buku.index')->with('succes','Data Berhasil Dihapus');
    }
}
