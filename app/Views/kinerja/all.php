<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-1">
            <div class="col-sm-12 text-center">
                <div class="col-12 mb-2 text-center">
                    <h5 style="text-transform: uppercase;">CAPAIAN KINERJA INTELIJEN, PEMBINAAN, PIDUM, PIDSUS, DATUN, DAN BB</h5>
                </div>
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


                            <div class="col-md-4 text-center">
                                <div class="small-box ">
                                    <a href="#" class="small-box-footer bg-info">Intelijen</a>
                                    <div class="inner">
                                        <canvas id="k-intel" width="400" height="300" style="background-color:rgba(255,255,255,1.00);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                                </div>
                            </div>

                            <div class="col-md-4 text-center">
                                <div class="small-box ">
                                    <a href="#" class="small-box-footer bg-info">Pembinaan</a>
                                    <div class="inner">
                                        <canvas id="k-pembinaan" width="400" height="300" style="background-color:rgba(255,255,255,1.00);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                                </div>
                            </div>

                            <div class="col-md-4 text-center">
                                <div class="small-box ">
                                    <a href="#" class="small-box-footer bg-info">Tindak Pidana Umum</a>
                                    <div class="inner">
                                        <canvas id="k-pidum" width="400" height="300" style="background-color:rgba(255,255,255,1.00);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                                </div>
                            </div>

                            <div class="col-md-4 text-center">
                                <div class="small-box ">
                                    <a href="#" class="small-box-footer bg-info">Tindak Pidana Khusus</a>
                                    <div class="inner">
                                        <canvas id="k-pidsus" width="400" height="300" style="background-color:rgba(255,255,255,1.00);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                                </div>
                            </div>

                            <div class="col-md-4 text-center">
                                <div class="small-box ">
                                    <a href="#" class="small-box-footer bg-info">Perdata dan Tata Usaha Negara</a>
                                    <div class="inner">
                                        <canvas id="k-datun" width="400" height="300" style="background-color:rgba(255,255,255,1.00);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                                </div>
                            </div>

                            <div class="col-md-4 text-center">
                                <div class="small-box ">
                                    <a href="#" class="small-box-footer bg-info">Pengelolaa Barang Bukti dan Rampasan</a>
                                    <div class="inner">
                                        <canvas id="k-bb" width="400" height="300" style="background-color:rgba(255,255,255,1.00);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                                </div>
                            </div>

                        </div>


                    </div>

                </div>


            </div>

        </div>

    </div>

</section>


<script>
    function MoreChartOptions() {}
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
            data: [<?= explode('+', $k_intel[0]['lpg'])[0];  ?>, <?= explode('+', $k_intel[0]['pakem'])[0];  ?>, <?= explode('+', $k_intel[0]['penkum'])[0];  ?>, <?= explode('+', $k_intel[0]['jms'])[0];  ?>],
            title: "Target"
        }, {
            fillColor: "rgba(255,208,0,1)",
            strokeColor: "rgba(46,204,113,1)",
            pointColor: "rgba(46,204,113,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $k_intel[0]['lpg'])[1];  ?>, <?= explode('+', $k_intel[0]['pakem'])[1];  ?>, <?= explode('+', $k_intel[0]['penkum'])[1];  ?>, <?= explode('+', $k_intel[0]['jms'])[1];  ?>],
            title: "Realisasi"
        }, {
            fillColor: "rgba(255,0,0,1)",
            strokeColor: "rgba(155,89,182,1)",
            pointColor: "rgba(155,89,182,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1)",
            data: [<?= explode('+', $k_intel[0]['lpg'])[2];  ?>, <?= explode('+', $k_intel[0]['pakem'])[2];  ?>, <?= explode('+', $k_intel[0]['penkum'])[2];  ?>, <?= explode('+', $k_intel[0]['jms'])[2];  ?>],
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
    DrawTheChart(ChartData, ChartOptions, "k-intel", "Bar");
</script>

<script>
    function MoreChartOptions() {}
    var ChartData = {
        labels: ["Belanja Pegawai", "Belanja Barang", "Gedung BB"],
        datasets: [{
            fillColor: "rgba(52,152,219,1)",
            strokeColor: "rgba(52,152,219,0.5)",
            pointColor: "rgba(52,152,219,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $k_pembinaan[0]['pegawai'])[0];  ?>, <?= explode('+', $k_pembinaan[0]['barang'])[0];  ?>, <?= explode('+', $k_pembinaan[0]['pembangunan'])[0];  ?>, ],
            title: "Target"
        }, {
            fillColor: "rgba(255,208,0,1)",
            strokeColor: "rgba(46,204,113,1)",
            pointColor: "rgba(46,204,113,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $k_pembinaan[0]['pegawai'])[1];  ?>, <?= explode('+', $k_pembinaan[0]['barang'])[1];  ?>, <?= explode('+', $k_pembinaan[0]['pembangunan'])[1];  ?>, ],
            title: "Realisasi"
        }, {
            fillColor: "rgba(255,0,0,1)",
            strokeColor: "rgba(155,89,182,1)",
            pointColor: "rgba(155,89,182,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1)",
            data: [<?= explode('+', $k_pembinaan[0]['pegawai'])[2];  ?>, <?= explode('+', $k_pembinaan[0]['barang'])[2];  ?>, <?= explode('+', $k_pembinaan[0]['pembangunan'])[2];  ?>, ],
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
    DrawTheChart(ChartData, ChartOptions, "k-pembinaan", "Bar");
</script>

<script>
    function MoreChartOptions() {}
    var ChartData = {
        labels: ["PRATUT", "TUT", "EKSEKUSI"],
        datasets: [{
            fillColor: "rgba(52,152,219,1)",
            strokeColor: "rgba(52,152,219,0.5)",
            pointColor: "rgba(52,152,219,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $k_pidum[0]['pratut'])[0];  ?>, <?= explode('+', $k_pidum[0]['tut'])[0];  ?>, <?= explode('+', $k_pidum[0]['eks'])[0];  ?>],
            title: "Target"
        }, {
            fillColor: "rgba(255,208,0,1)",
            strokeColor: "rgba(46,204,113,1)",
            pointColor: "rgba(46,204,113,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $k_pidum[0]['pratut'])[1];  ?>, <?= explode('+', $k_pidum[0]['tut'])[1];  ?>, <?= explode('+', $k_pidum[0]['eks'])[1];  ?>],
            title: "Realisasi"
        }, {
            fillColor: "rgba(255,0,0,1)",
            strokeColor: "rgba(155,89,182,1)",
            pointColor: "rgba(155,89,182,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1)",
            data: [<?= explode('+', $k_pidum[0]['pratut'])[2];  ?>, <?= explode('+', $k_pidum[0]['tut'])[2];  ?>, <?= explode('+', $k_pidum[0]['eks'])[2];  ?>],
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
    DrawTheChart(ChartData, ChartOptions, "k-pidum", "Bar");
</script>

<script>
    function MoreChartOptions() {}
    var ChartData = {
        labels: ["LID", "DIK", "PRATUT DAN TUT", "EKSEKUSI"],
        datasets: [{
            fillColor: "rgba(52,152,219,1)",
            strokeColor: "rgba(52,152,219,0.5)",
            pointColor: "rgba(52,152,219,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $k_pidsus[0]['lid'])[0];  ?>, <?= explode('+', $k_pidsus[0]['dik'])[0];  ?>, <?= explode('+', $k_pidsus[0]['tut'])[0];  ?>, <?= explode('+', $k_pidsus[0]['eks'])[0];  ?>],
            title: "Target"
        }, {
            fillColor: "rgba(255,208,0,1)",
            strokeColor: "rgba(46,204,113,1)",
            pointColor: "rgba(46,204,113,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $k_pidsus[0]['lid'])[1];  ?>, <?= explode('+', $k_pidsus[0]['dik'])[1];  ?>, <?= explode('+', $k_pidsus[0]['tut'])[1];  ?>, <?= explode('+', $k_pidsus[0]['eks'])[1];  ?>],
            title: "Realisasi"
        }, {
            fillColor: "rgba(255,0,0,1)",
            strokeColor: "rgba(155,89,182,1)",
            pointColor: "rgba(155,89,182,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1)",
            data: [<?= explode('+', $k_pidsus[0]['lid'])[2];  ?>, <?= explode('+', $k_pidsus[0]['dik'])[2];  ?>, <?= explode('+', $k_pidsus[0]['tut'])[2];  ?>, <?= explode('+', $k_pidsus[0]['eks'])[2];  ?>],
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
    DrawTheChart(ChartData, ChartOptions, "k-pidsus", "Bar");
</script>

<script>
    function MoreChartOptions() {}
    var ChartData = {

        labels: ["PERKARA",
            "INFORMASI PELAYANAN",
            "PERTIMBANGAN HUKUM"
        ],
        datasets: [{
            fillColor: "rgba(52,152,219,1)",
            strokeColor: "rgba(52,152,219,0.5)",
            pointColor: "rgba(52,152,219,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $k_datun[0]['perkara'])[0];  ?>, <?= explode('+', $k_datun[0]['info'])[0];  ?>, <?= explode('+', $k_datun[0]['hukum'])[0];  ?>],
            title: "Target"
        }, {
            fillColor: "rgba(255,208,0,1)",
            strokeColor: "rgba(46,204,113,1)",
            pointColor: "rgba(46,204,113,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $k_datun[0]['perkara'])[1];  ?>, <?= explode('+', $k_datun[0]['info'])[1];  ?>, <?= explode('+', $k_datun[0]['hukum'])[1];  ?>],
            title: "Realisasi"
        }, {
            fillColor: "rgba(255,0,0,1)",
            strokeColor: "rgba(155,89,182,1)",
            pointColor: "rgba(155,89,182,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1)",
            data: [<?= explode('+', $k_datun[0]['perkara'])[2];  ?>, <?= explode('+', $k_datun[0]['info'])[2];  ?>, <?= explode('+', $k_datun[0]['hukum'])[2];  ?>],
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
    DrawTheChart(ChartData, ChartOptions, "k-datun", "Bar");
</script>

<script>
    function MoreChartOptions() {}
    var ChartData = {
        labels: ["PRATUT", "TUT", "EKSEKUSI"],
        datasets: [{
            fillColor: "rgba(52,152,219,1)",
            strokeColor: "rgba(52,152,219,0.5)",
            pointColor: "rgba(52,152,219,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $k_bb[0]['pratut'])[0];  ?>, <?= explode('+', $k_bb[0]['tut'])[0];  ?>, <?= explode('+', $k_bb[0]['eks'])[0];  ?>],
            title: "Target"
        }, {
            fillColor: "rgba(255,208,0,1)",
            strokeColor: "rgba(46,204,113,1)",
            pointColor: "rgba(46,204,113,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $k_bb[0]['pratut'])[1];  ?>, <?= explode('+', $k_bb[0]['tut'])[1];  ?>, <?= explode('+', $k_bb[0]['eks'])[1];  ?>],
            title: "Realisasi"
        }, {
            fillColor: "rgba(255,0,0,1)",
            strokeColor: "rgba(155,89,182,1)",
            pointColor: "rgba(155,89,182,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1)",
            data: [<?= explode('+', $k_bb[0]['pratut'])[2];  ?>, <?= explode('+', $k_bb[0]['tut'])[2];  ?>, <?= explode('+', $k_bb[0]['eks'])[2];  ?>],
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
    DrawTheChart(ChartData, ChartOptions, "k-bb", "Bar");
</script>

<?= $this->endSection(); ?>