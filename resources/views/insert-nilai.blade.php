<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Siswa - TKIDS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">
  </head>
@include('components.navbar-school')
<main>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <div class="kolom">
                <p class="deskripsi">TK Information System</p>
                <h2>Tambahkan Data Siswa TK/PAUD
                </h2>
                <p class="fs-4">Silahkan tambahkan data Siswa TK/PAUD yang ingin anda tambahkan dengan mengisi form di bawah ini.</p>
            </div>
            @if ($errors->any())
                <div class="pt-3">
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                      @endforeach
                    </ul>
                  </div>
                </div>
            @endif
            <form action="{{ url('nilai') }}" method="post">
            @csrf
              <div class="form-group">
                <label for="nama_siswa">Nama Siswa</label>
                <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" placeholder="Masukkan Nama Siswa">
              </div>
              <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" name="nis" id="nis" class="form-control" placeholder="Masukkan Nis">
              </div>
              <div class="form-group">
                <label for="nama_wali_murid">Nama Wali Murid</label>
                <input type="text" name="nama_wali_murid" id="nama_wali_murid" class="form-control" placeholder="Masukkan Nama Wali Murid" >
              </div>
              <div class="form-group">
                <label for="kelas">Kelas</label>
                <input type="text" name="kelas" id="kelas" class="form-control" placeholder="Masukkan Kelas">
              </div>
              <div class="form-group">
                <label for="nilai_berhitung">nilai berhitung</label>
                <input type="text" name="nilai_berhitung" id="nilai_berhitung" class="form-control" placeholder="Masukkan nilai_berhitung">
              </div>
              <div class="form-group">
                <label for="nilai_membaca">nilai membaca</label>
                <input type="text" name="nilai_membaca" id="nilai_membaca" class="form-control" placeholder="Masukkan nilai_membaca">
              </div>
              <div class="form-group">
                <label for="nilai_menulis">nilai menulis</label>
                <input type="text" name="nilai_menulis" id="nilai_menulis" class="form-control" placeholder="Masukkan nilai_menulis">
              </div>
              <div class="form-group">
                <label for="nilai_menggambar">nilai menggambar</label>
                <input type="text" name="nilai_menggambar" id="nilai_menggambar" class="form-control" placeholder="Masukkan nilai_menggambar">
              </div>
              <div class="form-group">
                <label for="status_anak">Status Anak</label>
                <input type="text" name="status_anak" id="status_anak" class="form-control" placeholder="Masukkan status_anak">
              </div>
              <div class="form-group">
                <label for="tahun_ajaran">Tahun Ajaran</label>
                <input type="text" name="tahun_ajaran" id="tahun_ajaran" class="form-control" placeholder="Masukkan tahun_ajaran">
              </div>
              <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Masukkan keterangan">
              </div>
              <button type="submit" name="submit" class="button-link btn" style="background-color: #2e5eec; color: white;">SUBMIT</button>
            </form>
        </section>
    </div>
</main>
@include('components.footer')