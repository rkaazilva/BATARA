@extends('bumdes.layout_bumdes')

@section('title', 'Manajemen Seller')

@section('content')
    <h2 class="text-2xl font-bold mb-6">Manajemen Seller</h2>

    <table class="w-full bg-white shadow rounded-lg">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2">Nama Seller</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Jumlah Usaha</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b">
                <td class="px-4 py-2">Budi</td>
                <td class="px-4 py-2">budi@mail.com</td>
                <td class="px-4 py-2">2</td>
                <td class="px-4 py-2">
                    <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">🔍 Detail</button>
                    <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">❌ Nonaktifkan</button>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
