<?= $this->extend('User/templates/sidebar') ?>

<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Home/</span> Probabilitas</h4>
    <!-- Striped Rows -->
    <div class="col-xl">
        <div class="card">
            <h5 class="card-header">Langkah Pertama Probabilitas</h5>
            <h7 class="card-header">Probabilitas = Permintaan : Total Permintaan</h7>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Bulan</th>
                                <th>Permintaan</th>
                                <th>Probabilitas</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php $i = 1; ?>
                            <?php $j = 1; ?>
                            <?php if ($permintaan != null) : ?>
                                <?php foreach ($permintaan['datanya'] as $p) : ?>
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $j++; ?></strong></td>
                                        <td>Bulan <?= $p['bulan']; ?> (<?= date('F', mktime(0, 0, 0, $p['bulan'], 10)); ?>) </td>
                                        <td><?= $p['frekuensi']; ?> obat</td>
                                        <td>
                                            <?= $p['probabilitas']; ?>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="5">
                                        <div class="alert alert-danger" role="alert">
                                            <h5 class="alert-heading">Data tidak ditemukan!</h5>
                                            <p>Silahkan lakukan perhitungan Input data terlebih dahulu.</p>
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="demo-inline-spacing">
                    <!-- Basic Pagination -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item first">
                                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a>
                            </li>
                            <li class="page-item prev">
                                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevron-left"></i></a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="javascript:void(0);">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">5</a>
                            </li>
                            <li class="page-item next">
                                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevron-right"></i></a>
                            </li>
                            <li class="page-item last">
                                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                    <!--/ Basic Pagination -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Striped Rows -->
<?= $this->endSection() ?>