<?= $this->extend('layouts/dashboard') ?>

<?= $this->section('content') ?>
<h1 class="page-title">Halo, Instruktur <?= esc(session()->get('user_name') ?? '') ?>! 👨‍🏫</h1>

<div class="row g-4 mb-4">
    <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded-xl p-4 h-100 bg-primary text-white">
            <h6 class="text-white-50 mb-2">Total Pendapatan Bulan Ini</h6>
            <h3 class="fw-bold mb-0">Rp 5.250.000</h3>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded-xl p-4 h-100">
            <h6 class="text-muted mb-2">Total Siswa Aktif</h6>
            <h3 class="fw-bold mb-0 text-dark">342 Siswa</h3>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded-xl p-4 h-100">
            <h6 class="text-muted mb-2">Rating Rata-rata</h6>
            <h3 class="fw-bold mb-0 text-warning"><i class="fas fa-star me-2"></i>4.8 / 5.0</h3>
        </div>
    </div>
</div>

<div class="card border-0 shadow-sm rounded-xl p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 class="fw-bold mb-0">Kursus Anda</h5>
        <button class="btn btn-primary btn-sm rounded-pill px-3"><i class="fas fa-plus me-2"></i>Buat Kursus Baru</button>
    </div>
    
    <div class="text-center py-5 text-muted">
        <div class="mb-3">
            <i class="fas fa-folder-open display-4 opacity-50"></i>
        </div>
        <h5>Belum Ada Kursus</h5>
        <p>Mulai buat kursus pertama Anda dan bagikan ilmu Anda ke seluruh dunia.</p>
    </div>
</div>
<?= $this->endSection() ?>

