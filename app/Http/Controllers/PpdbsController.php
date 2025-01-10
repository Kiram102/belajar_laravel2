<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ppdbs;

class PpdbsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
        $this->middleware('auth');
     }
    public function index()
    {
        $ppdb = ppdbs::all();
        return view('ppdbs.index', compact('ppdb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ppdbs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ppdb = new ppdbs;
        $ppdb->nama_lengkap = $request->nama;
        $ppdb->jenis_kelamin = $request->jk; 
        $ppdb->agama = $request->agama;
        $ppdb->alamat = $request->alamat;
        $ppdb->telepon = $request->telepon;
        $ppdb->asal_sekolah = $request->asal;
        $ppdb->save();
        
        return redirect()->route('ppdb.index')->with('succes','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ppdb = ppdbs::findOrfail($id);
        return view('ppdbs.show', compact('ppdb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ppdb = ppdbs::findOrfail($id);
        return view('ppdbs.edit', compact('ppdb'));
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
        $ppdb =  ppdbs::findOrfail($id);
        $ppdb->nama_lengkap = $request->nama;
        $ppdb->jenis_kelamin = $request->jk; 
        $ppdb->agama = $request->agama;
        $ppdb->alamat = $request->alamat;
        $ppdb->telepon = $request->telepon;
        $ppdb->asal_sekolah = $request->asal;
        $ppdb->save();
        
        return redirect()->route('ppdb.index')->with('succes','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ppdb = ppdbs::findOrfail($id);
        $ppdb->delete();
        return redirect()->route('ppdb.index')->with('succes','Data Berhasil Dihapu');
    }
}
