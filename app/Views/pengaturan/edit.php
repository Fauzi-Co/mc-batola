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
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>/public/pengaturan/detail/<?= $data['id']; ?>">Kembali</a></li>
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
                    <form action="<?= base_url(); ?>/public/pengaturan/save" method="POST">
                        <input type="hidden" name="id" value="<?= $data['id']; ?>">
                        <input type="hidden" name="jabatan" value="<?= $data['jabatan']; ?>">
                        <input type="hidden" name="foto" value="<?= $data['foto']; ?>">
                        <h5>Nama :</h5>
                        <div class="forn-group">
                            <input name="nama" type="text" class="form-control" value="<?= $data['nama']; ?>">
                        </div>

                        <br>
                        <h5>Nip :</h5>
                        <div class="form-group">
                            <input type="text" name="nip" class="form-control" value="<?= $data['nip']; ?>">
                        </div>

                        <br>
                        <h5>Pangkat :</h5>
                        <div class="form-group">
                            <input type="text" name="pangkat" class="form-control" value="<?= $data['pangkat']; ?>">
                        </div>

                        <hr>


                        <div class="mt-4">

                            <button class="btn btn-primary btn-lg btn-flat" type="submit"><i class="fas fa-save fa-lg mr-2"></i>Simpan Perubahan</button>

                        </div>
                    </form>


                </div>
            </div>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->


<?= $this->endSection(); ?>