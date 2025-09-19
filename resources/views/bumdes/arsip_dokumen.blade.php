<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip & Dokumen - BUMDES</title>
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
        
        .document-item {
            transition: background-color 0.2s ease;
        }
        
        .document-item:hover {
            background-color: #f9fafb;
        }
        
        .file-card {
            transition: all 0.3s ease;
        }
        
        .file-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
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
            <a href="{{ route('bumdes.verifikasi') }}" class="flex items-center py-2 px-4 hover:bg-secondary rounded-md transition">
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
            <a href="{{ route('bumdes.arsip') }}" class="flex items-center py-2 px-4 bg-secondary rounded-md transition">
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
            <h2 class="text-2xl font-bold text-primary">Arsip & Dokumen</h2>
            <p class="text-gray-600">Kelola semua dokumen dan arsip BUMDES</p>
        </div>

        <!-- Statistik Dokumen -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
            <div class="stats-card bg-white p-4 rounded-lg shadow-md border-l-4 border-accent">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-500">Total Dokumen</p>
                        <h3 class="text-2xl font-bold text-primary">48</h3>
                    </div>
                    <div class="bg-accent/20 p-3 rounded-full">
                        <i class="fas fa-file text-accent text-xl"></i>
                    </div>
                </div>
            </div>
            
            <div class="stats-card bg-white p-4 rounded-lg shadow-md border-l-4 border-secondary">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-500">Dokumen Baru</p>
                        <h3 class="text-2xl font-bold text-primary">5</h3>
                    </div>
                    <div class="bg-secondary/20 p-3 rounded-full">
                        <i class="fas fa-file-upload text-secondary text-xl"></i>
                    </div>
                </div>
            </div>
            
            <div class="stats-card bg-white p-4 rounded-lg shadow-md border-l-4 border-purple-500">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-500">Ukuran Total</p>
                        <h3 class="text-2xl font-bold text-primary">256 MB</h3>
                    </div>
                    <div class="bg-purple-100 p-3 rounded-full">
                        <i class="fas fa-database text-purple-500 text-xl"></i>
                    </div>
                </div>
            </div>
            
            <div class="stats-card bg-white p-4 rounded-lg shadow-md border-l-4 border-green-500">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-500">Kategori</p>
                        <h3 class="text-2xl font-bold text-primary">6</h3>
                    </div>
                    <div class="bg-green-100 p-3 rounded-full">
                        <i class="fas fa-folder text-green-500 text-xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filter dan Pencarian -->
        <div class="bg-white rounded-lg shadow-md p-4 mb-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div class="flex flex-col md:flex-row md:items-center gap-4">
                    <div class="relative">
                        <input type="text" placeholder="Cari dokumen..." class="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-accent w-full md:w-64">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                    <select class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-accent">
                        <option>Semua Kategori</option>
                        <option>Laporan Tahunan</option>
                        <option>Laporan Bulanan</option>
                        <option>Dokumen Legal</option>
                        <option>SKU & Perizinan</option>
                        <option>Arsip Transaksi</option>
                        <option>Dokumen Lainnya</option>
                    </select>
                </div>
                <button class="bg-accent text-white px-4 py-2 rounded-lg hover:bg-accent/90 flex items-center">
                    <i class="fas fa-plus mr-2"></i> Upload Dokumen
                </button>
            </div>
        </div>

        <!-- Tampilan Grid Dokumen -->
        <div class="mb-6">
            <h3 class="text-lg font-semibold text-primary mb-4">Dokumen Terbaru</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="file-card bg-white rounded-lg shadow-md p-4 border border-gray-200">
                    <div class="flex items-center justify-center h-16 w-16 bg-blue-100 rounded-lg mb-3 mx-auto">
                        <i class="fas fa-file-pdf text-blue-600 text-2xl"></i>
                    </div>
                    <h4 class="font-semibold text-center mb-1">Laporan BUMDES 2024</h4>
                    <p class="text-sm text-gray-500 text-center mb-2">Laporan Tahunan</p>
                    <p class="text-xs text-gray-400 text-center mb-3">5 Jan 2025 • 2.4 MB</p>
                    <div class="flex justify-center space-x-2">
                        <button class="bg-accent text-white px-3 py-1 rounded-md text-sm hover:bg-accent/90">
                            <i class="fas fa-eye mr-1"></i> Lihat
                        </button>
                        <button class="bg-gray-200 text-gray-700 px-3 py-1 rounded-md text-sm hover:bg-gray-300">
                            <i class="fas fa-download mr-1"></i> Unduh
                        </button>
                    </div>
                </div>
                
                <div class="file-card bg-white rounded-lg shadow-md p-4 border border-gray-200">
                    <div class="flex items-center justify-center h-16 w-16 bg-green-100 rounded-lg mb-3 mx-auto">
                        <i class="fas fa-file-excel text-green-600 text-2xl"></i>
                    </div>
                    <h4 class="font-semibold text-center mb-1">Laporan Keuangan Sept 2025</h4>
                    <p class="text-sm text-gray-500 text-center mb-2">Laporan Bulanan</p>
                    <p class="text-xs text-gray-400 text-center mb-3">1 Okt 2025 • 1.2 MB</p>
                    <div class="flex justify-center space-x-2">
                        <button class="bg-accent text-white px-3 py-1 rounded-md text-sm hover:bg-accent/90">
                            <i class="fas fa-eye mr-1"></i> Lihat
                        </button>
                        <button class="bg-gray-200 text-gray-700 px-3 py-1 rounded-md text-sm hover:bg-gray-300">
                            <i class="fas fa-download mr-1"></i> Unduh
                        </button>
                    </div>
                </div>
                
                <div class="file-card bg-white rounded-lg shadow-md p-4 border border-gray-200">
                    <div class="flex items-center justify-center h-16 w-16 bg-red-100 rounded-lg mb-3 mx-auto">
                        <i class="fas fa-file-word text-red-600 text-2xl"></i>
                    </div>
                    <h4 class="font-semibold text-center mb-1">SK Usaha BUMDES</h4>
                    <p class="text-sm text-gray-500 text-center mb-2">Dokumen Legal</p>
                    <p class="text-xs text-gray-400 text-center mb-3">15 Mar 2025 • 0.8 MB</p>
                    <div class="flex justify-center space-x-2">
                        <button class="bg-accent text-white px-3 py-1 rounded-md text-sm hover:bg-accent/90">
                            <i class="fas fa-eye mr-1"></i> Lihat
                        </button>
                        <button class="bg-gray-200 text-gray-700 px-3 py-1 rounded-md text-sm hover:bg-gray-300">
                            <i class="fas fa-download mr-1"></i> Unduh
                        </button>
                    </div>
                </div>
                
                <div class="file-card bg-white rounded-lg shadow-md p-4 border border-gray-200">
                    <div class="flex items-center justify-center h-16 w-16 bg-purple-100 rounded-lg mb-3 mx-auto">
                        <i class="fas fa-file-image text-purple-600 text-2xl"></i>
                    </div>
                    <h4 class="font-semibold text-center mb-1">Struktur Organisasi</h4>
                    <p class="text-sm text-gray-500 text-center mb-2">Dokumen Lainnya</p>
                    <p class="text-xs text-gray-400 text-center mb-3">20 Jun 2025 • 3.1 MB</p>
                    <div class="flex justify-center space-x-2">
                        <button class="bg-accent text-white px-3 py-1 rounded-md text-sm hover:bg-accent/90">
                            <i class="fas fa-eye mr-1"></i> Lihat
                        </button>
                        <button class="bg-gray-200 text-gray-700 px-3 py-1 rounded-md text-sm hover:bg-gray-300">
                            <i class="fas fa-download mr-1"></i> Unduh
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel Dokumen -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Dokumen</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Upload</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ukuran</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="document-item">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-file-pdf text-blue-600"></i>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Laporan BUMDES 2024</div>
                                        <div class="text-sm text-gray-500">Laporan tahunan kegiatan BUMDES</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                5 Jan 2025
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Laporan Tahunan</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                2.4 MB
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="bg-accent text-white px-3 py-1 rounded-md hover:bg-accent/90 mr-2">
                                    <i class="fas fa-eye mr-1"></i> Lihat
                                </button>
                                <button class="bg-red-600 text-white px-3 py-1 rounded-md hover:bg-red-700">
                                    <i class="fas fa-trash mr-1"></i> Hapus
                                </button>
                            </td>
                        </tr>
                        <tr class="document-item">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 bg-green-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-file-excel text-green-600"></i>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Laporan Keuangan Sept 2025</div>
                                        <div class="text-sm text-gray-500">Laporan keuangan bulan September</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                1 Okt 2025
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Laporan Bulanan</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                1.2 MB
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="bg-accent text-white px-3 py-1 rounded-md hover:bg-accent/90 mr-2">
                                    <i class="fas fa-eye mr-1"></i> Lihat
                                </button>
                                <button class="bg-red-600 text-white px-3 py-1 rounded-md hover:bg-red-700">
                                    <i class="fas fa-trash mr-1"></i> Hapus
                                </button>
                            </td>
                        </tr>
                        <tr class="document-item">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 bg-red-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-file-word text-red-600"></i>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">SK Usaha BUMDES</div>
                                        <div class="text-sm text-gray-500">Surat keterangan usaha BUMDES</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                15 Mar 2025
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Dokumen Legal</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                0.8 MB
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="bg-accent text-white px-3 py-1 rounded-md hover:bg-accent/90 mr-2">
                                    <i class="fas fa-eye mr-1"></i> Lihat
                                </button>
                                <button class="bg-red-600 text-white px-3 py-1 rounded-md hover:bg-red-700">
                                    <i class="fas fa-trash mr-1"></i> Hapus
                                </button>
                            </td>
                        </tr>
                        <tr class="document-item">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-file-image text-purple-600"></i>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Struktur Organisasi</div>
                                        <div class="text-sm text-gray-500">Struktur organisasi BUMDES</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                20 Jun 2025
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">Dokumen Lainnya</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                3.1 MB
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="bg-accent text-white px-3 py-1 rounded-md hover:bg-accent/90 mr-2">
                                    <i class="fas fa-eye mr-1"></i> Lihat
                                </button>
                                <button class="bg-red-600 text-white px-3 py-1 rounded-md hover:bg-red-700">
                                    <i class="fas fa-trash mr-1"></i> Hapus
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
                Menampilkan 4 dari 48 dokumen
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