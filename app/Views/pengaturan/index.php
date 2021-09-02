<?php $this->extend('templates/index'); ?>
<?php $this->section('page-content'); ?>

<!-- Modal Pegawai -->
<!-- <div class="modal fade" id="id-modal">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Extra Large Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="row">
                <div class="col-12 col-sm-6">

                    <div class="col-12">
                        <img src="/img/profile/<?= $data[0]['foto']; ?>" class="product-image" alt="Product Image">
                    </div>

                </div>
                <div class="col-12 col-sm-6">
                    <h3 class="my-3" style="text-transform: uppercase;"></h3>
                    <p>Jangan Menyerah dan Terus Berjuang !</p>
                    <hr>
                    <h5>Nama :</h5>
                    <h4><b><?= $data[0]['nama']; ?></b></h4>
                    <br>
                    <h5>Nip :</h5>
                    <h4><b><?= $data[0]['nip']; ?></b></h4>
                    <br>
                    <h5>Pangkat :</h5>
                    <h4><b><?= $data[0]['pangkat']; ?></b></h4>
                    <input type="text" id="vID" value="">

                    <div class="mt-4 product-share">
                        <a href="#" class="text-gray">
                            <i class="fab fa-facebook-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                            <i class="fab fa-twitter-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                            <i class="fas fa-envelope-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray">
                            <i class="fas fa-rss-square fa-2x"></i>
                        </a>
                    </div>

                </div>
            </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        
        </div>
      
      </div>
     
<button hidden type="button" id="btn-modal" class="btn btn-primary" data-toggle="modal" data-target="#id-modal"></button> -->
<!-- Modal Pegawai End -->

<!-- <script>
    $( document ).ready(function() {
    $('#btn-modal').click();
});
</script> -->

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Pengaturan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>/public/public">Home</a></li>
                    <li class="breadcrumb-item active">Pengaturan</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <!-- UI -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">UI</h3>
                        <div class="card-tools">
                            <button type="button" id="min-btn-1" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body">

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </div>

                </div>
                <!-- UI End-->
                <!-- Pegawai Utama -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Pegawai Utama</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" id="min-btn-2" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead style="text-align: center;">
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <?php $i = 1; ?>
                                    <?php foreach ($data as $pD) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td>
                                                <img src="<?= base_url(); ?>/public/img/profile/<?= $pD['foto']; ?>" alt="Product 1" width="100px">
                                            </td>
                                            <td><?= $pD['nama']; ?></td>
                                            <td><?= $pD['jabatan']; ?></td>
                                            <td><a href="<?= base_url(); ?>/public/pengaturan/detail/<?= $pD['id']; ?>" class="btn btn-success"><i class="fas fa-eye"></i></a></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </div>
                </div>
                <!-- <script>
                    function modalFu(vID) {
                    $('#id-modal').modal('show');
                    const myAr = vID.split(" ", 2)
                    $('#vID').val(myAr);
                    }
                </script> -->

                <!-- Pegawai Utama End -->

                <!-- Admin User -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">User Password</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" id="min-btn-3" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <div class="card-body">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead style="text-align: center;">
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <?php $i = 1; ?>
                                    <?php foreach ($data as $pD) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td>
                                                <img src="<?= base_url(); ?>/public/img/profile/<?= $pD['foto']; ?>" alt="Product 1" width="100px">
                                            </td>
                                            <td><?= $pD['nama']; ?></td>
                                            <td><?= $pD['jabatan']; ?></td>
                                            <td><a class="btn btn-success" href="/pengaturan/detail/<?= $pD['id']; ?>"><i class="fas fa-eye"></i></a></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </div>

                </div>
                <!-- Admin User End-->
            </div>

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<script>
    $(document).ready(function() {
        $('#min-btn-1').click();
        $('#min-btn-2').click();
        $('#min-btn-3').click();
    });
</script>
<?php $this->endSection(); ?>