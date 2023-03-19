<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Siswa - TKIDS</title>
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
                    <h2>Daftar Informasi Siswa</h2>
                    <p class="fs-4">Berikut ini adalah daftar siswa TK/PAUD yang telah terdaftar di sekolah anda beserta nilai yang diinput. Silahkan klik tombol di bawah ini untuk menambahkan data siswa baru.</p>
                    <p><a href="{{ url('nilai/create') }}" class="button-link">Tambah Data</a></p>
                </div>
                <form action="{{ url('nilai') }}" method="get" >
                    <input type="search" name="katakunci" value="{{ Request::get('katakunci') }}"  class="search" autofocus placeholder="Masukkan Kata Kunci Pencarian" autocomplete="off" size="50">
                    <button type="submit" name="cari" class="btn mb-2 mt-1" style="background-color: #2e5eec; color: #FFF;">Cari</button>
                </form>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead style="background-color: #2e5eec;">
                        <tr style="color: #fff;">
                            <th scope="col">No</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Nama Wali Murid</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Nilai Menghitung</th>
                            <th scope="col">Nilai Membaca</th>
                            <th scope="col">Nilai Menulis</th>
                            <th scope="col">Nilai Menggambar</th>
                            <th scope="col">Status</th>
                            <th scope="col">Tahun Ajaran</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Edit Data</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = $data->firstItem()?>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $item->nama_siswa }}</td>
                                <td>{{ $item->nis }}</td>
                                <td>{{ $item->nama_wali_murid }}</td>
                                <td>{{ $item->kelas }}</td>
                                <td>{{ $item->nilai_berhitung }}</td>
                                <td>{{ $item->nilai_membaca }}</td>
                                <td>{{ $item->nilai_menulis }}</td>
                                <td>{{ $item->nilai_menggambar }}</td>
                                <td>{{ $item->status_anak }}</td>
                                <td>{{ $item->tahun_ajaran }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="{{ url('nilai/'.$item->nis.'/edit') }}">Edit</a>
                                    <form onsubmit="return confirm('Apakah Ingin Menghapus Data Ini?')" class="d-inline" action="{{ url('nilai/'.$item->nis) }}" method="post">
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
                    <a href="{{ url('/nilai') }}">Kembali</a>
                </div>
            </section>
        </div>
    </main>
    @include('components.footer')
