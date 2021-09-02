<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $head_t; ?> | Rin+</title>
    <link rel="icon" href="<?= base_url(); ?>/img/favicon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?= base_url(); ?>/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/adminlte.min.css">
    <script src="<?= base_url(); ?>/plugins/jquery/jquery.min.js"></script>

</head>

<body class="hold-transition sidebar-mini <?= ($ui_mode[0]['code'] == 'dark-mode' ? 'dark-mode' : ''); ?>">

    <!-- Site wrapper -->
    <div class="wrapper">

        <?= $this->include('templates/navbar'); ?>

        <?= $this->include('templates/sidebar'); ?>

        <div class="content-wrapper">

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 style="text-transform:uppercase;text-align: center;"><?= $title; ?></h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-8 input-group">

                                            <form class="" method="GET" action="<?= base_url(); ?>/capaian/tambah">
                                                <input type="hidden" name="code" value="<?= $head_t; ?>">
                                                <button class="btn btn-success"><i class="fas fa-plus"></i></button>
                                            </form>

                                        </div>

                                        <div class="col-4">
                                            <form class="input-group" action="" method="POST">
                                                <input name="tgl_fil" id="tgl_fil" placeholder="Cari Berdasarkan Bulan dan Tahun ..." class="form-control" type="text" autocomplete="off">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="submit" name="submit"><i class="fas fa-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>

                                <form method="POST" action="<?= base_url(); ?>/rin/cetak">

                                    <input type="hidden" name="code" value="<?= $head_t; ?>">

                                    <!-- Render Content -->
                                    <?= $this->renderSection('page-data'); ?>
                                    <!-- End Render Content -->

                                    <button hidden type="submit" id="cetak_sub"></button>

                                </form>

                            </div>


                        </div>

                    </div>

                </div>

            </section>

        </div>

        <?= $this->include('templates/footer'); ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content -->
        </aside>
        <!-- /.control-sidebar -->

    </div>

    <!-- ./wrapper -->

    <!-- Script -->
    <script src="<?= base_url(); ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url(); ?>/js/adminlte.min.js"></script>
    <script src="<?= base_url(); ?>/js/demo.js"></script>

    <script>
        function cetak_main() {
            $('#cetak_sub').trigger('click');
        };
    </script>

    <script>
        $("#tgl_fil").datepicker({
            format: "yyyy-mm",
            startView: "months",
            minViewMode: "months"
        });
    </script>
</body>

</html>