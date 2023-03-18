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
                <p class="deskripsi">TK Information System</p>
                <h2>Tambahkan Data Sekolah TK/PAUD
                </h2>
                <p class="fs-4">Silahkan tambahkan data sekolah TK/PAUD yang ingin anda tambahkan dengan mengisi form di bawah ini.</p>
            </div>
            <form action="{{ url('sekolah/'.$data->npsn) }}" method="post">
            @csrf
            @method('PUT')
              <div class="form-group">
                <label for="nama_sekolah">Nama Sekolah</label>
                <input type="text" name="nama_sekolah" id="nama_sekolah" class="form-control" placeholder="Masukkan Nama Sekolah" value="{{ $data->nama_sekolah }}" required>
              </div>
              <div class="form-group">
                <label for="npsn">NPSN</label>
                <input type="text" name="npsn" id="npsn" class="form-control" placeholder="Masukkan Nama Sekolah" value="{{ $data->npsn }}" required>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat"  value="{{ $data->alamat }}" required>
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status" id="status" class="form-control" placeholder="Masukkan status Sekolah" value="{{ $data->status }}" required>
              </div> 
              <button type="submit" name="submit" class="button-link btn" style="background-color: #2e5eec; color: white;">SUBMIT</button>
            </form>
        </section>
    </div>
</main>
@include('components.footer')