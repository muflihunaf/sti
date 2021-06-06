<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use App\Models\DetailLaporan;
use App\Models\Instansi;
use App\Models\Laporan;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $instansi = Instansi::all();
        $lokasi = Lokasi::all();
        $kategori = Categori::all();
        $laporan = Laporan::all();

        return view('welcome',compact('instansi','lokasi','kategori','laporan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'uploadfile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $imageName = $request->file('uploadfile')->getClientOriginalName();
        $request->file('uploadfile')->move(public_path('images'), $imageName);

        $laporan = Laporan::create([
            'user_id' => $request->user_id,
            'tipe_laporan' => $request->tipe,
            'tanggal' => $request->tanggal,
        ]);
        $detail = DetailLaporan::create([
            'laporan_id' => $laporan->id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'instansi_id' => $request->instansi_id,
            'kategori_id' => $request->kategori_id,
            'lampiran' => $imageName,
            'status' => 'Menunggu'
        ]);

        return redirect('/');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
