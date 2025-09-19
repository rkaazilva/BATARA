<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil BUMDES - BUMDES</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1d4657',
                        secondary: '#11676a',
                        accent: '#b0b32a',
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

        .sidebar {
            transition: all 0.3s ease;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                position: fixed;
                z-index: 50;
                height: 100vh;
                width: 70%;
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 40;
            }

            .overlay.active {
                display: block;
            }

            .mobile-header {
                display: flex;
            }
        }

        .stats-card {
            transition: transform 0.3s ease;
        }

        .stats-card:hover {
            transform: translateY(-5px);
        }

        .menu-card {
            transition: all 0.3s ease;
        }

        .menu-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        /* Header khusus untuk mobile - disembunyikan di desktop */
        .mobile-header {
            display: none;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background-color: #1d4657;
            color: white;
            position: sticky;
            top: 0;
            z-index: 30;
        }

        .profile-card {
            transition: all 0.3s ease;
        }

        .profile-card:hover {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="flex bg-gray-100 min-h-screen">
    <!-- Header untuk mobile - hanya muncul di mobile -->
    <div class="mobile-header">
        <h1 class="text-xl font-bold">BUMDES</h1>
        <button id="menuBtn" class="p-2 rounded-md bg-accent text-white">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <!-- Overlay for mobile -->
    <div id="overlay" class="overlay"></div>

    <!-- Sidebar -->
    <aside id="sidebar" class="sidebar w-64 bg-primary text-white min-h-screen p-5">
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-2xl font-bold">BUMDES</h1>
            <button id="closeMenu" class="md:hidden">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <nav class="space-y-2">
            <a href="{{ route('bumdes.dashboard') }}"
                class="flex items-center py-2 px-4 hover:bg-secondary rounded-md transition">
                <i class="fas fa-home mr-3"></i> Dashboard
            </a>
            <a href="{{ route('bumdes.verifikasi') }}"
                class="flex items-center py-2 px-4 hover:bg-secondary rounded-md transition">
                <i class="fas fa-check-circle mr-3"></i> Verifikasi Seller
            </a>
            <a href="{{ route('bumdes.usaha') }}"
                class="flex items-center py-2 px-4 hover:bg-secondary rounded-md transition">
                <i class="fas fa-list mr-3"></i> Daftar Usaha
            </a>
            <a href="{{ route('bumdes.seller') }}"
                class="flex items-center py-2 px-4 hover:bg-secondary rounded-md transition">
                <i class="fas fa-users mr-3"></i> Manajemen Seller
            </a>
            <a href="{{ route('bumdes.laporan') }}"
                class="flex items-center py-2 px-4 hover:bg-secondary rounded-md transition">
                <i class="fas fa-chart-bar mr-3"></i> Transaksi & Laporan
            </a>
            <a href="{{ route('bumdes.arsip') }}"
                class="flex items-center py-2 px-4 hover:bg-secondary rounded-md transition">
                <i class="fas fa-archive mr-3"></i> Arsip & Dokumen
            </a>
            <a href="{{ route('bumdes.profil') }}"
                class="flex items-center py-2 px-4 bg-secondary rounded-md transition">
                <i class="fas fa-building mr-3"></i> Profil BUMDES
            </a>
            <a href="#" class="flex items-center py-2 px-4 hover:bg-secondary rounded-md transition mt-10">
                <i class="fas fa-sign-out-alt mr-3"></i> Logout
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-4 md:p-8">
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-primary">Profil BUMDES</h2>
            <p class="text-gray-600">Kelola informasi dan pengaturan profil BUMDES</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Informasi Profil -->
            <div class="lg:col-span-2">
                <div class="profile-card bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-primary mb-4">Informasi Umum</h3>

                    <div class="flex items-center mb-6">
                        <div class="h-24 w-24 bg-accent/20 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-building text-accent text-3xl"></i>
                        </div>
                        <div>
                            <h2 class="text-xl font-bold">BUMDES Makmur Sejahtera</h2>
                            <p class="text-gray-600">Sejak 2020</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Nama BUMDES</label>
                            <p class="bg-gray-50 p-3 rounded-lg">BUMDES Makmur Sejahtera</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Tahun Berdiri</label>
                            <p class="bg-gray-50 p-3 rounded-lg">2020</p>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                        <p class="bg-gray-50 p-3 rounded-lg">Jl. Desa Raya No. 10, Kecamatan Sukamaju, Kabupaten
                            Sukamakmur, Provinsi Jawa Barat</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <p class="bg-gray-50 p-3 rounded-lg">bumdes@mail.com</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Telepon</label>
                            <p class="bg-gray-50 p-3 rounded-lg">0812-3456-7890</p>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                        <p class="bg-gray-50 p-3 rounded-lg">BUMDES yang berfokus pada pemberdayaan usaha mikro desa
                            untuk meningkatkan ekonomi masyarakat. Kami membantu para pelaku UMKM untuk mengembangkan
                            usaha mereka melalui platform digital dan pendampingan bisnis.</p>
                    </div>

                    <button class="bg-accent text-white px-4 py-2 rounded-lg hover:bg-accent/90 flex items-center">
                        <i class="fas fa-edit mr-2"></i> Edit Profil
                    </button>
                </div>
            </div>

            <!-- Informasi Tambahan -->
            <div class="space-y-6">
                <!-- Statistik Singkat -->
                <div class="profile-card bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-primary mb-4">Statistik BUMDES</h3>

                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Jumlah Seller</span>
                            <span class="font-semibold">32</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Usaha Terdaftar</span>
                            <span class="font-semibold">24</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Transaksi Bulan Ini</span>
                            <span class="font-semibold">120</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Total Pendapatan</span>
                            <span class="font-semibold">Rp 25.000.000</span>
                        </div>
                    </div>
                </div>

                <!-- Pengaturan Akun -->
                <div class="profile-card bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-primary mb-4">Pengaturan Akun</h3>

                    <div class="space-y-3">
                        <button class="w-full text-left py-2 px-3 hover:bg-gray-50 rounded-lg flex items-center">
                            <i class="fas fa-user-circle text-secondary mr-2"></i>
                            <span>Ubah Informasi Akun</span>
                        </button>
                        <button class="w-full text-left py-2 px-3 hover:bg-gray-50 rounded-lg flex items-center">
                            <i class="fas fa-lock text-secondary mr-2"></i>
                            <span>Ubah Password</span>
                        </button>
                        <button class="w-full text-left py-2 px-3 hover:bg-gray-50 rounded-lg flex items-center">
                            <i class="fas fa-bell text-secondary mr-2"></i>
                            <span>Pengaturan Notifikasi</span>
                        </button>
                        <button
                            class="w-full text-left py-2 px-3 hover:bg-gray-50 rounded-lg flex items-center text-red-600">
                            <i class="fas fa-sign-out-alt mr-2"></i>
                            <span>Logout</span>
                        </button>
                    </div>
                </div>

                <!-- Status Verifikasi -->
                <div class="profile-card bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-primary mb-4">Status Verifikasi</h3>

                    <div class="flex items-center mb-3">
                        <div class="h-10 w-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-check-circle text-green-600"></i>
                        </div>
                        <div>
                            <p class="font-medium">Terverifikasi</p>
                            <p class="text-sm text-gray-500">Terverifikasi sejak 15 Jan 2021</p>
                        </div>
                    </div>

                    <p class="text-sm text-gray-600">BUMDES Anda telah terverifikasi oleh Dinas Koperasi dan UKM
                        Kabupaten Sukamakmur.</p>
                </div>
            </div>
        </div>

        <!-- Informasi Legal -->
        <div class="mt-6 profile-card bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-primary mb-4">Informasi Legal</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Induk Berusaha (NIB)</label>
                    <p class="bg-gray-50 p-3 rounded-lg">012345678912345</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">NPWP</label>
                    <p class="bg-gray-50 p-3 rounded-lg">01.234.567.8-912.345</p>
                </div>
            </div>

            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Dokumen Legal</label>
                <div class="bg-gray-50 p-3 rounded-lg">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center">
                            <i class="fas fa-file-pdf text-red-500 mr-2"></i>
                            <span>SK Pendirian BUMDES.pdf</span>
                        </div>
                        <button class="text-accent hover:text-accent/90">
                            <i class="fas fa-download"></i>
                        </button>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <i class="fas fa-file-pdf text-red-500 mr-2"></i>
                            <span>Akta Notaris.pdf</span>
                        </div>
                        <button class="text-accent hover:text-accent/90">
                            <i class="fas fa-download"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Mobile menu toggle
        const menuBtn = document.getElementById('menuBtn');
        const closeMenu = document.getElementById('closeMenu');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');

        menuBtn.addEventListener('click', () => {
            sidebar.classList.add('active');
            overlay.classList.add('active');
        });

        closeMenu.addEventListener('click', () => {
            sidebar.classList.remove('active');
            overlay.classList.remove('active');
        });

        overlay.addEventListener('click', () => {
            sidebar.classList.remove('active');
            overlay.classList.remove('active');
        });
    </script>
</body>

</html>