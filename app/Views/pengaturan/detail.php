<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>



<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?= $title; ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>/public/pengaturan">Kembali</a></li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card card-solid">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-6">

                    <div class="col-12">
                        <img src="<?= base_url(); ?>/public/img/profile/<?= $data['foto']; ?>" class="product-image" alt="Product Image">
                    </div>

                </div>
                <div class="col-12 col-sm-6">
                    <h3 class="my-3" style="text-transform: uppercase;"><?= $data['jabatan']; ?></h3>

                    <hr>
                    <h5>Nama :</h5>
                    <h4><b><?= $data['nama']; ?></b></h4>
                    <br>
                    <h5>Nip :</h5>
                    <h4><b><?= $data['nip']; ?></b></h4>
                    <br>
                    <h5>Pangkat :</h5>
                    <h4><b><?= $data['pangkat']; ?></b></h4>
                    <hr>

                    <div class="mt-4">
                        <a class="btn btn-primary btn-lg btn-flat" href="<?= base_url(); ?>/public/pengaturan/edit/<?= $data['id']; ?>"><i class="fas fa-edit fa-lg mr-2"></i>
                            Edit
                        </a>

                    </div>



                </div>
            </div>

        </div>

    </div>


</section>
.


<?= $this->endSection(); ?>