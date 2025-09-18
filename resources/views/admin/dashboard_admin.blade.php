<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Super Admin</title>
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
        
        .stat-card {
            transition: all 0.3s ease;
            border-radius: 12px;
            overflow: hidden;
            background: linear-gradient(135deg, #fff 0%, #f8f9fa 100%);
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .stat-icon {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
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
        
        .chart-container {
            background: linear-gradient(to bottom right, #f8f9fa, #ffffff);
            border-radius: 12px;
            padding: 20px;
            border: 1px solid #eaeaea;
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
                <a href="{{ url('/admin/dashboard') }}" class="nav-item flex items-center px-4 py-3 rounded-lg active">
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
        <h2 class="page-title text-3xl font-bold mb-8">Dashboard Super Admin</h2>

        <!-- Stat Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="stat-card p-6 flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold text-gray-600">Total BUMDES</h3>
                    <p class="text-3xl font-bold mt-2" style="color: var(--primary);">12</p>
                    <div class="flex items-center mt-2">
                        <span class="text-sm text-green-600 bg-green-100 px-2 py-1 rounded-full">
                            <i class="fas fa-arrow-up mr-1"></i> 5% dari bulan lalu
                        </span>
                    </div>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-building text-xl"></i>
                </div>
            </div>
            
            <div class="stat-card p-6 flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold text-gray-600">Transaksi Bulan Ini</h3>
                    <p class="text-3xl font-bold mt-2" style="color: var(--secondary);">350</p>
                    <div class="flex items-center mt-2">
                        <span class="text-sm text-green-600 bg-green-100 px-2 py-1 rounded-full">
                            <i class="fas fa-arrow-up mr-1"></i> 12% dari bulan lalu
                        </span>
                    </div>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-exchange-alt text-xl"></i>
                </div>
            </div>
            
            <div class="stat-card p-6 flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold text-gray-600">User Aktif</h3>
                    <p class="text-3xl font-bold mt-2" style="color: var(--accent);">120</p>
                    <div class="flex items-center mt-2">
                        <span class="text-sm text-green-600 bg-green-100 px-2 py-1 rounded-full">
                            <i class="fas fa-arrow-up mr-1"></i> 8% dari bulan lalu
                        </span>
                    </div>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-users text-xl"></i>
                </div>
            </div>
        </div>

        <!-- Charts Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
            <div class="chart-container">
                <h3 class="text-xl font-semibold mb-4" style="color: var(--primary);">Statistik Pengunjung</h3>
                <div class="bg-gray-200 h-64 rounded-lg flex items-center justify-center">
                    <p class="text-gray-500">Grafik statistik pengunjung akan ditampilkan di sini</p>
                </div>
            </div>
            
            <div class="chart-container">
                <h3 class="text-xl font-semibold mb-4" style="color: var(--primary);">Pendapatan Bulanan</h3>
                <div class="bg-gray-200 h-64 rounded-lg flex items-center justify-center">
                    <p class="text-gray-500">Grafik pendapatan bulanan akan ditampilkan di sini</p>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="content-card bg-white p-6 mb-8">
            <h3 class="text-xl font-semibold mb-4" style="color: var(--primary);">Aktivitas Terbaru</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aktivitas</th>
                            <th class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                            <th class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Waktu</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-4 whitespace-nowrap">Menambahkan produk baru</td>
                            <td class="px-4 py-4 whitespace-nowrap">Admin BUMDES A</td>
                            <td class="px-4 py-4 whitespace-nowrap">2 jam yang lalu</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-4 whitespace-nowrap">Memverifikasi pembayaran</td>
                            <td class="px-4 py-4 whitespace-nowrap">Admin BUMDES B</td>
                            <td class="px-4 py-4 whitespace-nowrap">5 jam yang lalu</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-4 whitespace-nowrap">Mengupdate stok produk</td>
                            <td class="px-4 py-4 whitespace-nowrap">Admin BUMDES C</td>
                            <td class="px-4 py-4 whitespace-nowrap">Kemarin</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>