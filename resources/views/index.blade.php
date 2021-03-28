{{--
    semua page di dalam folder views ini relativ terhadap views (views menjadi root folder)
    maka bila ada penulisan layout/main maka sebenarnya di baca sebagai
    /views/layout/main
--}}

{{--
    berfungsi seperti extend pada pewarisan kelas
    jadi halaman ini memiliki semua yang di
    milki oleh /views/layout/main.blade.php
--}}
@extends('layout/main')

{{--
    section ialah sebuah metode yang kita gunakan untuk
    mengisi yeild, maka baris di bawah di baca bila
    ada yeild yang judulnya title maka isi dengan
    value dibawah ini (Home)
--}}
@section('title','Home')

{{--
    bila hanya sebaris dapat dilakukan tanpa tutup templating
    jadi hanya @section saja tanpa menggunakan @endsection
--}}

{{--
    bila isi dari yeild (section) berisi lebih dari satu baris maka
    harus menggunakan @section di awal dan menggunakan
    @endsection di akhirnya seperti di bawah ini
--}}

@section('container')
<div class="container bg-white h-auto my-lg-5 rounded shadow pb-4">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Uji Kompetensi</h1>
            <p>Membuat aplikasi CRUD(Create,Read,Update,Delete) Mahasiswa</p>
            <div class="">
                <a href="{{ url('students') }}" class="btn btn-outline-success">Let's Try</a>
            </div>
        </div>
    </div>
</div>
@endsection
