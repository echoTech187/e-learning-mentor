<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Dashboard') ?> &mdash; EduNusa</title>
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('favicon.ico') ?>" type="image/x-icon">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Bootstrap 5 --><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"><!-- CSS (Tailwind Compiled & Custom) -->
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
        <style>
        :root {
            --primary: #000000;
            --primary-light: #f3f4f6;
            --text-dark: #111827;
            --text-muted: #6b7280;
            --border-color: #e5e7eb;
            --sidebar-width: 260px;
            --bg-body: #ffffff;
        }
        
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-body);
            color: var(--text-dark);
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
        }

        /* Sidebar - Ultra Minimal */
        .sidebar {
            width: var(--sidebar-width);
            background: #ffffff;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            border-right: 1px solid var(--border-color);
            z-index: 1040;
            overflow-y: auto;
            transition: all 0.3s ease;
        }
        
        .sidebar-brand {
            height: 72px;
            display: flex;
            align-items: center;
            padding: 0 48px;
            font-size: 1.25rem;
            font-weight: 800;
            color: var(--text-dark);
            text-decoration: none;
            border-bottom: 1px solid var(--border-color);
            letter-spacing: -0.02em;
        }
        
        .sidebar-brand .icon-box {
            width: 32px;
            height: 32px;
            background: #000;
            color: #fff;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            font-size: 0.9rem;
        }
        
        .sidebar-nav {
            padding: 24px 16px;
        }
        
        .nav-label {
            font-size: 0.65rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #9ca3af;
            margin-bottom: 12px;
            margin-left: 12px;
            margin-top: 24px;
        }
        
        .nav-item {
            margin-bottom: 4px;
        }
        
        .nav-link-dash {
            display: flex;
            align-items: center;
            padding: 10px 12px;
            color: var(--text-muted);
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            text-decoration: none;
            transition: all 0.2s;
        }
        
        .nav-link-dash i {
            width: 24px;
            font-size: 1.1rem;
            text-align: center;
            margin-right: 12px;
        }
        
        .nav-link-dash:hover {
            background: #f3f4f6;
            color: var(--text-dark);
        }
        
        .nav-link-dash.active {
            background: #000000;
            color: #ffffff;
        }
        .nav-link-dash.active i {
            color: #ffffff;
        }

        /* Topbar - Flat */
        .main-content {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .topbar {
            height: 72px;
            background: #ffffff;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 48px;
            position: sticky;
            top: 0;
            z-index: 1030;
        }
        
        .topbar-title {
            font-size: 1.25rem;
            font-weight: 800;
            color: var(--text-dark);
            letter-spacing: -0.02em;
        }
        
        .user-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
            padding: 6px 12px;
            border-radius: 20px;
            transition: background 0.2s;
        }
        .user-profile:hover {
            background: #f3f4f6;
        }
        
        .user-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #e5e7eb;
            color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.9rem;
        }
        
        .user-name {
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--text-dark);
        }
        
        .user-role {
            font-size: 0.7rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        
        .content-area-wrapper {
            padding: 48px;
            flex: 1;
        }

        .badge.bg-danger {
            background-color: #ef4444 !important;
            font-size: 0.7rem;
            padding: 4px 8px;
        }
            .topbar-right {
            display: flex;
            align-items: center;
            gap: 24px;
        }
        .user-info {
            display: flex;
            flex-direction: column;
            line-height: 1.2;
        }
        .sidebar::-webkit-scrollbar {
            width: 4px;
        }
        .sidebar::-webkit-scrollbar-track {
            background: transparent;
        }
        .sidebar::-webkit-scrollbar-thumb {
            background: #e5e7eb;
            border-radius: 4px;
        }
            .content-area {
            padding: 48px;
            flex: 1;
            max-width: 1400px;
            margin: 0 auto;
            width: 100%;
        }
        .topbar-right {
            display: flex;
            align-items: center;
            gap: 24px;
        }
        .user-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
            padding: 6px 12px;
            border-radius: 20px;
            transition: background 0.2s;
        }
        .user-profile:hover {
            background: #f3f4f6;
        }
        .user-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #e5e7eb;
            color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
        }
        .user-info {
            display: flex;
            flex-direction: column;
            line-height: 1.2;
            text-align: left;
        }
        .user-name {
            font-size: 0.85rem;
            font-weight: 700;
            color: #000;
        }
        .user-role {
            font-size: 0.65rem;
            color: #6b7280;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .notification-icon {
            position: relative;
            color: #6b7280;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            transition: background 0.2s;
        }
        .notification-icon:hover {
            background: #f3f4f6;
        }
        .notification-icon i {
            font-size: 1.2rem;
        }
        .notification-badge {
            position: absolute;
            top: 6px;
            right: 6px;
            background: #ef4444;
            color: white;
            font-size: 0.6rem;
            font-weight: bold;
            padding: 2px 5px;
            border-radius: 10px;
            border: 2px solid #fff;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <a href="<?= base_url() ?>" class="sidebar-brand">
                <div class="icon-box"><i class="fas fa-graduation-cap"></i></div>
                <span>EduNusa</span>
            </a>
        </div>
        <div class="sidebar-nav">
            
<div class="nav-item">
    <a href="<?= base_url('instruktur') ?>" class="nav-link-dash active">
        <i class="fas fa-home"></i> Beranda
    </a>
</div>
<div class="nav-item">
    <a href="<?= base_url('instruktur/jadwal') ?>" class="nav-link-dash">
        <i class="fas fa-calendar-alt"></i> Jadwal & Ketersediaan
    </a>
</div>
<div class="nav-item">
    <a href="<?= base_url('instruktur/murid') ?>" class="nav-link-dash">
        <i class="fas fa-users"></i> Murid Saya
    </a>
</div>
<div class="nav-item">
    <a href="<?= base_url('instruktur/nilai') ?>" class="nav-link-dash">
        <i class="fas fa-clipboard-check"></i> Input Nilai/Progress
    </a>
</div>
<div class="nav-item">
    <a href="<?= base_url('instruktur/pendapatan') ?>" class="nav-link-dash">
        <i class="fas fa-wallet"></i> Pendapatan
    </a>
</div>
<div class="nav-item">
    <a href="<?= base_url('instruktur/pesan') ?>" class="nav-link-dash d-flex justify-content-between align-items-center">
        <span><i class="fas fa-comment-dots"></i> Pesan</span>
        <span class="badge bg-secondary rounded-pill">3</span>
    </a>
</div>
<div class="nav-item">
    <a href="<?= base_url('instruktur/profil') ?>" class="nav-link-dash">
        <i class="fas fa-user-circle"></i> Profil & Materi
    </a>
</div>

<div class="mt-4 p-2 border rounded border-success-subtle bg-success-subtle bg-opacity-25 d-flex align-items-center">
    <div class="bg-success rounded-circle me-2" style="width: 10px; height: 10px;"></div>
    <span class="fw-semibold text-success" style="font-size: 0.85rem;">Tersedia Mengajar</span>
</div>

        </div>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Topbar -->
        <header class="topbar">
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-light d-lg-none" id="btnToggleSidebar">
                    <i class="fas fa-bars"></i>
                </button>
                <h4 class="mb-0 topbar-title d-none d-md-block"><?= esc($title ?? 'Dashboard') ?></h4>
            </div>
            
            <div class="topbar-right">
                <a href="#" class="notification-icon">
                    <i class="fas fa-bell"></i>
                    <span class="notification-badge">3</span>
                </a>
                
                <div class="dropdown">
                    <div class="user-profile" data-bs-toggle="dropdown">
                        <div class="user-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="user-info d-none d-md-flex">
                            <span class="user-name"><?= esc(session()->get('user_name') ?? 'Pengguna') ?></span>
                            <span class="user-role"><?= esc(session()->get('user_role') ?? 'Role') ?></span>
                        </div>
                    </div>
                    <ul class="dropdown-menu dropdown-menu-end border-0 shadow-sm mt-2">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-user-circle me-2 text-muted"></i> Profil Saya</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2 text-muted"></i> Pengaturan</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="<?= base_url('/keluar') ?>"><i class="fas fa-sign-out-alt me-2"></i> Keluar</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <!-- Content Area -->
        <div class="content-area">
            <?= $this->renderSection('content') ?>
        </div>
    </main>

    <!-- Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('btnToggleSidebar')?.addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('show');
        });
    </script>
    <?= $this->renderSection('scripts') ?>
</body>
</html>

