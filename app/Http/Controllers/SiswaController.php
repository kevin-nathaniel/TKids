<?php

namespace App\Http\Controllers;
use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        $data = siswa::orderBy('nis', 'asc') -> paginate();
        return view('student-list')->with('data', $data);
    }


    public function create()
    {
        return view('insert-nilai');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_siswa' => 'required',
            'nis' => 'required|numeric|unique:siswa,nis',
            'kelas' => 'required',
            'nilai_berhitung' => 'required',
            'nilai_membaca' => 'required',
            'nilai_menulis' => 'required',
            'nilai_menggambar' => 'required',
            'status_anak' => 'required',
            'tahun_ajaran' => 'required',
            'keterangan' => 'required'
        ]);
        $data = [
            'nama_siswa' => $request-> nama_siswa,
            'nis' => $request -> nis,
            'nama_wali_murid' => $request -> nama_wali_murid,
            'kelas' => $request -> nama_wali_murid,
            'nilai_berhitung' => $request -> nilai_berhitung,
            'nilai_membaca' => $request -> nilai_membaca,
            'nilai_menulis' => $request -> nilai_membaca,
            'nilai_menggambar' => $request -> nilai_menggambar,
            'status_anak' => $request -> status_anak,
            'tahun_ajaran' => $request -> tahun_ajaran,
            'keterangan' => $request -> keterangan
        ];
        siswa::create($data);
        return redirect()->to('nilai')->with('success', 'Data berhasil disimpan!');
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
        $data = Siswa::where('nis',$id)->first();
        return view('edit-nilai')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_siswa' => 'required',
            'nis' => 'required|numeric|unique:siswa,nis',
            'kelas' => 'required',
            'nilai_berhitung' => 'required',
            'nilai_membaca' => 'required',
            'nilai_menulis' => 'required',
            'nilai_menggambar' => 'required',
            'status_anak' => 'required',
            'tahun_ajaran' => 'required',
            'keterangan' => 'required'
        ]);
        $data = [
            'nama_siswa' => $request-> nama_siswa,
            'nis' => $request -> nis,
            'nama_wali_murid' => $request -> nama_wali_murid,
            'nilai_berhitung' => $request -> nilai_berhitung,
            'nilai_membaca' => $request -> nilai_membaca,
            'nilai_menggambar' => $request -> nilai_menggambar,
            'status_anak' => $request -> status_anak,
            'tahun_ajaran' => $request -> tahun_ajaran,
            'keterangan' => $request -> keterangan
        ];
        siswa::where('nis',$id)->update($data);
        return redirect()->to('nilai')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        siswa::where('nis',$id)->delete();
        return redirect()->to('nilai')->with('success', 'Data berhasil dihapus!');
    }
}
