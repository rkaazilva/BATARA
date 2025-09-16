@extends('seller.layout')

@section('title', 'Produk Saya')
@section('header', 'Daftar Produk')

@section('content')
<div class="space-y-6">
    <!-- Search & Filter Bar -->
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
            <div>
                <label for="nama_produk" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                <input type="text" id="nama_produk" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                <select id="kategori" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option>Pilih Kategori</option>
                </select>
            </div>
            <div>
                <label for="stok" class="block text-sm font-medium text-gray-700">Stok</label>
                <input type="text" id="stok" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="penjualan" class="block text-sm font-medium text-gray-700">Penjualan</label>
                <input type="text" id="penjualan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>
        </div>
        <div class="flex space-x-4">
            <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Cari</button>
            <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-300">Atur Ulang</button>
        </div>
    </div>
    
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Total 653 Produk</h2>
        <a href="{{ url('/seller/produk/create') }}" class="bg-red-500 text-white px-4 py-2 rounded-lg font-bold hover:bg-red-600 transition-colors">
            <i class="fas fa-plus mr-2"></i>Tambah Produk Baru
        </a>
    </div>

    <!-- Produk List Table -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-gray-200 text-gray-700 uppercase text-xs">
                <tr>
                    <th class="px-6 py-3">Nama Produk</th>
                    <th class="px-6 py-3">Kode Variasi</th>
                    <th class="px-6 py-3">Variasi</th>
                    <th class="px-6 py-3">Harga</th>
                    <th class="px-6 py-3">Stok</th>
                    <th class="px-6 py-3">Penjualan</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh baris produk -->
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-3">
                            <img src="https://placehold.co/50x50" alt="Produk" class="w-12 h-12 rounded-lg">
                            <div>
                                <div class="font-semibold text-gray-800">Verywell-Ecolite 600 ml</div>
                                <div class="text-gray-500 text-sm">SKU: IND1C-1234</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">XYZ-001</td>
                    <td class="px-6 py-4">Green, 21x21x6 cm</td>
                    <td class="px-6 py-4">Rp 88.119</td>
                    <td class="px-6 py-4">85</td>
                    <td class="px-6 py-4">0</td>
                    <td class="px-6 py-4"><span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Aktif</span></td>
                    <td class="px-6 py-4 flex items-center space-x-2">
                        <a href="#" class="text-blue-600 hover:text-blue-800">Ubah</a>
                        <a href="#" class="text-red-600 hover:text-red-800">Hapus</a>
                    </td>
                </tr>
                <!-- Tambahkan lebih banyak produk di sini -->
            </tbody>
        </table>
    </div>
</div>
@endsection
