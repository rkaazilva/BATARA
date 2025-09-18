<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard BUMDES')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex bg-gray-100">

    <!-- Sidebar -->
    <aside class="w-64 bg-green-800 text-white min-h-screen p-5">
        <h1 class="text-2xl font-bold mb-8">BUMDES</h1>
        <nav class="space-y-2">
            <a href="{{ route('bumdes.dashboard') }}" class="block py-2 px-4 hover:bg-gray-700">🏠 Dashboard</a>
            <a href="{{ route('bumdes.verifikasi') }}" class="block py-2 px-4 hover:bg-gray-700">✅ Verifikasi Seller</a>
            <a href="{{ route('bumdes.usaha') }}" class="block py-2 px-4 hover:bg-gray-700">📋 Daftar Usaha</a>
            <a href="{{ route('bumdes.seller') }}" class="block py-2 px-4 hover:bg-gray-700">👥 Manajemen Seller</a>
            <a href="{{ route('bumdes.laporan') }}" class="block py-2 px-4 hover:bg-gray-700">📑 Transaksi & Laporan</a>
            <a href="{{ route('bumdes.arsip') }}" class="block py-2 px-4 hover:bg-gray-700">📂 Arsip & Dokumen</a>
            <a href="{{ route('bumdes.profil') }}" class="block py-2 px-4 hover:bg-gray-700">🏢 Profil BUMDES</a>
        </nav>

    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        @yield('content')
    </main>

</body>

</html>