<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Sekolah - TKIDS</title>
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
                    <h2>Daftar Sekolah</h2>
                    <p class="fs-4">Berikut ini adalah daftar sekolah TK/PAUD yang telah terdaftar di Kota Balikpapan. Silahkan klik tombol di bawah ini untuk menambahkan data sekolah baru.</p>
                    <p><a href="{{ url('sekolah/create') }}" class="button-link">Tambah Data</a></p>
                </div>
                <form action="" method="post" >
                    <input type="text" name="keyword" class="search" autofocus placeholder="Masukkan Kata Kunci Pencarian" autocomplete="off" size="50">
                    <button type="submit" name="cari" class="btn mb-2 mt-1" style="background-color: #2e5eec; color: #FFF;">Cari</button>
                </form>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead style="background-color: #2e5eec;">
                        <tr style="color: #fff;">
                            <th scope="col">No</th>
                            <th scope="col">Nama Sekolah</th>
                            <th scope="col">NPSN</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Status</th>
                            <th scope="col">Edit Data</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = $data->firstItem()?>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $item->nama_sekolah }}</td>
                                <td>{{ $item->npsn }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="{{ url('sekolah/'.$item->npsn.'/edit') }}">Edit</a>
                                    <form onsubmit="return confirm('Apakah Ingin Menghapus Data Ini?')" class="d-inline" action="{{ url('sekolah/'.$item->npsn) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                                    </form>
                                </td>
                            </tr>
                            <?php $i++?>
                        @endforeach
                        </tbody>
                        {{ $data->links() }}
                    </table>
                </div>
            </section>
        </div>
    </main>
    @include('components.footer')
