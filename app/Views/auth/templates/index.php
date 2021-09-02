<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>McBatola</title>

    <link rel="icon" href="<?= base_url(); ?>/img/favicon.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?= base_url(); ?>/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>/css/adminlte.css">
</head>

<body class="hold-transition">

    <?= $this->renderSection('content'); ?>

    <script src="<?= base_url(); ?>/plugins/jquery/jquery.min.js"></script>

    <script src="<?= base_url(); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url(); ?>/js/adminlte.min.js"></script>
</body>

</html>