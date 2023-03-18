<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Sekolah - TKIDS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">
  </head>
@include('components.navbar')
<main>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <div class="kolom">
                <p class="deskripsi">BPBD Kota Balikpapan</p>
                <h2>Pengisian Berita Acara Pemeriksaan
                </h2>
                <p class="fs-4">Silahkan lakukan pengisian Berita Acara Pemeriksaan melalui halaman ini, tapi sebelum mengisi form Berita Acara Pemeriksaan, silahkan masukkan terlebih dahulu profil singkat perusahaan yang diperiksa.</p>
            </div>
            <form action="{{ url('sekolah') }}" method="post">
            @csrf
              <div class="form-group">
                <label for="nama_perusahaan">Nama Sekolah</label>
                <input type="text" name="nama_perusahaan" id="nama_perusahaan" class="form-control" placeholder="Masukkan Nama Perusahaan Yang Diperiksa" required>
              </div>
              <div class="form-group">
                <label for="alamat">NPSN</label>
                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat Perusahaan Yang Diperiksa" required>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat Perusahaan Yang Diperiksa" required>
              </div>
              <div class="form-group">
                <label for="alamat">Status</label>
                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat Perusahaan Yang Diperiksa" required>
              </div>
              <button type="submit" name="submit" class="button-link btn" style="background-color: #2e5eec; color: white;">SUBMIT</button>
            </form>
        </section>
    </div>
</main>
@include('components.footer')