@extends('layouts.appschool')

@section('title', 'Dashboard')

@section('content')
<main>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <img src="{{ asset('assets/Taking notes-pana.png') }}" width="520"/>
            <div class="kolom">
                <p class="deskripsi">TK INFORMATION DATA SYSTEM</p>
                <h2>Cepat, Mudah, Efisien</h2>
                <p class="fs-4">Silahkan akses halaman berikut untuk melihat, menambahkan, dan mengubah Data Siswa Sekolah Anda.</p>
                <p><a href="isi.php" class="button-link">Isi Sekarang</a></p>
            </div>
        </section>

        <!-- untuk courses -->
        <section id="courses">
            <div class="kolom">
                <p class="deskripsi">Isi Laporan Harian Tiap Siswa</p>
                <h2>Laporan Harian</h2>
                <p class="fs-5">Silahkan lakukan pengisian laporan kegiatan yang dilakukan oleh siswa anda dengan menekan tombol di bawah ini.</p>
                <p><a href="url('logbook')" class="button-link" onclick="smoothScroll">Isi Sekarang</a></p>
            </div>
            <img src="{{ asset('assets\Poetry-rafiki.png') }}" width="400"/>
        </section>

        <!-- untuk tutors -->

        <!-- untuk partners -->
        <section id="support">
            <div class="support-card">
                <div class="support-text">
                    <h2>Support Partner</h2>
                </div>

                <div class="partner-list">
                    <img src="{{ asset('assets/kominfo.png') }}" width="200px"/>
                    <img src="{{ asset('assets/balikpapan.png') }}" width="170px"/>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection