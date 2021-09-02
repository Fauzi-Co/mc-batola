<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>



<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>From Edit Capaian</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>/public">Kembali</a></li>
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
                <div class="col-12">
                    <p class="text-center" style="text-transform: uppercase; font-size:30px;"><?= $title; ?></p>
                    <div class="col-12 text-center">
                        <canvas id="chart-01" width="600" height="400" style="background-color:rgba(255,255,255,1.00);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <hr>
<h2 class="text-center">2020</h2>
                        <form method="POST" action="<?= base_url(); ?>/public/capaian/update">

                            <input type="hidden" name="code" value="<?= $title; ?>">
                            <input type="hidden" id="href" name="href" value="">

                            <!-- Render Content -->

                            <div class="card-body">

                                <table class="table table-bordered table-hover text-center">

                                    <thead>

                                        <tr>
                                            <th colspan="3">LPG</th>
                                            <th colspan="3">PAKEM</th>
                                            <th colspan="3">PENKUM</th>
                                            <th colspan="3">JMS</th>
                                        </tr>

                                        <tr>
                                            <th>Target</th>
                                            <th>Realisasi</th>
                                            <th>Sisa</th>
                                            <th>Target</th>
                                            <th>Realisasi</th>
                                            <th>Sisa</th>
                                            <th>Target</th>
                                            <th>Realisasi</th>
                                            <th>Sisa</th>
                                            <th>Target</th>
                                            <th>Realisasi</th>
                                            <th>Sisa</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>

                                            <td>
                                                <input type="text" style="width:100%" name='lpg-1' class="text-center" value="<?= explode('+', $c_hasil[0]['lpg'])[0];  ?>">
                                            </td>

                                            <td>
                                                <input type="text" style="width:100%" name='lpg-2' class="text-center" value="<?= explode('+', $c_hasil[0]['lpg'])[1];  ?>">
                                            </td>

                                            <td>
                                                <input type="text" style="width:100%" name='lpg-3' class="text-center" value="<?= explode('+', $c_hasil[0]['lpg'])[2];  ?>">
                                            </td>

                                            <td>
                                                <input type="text" style="width:100%" name='pakem-1' class="text-center" value="<?= explode('+', $c_hasil[0]['pakem'])[0];  ?>">
                                            </td>

                                            <td>
                                                <input type="text" style="width:100%" name='pakem-2' class="text-center" value="<?= explode('+', $c_hasil[0]['pakem'])[1];  ?>">
                                            </td>

                                            <td>
                                                <input type="text" style="width:100%" name='pakem-3' class="text-center" value="<?= explode('+', $c_hasil[0]['pakem'])[2];  ?>">
                                            </td>

                                            <td>
                                                <input type="text" style="width:100%" name='penkum-1' class="text-center" value="<?= explode('+', $c_hasil[0]['penkum'])[0];  ?>">
                                            </td>

                                            <td>
                                                <input type="text" style="width:100%" name='penkum-2' class="text-center" value="<?= explode('+', $c_hasil[0]['penkum'])[1];  ?>">
                                            </td>

                                            <td>
                                                <input type="text" style="width:100%" name='penkum-3' class="text-center" value="<?= explode('+', $c_hasil[0]['penkum'])[2];  ?>">
                                            </td>

                                            <td>
                                                <input type="text" style="width:100%" name='jms-1' class="text-center" value="<?= explode('+', $c_hasil[0]['jms'])[0];  ?>">
                                            </td>

                                            <td>
                                                <input type="text" style="width:100%" name='jms-2' class="text-center" value="<?= explode('+', $c_hasil[0]['jms'])[1];  ?>">
                                            </td>

                                            <td>
                                                <input type="text" style="width:100%" name='jms-3' class="text-center" value="<?= explode('+', $c_hasil[0]['jms'])[2];  ?>">
                                            </td>

                                        </tr>


                                    </tbody>

                                </table>
                                <hr>
<h2 class="text-center">2020</h2>
<table class="table table-bordered table-hover text-center">

<thead>

    <tr>
        <th colspan="3">LPG</th>
        <th colspan="3">PAKEM</th>
        <th colspan="3">PENKUM</th>
        <th colspan="3">JMS</th>
    </tr>

    <tr>
        <th>Target</th>
        <th>Realisasi</th>
        <th>Sisa</th>
        <th>Target</th>
        <th>Realisasi</th>
        <th>Sisa</th>
        <th>Target</th>
        <th>Realisasi</th>
        <th>Sisa</th>
        <th>Target</th>
        <th>Realisasi</th>
        <th>Sisa</th>
    </tr>

</thead>

<tbody>

    <tr>

        <td>
            <input type="text" style="width:100%" name='lpg-12' class="text-center" value="<?= explode('+', $c_hasil[1]['lpg'])[0];  ?>">
        </td>

        <td>
            <input type="text" style="width:100%" name='lpg-22' class="text-center" value="<?= explode('+', $c_hasil[1]['lpg'])[1];  ?>">
        </td>

        <td>
            <input type="text" style="width:100%" name='lpg-32' class="text-center" value="<?= explode('+', $c_hasil[1]['lpg'])[2];  ?>">
        </td>

        <td>
            <input type="text" style="width:100%" name='pakem-12' class="text-center" value="<?= explode('+', $c_hasil[1]['pakem'])[0];  ?>">
        </td>

        <td>
            <input type="text" style="width:100%" name='pakem-22' class="text-center" value="<?= explode('+', $c_hasil[1]['pakem'])[1];  ?>">
        </td>

        <td>
            <input type="text" style="width:100%" name='pakem-32' class="text-center" value="<?= explode('+', $c_hasil[1]['pakem'])[2];  ?>">
        </td>

        <td>
            <input type="text" style="width:100%" name='penkum-12' class="text-center" value="<?= explode('+', $c_hasil[1]['penkum'])[0];  ?>">
        </td>

        <td>
            <input type="text" style="width:100%" name='penkum-22' class="text-center" value="<?= explode('+', $c_hasil[1]['penkum'])[1];  ?>">
        </td>

        <td>
            <input type="text" style="width:100%" name='penkum-32' class="text-center" value="<?= explode('+', $c_hasil[1]['penkum'])[2];  ?>">
        </td>

        <td>
            <input type="text" style="width:100%" name='jms-12' class="text-center" value="<?= explode('+', $c_hasil[1]['jms'])[0];  ?>">
        </td>

        <td>
            <input type="text" style="width:100%" name='jms-22' class="text-center" value="<?= explode('+', $c_hasil[1]['jms'])[1];  ?>">
        </td>

        <td>
            <input type="text" style="width:100%" name='jms-32' class="text-center" value="<?= explode('+', $c_hasil[1]['jms'])[2];  ?>">
        </td>

    </tr>


</tbody>

</table>
                                <div class="mt-4">
                                    <span class="btn btn-success btn-lg btn-flat float-right" id="simpan" href="/pengaturan/edit/"><i class="fas fa-save fa-lg mr-2"></i>
                                        Simpan
                                    </span>
                                </div>

                            </div>

                            <!-- End Render Content -->

                            <button hidden type="submit" id="simpan_sub"></button>

                        </form>

                    </div>


                </div>

            </div>


        </div>

    </div>


</section>

<script>
    $("#simpan").click(function() {
        $('#simpan_sub').click();
    });
</script>
<script>
    $(document).ready(function() {
        $('#href').val(window.location);
    });
</script>

<script>
    function MoreChartOptions() {};
    var ChartData = {
        labels: ["LPG",
            "PAKEM", "PENKUM", "JMS",
        ],
        datasets: [{
            fillColor: "rgba(52,152,219,1)",
            strokeColor: "rgba(52,152,219,0.5)",
            pointColor: "rgba(52,152,219,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $c_hasil[0]['lpg'])[0];  ?>, <?= explode('+', $c_hasil[0]['pakem'])[0];  ?>, <?= explode('+', $c_hasil[0]['penkum'])[0];  ?>, <?= explode('+', $c_hasil[0]['jms'])[0];  ?>, ],
            title: "Target"
        }, {
            fillColor: "rgba(255,208,0,1)",
            strokeColor: "rgba(46,204,113,1)",
            pointColor: "rgba(46,204,113,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $c_hasil[0]['lpg'])[1];  ?>, <?= explode('+', $c_hasil[0]['pakem'])[1];  ?>, <?= explode('+', $c_hasil[0]['penkum'])[1];  ?>, <?= explode('+', $c_hasil[0]['jms'])[1];  ?>, ],
            title: "Realisasi"
        }, {
            fillColor: "rgba(255,0,0,1)",
            strokeColor: "rgba(155,89,182,1)",
            pointColor: "rgba(155,89,182,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1)",
            data: [<?= explode('+', $c_hasil[0]['lpg'])[2];  ?>, <?= explode('+', $c_hasil[0]['pakem'])[2];  ?>, <?= explode('+', $c_hasil[0]['penkum'])[2];  ?>, <?= explode('+', $c_hasil[0]['jms'])[2];  ?>, ],
            title: "Sisa Anggaran"
        }, ]
    };
    ChartOptions = {
        decimalSeparator: ".",
        thousandSeparator: ",",
        spaceLeft: 12,
        spaceRight: 12,
        spaceTop: 12,
        spaceBottom: 12,
        scaleLabel: "<%=value+''%>",
        yAxisMinimumInterval: 1,
        scaleShowLabels: true,
        scaleShowLine: true,
        scaleLineStyle: "solid",
        scaleLineWidth: 1,
        scaleLineColor: "rgba(0,0,0,0.6)",
        scaleOverlay: false,
        scaleOverride: false,
        scaleSteps: 10,
        scaleStepWidth: 10,
        scaleStartValue: 0,
        inGraphDataShow: true,
        inGraphDataTmpl: '<%=v3%>',
        inGraphDataFontFamily: "'Open Sans'",
        inGraphDataFontStyle: "normal bold",
        inGraphDataFontColor: "rgba(255,255,255,1.00)",
        inGraphDataFontSize: 12,
        inGraphDataPaddingX: 0,
        inGraphDataPaddingY: -5,
        inGraphDataAlign: "center",
        inGraphDataVAlign: "middle",
        inGraphDataXPosition: 2,
        inGraphDataYPosition: 2,
        inGraphDataAnglePosition: 2,
        inGraphDataRadiusPosition: 2,
        inGraphDataRotate: 90,
        inGraphDataPaddingAngle: 0,
        inGraphDataPaddingRadius: 0,
        inGraphDataBorders: false,
        inGraphDataBordersXSpace: 1,
        inGraphDataBordersYSpace: 1,
        inGraphDataBordersWidth: 1,
        inGraphDataBordersStyle: "solid",
        inGraphDataBordersColor: "rgba(0,0,0,1)",
        legend: true,
        maxLegendCols: 5,
        legendBlockSize: 15,
        legendFillColor: 'rgba(255,255,255,0.00)',
        legendColorIndicatorStrokeWidth: 1,
        legendPosX: -2,
        legendPosY: 4,
        legendXPadding: 0,
        legendYPadding: 0,
        legendBorders: false,
        legendBordersWidth: 1,
        legendBordersStyle: "solid",
        legendBordersColors: "rgba(102,102,102,1)",
        legendBordersSpaceBefore: 5,
        legendBordersSpaceLeft: 5,
        legendBordersSpaceRight: 5,
        legendBordersSpaceAfter: 5,
        legendSpaceBeforeText: 5,
        legendSpaceLeftText: 5,
        legendSpaceRightText: 5,
        legendSpaceAfterText: 5,
        legendSpaceBetweenBoxAndText: 5,
        legendSpaceBetweenTextHorizontal: 5,
        legendSpaceBetweenTextVertical: 5,
        legendFontFamily: "'Open Sans'",
        legendFontStyle: "normal normal",
        legendFontColor: "rgba(0,0,0,1)",
        legendFontSize: 15,
        showYAxisMin: false,
        rotateLabels: "smart",
        xAxisBottom: true,
        yAxisLeft: true,
        yAxisRight: false,
        scaleFontFamily: "'Open Sans'",
        scaleFontStyle: "normal normal",
        scaleFontColor: "rgba(0,0,0,1)",
        scaleFontSize: 12,
        pointLabelFontFamily: "'Open Sans'",
        pointLabelFontStyle: "normal normal",
        pointLabelFontColor: "rgba(102,102,102,1)",
        pointLabelFontSize: 12,
        angleShowLineOut: true,
        angleLineStyle: "solid",
        angleLineWidth: 1,
        angleLineColor: "rgba(0,0,0,0.1)",
        percentageInnerCutout: 50,
        scaleShowGridLines: true,
        scaleGridLineStyle: "solid",
        scaleGridLineWidth: 1,
        scaleGridLineColor: "rgba(0,0,0,0.1)",
        scaleXGridLinesStep: 1,
        scaleYGridLinesStep: 3,
        segmentShowStroke: true,
        segmentStrokeStyle: "solid",
        segmentStrokeWidth: 2,
        segmentStrokeColor: "rgba(255,255,255,1.00)",
        datasetStroke: true,
        datasetFill: true,
        datasetStrokeStyle: "solid",
        datasetStrokeWidth: 2,
        bezierCurve: true,
        bezierCurveTension: 0.4,
        pointDotStrokeStyle: "solid",
        pointDotStrokeWidth: 1,
        pointDotRadius: 3,
        pointDot: true,
        scaleTickSizeBottom: 5,
        scaleTickSizeTop: 5,
        scaleTickSizeLeft: 5,
        scaleTickSizeRight: 5,
        graphMin: 0,
        barShowStroke: false,
        barBorderRadius: 0,
        barStrokeStyle: "solid",
        barStrokeWidth: 1,
        barValueSpacing: 15,
        barDatasetSpacing: 0,
        scaleShowLabelBackdrop: true,
        scaleBackdropColor: 'rgba(255,255,255,0.75)',
        scaleBackdropPaddingX: 2,
        scaleBackdropPaddingY: 2,
        animationEasing: 'linear',
        animateRotate: true,
        animateScale: false,
        animationByDataset: false,
        animationLeftToRight: false,
        animationSteps: 80,
        animation: true,
        onAnimationComplete: function() {
            MoreChartOptions2()
        }
    };
    DrawTheChart(ChartData, ChartOptions, "chart-2020", "Bar");
</script>

<?= $this->endSection(); ?>