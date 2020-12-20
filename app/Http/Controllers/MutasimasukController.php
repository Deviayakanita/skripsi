<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pesertadidik;
use App\Models\Mutasimasuk;

class MutasimasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mutasi_peserta_didik.mutasimasuk');
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
        Mutasimasuk::create([
            'no_srt_pindah' => request('no_srt_pindah'),
            'nis' => request('nis'),
            'id_siswa' => auth()->id_siswa(),
            'asal_sekolah' => request('asal_sekolah'),
            'tingkat_kelas' => request('tingkat_kelas'),
            'tgl_masuk' => request('tgl_masuk'),
            'alasan_pindah' => request('alasan_pindah'),
            'status_mutasi' => request('status_mutasi'),
        ]);
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
