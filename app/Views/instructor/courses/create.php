<?= $this->extend('layouts/dashboard') ?>

<?= $this->section('sidebar') ?>
<div class="nav-label mt-2">Menu Instruktur</div>
<div class="nav-item">
    <a href="<?= base_url('instruktur') ?>" class="nav-link-dash">
        <i class="fas fa-home"></i> Beranda
    </a>
</div>
<div class="nav-item">
    <a href="<?= base_url('instruktur/kursus') ?>" class="nav-link-dash active">
        <i class="fas fa-book-reader"></i> Kursus Saya
    </a>
</div>
<div class="nav-item">
    <a href="<?= base_url('instruktur/siswa') ?>" class="nav-link-dash">
        <i class="fas fa-users"></i> Daftar Siswa
    </a>
</div>
<div class="nav-item">
    <a href="<?= base_url('instruktur/pendapatan') ?>" class="nav-link-dash">
        <i class="fas fa-wallet"></i> Pendapatan
    </a>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="d-flex align-items-center mb-4 gap-3">
    <a href="<?= base_url('instruktur/kursus') ?>" class="btn btn-light rounded-circle text-muted"><i class="fas fa-arrow-left"></i></a>
    <h1 class="page-title mb-0">Buat Kursus Baru</h1>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm rounded-4 p-4">
            <form action="" method="post">
                <div class="mb-4">
                    <label class="form-label fw-bold text-dark">Judul Kursus</label>
                    <input type="text" class="form-control form-control-lg rounded-3 border-gray-200" placeholder="Misal: Masterclass React JS 2026">
                </div>
                
                <div class="row mb-4">
                    <div class="col-md-6">
                        <label class="form-label fw-bold text-dark">Kategori</label>
                        <select class="form-select form-select-lg rounded-3 border-gray-200">
                            <option>Pilih Kategori...</option>
                            <option>Pemrograman</option>
                            <option>Desain Grafis</option>
                            <option>Bisnis</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold text-dark">Harga (Rp)</label>
                        <input type="number" class="form-control form-control-lg rounded-3 border-gray-200" placeholder="0 untuk Gratis">
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold text-dark">Deskripsi Kursus</label>
                    <textarea class="form-control rounded-3 border-gray-200" rows="5" placeholder="Jelaskan apa yang akan dipelajari di kursus ini..."></textarea>
                </div>
                
                <div class="mb-4">
                    <label class="form-label fw-bold text-dark">Thumbnail Kursus</label>
                    <div class="border-2 border-dashed rounded-4 p-5 text-center text-muted" style="border-color: #cbd5e1; background: #f8fafc; cursor: pointer;">
                        <i class="fas fa-cloud-upload-alt display-4 mb-3 text-primary opacity-50"></i>
                        <h5>Klik untuk unggah gambar</h5>
                        <p class="mb-0 fs-7">Rekomendasi ukuran: 1280x720px (Format: JPG, PNG)</p>
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-3 mt-5">
                    <button type="button" class="btn btn-light px-4 rounded-pill fw-semibold text-muted">Simpan sebagai Draft</button>
                    <button type="submit" class="btn btn-primary px-5 rounded-pill fw-semibold shadow-sm">Terbitkan Kursus</button>
                </div>
            </form>
        </div>
    </div>
    
    <div class="col-lg-4">
        <div class="card border-0 shadow-sm rounded-4 p-4 bg-primary text-white">
            <h5 class="fw-bold mb-3"><i class="fas fa-lightbulb me-2 text-warning"></i> Tips Instruktur</h5>
            <p class="fs-7 opacity-75 mb-2">1. Buat judul yang memancing rasa penasaran namun jelas.</p>
            <p class="fs-7 opacity-75 mb-2">2. Gunakan thumbnail berkualitas tinggi agar lebih menarik bagi siswa.</p>
            <p class="fs-7 opacity-75 mb-0">3. Isi deskripsi dengan poin-poin capaian belajar (Learning Outcomes).</p>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
