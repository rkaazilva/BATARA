<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah BUMDES - Super Admin</title>
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
        
        .btn-secondary {
            background: #f1f5f9;
            color: #64748b;
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            background: #e2e8f0;
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
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .back-link {
            color: var(--primary);
            transition: all 0.3s ease;
        }
        
        .back-link:hover {
            color: var(--secondary);
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
                
                <a href="{{ url('/admin/bumdes') }}" class="nav-item flex items-center px-4 py-3 rounded-lg active">
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
        <div class="mb-6">
            <a href="{{ url('/admin/bumdes') }}" class="back-link inline-flex items-center font-medium">
                <i class="fas fa-arrow-left mr-2"></i>
                Kembali ke Daftar BUMDES
            </a>
        </div>
        
        <div class="flex justify-between items-center mb-6">
            <h2 class="page-title text-3xl font-bold">Tambah BUMDES</h2>
        </div>

        <!-- Form Tambah BUMDES -->
        <div class="content-card bg-white p-8">
            <form action="{{ url('/admin/bumdes/store') }}" method="POST" class="space-y-6">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="form-group">
                        <label class="form-label">Nama BUMDES <span class="text-red-500">*</span></label>
                        <input type="text" name="nama" class="form-input" placeholder="Masukkan nama BUMDES" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Nama Manager <span class="text-red-500">*</span></label>
                        <input type="text" name="manager" class="form-input" placeholder="Masukkan nama manager" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Alamat Lengkap <span class="text-red-500">*</span></label>
                    <textarea name="alamat" class="form-input" rows="3" placeholder="Masukkan alamat lengkap BUMDES" required></textarea>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="form-group">
                        <label class="form-label">Desa/Kelurahan <span class="text-red-500">*</span></label>
                        <input type="text" name="desa" class="form-input" placeholder="Nama desa/kelurahan" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Kecamatan <span class="text-red-500">*</span></label>
                        <input type="text" name="kecamatan" class="form-input" placeholder="Nama kecamatan" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Kabupaten/Kota <span class="text-red-500">*</span></label>
                        <input type="text" name="kabupaten" class="form-input" placeholder="Nama kabupaten/kota" required>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="form-group">
                        <label class="form-label">Provinsi <span class="text-red-500">*</span></label>
                        <select name="provinsi" class="form-input" required>
                            <option value="">Pilih Provinsi</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                            <option value="Jawa Timur">Jawa Timur</option>
                            <option value="Banten">Banten</option>
                            <option value="DKI Jakarta">DKI Jakarta</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Kode Pos</label>
                        <input type="text" name="kode_pos" class="form-input" placeholder="Kode pos">
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="form-group">
                        <label class="form-label">Email <span class="text-red-500">*</span></label>
                        <input type="email" name="email" class="form-input" placeholder="Email BUMDES" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Telepon <span class="text-red-500">*</span></label>
                        <input type="tel" name="telepon" class="form-input" placeholder="Nomor telepon" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Deskripsi BUMDES</label>
                    <textarea name="deskripsi" class="form-input" rows="4" placeholder="Deskripsi singkat tentang BUMDES"></textarea>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Status <span class="text-red-500">*</span></label>
                    <div class="flex space-x-4">
                        <label class="inline-flex items-center">
                            <input type="radio" name="status" value="aktif" class="form-radio text-blue-600" checked>
                            <span class="ml-2">Aktif</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="status" value="nonaktif" class="form-radio text-blue-600">
                            <span class="ml-2">Nonaktif</span>
                        </label>
                    </div>
                </div>
                
                <div class="flex justify-end space-x-4 pt-4">
                    <a href="{{ url('/admin/bumdes') }}" class="btn-secondary px-6 py-3 rounded-lg font-medium">
                        Batal
                    </a>
                    <button type="submit" class="btn-primary text-white px-6 py-3 rounded-lg font-medium flex items-center">
                        <i class="fas fa-save mr-2"></i>
                        Simpan BUMDES
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>