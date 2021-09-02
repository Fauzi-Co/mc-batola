<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McBatola</title>
    <link rel="icon" href="<?= base_url(); ?>/public/img/favicon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/plugins/fontawesome-free/css/all.min.css">
    <link href="http://fonts.cdnfonts.com/css/matura-mt-script-capitals" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/css/style.css">
    <script src="<?= base_url(); ?>/public/plugins/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="<?= base_url(); ?>/public/css/adminlte.css">
    <script src="<?= base_url(); ?>/public/plugins/chart.js/Chart.js"></script>

    <script>
        WebFontConfig = {
            google: {
                families: ["Open Sans", ]
            },
            active: function() {
                DrawTheChart(ChartData, ChartOptions, "chart-01", "Bar")
            }
        };
    </script>

    <script asyn src="https://charts.livegap.com/js/webfont.js">
    </script>
    <script src="https://charts.livegap.com/js/Chart.min.js"></script>
    <script>
        function DrawTheChart(ChartData, ChartOptions, ChartId, ChartType) {
            eval('var myLine = new Chart(document.getElementById(ChartId).getContext("2d")).' + ChartType + '(ChartData,ChartOptions);document.getElementById(ChartId).getContext("2d").stroke();')
        }
    </script>
    <style type="text/css">
        .title-text {
            font-family: 'Crimson Text';
            font-size: 42px;
            font-weight: bold;
            font-variant: small-caps;
            line-height: 20px;
            text-align: center;
            color: #3d3d3d;
            letter-spacing: 5px;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini  sidebar-collapse <?= ($ui_mode[0]['code'] == 'dark-mode' ? 'dark-mode' : ''); ?>">

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
    <script src="<?= base_url(); ?>/public/js/script.js"></script>

</body>

</html>