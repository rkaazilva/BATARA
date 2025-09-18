@extends('bumdes.layout_bumdes')

@section('title', 'Dashboard BUMDES')

@section('content')
    <h2 class="text-3xl font-bold mb-6">Dashboard BUMDES</h2>

    <!-- Statistik -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white shadow rounded-lg p-6 text-center">
            <h3 class="text-xl font-semibold">Usaha Menunggu Verifikasi</h3>
            <p class="text-3xl font-bold text-yellow-600 mt-2">5</p>
        </div>
        <div class="bg-white shadow rounded-lg p-6 text-center">
            <h3 class="text-xl font-semibold">Total Usaha Aktif</h3>
            <p class="text-3xl font-bold text-green-600 mt-2">18</p>
        </div>
        <div class="bg-white shadow rounded-lg p-6 text-center">
            <h3 class="text-xl font-semibold">Seller Terdaftar</h3>
            <p class="text-3xl font-bold text-blue-600 mt-2">25</p>
        </div>
    </div>

    <!-- Menu Cepat -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <a href="{{ url('/bumdes/verifikasi') }}" class="bg-yellow-500 text-white p-6 rounded-lg shadow hover:bg-yellow-600">
            📝 Verifikasi Pengajuan Usaha
        </a>
        <a href="{{ url('/bumdes/transaksi') }}" class="bg-green-600 text-white p-6 rounded-lg shadow hover:bg-green-700">
            💰 Lihat Laporan Transaksi
        </a>
        <a href="{{ url('/bumdes/seller') }}" class="bg-blue-600 text-white p-6 rounded-lg shadow hover:bg-blue-700">
            👥 Kelola Seller
        </a>
    </div>
@endsection
