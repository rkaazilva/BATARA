<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Usaha Seller - BUMDES</title>
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
        
        .verification-item {
            transition: background-color 0.2s ease;
        }
        
        .verification-item:hover {
            background-color: #f9fafb;
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
            <a href="{{ route('bumdes.dashboard') }}" class="flex items-center py-2 px-4 hover:bg-secondary rounded-md transition">
                <i class="fas fa-home mr-3"></i> Dashboard
            </a>
            <a href="{{ route('bumdes.verifikasi') }}" class="flex items-center py-2 px-4 bg-secondary rounded-md transition">
                <i class="fas fa-check-circle mr-3"></i> Verifikasi Seller
            </a>
            <a href="{{ route('bumdes.usaha') }}" class="flex items-center py-2 px-4 hover:bg-secondary rounded-md transition">
                <i class="fas fa-list mr-3"></i> Daftar Usaha
            </a>
            <a href="{{ route('bumdes.seller') }}" class="flex items-center py-2 px-4 hover:bg-secondary rounded-md transition">
                <i class="fas fa-users mr-3"></i> Manajemen Seller
            </a>
            <a href="{{ route('bumdes.laporan') }}" class="flex items-center py-2 px-4 hover:bg-secondary rounded-md transition">
                <i class="fas fa-chart-bar mr-3"></i> Transaksi & Laporan
            </a>
            <a href="{{ route('bumdes.arsip') }}" class="flex items-center py-2 px-4 hover:bg-secondary rounded-md transition">
                <i class="fas fa-archive mr-3"></i> Arsip & Dokumen
            </a>
            <a href="{{ route('bumdes.profil') }}" class="flex items-center py-2 px-4 hover:bg-secondary rounded-md transition">
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
            <h2 class="text-2xl font-bold text-primary">Daftar Usaha Menunggu Verifikasi</h2>
            <p class="text-gray-600">Verifikasi usaha seller yang mendaftar di platform BUMDES</p>
        </div>

        <!-- Filter dan Pencarian -->
        <div class="bg-white rounded-lg shadow-md p-4 mb-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div class="flex flex-col md:flex-row md:items-center gap-4">
                    <div class="relative">
                        <input type="text" placeholder="Cari usaha atau pemilik..." class="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-accent w-full md:w-64">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                    <select class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-accent">
                        <option>Semua Kategori</option>
                        <option>Sembako</option>
                        <option>Kerajinan</option>
                        <option>Makanan</option>
                        <option>Jasa</option>
                    </select>
                </div>
                <div class="text-sm text-gray-600">
                    <span class="font-semibold">5</span> usaha menunggu verifikasi
                </div>
            </div>
        </div>

        <!-- Tabel Verifikasi -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Usaha</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pemilik</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Daftar</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="verification-item">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 bg-accent/20 rounded-full flex items-center justify-center">
                                        <i class="fas fa-store text-accent"></i>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Toko Sembako Jaya</div>
                                        <div class="text-sm text-gray-500">ID: USR001</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Budi Santoso</div>
                                <div class="text-sm text-gray-500">budi@email.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Sembako</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                18 Sep 2025
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="bg-green-600 text-white px-3 py-1 rounded-md hover:bg-green-700 mr-2">
                                    <i class="fas fa-check mr-1"></i> Terima
                                </button>
                                <button class="bg-red-600 text-white px-3 py-1 rounded-md hover:bg-red-700">
                                    <i class="fas fa-times mr-1"></i> Tolak
                                </button>
                                <button class="bg-accent text-white px-3 py-1 rounded-md hover:bg-accent/90 ml-2">
                                    <i class="fas fa-eye mr-1"></i> Detail
                                </button>
                            </td>
                        </tr>
                        <tr class="verification-item">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 bg-purple-100 rounded-full flex items-center justify-center">
                                        <i class="fas fa-utensils text-purple-600"></i>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Warung Makan Sederhana</div>
                                        <div class="text-sm text-gray-500">ID: USR002</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Siti Rahayu</div>
                                <div class="text-sm text-gray-500">siti@email.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">Makanan</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                17 Sep 2025
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="bg-green-600 text-white px-3 py-1 rounded-md hover:bg-green-700 mr-2">
                                    <i class="fas fa-check mr-1"></i> Terima
                                </button>
                                <button class="bg-red-600 text-white px-3 py-1 rounded-md hover:bg-red-700">
                                    <i class="fas fa-times mr-1"></i> Tolak
                                </button>
                                <button class="bg-accent text-white px-3 py-1 rounded-md hover:bg-accent/90 ml-2">
                                    <i class="fas fa-eye mr-1"></i> Detail
                                </button>
                            </td>
                        </tr>
                        <tr class="verification-item">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 bg-green-100 rounded-full flex items-center justify-center">
                                        <i class="fas fa-tshirt text-green-600"></i>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Konveksi Rumahan</div>
                                        <div class="text-sm text-gray-500">ID: USR003</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Ahmad Sutisna</div>
                                <div class="text-sm text-gray-500">ahmad@email.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Kerajinan</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                16 Sep 2025
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="bg-green-600 text-white px-3 py-1 rounded-md hover:bg-green-700 mr-2">
                                    <i class="fas fa-check mr-1"></i> Terima
                                </button>
                                <button class="bg-red-600 text-white px-3 py-1 rounded-md hover:bg-red-700">
                                    <i class="fas fa-times mr-1"></i> Tolak
                                </button>
                                <button class="bg-accent text-white px-3 py-1 rounded-md hover:bg-accent/90 ml-2">
                                    <i class="fas fa-eye mr-1"></i> Detail
                                </button>
                            </td>
                        </tr>
                        <tr class="verification-item">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 bg-yellow-100 rounded-full flex items-center justify-center">
                                        <i class="fas fa-tools text-yellow-600"></i>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Bengkel Jaya</div>
                                        <div class="text-sm text-gray-500">ID: USR004</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Rudi Hermawan</div>
                                <div class="text-sm text-gray-500">rudi@email.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Jasa</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                15 Sep 2025
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="bg-green-600 text-white px-3 py-1 rounded-md hover:bg-green-700 mr-2">
                                    <i class="fas fa-check mr-1"></i> Terima
                                </button>
                                <button class="bg-red-600 text-white px-3 py-1 rounded-md hover:bg-red-700">
                                    <i class="fas fa-times mr-1"></i> Tolak
                                </button>
                                <button class="bg-accent text-white px-3 py-1 rounded-md hover:bg-accent/90 ml-2">
                                    <i class="fas fa-eye mr-1"></i> Detail
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        <div class="flex justify-between items-center mt-6">
            <div class="text-sm text-gray-600">
                Menampilkan 4 dari 12 usaha
            </div>
            <div class="flex space-x-2">
                <button class="px-3 py-1 border rounded-md bg-gray-100">Sebelumnya</button>
                <button class="px-3 py-1 border rounded-md bg-primary text-white">1</button>
                <button class="px-3 py-1 border rounded-md">2</button>
                <button class="px-3 py-1 border rounded-md">3</button>
                <button class="px-3 py-1 border rounded-md">Selanjutnya</button>
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