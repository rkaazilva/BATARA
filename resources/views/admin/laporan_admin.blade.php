<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan - Super Admin</title>
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
        
        .report-card {
            transition: all 0.3s ease;
            border-radius: 12px;
            overflow: hidden;
            background: linear-gradient(135deg, #fff 0%, #f8f9fa 100%);
        }
        
        .report-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .report-icon {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
        }
        
        .chart-container {
            background: linear-gradient(to bottom right, #f8f9fa, #ffffff);
            border-radius: 12px;
            padding: 20px;
            border: 1px solid #eaeaea;
        }
        
        .filter-card {
            background: linear-gradient(to right, #f8f9fa, #ffffff);
            border-radius: 12px;
            padding: 20px;
            border: 1px solid #eaeaea;
        }
        
        .form-label {
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 8px;
            display: block;
        }
        
        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .form-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(29, 70, 87, 0.1);
        }
        
        .form-select {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            transition: all 0.3s ease;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%231d4657'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 16px center;
            background-size: 16px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
        
        .form-select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(29, 70, 87, 0.1);
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
                
              
                
                <a href="{{ url('/admin/laporan') }}" class="nav-item flex items-center px-4 py-3 rounded-lg active">
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
        <h2 class="page-title text-3xl font-bold mb-8">Laporan</h2>

        <!-- Ringkasan Laporan -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="report-card p-6 flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold text-gray-600">Total Transaksi</h3>
                    <p class="text-3xl font-bold mt-2" style="color: var(--primary);">1,245</p>
                    <div class="flex items-center mt-2">
                        <span class="text-sm text-green-600 bg-green-100 px-2 py-1 rounded-full">
                            <i class="fas fa-arrow-up mr-1"></i> 12% dari bulan lalu
                        </span>
                    </div>
                </div>
                <div class="report-icon">
                    <i class="fas fa-exchange-alt text-xl"></i>
                </div>
            </div>
            
            <div class="report-card p-6 flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold text-gray-600">Pendapatan</h3>
                    <p class="text-3xl font-bold mt-2" style="color: var(--secondary);">Rp 98,7 Jt</p>
                    <div class="flex items-center mt-2">
                        <span class="text-sm text-green-600 bg-green-100 px-2 py-1 rounded-full">
                            <i class="fas fa-arrow-up mr-1"></i> 8% dari bulan lalu
                        </span>
                    </div>
                </div>
                <div class="report-icon">
                    <i class="fas fa-money-bill-wave text-xl"></i>
                </div>
            </div>
            
            <div class="report-card p-6 flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold text-gray-600">BUMDES Aktif</h3>
                    <p class="text-3xl font-bold mt-2" style="color: var(--accent);">42</p>
                    <div class="flex items-center mt-2">
                        <span class="text-sm text-green-600 bg-green-100 px-2 py-1 rounded-full">
                            <i class="fas fa-arrow-up mr-1"></i> 5% dari bulan lalu
                        </span>
                    </div>
                </div>
                <div class="report-icon">
                    <i class="fas fa-store text-xl"></i>
                </div>
            </div>
            
            <div class="report-card p-6 flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold text-gray-600">User Baru</h3>
                    <p class="text-3xl font-bold mt-2" style="color: #8e44ad;">78</p>
                    <div class="flex items-center mt-2">
                        <span class="text-sm text-green-600 bg-green-100 px-2 py-1 rounded-full">
                            <i class="fas fa-arrow-up mr-1"></i> 15% dari bulan lalu
                        </span>
                    </div>
                </div>
                <div class="report-icon">
                    <i class="fas fa-user-plus text-xl"></i>
                </div>
            </div>
        </div>

        <!-- Filter Laporan -->
        <div class="filter-card mb-8">
            <h3 class="text-xl font-semibold mb-4" style="color: var(--primary);">Filter Laporan</h3>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label class="form-label">Jenis Laporan</label>
                    <select class="form-select">
                        <option>Transaksi</option>
                        <option>Pendapatan</option>
                        <option>User</option>
                        <option>BUMDES</option>
                    </select>
                </div>
                <div>
                    <label class="form-label">Periode</label>
                    <select class="form-select">
                        <option>Hari Ini</option>
                        <option>Minggu Ini</option>
                        <option>Bulan Ini</option>
                        <option>Kuartal Ini</option>
                        <option>Tahun Ini</option>
                        <option>Kustom</option>
                    </select>
                </div>
                <div>
                    <label class="form-label">Dari Tanggal</label>
                    <input type="date" class="form-input">
                </div>
                <div>
                    <label class="form-label">Sampai Tanggal</label>
                    <input type="date" class="form-input">
                </div>
            </div>
            <div class="flex justify-end mt-4">
                <button class="btn-primary text-white px-6 py-3 rounded-lg font-medium flex items-center">
                    <i class="fas fa-filter mr-2"></i>
                    Terapkan Filter
                </button>
            </div>
        </div>

        <!-- Grafik Laporan -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
            <div class="chart-container">
                <h3 class="text-xl font-semibold mb-4" style="color: var(--primary);">Statistik Transaksi</h3>
                <div class="bg-gray-200 h-64 rounded-lg flex items-center justify-center">
                    <p class="text-gray-500">Grafik statistik transaksi akan ditampilkan di sini</p>
                </div>
            </div>
            
            <div class="chart-container">
                <h3 class="text-xl font-semibold mb-4" style="color: var(--primary);">Pendapatan per BUMDES</h3>
                <div class="bg-gray-200 h-64 rounded-lg flex items-center justify-center">
                    <p class="text-gray-500">Grafik pendapatan per BUMDES akan ditampilkan di sini</p>
                </div>
            </div>
        </div>

        <!-- Tabel Laporan -->
        <div class="content-card bg-white p-6 mb-8">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-xl font-semibold" style="color: var(--primary);">Data Transaksi</h3>
                <button class="btn-success text-white px-5 py-2.5 rounded-lg font-medium flex items-center">
                    <i class="fas fa-download mr-2"></i>
                    Download Laporan (PDF)
                </button>
            </div>
            
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-6 py-4 text-left bg-gray-50 text-xs font-medium text-gray-500 uppercase tracking-wider">ID Transaksi</th>
                            <th class="px-6 py-4 text-left bg-gray-50 text-xs font-medium text-gray-500 uppercase tracking-wider">BUMDES</th>
                            <th class="px-6 py-4 text-left bg-gray-50 text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                            <th class="px-6 py-4 text-left bg-gray-50 text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah</th>
                            <th class="px-6 py-4 text-left bg-gray-50 text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">TRX-2023-001</td>
                            <td class="px-6 py-4 whitespace-nowrap">BUMDES Maju Jaya</td>
                            <td class="px-6 py-4 whitespace-nowrap">12 Jan 2023</td>
                            <td class="px-6 py-4 whitespace-nowrap">Rp 450.000</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 text-sm bg-green-100 text-green-800 rounded-full">Sukses</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">TRX-2023-002</td>
                            <td class="px-6 py-4 whitespace-nowrap">BUMDES Sejahtera</td>
                            <td class="px-6 py-4 whitespace-nowrap">11 Jan 2023</td>
                            <td class="px-6 py-4 whitespace-nowrap">Rp 325.000</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 text-sm bg-green-100 text-green-800 rounded-full">Sukses</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">TRX-2023-003</td>
                            <td class="px-6 py-4 whitespace-nowrap">BUMDES Makmur</td>
                            <td class="px-6 py-4 whitespace-nowrap">10 Jan 2023</td>
                            <td class="px-6 py-4 whitespace-nowrap">Rp 620.000</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 text-sm bg-green-100 text-green-800 rounded-full">Sukses</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="flex items-center justify-between mt-6 px-4">
                <div class="text-sm text-gray-700">
                    Menampilkan 1 sampai 3 dari 1245 hasil
                </div>
                <div class="flex space-x-2">
                    <button class="px-4 py-2 text-sm font-medium text-gray-500 bg-gray-100 rounded-md hover:bg-gray-200">
                        Sebelumnya
                    </button>
                    <button class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md">
                        1
                    </button>
                    <button class="px-4 py-2 text-sm font-medium text-gray-700 bg-white rounded-md hover:bg-gray-100">
                        2
                    </button>
                    <button class="px-4 py-2 text-sm font-medium text-gray-700 bg-white rounded-md hover:bg-gray-100">
                        3
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