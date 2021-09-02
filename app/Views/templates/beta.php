<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>McBatola</title>
    <link rel="icon" href="<?= base_url(); ?>/public/img/favicon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/plugins/fontawesome-free/css/all.min.css">
    <link href="http://fonts.cdnfonts.com/css/matura-mt-script-capitals" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/vendors/css/open-book-style.css">
    <script src="<?= base_url(); ?>/public/plugins/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="<?= base_url(); ?>/public/css/adminlte.css">

</head>

<body class="hold-transition sidebar-mini <?= ($ui_mode[0]['code'] == 'dark-mode' ? 'dark-mode' : ''); ?>">

    <div class="wrapper">

        <?= $this->include('templates/navbar'); ?>
        <?= $this->include('templates/sidebar'); ?>

        <div class="content-wrapper">

            <!-- Render Content -->
            <?= $this->renderSection('page-content'); ?>
            <!-- End Render Content -->

        </div>

        <?= $this->include('templates/footer'); ?>

        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

    </div>

    <!-- Script -->
    <script src="<?= base_url(); ?>/public/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/public/js/adminlte.js"></script>
    <script src="<?= base_url(); ?>/public/js/demo.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
    <script src="<?= base_url(); ?>/public/vendors/js/open-book-script.js"></script>

</body>

</html>