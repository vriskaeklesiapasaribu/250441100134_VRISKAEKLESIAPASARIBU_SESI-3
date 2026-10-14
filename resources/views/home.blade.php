@extends('layouts.app')

@section('title', 'Beranda - Penyewaanku')

@section('content')

    <section class="hero">
        <h2>Selamat Datang di penyewaan kendaraan saya </h2>

        <p>
            Penyewaan kendaraan saya yang menyediakan berbagai
            motor atau sepeda untuk membawa anda berkeliling kota.
        </p>

        <a href="{{ route('Sewa.index') }}" class="btn">
            Lihat Daftar penyewaan
        </a>
    </section>

    <section class="info">
        <h2>Jelajahi Koleksi Penyewaan</h2>
        <p>
            Temukan berbagai motor atau sepeda mulai dari harga sewa termurah hingga termahal
        </p>
    </section>

@endsection