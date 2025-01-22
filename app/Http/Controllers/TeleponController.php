<?php

namespace App\Http\Controllers;

use App\Models\Telepon;
use Illuminate\Http\Request;
use App\Models\penggunas;


class TeleponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $telepon = Telepon::all();
        return view('telepon.index', compact('telepon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengguna = penggunas::all();
        return view('telepon.create',compact('pengguna'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $telepon = new Telepon;
        $telepon->nomor = $request->nomor;
        $telepon->id_pengguna = $request->id_pengguna;
        $telepon->save();
        session()->flash('succes','Data Berhasil Ditambahkan');
        return redirect()->route('telepon.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengguna = penggunas::all();
        $telepon = Telepon::findOrfail($id);
        return view('telepon.show', compact('telepon','pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengguna = penggunas::all();
        $telepon = Telepon::findOrfail($id);
        return view('telepon.edit', compact('telepon','pengguna'));
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
        $telepon = Telepon::findOrfail($id);
        $telepon->nomor = $request->nomor;
        $telepon->id_pengguna = $request->id_pengguna;
        $telepon->save();
        session()->flash('succes','Data Berhasil Diubah');
        return redirect()->route('telepon.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $telepon = Telepon::findOrfail($id);
        $telepon->delete();
        return redirect()->route('telepon.index')->with('succes','Data Berhasil Dihapu');
    }
}
