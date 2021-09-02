<?= $this->extend('laporan/index'); ?>

<?= $this->section('page-laporan'); ?>

<div class="card-body">

    <div class="row">
        <div class="col-12 mb-2 text-center">
            <h5 class="btn-danger" style="text-transform: uppercase;">CAPAIAN KINERJA <?= $rint; ?></h5>
        </div>

        <?= $this->include('laporan/capaian/c_' . $rint); ?>

    </div>


</div>

<?= $this->endSection(); ?>