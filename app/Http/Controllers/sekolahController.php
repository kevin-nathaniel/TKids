<?php

namespace App\Http\Controllers;

use App\Models\sekolah;
use Illuminate\Http\Request;

class sekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = sekolah::orderBy('npsn', 'asc') -> paginate();
        return view('school-list')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('insert-school');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Session::flash('nama_sekolah',$request->nama_sekolah);
        $request->validate([
            'nama_sekolah' => 'required',
            'npsn' => 'required|numeric|unique:sekolah,npsn',
            'alamat' => 'required',
            'status' => 'required'
        ],[
            'nama_sekolah.required'=>'Nama sekolah Wajib Diisi',
            'npsn.required'=>'NPSN Wajib Diisi',
            'npsn.numeric'=>'NPSN Wajib Diisi Dengan Angka',
            'npsn.unique'=>'NPSN Sudah Ada Sebelumnya',
            'alamat.required'=>'Alamat sekolah Wajib Diisi',
            'status.required'=>'Status sekolah Wajib Diisi',


        ]);
        $data = [
            'nama_sekolah' => $request-> nama_sekolah,
            'npsn' => $request -> npsn,
            'alamat' => $request -> alamat,
            'status' => $request -> status,
        ];
        sekolah::create($data);
        return redirect()->to('sekolah')->with('success', 'Data berhasil disimpan!');
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
    public function edit(string $id)
    {
        $data = sekolah::where('npsn',$id)->first();
        return view('edit-school')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'nama_sekolah' => $request-> nama_sekolah,
            'npsn' => $request -> npsn,
            'alamat' => $request -> alamat,
            'status' => $request -> status,
        ];
        sekolah::where('npsn',$id)->update($data);
        return redirect()->to('sekolah')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        sekolah::where('npsn',$id)->delete();
        return redirect()->to('sekolah')->with('success', 'Data berhasil dihapus!');
    }
}
