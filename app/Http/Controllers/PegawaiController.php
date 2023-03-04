<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Pegawai::all();
        return view('table', ["datas" => $datas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            "nama" => $request->nama,
            "umur" => $request->umur,
            "jenis_kelamin" => $request->jenis_kelamin
        ];


        Pegawai::create($data);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        // $data =  Pegawai::find($id)->first();
        // dd($data);   
        return view('edit', ["data" => $pegawai]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            "nama" => $request->nama,
            "umur" => $request->umur,
            "jenis_kelamin" => $request->jenis_kelamin
        ];

        Pegawai::where("id", $id)->update($data);
        return redirect('/pegawai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pegawai::destroy($id);
        return redirect('/pegawai');
    }
}
