<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'E-Learning Platform') ?></title>
    <meta name="description" content="<?= esc($meta_desc ?? 'Platform e-learning terbaik Indonesia') ?>">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>?v=<?= time() ?>">
    <?= $this->renderSection('head') ?>
    <style>
        .auth-left { background: linear-gradient(135deg, #2e7d32 0%, #1b5e20 100%) !important; }
        .auth-brand { color: #fff !important; }
        .hero-text h2 { color: #fff !important; }
        .hero-text p { color: rgba(255,255,255,0.8) !important; }
        .testimonial-content p { color: rgba(255,255,255,0.9) !important; }
        .testimonial-content strong { color: #fff !important; }
        .floating-card { background: rgba(255,255,255,0.15) !important; backdrop-filter: blur(10px); color: #fff !important; }
        .floating-card i { color: #81c784 !important; }
        .btn-submit { background-color: #2e7d32 !important; }
        .btn-submit:hover { background-color: #1b5e20 !important; }
        .auth-switch a { color: #2e7d32 !important; }
    </style>
</head>
<body class="auth-body">

<div class="auth-wrapper">
    <!-- Left Panel -->
    <div class="auth-left d-none d-lg-flex">
        <div class="auth-left-content">
            <a href="<?= base_url('/') ?>" class="auth-brand">
                <div class="brand-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <span class="brand-name">EduNusa</span>
            </a>
            <div class="auth-illustration">
                <!-- Decorative circles -->
                <div class="illustration-circle circle-1"></div>
                <div class="illustration-circle circle-2"></div>
                <div class="illustration-circle circle-3"></div>

                <!-- Floating cards -->
                <div class="floating-card card-1">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>Ajar Ribuan Siswa</span>
                </div>
                <div class="floating-card card-2">
                    <i class="fas fa-wallet"></i>
                    <span>Penghasilan Tambahan</span>
                </div>
                <div class="floating-card card-3">
                    <i class="fas fa-globe"></i>
                    <span>Jangkauan Luas</span>
                </div>

                <!-- Hero text CENTER -->
                <div class="hero-text">
                    <h2>Bagikan Ilmu Anda<br>Menginspirasi Dunia</h2>
                    <p>Jadilah bagian dari revolusi pendidikan. Ajar ribuan siswa dan bangun personal branding Anda bersama EduNusa.</p>
                </div>
            </div>
            <div class="auth-testimonial">
                <div class="testimonial-avatar">
                    <div class="avatar-placeholder" style="background: #e8f5e9; color: #2e7d32;">BS</div>
                </div>
                <div class="testimonial-content">
                    <p>"Mengajar di EduNusa memberikan saya kebebasan waktu dan koneksi dengan siswa dari seluruh Indonesia."</p>
                    <strong>Reza Nugraha</strong> — Frontend Developer
                </div>
            </div>
        </div>
    </div>

    <!-- Right Panel (Form) -->
    <div class="auth-right">
        <div class="auth-form-container">
            <a href="<?= base_url('/') ?>" class="d-lg-none auth-brand-mobile">
                <div class="brand-icon brand-icon-sm">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <span class="brand-name">EduNusa</span>
            </a>
            <?= $this->renderSection('content') ?>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="<?= base_url('assets/js/main.js') ?>"></script>
<?= $this->renderSection('scripts') ?>
</body>
</html>



