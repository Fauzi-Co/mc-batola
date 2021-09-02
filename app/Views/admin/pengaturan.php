<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Users List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Admin</li>
                </ol>
            </div>
        </div>
    </div>
</section>


<section class="content">


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Title</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Rule</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <td scope="row"><?= $i++; ?></td>
                                <td>
                                    <img src="<?= base_url(); ?>/img/" alt="Product 1" class="img-circle img-size-32 mr-2">
                                </td>
                                <td><?= $user->username; ?></td>
                                <td><?= $user->email; ?></td>
                                <td><?= $user->name; ?></td>
                                <td><a class="btn btn-info" href="<?= base_url('admin/' . $user->userid); ?>">Detail</a></td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>

        <div class="card-footer">
            Footer
        </div>

    </div>


</section>



<?= $this->endSection(); ?>