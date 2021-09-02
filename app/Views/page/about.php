<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>About</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">About</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-body row">
            <div class="col-5 text-center d-flex align-items-center justify-content-center">
                <span>
                    <img src="<?= base_url(); ?>/public/img/kajari.png" style="width: 300px;" alt="">
                    <p style="font-size: 40px; font-family: Crimson Text; font-weight:bold;letter-spacing: 5px;font-variant:small-caps;" class="font-weight-bold profile-username text-center">
                        Kejaksaan Negeri Barito Kuala
                    </p>
                </span>
            </div>

            <div class="col-2 text-center">
                <h4>Tim <small style="color: green;"></small></h4>
                <p style="margin-bottom: 1px;"><b>Hamidun</b> | <span style="color: red;">Leader</span></p>
                <p style="margin-bottom: 1px;"><b>Agustin </b> | <span style="color: red;">System Analyst</span></p>
                <p style="margin-bottom: 1px;"><b>Fauzi </b> | <span style="color: red;">Front-end</span></p>
                <p style="margin-bottom: 1px;"><b>Reky Saputra </b> | <span style="color: red;">Back-end</span></p>
                <p style="margin-bottom: 1px;"><b>Amir Hamzah </b> | <span style="color: red;">Desaigner</span></p>

                <hr>
                <h4>Versi 0.3 <small style="color: green;"><i>New</i></small></h4>
                <p style="margin-bottom: 1px;"><b>Framework CodeIgniter 4</b></p>
                <p style="margin-bottom: 1px;"><b>PHP 7</b></p>
                <p style="margin-bottom: 1px;"><b>Bootstrap 4</b></p>
                <p style="margin-bottom: 1px;"><b>Chart.js</b></p>
                <p style="margin-bottom: 1px;"><b>Dark Mode</b></p>
                <p style="margin-bottom: 1px;"><b>UI AdminLTE 3</b></p>


            </div>

            <div class="col-5 text-center d-flex align-items-center justify-content-center">
                <span>
                    <img src="<?= base_url(); ?>/public/img/logo-only.png" style="width: 300px;" alt="">
                    <p style="font-size: 40px; font-family: Crimson Text; font-weight:bold;letter-spacing: 5px;font-variant:small-caps;" class="font-weight-bold profile-username text-center">
                        Adhyaksa Creative Team
                    </p>
                </span>
            </div>

        </div>
    </div>

</section>


<?= $this->endSection(); ?>