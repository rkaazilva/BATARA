<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi BUMDES - Super Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #1d4657;
            --secondary: #11676a;
            --accent: #b0b32a;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7f9;
        }
        
        .sidebar {
            background: linear-gradient(to bottom, var(--primary), var(--secondary));
        }
        
        .nav-item {
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }
        
        .nav-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
            border-left: 4px solid var(--accent);
        }
        
        .nav-item.active {
            background-color: rgba(255, 255, 255, 0.15);
            border-left: 4px solid var(--accent);
        }
        
        .logout-btn {
            background-color: rgba(179, 42, 42, 0.8);
            transition: all 0.3s ease;
        }
        
        .logout-btn:hover {
            background-color: rgba(179, 42, 42, 1);
            transform: translateY(-2px);
        }
        
        .content-card {
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            border: 1px solid #eaeaea;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(29, 70, 87, 0.3);
        }
        
        .btn-success {
            background: linear-gradient(135deg, #0d9b68 0%, #08a372 100%);
            transition: all 0.3s ease;
        }
        
        .btn-success:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(13, 155, 104, 0.3);
        }
        
        .btn-warning {
            background: linear-gradient(135deg, #f59e0b 0%, #f59e0b 100%);
            transition: all 0.3s ease;
        }
        
        .btn-warning:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(245, 158, 11, 0.3);
        }
        
        .page-title {
            color: var(--primary);
            position: relative;
            padding-bottom: 15px;
        }
        
        .page-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 70px;
            height: 4px;
            background: var(--accent);
            border-radius: 2px;
        }
        
        .table-header {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
        }
        
        .table-row:hover {
            background-color: #f8f9fa;
        }
        
        .status-pending {
            background-color: #fffbeb;
            color: #f59e0b;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 500;
        }
        
        .status-approved {
            background-color: #ecfdf5;
            color: #059669;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 500;
        }
        
        .status-rejected {
            background-color: #fef2f2;
            color: #dc2626;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 500;
        }
        
        .action-btn {
            transition: all 0.2s ease;
        }
        
        .action-btn:hover {
            transform: scale(1.1);
        }
        
        .badge-count {
            background-color: #ef4444;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            margin-left: 8px;
        }
    </style>
</head>

<body class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="sidebar w-64 text-white min-h-screen flex flex-col">
        <div class="p-6">
            <div class="flex items-center space-x-3 mb-8">
                <div class="p-3 rounded-lg bg-white bg-opacity-10">
                    <i class="fas fa-crown text-2xl text-yellow-300"></i>
                </div>
                <h1 class="text-2xl font-bold">Super Admin</h1>
            </div>
            
            <nav class="space-y-2">
                <a href="{{ url('/admin/dashboard') }}" class="nav-item flex items-center px-4 py-3 rounded-lg">
                    <i class="fas fa-home w-6 text-center mr-3"></i>
                    <span>Dashboard</span>
                </a>
                
                <a href="{{ url('/admin/bumdes') }}" class="nav-item flex items-center px-4 py-3 rounded-lg">
                    <i class="fas fa-building w-6 text-center mr-3"></i>
                    <span>Kelola BUMDES</span>
                </a>
                
              
                
                <a href="{{ url('/admin/laporan') }}" class="nav-item flex items-center px-4 py-3 rounded-lg">
                    <i class="fas fa-chart-bar w-6 text-center mr-3"></i>
                    <span>Laporan</span>
                </a>
                
                <a href="{{ url('/admin/users') }}" class="nav-item flex items-center px-4 py-3 rounded-lg">
                    <i class="fas fa-users w-6 text-center mr-3"></i>
                    <span>Manajemen User</span>
                </a>
            </nav>
        </div>
        
        <div class="mt-auto p-6">
            <a href="{{ route('logout') }}" class="logout-btn flex items-center justify-center px-4 py-3 rounded-lg font-medium">
                <i class="fas fa-sign-out-alt mr-2"></i>
                <span>Logout</span>
            </a>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="page-title text-3xl font-bold">Verifikasi BUMDES</h2>
            <div class="flex space-x-3">
                <button class="btn-warning text-white px-4 py-2 rounded-lg font-medium flex items-center">
                    <i class="fas fa-download mr-2"></i>
                    Ekspor Data
                </button>
            </div>
        </div>

        <!-- Filter dan Pencarian -->
        <div class="content-card bg-white p-6 mb-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="md:col-span-2">
                    <div class="relative">
                        <input type="text" placeholder="Cari BUMDES..." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <i class="fas fa-search absolute right-3 top-3.5 text-gray-400"></i>
                    </div>
                </div>
                <div>
                    <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option>Semua Status</option>
                        <option>Menunggu Verifikasi</option>
                        <option>Terverifikasi</option>
                        <option>Ditolak</option>
                    </select>
                </div>
                <div>
                    <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option>Urutkan Terbaru</option>
                        <option>Urutkan Terlama</option>
                        <option>Urutkan A-Z</option>
                        <option>Urutkan Z-A</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Tabel Verifikasi BUMDES -->
        <div class="content-card bg-white p-6">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-6 py-4 text-left table-header rounded-tl-lg">
                                <span class="text-white font-semibold">Nama BUMDES</span>
                            </th>
                            <th class="px-6 py-4 text-left table-header">
                                <span class="text-white font-semibold">Lokasi</span>
                            </th>
                            <th class="px-6 py-4 text-left table-header">
                                <span class="text-white font-semibold">Pengaju</span>
                            </th>
                            <th class="px-6 py-4 text-left table-header">
                                <span class="text-white font-semibold">Tanggal Pengajuan</span>
                            </th>
                            <th class="px-6 py-4 text-left table-header">
                                <span class="text-white font-semibold">Status</span>
                            </th>
                            <th class="px-6 py-4 text-center table-header rounded-tr-lg">
                                <span class="text-white font-semibold">Aksi</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="table-row">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="h-10 w-10 flex-shrink-0 bg-blue-100 rounded-full flex items-center justify-center">
                                        <i class="fas fa-store text-blue-600"></i>
                                    </div>
                                    <div class="ml-4">
                                        <div class="font-medium text-gray-900">BUMDES Maju Jaya</div>
                                        <div class="text-gray-500">ID: B001</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-gray-900">Desa Sukamaju</div>
                                <div class="text-gray-500">Jawa Barat</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-gray-900">Ahmad Sutisna</div>
                                <div class="text-gray-500">ahmad@email.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-gray-900">12 Januari 2023</div>
                                <div class="text-gray-500">3 hari lalu</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="status-pending">
                                    <i class="fas fa-clock mr-1"></i> Menunggu
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="flex justify-center space-x-3">
                                    <button class="action-btn text-green-600 hover:text-green-800" title="Setujui">
                                        <i class="fas fa-check-circle"></i>
                                    </button>
                                    <button class="action-btn text-red-600 hover:text-red-800" title="Tolak">
                                        <i class="fas fa-times-circle"></i>
                                    </button>
                                    <button class="action-btn text-blue-600 hover:text-blue-800" title="Detail">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        
                        <tr class="table-row">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="h-10 w-10 flex-shrink-0 bg-green-100 rounded-full flex items-center justify-center">
                                        <i class="fas fa-store text-green-600"></i>
                                    </div>
                                    <div class="ml-4">
                                        <div class="font-medium text-gray-900">BUMDES Sejahtera</div>
                                        <div class="text-gray-500">ID: B002</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-gray-900">Desa Harapan</div>
                                <div class="text-gray-500">Jawa Tengah</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-gray-900">Siti Rahayu</div>
                                <div class="text-gray-500">siti@email.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-gray-900">10 Januari 2023</div>
                                <div class="text-gray-500">5 hari lalu</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="status-pending">
                                    <i class="fas fa-clock mr-1"></i> Menunggu
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="flex justify-center space-x-3">
                                    <button class="action-btn text-green-600 hover:text-green-800" title="Setujui">
                                        <i class="fas fa-check-circle"></i>
                                    </button>
                                    <button class="action-btn text-red-600 hover:text-red-800" title="Tolak">
                                        <i class="fas fa-times-circle"></i>
                                    </button>
                                    <button class="action-btn text-blue-600 hover:text-blue-800" title="Detail">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        
                        <tr class="table-row">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="h-10 w-10 flex-shrink-0 bg-yellow-100 rounded-full flex items-center justify-center">
                                        <i class="fas fa-store text-yellow-600"></i>
                                    </div>
                                    <div class="ml-4">
                                        <div class="font-medium text-gray-900">BUMDES Makmur</div>
                                        <div class="text-gray-500">ID: B003</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-gray-900">Desa Sentosa</div>
                                <div class="text-gray-500">Jawa Timur</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-gray-900">Budi Santoso</div>
                                <div class="text-gray-500">budi@email.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-gray-900">8 Januari 2023</div>
                                <div class="text-gray-500">7 hari lalu</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="status-pending">
                                    <i class="fas fa-clock mr-1"></i> Menunggu
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="flex justify-center space-x-3">
                                    <button class="action-btn text-green-600 hover:text-green-800" title="Setujui">
                                        <i class="fas fa-check-circle"></i>
                                    </button>
                                    <button class="action-btn text-red-600 hover:text-red-800" title="Tolak">
                                        <i class="fas fa-times-circle"></i>
                                    </button>
                                    <button class="action-btn text-blue-600 hover:text-blue-800" title="Detail">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="flex items-center justify-between mt-6 px-4">
                <div class="text-sm text-gray-700">
                    Menampilkan 1 sampai 3 dari 3 hasil
                </div>
                <div class="flex space-x-2">
                    <button class="px-4 py-2 text-sm font-medium text-gray-500 bg-gray-100 rounded-md hover:bg-gray-200">
                        Sebelumnya
                    </button>
                    <button class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md">
                        1
                    </button>
                    <button class="px-4 py-2 text-sm font-medium text-gray-700 bg-white rounded-md hover:bg-gray-100">
                        Selanjutnya
                    </button>
                </div>
            </div>
        </div>
    </main>
</body>
</html>