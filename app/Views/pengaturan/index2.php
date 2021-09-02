<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12 text-center">
                <h1>Pengaturan</h1>
            </div>
        </div>
    </div>
</section>


<section class="content">


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Pengaturan Pegawai</h3>
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
                                    <img src="<?= base_url(); ?>/img/profile/<?= $pD['foto']; ?>" alt="Product 1" width="100px">
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

        <div class="card-footer">

        </div>

    </div>


</section>

.

<?= $this->endSection(); ?>