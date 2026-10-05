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
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="page-title mb-0">Kelola Kursus</h1>
    <a href="<?= base_url('instruktur/kursus/buat') ?>" class="btn btn-primary rounded-pill px-4 shadow-sm">
        <i class="fas fa-plus me-2"></i>Buat Kursus
    </a>
</div>

<div class="card border-0 shadow-sm rounded-4">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle">
                <thead class="bg-light text-muted" style="font-size: 0.85rem;">
                    <tr>
                        <th class="ps-4 py-3 border-0">NAMA KURSUS</th>
                        <th class="py-3 border-0 text-center">STATUS</th>
                        <th class="py-3 border-0 text-center">SISWA</th>
                        <th class="py-3 border-0 text-end">PENDAPATAN</th>
                        <th class="pe-4 py-3 border-0 text-center">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($courses)) : ?>
                        <?php foreach($courses as $course) : ?>
                            <tr>
                                <td class="ps-4 py-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="bg-primary text-white rounded-3 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                                            <i class="fas fa-laptop-code fs-5"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1 fw-bold text-dark"><?= esc($course['title']) ?></h6>
                                            <small class="text-muted">Kategori: Pemrograman</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 text-center">
                                    <?php if($course['status'] === 'Aktif'): ?>
                                        <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-2">Aktif</span>
                                    <?php else: ?>
                                        <span class="badge bg-warning bg-opacity-10 text-warning rounded-pill px-3 py-2">Draft</span>
                                    <?php endif; ?>
                                </td>
                                <td class="py-3 text-center fw-semibold text-muted">
                                    <?= esc($course['students']) ?>
                                </td>
                                <td class="py-3 text-end fw-semibold text-dark">
                                    <?= esc($course['revenue']) ?>
                                </td>
                                <td class="pe-4 py-3 text-center">
                                    <button class="btn btn-sm btn-light rounded-circle text-primary me-1" title="Edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-light rounded-circle text-danger" title="Hapus"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="5" class="text-center py-5 text-muted">Belum ada kursus yang dibuat.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
