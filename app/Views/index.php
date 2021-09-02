<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12 text-center">
                <p class="title-text m-0" style="font-size:30px;<?= ($ui_mode[0]['code'] == 'dark-mode' ? 'color:#ffffff' : ' '); ?>">Selamat Datang di MediaCenter Kejari Barito Kuala</p>
            </div>

        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <button class="medsos-button col-12 col-sm-6 col-md-3 mb-3">
                <div class="bg-info info-box">
                    <span class="info-box-icon"><i class="fab fa-facebook-f"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text" onclick="window.open('https://www.facebook.com/kejari.batola', '__blank').focus();">Facebook</span>
                    </div>

                </div>
                <!-- /.info-box-content -->
            </button>
            <!-- /.col -->

            <button class="medsos-button col-12 col-sm-6 col-md-3 mb-3">
                <div class="bg-danger info-box">
                    <span class="info-box-icon"><i class="fab fa-youtube"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text" onclick="window.open('https://www.youtube.com/channel/UCGky6JLxeAnaboSki2s9hog', '__blank').focus();">YouTube</span>
                    </div>
                </div>
            </button>

            <button class="medsos-button col-12 col-sm-6 col-md-3 mb-3">
                <div class="bg-warning info-box">
                    <span class="info-box-icon"><i class="fab fa-instagram" style="color: white"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text" style="color: white" onclick="window.open('https://www.instagram.com/kejaribaritokuala/?hl=id', '__blank').focus();">Instagram</span>
                    </div>
                </div>
            </button>

            <button class="medsos-button col-12 col-sm-6 col-md-3 mb-3">
                <div class="bg-success info-box">
                    <span class="info-box-icon"><i class="fab fa-cloudsmith"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text" onclick="window.open('https://www.kejari-baritokuala.go.id/', '__blank').focus();">Web</span>
                    </div>
                </div>

                <!-- /.info-box-content -->
            </button>

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>


            <!-- /.col -->

        </div>

        <div class="row">

            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pegawai Utama</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>

                        </div>
                    </div>

                    <div class="card-body p-0 pegawai">
                        <ul class="users-list clearfix">
                            <?php foreach ($dataPeg as $dp) : ?>
                                <li>
                                    <div class="profile">
                                        <div class="profile-header">
                                            <div style="width: 100%;height: auto;">
                                                <img style="width: 150px;height: 150px;" src="<?= base_url(); ?>/public/img/profile/<?= $dp['foto']; ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="profile-body">
                                            <a href="<?= base_url(); ?>/public/pengaturan/detail/<?= $dp['id']; ?>" class="nama"><?= $dp['nama']; ?></a>
                                            <p class="jabatan"><?= $dp['jabatan']; ?></p>
                                        </div>
                                    </div>

                                </li>
                            <?php endforeach; ?>
                        </ul>

                    </div>

                    <div class="card-footer text-center">

                    </div>

                </div>

            </div>

        </div>

        <div class="row">
            <section class="col-md-8 connectedSortable ui-sortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="card">
                    <div class="card-header ui-sortable-handle" style="cursor: move;">
                        <h3 class="card-title">
                            <i class="fas fa-map-marked-alt mr-1"></i>
                            Peta
                        </h3>
                        <div class="card-tools">
                            <ul class="nav nav-pills ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#static-peta" data-toggle="tab">Peta</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#realtime-peta" data-toggle="tab">Peta Realtime</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content p-0">
                            <!-- Morris chart - Sales -->
                            <div class="chart tab-pane active" id="static-peta" style="position: relative; height: 650px;">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div>
                                <div class="peta">
                                    <!-- kuripan -->
                                    <p class="kuripan">Kuripan</p>
                                    <svg class="kuripan" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 971 1654">
                                        <image id="Kuripan" x="14" y="11" width="926" height="1633" xlink:href="data:img/png;base64,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" />
                                    </svg>
                                    <!-- tabukan -->
                                    <p class="tabukan">Tabukan</p>
                                    <svg class="tabukan" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1334 1285">
                                        <image id="Tabukan" width="1334" height="1285" xlink:href="data:img/png;base64,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" />
                                    </svg>
                                    <!-- bakumpai -->
                                    <p class="bakumpai">Bakumpai</p>
                                    <svg class="bakumpai" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 701 1631">
                                        <image id="Bakumpai" x="42" y="29" width="609" height="1527" xlink:href="data:img/png;base64,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" />
                                    </svg>
                                    <!-- marabahan -->
                                    <p class="marabahan">Marabahan</p>
                                    <svg class="marabahan" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 870 1246">
                                        <image id="Marabahan" x="1" y="43" width="858" height="1155" xlink:href="data:img/png;base64,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" />
                                    </svg>
                                    <!-- cerbon -->
                                    <p class="cerbon">Cerbon</p>
                                    <svg class="cerbon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 779 983">
                                        <image id="Cerbon" x="34" y="33" width="729" height="930" xlink:href="data:img/png;base64,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" />
                                    </svg>
                                    <!-- barambai -->
                                    <p class="barambai">Barambai</p>
                                    <svg class="barambai" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 881 1158">
                                        <image id="Bearambai" x="32" width="849" height="1158" xlink:href="data:img/png;base64,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" />
                                    </svg>
                                    <!-- wanaraya -->
                                    <p class="wanaraya">Wanaraya</p>
                                    <svg class="wanaraya" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 857 995">
                                        <image id="Wanaraya" y="17" width="857" height="978" xlink:href="data:img/png;base64,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" />
                                    </svg>
                                    <!-- belawang -->
                                    <p class="belawang">Belawang</p>
                                    <svg class="belawang" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 659 822">
                                        <image id="Belawang" x="18" width="641" height="807" xlink:href="data:img/png;base64,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" />
                                    </svg>
                                    <!-- rantau bedauh -->
                                    <p class="rantau-badauh">Rantau<br>Badauh</p>
                                    <svg class="rantau-badauh" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 843 735">
                                        <image id="Rantau_Badauh" data-name="Rantau Badauh" width="843" height="735" xlink:href="data:img/png;base64,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" />
                                    </svg>
                                    <!-- jejangkit -->
                                    <p class="jejangkit">Jejangkit</p>
                                    <svg class="jejangkit" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 862 792">
                                        <image id="Jejangkit" width="862" height="792" xlink:href="data:img/png;base64,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" />
                                    </svg>
                                    <!-- mandastana -->
                                    <p class="mandastana">Mandastana</p>
                                    <svg class="mandastana" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 614 760">
                                        <image id="Msndastana" width="614" height="760" xlink:href="data:img/png;base64,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" />
                                    </svg>
                                    <!-- alalak -->
                                    <p class="alalak">Alalak</p>
                                    <svg class="alalak" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 579 761">
                                        <image id="Alalak" width="579" height="761" xlink:href="data:img/png;base64,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" />
                                    </svg>

                                    <!-- anjir pasar -->
                                    <p class="anjir-pasar">Anjir Pasar</p>
                                    <svg class="anjir-pasar" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 924 911">
                                        <image id="Anjir_Pasar" data-name="Anjir Pasar" x="8" y="52" width="881" height="827" xlink:href="data:img/png;base64,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" />
                                    </svg>
                                    <!-- anjir muara -->
                                    <p class="anjir-muara">Anjir Muara</p>
                                    <svg class="anjir-muara" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 746 704">
                                        <image id="Anjir_Muara" data-name="Anjir Muara" width="744" height="704" xlink:href="data:img/png;base64,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" />
                                    </svg>
                                    <!-- mekarsari -->
                                    <p class="mekar-sari">Mekarsari</p>
                                    <svg class="mekar-sari" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1043 885">
                                        <image id="Mekarsari" width="1041" height="885" xlink:href="data:img/png;base64,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" />
                                    </svg>
                                    <!-- tamban -->
                                    <p class="tamban">Tamban</p>
                                    <svg class="tamban" version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 299.000000 233.000000" preserveAspectRatio="xMidYMid meet">
                                        <g transform="translate(0.000000,233.000000) scale(0.100000,-0.100000)" fill="#ff0078" stroke="none">
                                            <path d="M2191 2262 c-21 -21 -31 -44 -40 -93 -6 -36 -11 -72 -11 -81 0 -27
                                    63 -96 111 -122 47 -26 47 -27 60 -98 16 -87 33 -106 116 -132 83 -25 106 -42
                                    93 -66 -5 -10 -14 -78 -20 -152 -5 -73 -13 -155 -17 -183 -9 -54 -21 -62 -94
                                    -64 -55 -2 -81 -28 -87 -89 -5 -56 -15 -63 -64 -43 -13 6 -57 19 -98 31 -41
                                    11 -96 27 -121 35 -26 8 -54 15 -63 15 -9 0 -42 9 -73 20 -32 11 -74 20 -94
                                    20 -27 0 -50 9 -80 33 -53 40 -77 79 -95 159 -8 34 -20 68 -26 75 -6 7 -31 13
                                    -59 13 l-49 0 -42 -66 c-26 -43 -52 -71 -72 -80 -94 -41 -186 -131 -186 -181
                                    0 -18 -17 -35 -83 -77 -45 -29 -96 -60 -113 -69 -16 -8 -54 -37 -82 -62 -33
                                    -30 -97 -69 -175 -106 -149 -72 -186 -93 -243 -141 -25 -21 -49 -38 -53 -38
                                    -4 0 -30 -19 -58 -43 -28 -23 -77 -62 -108 -87 -32 -25 -71 -57 -89 -72 -17
                                    -15 -60 -48 -96 -75 -62 -46 -65 -51 -64 -89 0 -39 34 -161 78 -278 18 -50 27
                                    -61 51 -68 17 -5 217 -7 445 -4 454 4 489 8 629 65 75 32 128 72 263 205 84
                                    81 112 96 185 96 62 0 103 -19 103 -47 0 -8 21 -34 48 -58 77 -69 184 -155
                                    193 -155 5 0 32 -22 60 -50 65 -63 94 -66 132 -13 15 21 46 63 68 93 23 30 45
                                    65 50 78 9 22 131 176 173 218 12 11 53 58 91 105 39 46 111 124 161 174 125
                                    124 141 154 147 280 5 105 42 266 71 307 39 55 7 259 -80 513 -8 23 -14 59
                                    -14 81 0 33 -4 43 -24 52 -13 6 -32 24 -42 40 -22 37 -72 65 -146 81 -41 9
                                    -71 24 -105 52 -26 21 -63 44 -83 50 -55 18 -103 45 -149 83 -54 45 -91 47
                                    -130 8z" />
                                        </g>
                                    </svg>
                                    <!-- tabunganen -->
                                    <p class="tabunganen">Tabunganen</p>
                                    <svg class="tabunganen" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 984 830">
                                        <image id="Tabunganen" width="984" height="830" xlink:href="data:img/png;base64,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" />
                                    </svg>
                                </div>
                            </div>
                            <div class="chart tab-pane" id="realtime-peta" style="position: relative; height: 850px;">
                                <div class="d-md-flex">
                                    <div class="p-1 flex-fill" style="overflow: hidden">
                                        <!-- Map will be created here -->
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d509980.31641431275!2d114.32355865516834!3d-3.0352420008888554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de443e27a71dc81%3A0x3761feddf5ccff4e!2sKabupaten%20Barito%20Kuala%2C%20Kalimantan%20Selatan!5e0!3m2!1sid!2sid!4v1629986040115!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                        <div id="world-map-markers" style="height: 720px; overflow: hidden">
                                            <div class="map"></div>
                                        </div>
                                    </div>
                                    <!-- /.card-pane-right -->
                                </div><!-- /.d-md-flex -->
                            </div>
                        </div>
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->



            </section>
            <div class="col-md-4">
                <!-- Info Boxes Style 2 -->
                <h3 class="text-center mb-4">Aplikasi Internal</h3>

                <div class="medsos-button">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><img style="width: 50px; filter: brightness(0) invert(1);" src="<?= base_url(); ?>/public/img/favicon2.png" alt=""></span>

                        <div class="info-box-content">
                            <span class="info-box-text" onclick="window.open('http://192.168.168.104:80/rin-plus/public/', '__blank').focus();">R.IN Plus</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <!-- <div class="medsos-button">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users" style="color: white"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text" onclick="window.open('#', '__blank').focus();">PI-PIDSUS</span>
                        </div>
                    
                    </div>
                
                </div> -->

                <div class="medsos-button">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><img style="width: 50px; filter: brightness(0) invert(1);" src="<?= base_url(); ?>/public/img/logo-only.png" alt=""></span>

                        <div class="info-box-content">
                            <span class="info-box-text" onclick="window.open('http://192.168.168.104:80/mc-batola/public/', '__blank').focus();">McBatola</span>
                        </div>

                    </div>

                </div>

                <h3 class="text-center mb-4">Aplikasi Eksternal</h3>

                <div class="medsos-button">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-info elevation-1"><i class="far fa-address-book"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text" onclick="window.open('http://inderasembilan.id/', '__blank').focus();">IndraSembilan</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="medsos-button">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-database"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text" onclick="window.open('http://10.22.10.101:4111/', '__blank').focus();">PIDUM</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="medsos-button">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-shekel-sign" style="color: white;"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text" onclick="window.open('http://10.22.10.101:4111/', '__blank').focus();">PIDSUS</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="medsos-button">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-file-alt" style="color: white;"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text" onclick="window.open('http://10.22.10.101:4111/', '__blank').focus();">DATUN</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="medsos-button">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-info elevation-1"><i class="fab fa-asymmetrik" style="color: white;"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text" onclick="window.open('http://10.22.10.101:4111/', '__blank').focus();">SMART</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

            </div>
            <!-- Left col -->

        </div>

        <!-- Chart Anggaran  -->
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header d-flex p-0">
                        <h3 class="card-title p-3">CAPAIAN ANGGARAN INTELIJEN, PEMBINAAN, PIDUM, PIDSUS, DATUN, DAN BB</h3>
                        <ul class="nav nav-pills ml-auto p-2">
                            <li class="nav-item"><a class="nav-link" href="#capaian_anggaran_2020" data-toggle="tab">2020</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#capaian_anggaran_2021" data-toggle="tab">2021</a></li>
                        </ul>
                    </div>
                    <!-- <div class="card-header">
                        <h3 class="card-title"></h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>

                        </div>
                    </div> -->
                    <div class="card-body">
                        <div class="tab-content">
                            <!-- Data 2020 -->
                            <div class="tab-pane" id="capaian_anggaran_2020">
                                <div class="row">
                                    <!-- intel -->
                                    <div class="col-md-4 text-center">
                                        <div class="small-box ">
                                            <a href="#" class="small-box-footer bg-info">Intelijen</a>
                                            <div class="inner">
                                                <canvas id="chart-intel-20" width="400" height="300" style="background-color:rgba(255,255,255,0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-bag"></i>
                                            </div>
                                            <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                                        </div>
                                    </div>

                                    <!-- pembinaan -->
                                    <div class="col-md-4 text-center">
                                        <div class="small-box ">
                                            <a href="#" class="small-box-footer bg-info">Pembinaan</a>
                                            <div class="inner">
                                                <canvas id="chart-pembinaan-20" width="400" height="300" style="background-color:rgba(255,255,255,0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-bag"></i>
                                            </div>
                                            <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                                        </div>
                                    </div>

                                    <!-- pidum -->
                                    <div class="col-md-4 text-center">
                                        <div class="small-box ">
                                            <a href="#" class="small-box-footer bg-info">Tindak Pidana Umum</a>
                                            <div class="inner">
                                                <canvas id="chart-pidum-20" width="400" height="300" style="background-color:rgba(255,255,255,0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-bag"></i>
                                            </div>
                                            <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                                        </div>
                                    </div>

                                    <!-- Pidsus -->
                                    <div class="col-md-4 text-center">
                                        <div class="small-box ">
                                            <a href="#" class="small-box-footer bg-info">Tindak Pidana Khusus</a>
                                            <div class="inner">
                                                <canvas id="chart-pidsus-20" width="400" height="300" style="background-color:rgba(255,255,255,0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-bag"></i>
                                            </div>
                                            <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                                        </div>
                                    </div>

                                    <!-- datun -->
                                    <div class="col-md-4 text-center">
                                        <div class="small-box ">
                                            <a href="#" class="small-box-footer bg-info">Perdata dan Tata Usaha Negara</a>
                                            <div class="inner">
                                                <canvas id="chart-datun-20" width="400" height="300" style="background-color:rgba(255,255,255,0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-bag"></i>
                                            </div>
                                            <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                                        </div>
                                    </div>

                                    <!-- BB -->
                                    <div class="col-md-4 text-center">
                                        <div class="small-box ">
                                            <a href="#" class="small-box-footer bg-info">Pengelolaa Barang Bukti dan Rampasan</a>
                                            <div class="inner">
                                                <canvas id="chart-bb-20" width="400" height="300" style="background-color:rgba(255,255,255,0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-bag"></i>
                                            </div>
                                            <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <!-- Data 2021 -->
                            <div class="tab-pane active" id="capaian_anggaran_2021">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="small-box ">
                                            <a href="#" class="small-box-footer bg-info">Intelijen</a>
                                            <div class="inner">
                                                <canvas id="chart-a-intel-21" width="400" height="300" style="background-color:rgba(255,255,255,0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
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
                                                <canvas id="chart-pembinaan" width="400" height="300" style="background-color:rgba(255,255,255,0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
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
                                                <canvas id="chart-pidum" width="400" height="300" style="background-color:rgba(255,255,255,0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
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
                                                <canvas id="chart-pidsus" width="400" height="300" style="background-color:rgba(255,255,255,0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
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
                                                <canvas id="chart-datun" width="400" height="300" style="background-color:rgba(255,255,255,0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
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
                                                <canvas id="chart-bb" width="400" height="300" style="background-color:rgba(255,255,255,0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-bag"></i>
                                            </div>
                                            <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                    </div>

                    <!-- <div class="row">


                        <div class="col-md-4 text-center">
                            <div class="small-box ">
                                <a href="#" class="small-box-footer bg-info">Intelijen</a>
                                <div class="inner">
                                    <canvas id="chart-intel" width="400" height="300" style="background-color:rgba(255,255,255,0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
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
                                    <canvas id="chart-pembinaan" width="400" height="300" style="background-color:rgba(255,255,255,0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
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
                                    <canvas id="chart-pidum" width="400" height="300" style="background-color:rgba(255,255,255,0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
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
                                    <canvas id="chart-pidsus" width="400" height="300" style="background-color:rgba(255,255,255,0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
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
                                    <canvas id="chart-datun" width="400" height="300" style="background-color:rgba(255,255,255,0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
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
                                    <canvas id="chart-bb" width="400" height="300" style="background-color:rgba(255,255,255,0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                            </div>
                        </div>

                    </div> -->


                </div>

            </div>


        </div>

    </div>
    <!-- Chart Anggaran End -->

    <!-- Chart Kinerja -->
    <div class="row kinerja">
        <div class="col-12">

            <div class="card">
                <div class="card-header d-flex p-0">
                    <h3 class="card-title p-3">CAPAIAN KINERJA INTELIJEN, PIDUM, PIDSUS, DAN DATUN BERBASIS ANGKA</h3>
                    <ul class="nav nav-pills ml-auto p-2">
                        <li class="nav-item"><a class="nav-link" href="#capaian_kinerja_2020" data-toggle="tab">2020</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#capaian_kinerja_2021" data-toggle="tab">2021</a></li>
                    </ul>
                </div>
                <!-- <div class="card-header">
                    <h3 class="card-title">CAPAIAN KINERJA INTELIJEN, PIDUM, PIDSUS, DAN DATUN BERBASIS ANGKA</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>

                    </div>
                </div> -->
                <div class="card-body">
                    <div class="tab-content">

                        <!-- Data 2020 -->
                        <div class="tab-pane text-center" id="capaian_kinerja_2020">
                            <div class="row">


                                <!-- kinerja intel 20 -->
                                <div class="col-md-6 text-center">
                                    <div class="small-box ">
                                        <a href="#" class="small-box-footer bg-info">Intelijen</a>
                                        <div class="inner">
                                            <canvas id="k-intel-20" width="400" height="300" style="background-color:rgba(255, 255, 255, 0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-bag"></i>
                                        </div>
                                        <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                                    </div>
                                </div>

                                <!-- kinerja pembinaan 20 -->
                                <div class="col-md-6 text-center">
                                    <div class="small-box ">
                                        <a href="#" class="small-box-footer bg-info">Tindak Pidana Umum</a>
                                        <div class="inner">
                                            <canvas id="k-pidum-20" width="400" height="300" style="background-color:rgba(255, 255, 255, 0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-bag"></i>
                                        </div>
                                        <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                                    </div>
                                </div>

                                <!-- kinerja pidsus 20 -->
                                <div class="col-md-6 text-center">
                                    <div class="small-box ">
                                        <a href="#" class="small-box-footer bg-info">Tindak Pidana Khusus</a>
                                        <div class="inner">
                                            <canvas id="k-pidsus-20" width="400" height="300" style="background-color:rgba(255, 255, 255, 0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-bag"></i>
                                        </div>
                                        <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                                    </div>
                                </div>

                                <!-- kinerja datun 20 -->
                                <div class="col-md-6 text-center">
                                    <div class="small-box ">
                                        <a href="#" class="small-box-footer bg-info">Perdata dan Tata Usaha Negara</a>
                                        <div class="inner">
                                            <canvas id="k-a-datun-20" width="400" height="300" style="background-color:rgba(255, 255, 255, 0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-bag"></i>
                                        </div>
                                        <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Data 2021 -->
                        <div class="tab-pane active" id="capaian_kinerja_2021">
                            <div class="row">

                                <!-- kinerja intel 21 -->
                                <div class="col-md-6 text-center">
                                    <div class="small-box ">
                                        <a href="#" class="small-box-footer bg-info">Intelijen</a>
                                        <div class="inner">
                                            <canvas id="k-intel" width="400" height="300" style="background-color:rgba(255, 255, 255, 0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-bag"></i>
                                        </div>
                                        <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                                    </div>
                                </div>

                                <!-- kinerja pembinaan 21 -->
                                <div class="col-md-6 text-center">
                                    <div class="small-box ">
                                        <a href="#" class="small-box-footer bg-info">Tindak Pidana Umum</a>
                                        <div class="inner">
                                            <canvas id="k-pidum" width="400" height="300" style="background-color:rgba(255, 255, 255, 0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-bag"></i>
                                        </div>
                                        <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                                    </div>
                                </div>

                                <!-- kinerja pidsus 21 -->
                                <div class="col-md-6 text-center">
                                    <div class="small-box ">
                                        <a href="#" class="small-box-footer bg-info">Tindak Pidana Khusus</a>
                                        <div class="inner">
                                            <canvas id="k-pidsus" width="400" height="300" style="background-color:rgba(255, 255, 255, 0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-bag"></i>
                                        </div>
                                        <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                                    </div>
                                </div>

                                <!-- kinerja pidum 21 -->
                                <div class="col-md-6 text-center">
                                    <div class="small-box ">
                                        <a href="#" class="small-box-footer bg-info">Perdata dan Tata Usaha Negara</a>
                                        <div class="inner">
                                            <canvas id="k-datun-2021" width="400" height="300" style="background-color:rgba(255, 255, 255, 0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
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



                <!-- <div class="row">


                        <div class="col-md-6 text-center">
                            <div class="small-box ">
                                <a href="#" class="small-box-footer bg-info">Intelijen</a>
                                <div class="inner">
                                    <canvas id="k-intel" width="400" height="300" style="background-color:rgba(255, 255, 255, 0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                            </div>
                        </div> -->

                <!-- <div class="col-md-4 text-center">
                                <div class="small-box ">
                                    <a href="#" class="small-box-footer bg-info">Pembinaan</a>
                                    <div class="inner">
                                        <canvas id="k-pembinaan" width="400" height="300" style="background-color:rgba(255, 255, 255, 0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                                </div>
                            </div> -->

                <!-- <div class="col-md-6 text-center">
                    <div class="small-box ">
                        <a href="#" class="small-box-footer bg-info">Tindak Pidana Umum</a>
                        <div class="inner">
                            <canvas id="k-pidum" width="400" height="300" style="background-color:rgba(255, 255, 255, 0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                    </div>
                </div>

                <div class="col-md-6 text-center">
                    <div class="small-box ">
                        <a href="#" class="small-box-footer bg-info">Tindak Pidana Khusus</a>
                        <div class="inner">
                            <canvas id="k-pidsus" width="400" height="300" style="background-color:rgba(255, 255, 255, 0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                    </div>
                </div>

                <div class="col-md-6 text-center">
                    <div class="small-box ">
                        <a href="#" class="small-box-footer bg-info">Perdata dan Tata Usaha Negara</a>
                        <div class="inner">
                            <canvas id="k-datun" width="400" height="300" style="background-color:rgba(255, 255, 255, 0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                    </div>
                </div> -->

                <!-- <div class="col-md-4 text-center">
                                <div class="small-box ">
                                    <a href="#" class="small-box-footer bg-info">Pengelolaa Barang Bukti dan Rampasan</a>
                                    <div class="inner">
                                        <canvas id="k-bb" width="400" height="300" style="background-color:rgba(255, 255, 255, 0);border-radius:0px;width:700px;height:400px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px"></canvas>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="#" class="small-box-footer bg-danger">Edit <i class="fas fa-edit"></i></a>
                                </div>
                            </div> -->

            </div>


        </div>

    </div>


    </div>

    </div>
    <!-- Chart Kinerja End -->


    </div>
</section>

<script>
    class ChartTemp {
        // property default global chart
        static options = {
            yes: {
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
                scaleLineColor: "rgba(0,0,0,0.4)",
                scaleOverlay: false,
                scaleOverride: false,
                scaleSteps: 10,
                scaleStepWidth: 10,
                scaleStartValue: 0,
                // inGraphDataShow: true,
                inGraphDataTmpl: '<%=v3%>',
                inGraphDataFontFamily: "'Open Sans'",
                inGraphDataFontStyle: "normal",
                inGraphDataFontColor: "rgba(255,255,255,1.00)",
                inGraphDataFontSize: 12,
                inGraphDataPaddingX: -2,
                inGraphDataPaddingY: 0,
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
                legendFontColor: "rgba(148,148,148,1)",
                legendFontSize: 15,
                showYAxisMin: false,
                rotateLabels: "smart",
                xAxisBottom: true,
                yAxisLeft: true,
                yAxisRight: false,
                scaleFontFamily: "'Open Sans'",
                scaleFontStyle: "normal normal",
                scaleFontColor: "rgba(148,148,148,1)",
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
                scaleYGridLinesStep: 1,
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
                barShowStroke: true,
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
            },
            no: {

            },
        };

        // property default chart for color
        static datasets = {
            target: {
                fillColor: "rgba(255, 99, 132, 0.2)",
                strokeColor: "rgba(255, 99, 132, 1)",
                pointColor: "rgba(52,152,219,1)",
                markerShape: "circle",
                pointStrokeColor: "rgba(255,255,255,1.00)",
            },
            realisasi: {
                fillColor: "rgba(54, 162, 235, 0.2)",
                strokeColor: "rgba(54, 162, 235, 1)",
                pointColor: "rgba(46,204,113,1)",
                markerShape: "circle",
                pointStrokeColor: "rgba(255,255,255,1.00)"
            },
            sisa: {
                fillColor: "rgba(255, 206, 86, 0.2)",
                strokeColor: "rgba(255, 206, 86, 1)",
                pointColor: "rgba(155,89,182,1)",
                markerShape: "circle",
                pointStrokeColor: "rgba(255,255,255,1)"
            },
        }

        static type = 'Bar';

        // for render chart to html element
        static render = DrawTheChart;

    }

    // Chart Anggaran Scripts 2020
    // Chart 1 intel 2020
    function MoreChartOptions() {}
    const ChartData_intel_20 = {
        labels: ["LPG", "PAKEM", "PENKUM", "JMS"],
        datasets: [{
            ...ChartTemp.datasets.target,
            // Data Target untuk "Belanja Pegawai", "Belanja Barang", "Belanja Modal"
            data: [<?= explode('+', $c_intel[0]['lpg'])[0];  ?>, <?= explode('+', $c_intel[0]['pakem'])[0];  ?>, <?= explode('+', $c_intel[0]['penkum'])[0];  ?>, <?= explode('+', $c_intel[0]['jms'])[0];  ?>],
            title: "Target"
        }, {
            ...ChartTemp.datasets.realisasi,
            data: [<?= explode('+', $c_intel[0]['lpg'])[1];  ?>, <?= explode('+', $c_intel[0]['pakem'])[1];  ?>, <?= explode('+', $c_intel[0]['penkum'])[1];  ?>, <?= explode('+', $c_intel[0]['jms'])[1];  ?>],
            title: "Realisasi"
        }, {
            ...ChartTemp.datasets.sisa,
            data: [<?= explode('+', $c_intel[0]['lpg'])[2];  ?>, <?= explode('+', $c_intel[0]['pakem'])[2];  ?>, <?= explode('+', $c_intel[0]['penkum'])[2];  ?>, <?= explode('+', $c_intel[0]['jms'])[2];  ?>],
            title: "Sisa Anggaran"
        }, ]
    };
    // render Chart intel
    ChartTemp.render(ChartData_intel_20, ChartTemp.options.no, "chart-intel-20", ChartTemp.type);

    // chart 2 pembinaan 2020
    const ChartData_pembinaan_20 = {
        labels: ["Belanja Pegawai", "Belanja Barang", "Belanja Modal"],
        datasets: [{
            ...ChartTemp.datasets.target,
            // Data Target untuk "Belanja Pegawai", "Belanja Barang", "Belanja Modal"
            data: [<?= explode('+', $c_pembinaan[0]['pegawai'])[0];  ?>, <?= explode('+', $c_pembinaan[0]['barang'])[0];  ?>, <?= explode('+', $c_pembinaan[0]['pembangunan'])[0];  ?>, ],

            title: "Target"
        }, {
            ...ChartTemp.datasets.realisasi,
            // Data Realisasi untuk "Belanja Pegawai", "Belanja Barang", "Belanja Modal"
            data: [<?= explode('+', $c_pembinaan[0]['pegawai'])[1];  ?>, <?= explode('+', $c_pembinaan[0]['barang'])[1];  ?>, <?= explode('+', $c_pembinaan[0]['pembangunan'])[1];  ?>, ],

            title: "Realisasi"
        }, {
            ...ChartTemp.datasets.sisa,
            // Data Sisa Anggaran untuk "Belanja Pegawai", "Belanja Barang", "Belanja Modal"
            data: [<?= explode('+', $c_pembinaan[0]['pegawai'])[2];  ?>, <?= explode('+', $c_pembinaan[0]['barang'])[2];  ?>, <?= explode('+', $c_pembinaan[0]['pembangunan'])[2];  ?>, ],
            title: "Sisa Anggaran"
        }, ]
    };
    // render Chart pembinaan 2020
    ChartTemp.render(ChartData_pembinaan_20, ChartTemp.options.no, "chart-pembinaan-20", ChartTemp.type);

    // chart 3 pidhum 2020
    const ChartData_pidum_20 = {
        labels: ["PRATUT", "TUT", "EKSEKUSI"],
        datasets: [{
            ...ChartTemp.datasets.target,
            data: [<?= explode('+', $c_pidum[0]['pratut'])[0];  ?>, <?= explode('+', $c_pidum[0]['tut'])[0];  ?>, <?= explode('+', $c_pidum[0]['eks'])[0];  ?>],
            title: "Target"
        }, {
            ...ChartTemp.datasets.realisasi,
            data: [<?= explode('+', $c_pidum[0]['pratut'])[1];  ?>, <?= explode('+', $c_pidum[0]['tut'])[1];  ?>, <?= explode('+', $c_pidum[0]['eks'])[1];  ?>],
            title: "Realisasi"
        }, {
            ...ChartTemp.datasets.sisa,
            data: [<?= explode('+', $c_pidum[0]['pratut'])[2];  ?>, <?= explode('+', $c_pidum[0]['tut'])[2];  ?>, <?= explode('+', $c_pidum[0]['eks'])[2];  ?>],
            title: "Sisa Anggaran"
        }, ]
    };
    ChartTemp.render(ChartData_pidum_20, ChartTemp.options.no, "chart-pidum-20", ChartTemp.type);

    // chart 4 pidsus 2020
    const ChartData_pidsus_20 = {
        labels: ["LID", "DIK", "PRATUT DAN TUT", "EKSEKUSI"],
        datasets: [{
            ...ChartTemp.datasets.target,
            data: [<?= explode('+', $c_pidsus[0]['lid'])[0];  ?>, <?= explode('+', $c_pidsus[0]['dik'])[0];  ?>, <?= explode('+', $c_pidsus[0]['tut'])[0];  ?>, <?= explode('+', $c_pidsus[0]['eks'])[0];  ?>],
            title: "Target"
        }, {
            ...ChartTemp.datasets.realisasi,
            data: [<?= explode('+', $c_pidsus[0]['lid'])[1];  ?>, <?= explode('+', $c_pidsus[0]['dik'])[1];  ?>, <?= explode('+', $c_pidsus[0]['tut'])[1];  ?>, <?= explode('+', $c_pidsus[0]['eks'])[1];  ?>],
            title: "Realisasi"
        }, {
            ...ChartTemp.datasets.sisa,
            data: [<?= explode('+', $c_pidsus[0]['lid'])[2];  ?>, <?= explode('+', $c_pidsus[0]['dik'])[2];  ?>, <?= explode('+', $c_pidsus[0]['tut'])[2];  ?>, <?= explode('+', $c_pidsus[0]['eks'])[2];  ?>],
            title: "Sisa Anggaran"
        }, ]
    };
    ChartTemp.render(ChartData_pidsus_20, ChartTemp.options.no, "chart-pidsus-20", ChartTemp.type);

    // Chard 5 datun 2020
    const ChartData_datun_20 = {
        labels: ["PERKARA",
            "PELAYANAN HUKUM",
            "PERTIMBANGAN HUKUM"
        ],
        datasets: [{
            fillColor: "rgba(255, 99, 132, 0.2",
            strokeColor: "rgba(255, 99, 132, 1)",
            pointColor: "rgba(52,152,219,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $c_datun[0]['perkara'])[0];  ?>, <?= explode('+', $c_datun[0]['info'])[0];  ?>, <?= explode('+', $c_datun[0]['hukum'])[0];  ?>],
            title: "Target"
        }, {
            fillColor: "rgba(54, 162, 235, 0.2)",
            strokeColor: "rgba(54, 162, 235, 1)",
            pointColor: "rgba(46,204,113,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $c_datun[0]['perkara'])[1];  ?>, <?= explode('+', $c_datun[0]['info'])[1];  ?>, <?= explode('+', $c_datun[0]['hukum'])[1];  ?>],
            title: "Realisasi"
        }, {
            fillColor: "rgba(255, 206, 86, 0.2)",
            strokeColor: "rgba(255, 206, 86, 1)",
            pointColor: "rgba(155,89,182,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1)",
            data: [<?= explode('+', $c_datun[0]['perkara'])[2];  ?>, <?= explode('+', $c_datun[0]['info'])[2];  ?>, <?= explode('+', $c_datun[0]['hukum'])[2];  ?>],
            title: "Sisa Anggaran"
        }, ]
    };
    ChartTemp.render(ChartData_datun_20, ChartTemp.options.no, "chart-datun-20", ChartTemp.type);

    // Chard 6 BB 2020
    const ChartData_bb_20 = {
        labels: ["PRATUT", "TUT", "EKSEKUSI"],
        datasets: [{
            fillColor: "rgba(255, 99, 132, 0.2",
            strokeColor: "rgba(255, 99, 132, 1)",
            pointColor: "rgba(52,152,219,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $c_bb[0]['pratut'])[0];  ?>, <?= explode('+', $c_bb[0]['tut'])[0];  ?>, <?= explode('+', $c_bb[0]['eks'])[0];  ?>],
            title: "Target"
        }, {
            fillColor: "rgba(54, 162, 235, 0.2)",
            strokeColor: "rgba(54, 162, 235, 1)",
            pointColor: "rgba(46,204,113,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $c_bb[0]['pratut'])[1];  ?>, <?= explode('+', $c_bb[0]['tut'])[1];  ?>, <?= explode('+', $c_bb[0]['eks'])[1];  ?>],
            title: "Realisasi"
        }, {
            fillColor: "rgba(255, 206, 86, 0.2)",
            strokeColor: "rgba(255, 206, 86, 1)",
            pointColor: "rgba(155,89,182,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1)",
            data: [<?= explode('+', $c_bb[0]['pratut'])[2];  ?>, <?= explode('+', $c_bb[0]['tut'])[2];  ?>, <?= explode('+', $c_bb[0]['eks'])[2];  ?>],
            title: "Sisa Anggaran"
        }, ]
    };
    DrawTheChart(ChartData_bb_20, ChartTemp.options.no, "chart-bb-20", ChartTemp.type);
</script>
<!-- Chart Anggaran End script 2020 -->

<!-- Chart Anggaran Scripts 2021 -->
<script>
    // chart 2 pembinaan
    function MoreChartOptions() {}
    var ChartData = {
        labels: ["LPG", "PAKEM", "PENKUM", "JMS", ],
        datasets: [{
            fillColor: "rgba(255, 99, 132, 0.2",
            strokeColor: "rgba(255, 99, 132, 1)",
            pointColor: "rgba(52,152,219,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $c_intel[1]['lpg'])[0];  ?>, <?= explode('+', $c_intel[1]['pakem'])[0];  ?>, <?= explode('+', $c_intel[1]['penkum'])[0];  ?>, <?= explode('+', $c_intel[1]['jms'])[0];  ?>],
            title: "Target"
        }, {
            fillColor: "rgba(54, 162, 235, 0.2)",
            strokeColor: "rgba(54, 162, 235, 1)",
            pointColor: "rgba(46,204,113,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $c_intel[1]['lpg'])[1];  ?>, <?= explode('+', $c_intel[1]['pakem'])[1];  ?>, <?= explode('+', $c_intel[1]['penkum'])[1];  ?>, <?= explode('+', $c_intel[1]['jms'])[1];  ?>],
            title: "Realisasi"
        }, {
            fillColor: "rgba(255, 206, 86, 0.2)",
            strokeColor: "rgba(255, 206, 86, 1)",
            pointColor: "rgba(155,89,182,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1)",
            data: [<?= explode('+', $c_intel[1]['lpg'])[2];  ?>, <?= explode('+', $c_intel[1]['pakem'])[2];  ?>, <?= explode('+', $c_intel[1]['penkum'])[2];  ?>, <?= explode('+', $c_intel[1]['jms'])[2];  ?>],
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
        scaleLineColor: "rgba(0,0,0,0.4)",
        scaleOverlay: false,
        scaleOverride: false,
        scaleSteps: 10,
        scaleStepWidth: 10,
        scaleStartValue: 0,
        // inGraphDataShow: true,
        inGraphDataTmpl: '<%=v3%>',
        inGraphDataFontFamily: "'Open Sans'",
        inGraphDataFontStyle: "normal",
        inGraphDataFontColor: "rgba(255,255,255,1.00)",
        inGraphDataFontSize: 12,
        inGraphDataPaddingX: -2,
        inGraphDataPaddingY: 0,
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
        legendFontColor: "rgba(148,148,148,1)",
        legendFontSize: 15,
        showYAxisMin: false,
        rotateLabels: "smart",
        xAxisBottom: true,
        yAxisLeft: true,
        yAxisRight: false,
        scaleFontFamily: "'Open Sans'",
        scaleFontStyle: "normal normal",
        scaleFontColor: "rgba(148,148,148,1)",
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
        scaleYGridLinesStep: 1,
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
        barShowStroke: true,
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
    DrawTheChart(ChartData, ChartOptions, "chart-a-intel-21", "Bar");
</script>

<script>
    // chart 2 pembinaan
    function MoreChartOptions() {}
    var ChartData = {
        labels: ["Belanja Pegawai", "Belanja Barang", "Gedung BB"],
        datasets: [{
            fillColor: "rgba(255, 99, 132, 0.2",
            strokeColor: "rgba(255, 99, 132, 1)",
            pointColor: "rgba(52,152,219,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $c_pembinaan[1]['pegawai'])[0];  ?>, <?= explode('+', $c_pembinaan[1]['barang'])[0];  ?>, <?= explode('+', $c_pembinaan[1]['pembangunan'])[0];  ?>, ],
            title: "Target"
        }, {
            fillColor: "rgba(54, 162, 235, 0.2)",
            strokeColor: "rgba(54, 162, 235, 1)",
            pointColor: "rgba(46,204,113,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $c_pembinaan[1]['pegawai'])[1];  ?>, <?= explode('+', $c_pembinaan[1]['barang'])[1];  ?>, <?= explode('+', $c_pembinaan[1]['pembangunan'])[1];  ?>, ],
            title: "Realisasi"
        }, {
            fillColor: "rgba(255, 206, 86, 0.2)",
            strokeColor: "rgba(255, 206, 86, 1)",
            pointColor: "rgba(155,89,182,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1)",
            data: [<?= explode('+', $c_pembinaan[1]['pegawai'])[2];  ?>, <?= explode('+', $c_pembinaan[1]['barang'])[2];  ?>, <?= explode('+', $c_pembinaan[1]['pembangunan'])[2];  ?>, ],
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
        scaleLineColor: "rgba(0,0,0,0.4)",
        scaleOverlay: false,
        scaleOverride: false,
        scaleSteps: 10,
        scaleStepWidth: 10,
        scaleStartValue: 0,
        // inGraphDataShow: true,
        inGraphDataTmpl: '<%=v3%>',
        inGraphDataFontFamily: "'Open Sans'",
        inGraphDataFontStyle: "normal",
        inGraphDataFontColor: "rgba(255,255,255,1.00)",
        inGraphDataFontSize: 12,
        inGraphDataPaddingX: -2,
        inGraphDataPaddingY: 0,
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
        legendFontColor: "rgba(148,148,148,1)",
        legendFontSize: 15,
        showYAxisMin: false,
        rotateLabels: "smart",
        xAxisBottom: true,
        yAxisLeft: true,
        yAxisRight: false,
        scaleFontFamily: "'Open Sans'",
        scaleFontStyle: "normal normal",
        scaleFontColor: "rgba(148,148,148,1)",
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
        scaleYGridLinesStep: 1,
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
        barShowStroke: true,
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
    DrawTheChart(ChartData, ChartOptions, "chart-pembinaan", "Bar");
</script>

<script>
    // chart 3
    function MoreChartOptions() {}
    var ChartData = {
        labels: ["PRATUT", "TUT", "EKSEKUSI"],
        datasets: [{
            fillColor: "rgba(255, 99, 132, 0.2",
            strokeColor: "rgba(255, 99, 132, 1)",
            pointColor: "rgba(52,152,219,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $c_pidum[1]['pratut'])[0];  ?>, <?= explode('+', $c_pidum[1]['tut'])[0];  ?>, <?= explode('+', $c_pidum[1]['eks'])[0];  ?>],
            title: "Target"
        }, {
            fillColor: "rgba(54, 162, 235, 0.2)",
            strokeColor: "rgba(54, 162, 235, 1)",
            pointColor: "rgba(46,204,113,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $c_pidum[1]['pratut'])[1];  ?>, <?= explode('+', $c_pidum[1]['tut'])[1];  ?>, <?= explode('+', $c_pidum[1]['eks'])[1];  ?>],
            title: "Realisasi"
        }, {
            fillColor: "rgba(255, 206, 86, 0.2)",
            strokeColor: "rgba(255, 206, 86, 1)",
            pointColor: "rgba(155,89,182,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1)",
            data: [<?= explode('+', $c_pidum[1]['pratut'])[2];  ?>, <?= explode('+', $c_pidum[1]['tut'])[2];  ?>, <?= explode('+', $c_pidum[1]['eks'])[2];  ?>],
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
        scaleLineColor: "rgba(0,0,0,0.4)",
        scaleOverlay: false,
        scaleOverride: false,
        scaleSteps: 10,
        scaleStepWidth: 10,
        scaleStartValue: 0,
        // inGraphDataShow: true,
        inGraphDataTmpl: '<%=v3%>',
        inGraphDataFontFamily: "'Open Sans'",
        inGraphDataFontStyle: "normal",
        inGraphDataFontColor: "rgba(255,255,255,1.00)",
        inGraphDataFontSize: 12,
        inGraphDataPaddingX: -2,
        inGraphDataPaddingY: 0,
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
        legendFontColor: "rgba(148,148,148,1)",
        legendFontSize: 15,
        showYAxisMin: false,
        rotateLabels: "smart",
        xAxisBottom: true,
        yAxisLeft: true,
        yAxisRight: false,
        scaleFontFamily: "'Open Sans'",
        scaleFontStyle: "normal normal",
        scaleFontColor: "rgba(148,148,148,1)",
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
        scaleYGridLinesStep: 1,
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
        barShowStroke: true,
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
    DrawTheChart(ChartData, ChartOptions, "chart-pidum", "Bar");
</script>

<script>
    // chart 4
    function MoreChartOptions() {}
    var ChartData = {
        labels: ["LID", "DIK", "PRATUT DAN TUT", "EKSEKUSI"],
        datasets: [{
            fillColor: "rgba(255, 99, 132, 0.2",
            strokeColor: "rgba(255, 99, 132, 1)",
            pointColor: "rgba(52,152,219,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $c_pidsus[1]['lid'])[0];  ?>, <?= explode('+', $c_pidsus[1]['dik'])[0];  ?>, <?= explode('+', $c_pidsus[1]['tut'])[0];  ?>, <?= explode('+', $c_pidsus[1]['eks'])[0];  ?>],
            title: "Target"
        }, {
            fillColor: "rgba(54, 162, 235, 0.2)",
            strokeColor: "rgba(54, 162, 235, 1)",
            pointColor: "rgba(46,204,113,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $c_pidsus[1]['lid'])[1];  ?>, <?= explode('+', $c_pidsus[1]['dik'])[1];  ?>, <?= explode('+', $c_pidsus[1]['tut'])[1];  ?>, <?= explode('+', $c_pidsus[1]['eks'])[1];  ?>],
            title: "Realisasi"
        }, {
            fillColor: "rgba(255, 206, 86, 0.2)",
            strokeColor: "rgba(255, 206, 86, 1)",
            pointColor: "rgba(155,89,182,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1)",
            data: [<?= explode('+', $c_pidsus[1]['lid'])[2];  ?>, <?= explode('+', $c_pidsus[1]['dik'])[2];  ?>, <?= explode('+', $c_pidsus[1]['tut'])[2];  ?>, <?= explode('+', $c_pidsus[1]['eks'])[2];  ?>],
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
        scaleLineColor: "rgba(0,0,0,0.4)",
        scaleOverlay: false,
        scaleOverride: false,
        scaleSteps: 10,
        scaleStepWidth: 10,
        scaleStartValue: 0,
        // inGraphDataShow: true,
        inGraphDataTmpl: '<%=v3%>',
        inGraphDataFontFamily: "'Open Sans'",
        inGraphDataFontStyle: "normal",
        inGraphDataFontColor: "rgba(255,255,255,1.00)",
        inGraphDataFontSize: 12,
        inGraphDataPaddingX: -2,
        inGraphDataPaddingY: 0,
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
        legendFontColor: "rgba(148,148,148,1)",
        legendFontSize: 15,
        showYAxisMin: false,
        rotateLabels: "smart",
        xAxisBottom: true,
        yAxisLeft: true,
        yAxisRight: false,
        scaleFontFamily: "'Open Sans'",
        scaleFontStyle: "normal normal",
        scaleFontColor: "rgba(148,148,148,1)",
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
        scaleYGridLinesStep: 1,
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
        barShowStroke: true,
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
    DrawTheChart(ChartData, ChartOptions, "chart-pidsus", "Bar");
</script>

<script>
    // Chard 5
    function MoreChartOptions() {}
    var ChartData = {

        labels: ["PERKARA",
            "PELAYANAN HUKUM",
            "PERTIMBANGAN HUKUM"
        ],
        datasets: [{
            fillColor: "rgba(255, 99, 132, 0.2",
            strokeColor: "rgba(255, 99, 132, 1)",
            pointColor: "rgba(52,152,219,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $c_datun[1]['perkara'])[0];  ?>, <?= explode('+', $c_datun[1]['info'])[0];  ?>, <?= explode('+', $c_datun[1]['hukum'])[0];  ?>],
            title: "Target"
        }, {
            fillColor: "rgba(54, 162, 235, 0.2)",
            strokeColor: "rgba(54, 162, 235, 1)",
            pointColor: "rgba(46,204,113,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $c_datun[1]['perkara'])[1];  ?>, <?= explode('+', $c_datun[1]['info'])[1];  ?>, <?= explode('+', $c_datun[1]['hukum'])[1];  ?>],
            title: "Realisasi"
        }, {
            fillColor: "rgba(255, 206, 86, 0.2)",
            strokeColor: "rgba(255, 206, 86, 1)",
            pointColor: "rgba(155,89,182,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1)",
            data: [<?= explode('+', $c_datun[1]['perkara'])[2];  ?>, <?= explode('+', $c_datun[1]['info'])[2];  ?>, <?= explode('+', $c_datun[1]['hukum'])[2];  ?>],
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
        scaleLineColor: "rgba(0,0,0,0.4)",
        scaleOverlay: false,
        scaleOverride: false,
        scaleSteps: 10,
        scaleStepWidth: 10,
        scaleStartValue: 0,
        // inGraphDataShow: true,
        inGraphDataTmpl: '<%=v3%>',
        inGraphDataFontFamily: "'Open Sans'",
        inGraphDataFontStyle: "normal",
        inGraphDataFontColor: "rgba(255,255,255,1.00)",
        inGraphDataFontSize: 12,
        inGraphDataPaddingX: -2,
        inGraphDataPaddingY: 0,
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
        legendFontColor: "rgba(148,148,148,1)",
        legendFontSize: 15,
        showYAxisMin: false,
        rotateLabels: "smart",
        xAxisBottom: true,
        yAxisLeft: true,
        yAxisRight: false,
        scaleFontFamily: "'Open Sans'",
        scaleFontStyle: "normal normal",
        scaleFontColor: "rgba(148,148,148,1)",
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
        scaleYGridLinesStep: 1,
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
        barShowStroke: true,
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
    DrawTheChart(ChartData, ChartOptions, "chart-datun", "Bar");
</script>

<script>
    // Chard 6 BB
    function MoreChartOptions() {}
    var ChartData = {
        labels: ["PRATUT", "TUT", "EKSEKUSI"],
        datasets: [{
            fillColor: "rgba(255, 99, 132, 0.2",
            strokeColor: "rgba(255, 99, 132, 1)",
            pointColor: "rgba(52,152,219,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $c_bb[1]['pratut'])[0];  ?>, <?= explode('+', $c_bb[1]['tut'])[0];  ?>, <?= explode('+', $c_bb[1]['eks'])[0];  ?>],
            title: "Target"
        }, {
            fillColor: "rgba(54, 162, 235, 0.2)",
            strokeColor: "rgba(54, 162, 235, 1)",
            pointColor: "rgba(46,204,113,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $c_bb[1]['pratut'])[1];  ?>, <?= explode('+', $c_bb[1]['tut'])[1];  ?>, <?= explode('+', $c_bb[1]['eks'])[1];  ?>],
            title: "Realisasi"
        }, {
            fillColor: "rgba(255, 206, 86, 0.2)",
            strokeColor: "rgba(255, 206, 86, 1)",
            pointColor: "rgba(155,89,182,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1)",
            data: [<?= explode('+', $c_bb[1]['pratut'])[2];  ?>, <?= explode('+', $c_bb[1]['tut'])[2];  ?>, <?= explode('+', $c_bb[1]['eks'])[2];  ?>],
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
        scaleLineColor: "rgba(0,0,0,0.4)",
        scaleOverlay: false,
        scaleOverride: false,
        scaleSteps: 10,
        scaleStepWidth: 10,
        scaleStartValue: 0,
        // inGraphDataShow: true,
        inGraphDataTmpl: '<%=v3%>',
        inGraphDataFontFamily: "'Open Sans'",
        inGraphDataFontStyle: "normal",
        inGraphDataFontColor: "rgba(255,255,255,1.00)",
        inGraphDataFontSize: 12,
        inGraphDataPaddingX: -2,
        inGraphDataPaddingY: 0,
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
        legendFontColor: "rgba(148,148,148,1)",
        legendFontSize: 15,
        showYAxisMin: false,
        rotateLabels: "smart",
        xAxisBottom: true,
        yAxisLeft: true,
        yAxisRight: false,
        scaleFontFamily: "'Open Sans'",
        scaleFontStyle: "normal normal",
        scaleFontColor: "rgba(148,148,148,1)",
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
        scaleYGridLinesStep: 1,
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
        barShowStroke: true,
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
    DrawTheChart(ChartData, ChartOptions, "chart-bb", "Bar");
</script>

<!-- Chart Anggaran 2021 Scripts End -->




<!-- Chart Kinerja Scripts 20 -->
<script>
    // Chart 7
    function MoreChartOptions() {}
    var ChartData = {
        labels: ["LPG",
            "PAKEM", "PENKUM", "JMS",
        ],
        datasets: [
            // {
            //     fillColor: "rgba(255, 99, 132, 0.2",
            //     strokeColor: "rgba(255, 99, 132, 1)",
            //     pointColor: "rgba(52,152,219,1)",
            //     markerShape: "circle",
            //     pointStrokeColor: "rgba(255,255,255,1.00)",
            //     data: [<?= explode('+', $k_intel[0]['lpg'])[0];  ?>, <?= explode('+', $k_intel[0]['pakem'])[0];  ?>, <?= explode('+', $k_intel[0]['penkum'])[0];  ?>, <?= explode('+', $k_intel[0]['jms'])[0];  ?>],
            //     title: "Target"
            // }, 
            {
                fillColor: "rgba(54, 162, 235, 0.2)",
                strokeColor: "rgba(54, 162, 235, 1)",
                pointColor: "rgba(46,204,113,1)",
                markerShape: "circle",
                pointStrokeColor: "rgba(255,255,255,1.00)",
                data: [<?= explode('+', $k_intel[0]['lpg'])[1];  ?>, <?= explode('+', $k_intel[0]['pakem'])[1];  ?>, <?= explode('+', $k_intel[0]['penkum'])[1];  ?>, <?= explode('+', $k_intel[0]['jms'])[1];  ?>],
                title: "Realisasi"
            },
            // {
            //     fillColor: "rgba(255, 206, 86, 0.2)",
            //     strokeColor: "rgba(255, 206, 86, 1)",
            //     pointColor: "rgba(155,89,182,0)",
            //     markerShape: "circle",
            //     pointStrokeColor: "rgba(255,255,255,0)",
            //     data: [<?= explode('+', $k_intel[0]['lpg'])[2];  ?>, <?= explode('+', $k_intel[0]['pakem'])[2];  ?>, <?= explode('+', $k_intel[0]['penkum'])[2];  ?>, <?= explode('+', $k_intel[0]['jms'])[2];  ?>],
            //     title: "Sisa Anggaran",
            // },
        ]
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
        scaleLineColor: "rgba(0,0,0,0.4)",
        scaleOverlay: false,
        scaleOverride: false,
        scaleSteps: 10,
        scaleStepWidth: 10,
        scaleStartValue: 0,
        inGraphDataShow: true,
        inGraphDataTmpl: '<%=v3%>',
        inGraphDataFontFamily: "'Open Sans'",
        inGraphDataFontStyle: "normal",
        inGraphDataFontColor: "rgba(0, 0, 0,1.00)",
        inGraphDataFontSize: 12,
        inGraphDataPaddingX: -2,
        inGraphDataPaddingY: 0,
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
        legendFontColor: "rgba(148,148,148,1)",
        legendFontSize: 15,
        showYAxisMin: false,
        rotateLabels: "smart",
        xAxisBottom: true,
        yAxisLeft: true,
        yAxisRight: false,
        scaleFontFamily: "'Open Sans'",
        scaleFontStyle: "normal normal",
        scaleFontColor: "rgba(148,148,148,1)",
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
        scaleYGridLinesStep: 1,
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
        barShowStroke: true,
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
        },
        graphSubTitle: "Realisasi",
        graphTitleFontColor: "rgba(52,152,225,1)",
        graphSubTitleFontFamily: "'Open Sans'",
        graphSubTitleFontColor: "rgba(225,225,225,1)",
    };
    DrawTheChart(ChartData, ChartOptions, "k-intel-20", "Bar");
</script>

<!-- <script>
    // Chart 8 pembinaan
    function MoreChartOptions() {}
    var ChartData = {
        labels: ["Belanja Pegawai", "Belanja Barang", "Gedung BB"],
        datasets: [{
            fillColor: "rgba(255, 99, 132, 0.2",
            strokeColor: "rgba(255, 99, 132, 1)",
            pointColor: "rgba(52,152,219,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $k_pembinaan[0]['pegawai'])[0];  ?>, <?= explode('+', $k_pembinaan[0]['barang'])[0];  ?>, <?= explode('+', $k_pembinaan[0]['pembangunan'])[0];  ?>, ],
            title: "Target"
        }, {
            fillColor: "rgba(54, 162, 235, 0.2)",
            strokeColor: "rgba(54, 162, 235, 1)",
            pointColor: "rgba(46,204,113,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $k_pembinaan[0]['pegawai'])[1];  ?>, <?= explode('+', $k_pembinaan[0]['barang'])[1];  ?>, <?= explode('+', $k_pembinaan[0]['pembangunan'])[1];  ?>, ],
            title: "Realisasi"
        }, {
            fillColor: "rgba(255, 206, 86, 0.2)",
            strokeColor: "rgba(255, 206, 86, 1)",
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
      scaleLineColor: "rgba(0,0,0,0.4)",
      scaleOverlay: false,
      scaleOverride: false,
      scaleSteps: 10,
      scaleStepWidth: 10,
      scaleStartValue: 0,
      inGraphDataShow: true,
      inGraphDataTmpl: '<%=v3%>',
      inGraphDataFontFamily: "'Open Sans'",
      inGraphDataFontStyle: "normal",
      inGraphDataFontColor: "rgba(255,255,255,1.00)",
      inGraphDataFontSize: 12,
      inGraphDataPaddingX: -2,
      inGraphDataPaddingY: 0,
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
      legendFontColor: "rgba(148,148,148,1)",
      legendFontSize: 15,
      showYAxisMin: false,
      rotateLabels: "smart",
      xAxisBottom: true,
      yAxisLeft: true,
      yAxisRight: false,
      scaleFontFamily: "'Open Sans'",
      scaleFontStyle: "normal normal",
      scaleFontColor: "rgba(148,148,148,1)",
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
      scaleYGridLinesStep: 1,
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
      barShowStroke: true,
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
</script> -->

<script>
    // Chart 9
    function MoreChartOptions() {}
    var ChartData = {
        labels: ["PRATUT", "TUT", "EKSEKUSI"],
        datasets: [
            //     {
            //     fillColor: "rgba(255, 99, 132, 0.2",
            //     strokeColor: "rgba(255, 99, 132, 1)",
            //     pointColor: "rgba(52,152,219,1)",
            //     markerShape: "circle",
            //     pointStrokeColor: "rgba(255,255,255,1.00)",
            //     data: [<?= explode('+', $k_pidum[0]['pratut'])[0];  ?>, <?= explode('+', $k_pidum[0]['tut'])[0];  ?>, <?= explode('+', $k_pidum[0]['eks'])[0];  ?>],
            //     title: "Target"
            // }, 
            {
                fillColor: "rgba(54, 162, 235, 0.2)",
                strokeColor: "rgba(54, 162, 235, 1)",
                pointColor: "rgba(46,204,113,1)",
                markerShape: "circle",
                pointStrokeColor: "rgba(255,255,255,1.00)",
                data: [<?= explode('+', $k_pidum[0]['pratut'])[1];  ?>, <?= explode('+', $k_pidum[0]['tut'])[1];  ?>, <?= explode('+', $k_pidum[0]['eks'])[1];  ?>],
                title: "Realisasi"
            },
            //  {

            //     fillColor: "rgba(255, 206, 86, 0.2)",
            //     strokeColor: "rgba(255, 206, 86, 1)",
            //     pointColor: "rgba(155,89,182,1)",
            //     markerShape: "circle",
            //     pointStrokeColor: "rgba(255,255,255,1)",
            //     data: [<?= explode('+', $k_pidum[0]['pratut'])[2];  ?>, <?= explode('+', $k_pidum[0]['tut'])[2];  ?>, <?= explode('+', $k_pidum[0]['eks'])[2];  ?>],
            //     title: "Sisa Anggaran"
            // },
        ]
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
        scaleLineColor: "rgba(0,0,0,0.4)",
        scaleOverlay: false,
        scaleOverride: false,
        scaleSteps: 10,
        scaleStepWidth: 10,
        scaleStartValue: 0,
        inGraphDataShow: true,
        inGraphDataTmpl: '<%=v3%>',
        inGraphDataFontFamily: "'Open Sans'",
        inGraphDataFontStyle: "normal",
        inGraphDataFontColor: "rgba(0,0,0,1.00)",
        inGraphDataFontSize: 12,
        inGraphDataPaddingX: -2,
        inGraphDataPaddingY: 0,
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
        legendFontColor: "rgba(148,148,148,1)",
        legendFontSize: 15,
        showYAxisMin: false,
        rotateLabels: "smart",
        xAxisBottom: true,
        yAxisLeft: true,
        yAxisRight: false,
        scaleFontFamily: "'Open Sans'",
        scaleFontStyle: "normal normal",
        scaleFontColor: "rgba(148,148,148,1)",
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
        scaleYGridLinesStep: 1,
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
        barShowStroke: true,
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
        },
        graphSubTitle: "Realisasi",
        graphTitleFontColor: "rgba(52,152,225,1)",
        graphSubTitleFontFamily: "'Open Sans'",
        graphSubTitleFontColor: "rgba(225,225,225,1)",
    };
    DrawTheChart(ChartData, ChartOptions, "k-pidum-20", "Bar");
</script>

<script>
    // Chart 10
    function MoreChartOptions() {}
    var ChartData = {
        labels: ["LID", "DIK", "PRATUT DAN TUT", "EKSEKUSI"],
        datasets: [
            //     {
            //     fillColor: "rgba(255, 99, 132, 0.2",
            //     strokeColor: "rgba(255, 99, 132, 1)",
            //     pointColor: "rgba(52,152,219,1)",
            //     markerShape: "circle",
            //     pointStrokeColor: "rgba(255,255,255,1.00)",
            //     data: [<?= explode('+', $k_pidsus[0]['lid'])[0];  ?>, <?= explode('+', $k_pidsus[0]['dik'])[0];  ?>, <?= explode('+', $k_pidsus[0]['tut'])[0];  ?>, <?= explode('+', $k_pidsus[0]['eks'])[0];  ?>],
            //     title: "Target"
            // },
            {
                fillColor: "rgba(54, 162, 235, 0.2)",
                strokeColor: "rgba(54, 162, 235, 1)",
                pointColor: "rgba(46,204,113,1)",
                markerShape: "circle",
                pointStrokeColor: "rgba(255,255,255,1.00)",
                data: [<?= explode('+', $k_pidsus[0]['lid'])[1];  ?>, <?= explode('+', $k_pidsus[0]['dik'])[1];  ?>, <?= explode('+', $k_pidsus[0]['tut'])[1];  ?>, <?= explode('+', $k_pidsus[0]['eks'])[1];  ?>],
                title: "Realisasi"
            },
            //  {
            //     fillColor: "rgba(255, 206, 86, 0.2)",
            //     strokeColor: "rgba(255, 206, 86, 1)",
            //     pointColor: "rgba(155,89,182,1)",
            //     markerShape: "circle",
            //     pointStrokeColor: "rgba(255,255,255,1)",
            //     data: [<?= explode('+', $k_pidsus[0]['lid'])[2];  ?>, <?= explode('+', $k_pidsus[0]['dik'])[2];  ?>, <?= explode('+', $k_pidsus[0]['tut'])[2];  ?>, <?= explode('+', $k_pidsus[0]['eks'])[2];  ?>],
            //     title: "Sisa Anggaran"
            // },
        ]
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
        scaleLineColor: "rgba(0,0,0,0.4)",
        scaleOverlay: false,
        scaleOverride: false,
        scaleSteps: 10,
        scaleStepWidth: 10,
        scaleStartValue: 0,
        inGraphDataShow: true,
        inGraphDataTmpl: '<%=v3%>',
        inGraphDataFontFamily: "'Open Sans'",
        inGraphDataFontStyle: "normal",
        inGraphDataFontColor: "rgba(0,0,0,1.00)",
        inGraphDataFontSize: 12,
        inGraphDataPaddingX: -2,
        inGraphDataPaddingY: 0,
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
        legendFontColor: "rgba(148,148,148,1)",
        legendFontSize: 15,
        showYAxisMin: false,
        rotateLabels: "smart",
        xAxisBottom: true,
        yAxisLeft: true,
        yAxisRight: false,
        scaleFontFamily: "'Open Sans'",
        scaleFontStyle: "normal normal",
        scaleFontColor: "rgba(148,148,148,1)",
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
        scaleYGridLinesStep: 1,
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
        barShowStroke: true,
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
        },
        graphSubTitle: "Realisasi",
        graphTitleFontColor: "rgba(52,152,225,1)",
        graphSubTitleFontFamily: "'Open Sans'",
        graphSubTitleFontColor: "rgba(225,225,225,1)",
    };
    DrawTheChart(ChartData, ChartOptions, "k-pidsus-20", "Bar");
</script>

<script>
    // Chart 10
    function MoreChartOptions() {}
    var ChartData = {
        labels: ["PERKARA", "INFORMASI PELAYANAN", "PERTIMBANGAN HUKUM"],
        datasets: [
            //     {
            //     fillColor: "rgba(255, 99, 132, 0.2",
            //     strokeColor: "rgba(255, 99, 132, 1)",
            //     pointColor: "rgba(52,152,219,1)",
            //     markerShape: "circle",
            //     pointStrokeColor: "rgba(255,255,255,1.00)",
            //     data: [<?= explode('+', $k_datun[0]['perkara'])[0];  ?>, <?= explode('+', $k_datun[0]['info'])[0];  ?>, <?= explode('+', $k_datun[0]['hukum'])[0];  ?>, ],
            //     title: "Target"
            // },
            {
                fillColor: "rgba(54, 162, 235, 0.2)",
                strokeColor: "rgba(54, 162, 235, 1)",
                pointColor: "rgba(46,204,113,1)",
                markerShape: "circle",
                pointStrokeColor: "rgba(255,255,255,1.00)",
                data: [<?= explode('+', $k_datun[0]['perkara'])[1];  ?>, <?= explode('+', $k_datun[0]['info'])[1];  ?>, <?= explode('+', $k_datun[0]['hukum'])[1];  ?>, ],
                title: "Realisasi"
            },
            //  {
            //     fillColor: "rgba(255, 206, 86, 0.2)",
            //     strokeColor: "rgba(255, 206, 86, 1)",
            //     pointColor: "rgba(155,89,182,1)",
            //     markerShape: "circle",
            //     pointStrokeColor: "rgba(255,255,255,1)",
            //     data: [<?= explode('+', $k_datun[0]['perkara'])[2];  ?>, <?= explode('+', $k_datun[0]['info'])[2];  ?>, <?= explode('+', $k_datun[0]['hukum'])[2];  ?>, ],
            //     title: "Sisa Anggaran"
            // },
        ]
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
        scaleLineColor: "rgba(0,0,0,0.4)",
        scaleOverlay: false,
        scaleOverride: false,
        scaleSteps: 10,
        scaleStepWidth: 10,
        scaleStartValue: 0,
        inGraphDataShow: true,
        inGraphDataTmpl: '<%=v3%>',
        inGraphDataFontFamily: "'Open Sans'",
        inGraphDataFontStyle: "normal",
        inGraphDataFontColor: "rgba(0,0,0,1.00)",
        inGraphDataFontSize: 12,
        inGraphDataPaddingX: -2,
        inGraphDataPaddingY: 0,
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
        legendFontColor: "rgba(148,148,148,1)",
        legendFontSize: 15,
        showYAxisMin: false,
        rotateLabels: "smart",
        xAxisBottom: true,
        yAxisLeft: true,
        yAxisRight: false,
        scaleFontFamily: "'Open Sans'",
        scaleFontStyle: "normal normal",
        scaleFontColor: "rgba(148,148,148,1)",
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
        scaleYGridLinesStep: 1,
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
        barShowStroke: true,
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
        },
        graphSubTitle: "Realisasi",
        graphTitleFontColor: "rgba(52,152,225,1)",
        graphSubTitleFontFamily: "'Open Sans'",
        graphSubTitleFontColor: "rgba(225,225,225,1)",
    };
    DrawTheChart(ChartData, ChartOptions, "k-a-datun-20", "Bar");
</script>


<!-- Chart Kinerja Scripts End -->

<!-- Chart Kinerja Scripts 21 -->
<script>
    // Chart 7
    function MoreChartOptions() {}
    var ChartData = {
        labels: ["LPG",
            "PAKEM", "PENKUM", "JMS",
        ],
        datasets: [
            // {
            //     fillColor: "rgba(255, 99, 132, 0.2",
            //     strokeColor: "rgba(255, 99, 132, 1)",
            //     pointColor: "rgba(52,152,219,1)",
            //     markerShape: "circle",
            //     pointStrokeColor: "rgba(255,255,255,1.00)",
            //     data: [<?= explode('+', $k_intel[1]['lpg'])[0];  ?>, <?= explode('+', $k_intel[1]['pakem'])[0];  ?>, <?= explode('+', $k_intel[1]['penkum'])[0];  ?>, <?= explode('+', $k_intel[1]['jms'])[0];  ?>],
            //     title: "Target"
            // }, 
            {
                fillColor: "rgba(54, 162, 235, 0.2)",
                strokeColor: "rgba(54, 162, 235, 1)",
                pointColor: "rgba(46,204,113,1)",
                markerShape: "circle",
                pointStrokeColor: "rgba(255,255,255,1.00)",
                data: [<?= explode('+', $k_intel[1]['lpg'])[1];  ?>, <?= explode('+', $k_intel[1]['pakem'])[1];  ?>, <?= explode('+', $k_intel[1]['penkum'])[1];  ?>, <?= explode('+', $k_intel[1]['jms'])[1];  ?>],
                title: "Realisasi"
            },
            // {
            //     fillColor: "rgba(255, 206, 86, 0.2)",
            //     strokeColor: "rgba(255, 206, 86, 1)",
            //     pointColor: "rgba(155,89,182,0)",
            //     markerShape: "circle",
            //     pointStrokeColor: "rgba(255,255,255,0)",
            //     data: [<?= explode('+', $k_intel[0]['lpg'])[2];  ?>, <?= explode('+', $k_intel[0]['pakem'])[2];  ?>, <?= explode('+', $k_intel[0]['penkum'])[2];  ?>, <?= explode('+', $k_intel[0]['jms'])[2];  ?>],
            //     title: "Sisa Anggaran",
            // },
        ]
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
        scaleLineColor: "rgba(0,0,0,0.4)",
        scaleOverlay: false,
        scaleOverride: false,
        scaleSteps: 10,
        scaleStepWidth: 10,
        scaleStartValue: 0,
        inGraphDataShow: true,
        inGraphDataTmpl: '<%=v3%>',
        inGraphDataFontFamily: "'Open Sans'",
        inGraphDataFontStyle: "normal",
        inGraphDataFontColor: "rgba(0,0,0,1.00)",
        inGraphDataFontSize: 12,
        inGraphDataPaddingX: -2,
        inGraphDataPaddingY: 0,
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
        legendFontColor: "rgba(148,148,148,1)",
        legendFontSize: 15,
        showYAxisMin: false,
        rotateLabels: "smart",
        xAxisBottom: true,
        yAxisLeft: true,
        yAxisRight: false,
        scaleFontFamily: "'Open Sans'",
        scaleFontStyle: "normal normal",
        scaleFontColor: "rgba(148,148,148,1)",
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
        scaleYGridLinesStep: 1,
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
        barShowStroke: true,
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
        },
        graphSubTitle: "Realisasi",
        graphTitleFontColor: "rgba(52,152,225,1)",
        graphSubTitleFontFamily: "'Open Sans'",
        graphSubTitleFontColor: "rgba(225,225,225,1)",
    };
    DrawTheChart(ChartData, ChartOptions, "k-intel", "Bar");
</script>

<!-- <script>
    // Chart 8 pembinaan
    function MoreChartOptions() {}
    var ChartData = {
        labels: ["Belanja Pegawai", "Belanja Barang", "Gedung BB"],
        datasets: [{
            fillColor: "rgba(255, 99, 132, 0.2",
            strokeColor: "rgba(255, 99, 132, 1)",
            pointColor: "rgba(52,152,219,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $k_pembinaan[0]['pegawai'])[0];  ?>, <?= explode('+', $k_pembinaan[0]['barang'])[0];  ?>, <?= explode('+', $k_pembinaan[0]['pembangunan'])[0];  ?>, ],
            title: "Target"
        }, {
            fillColor: "rgba(54, 162, 235, 0.2)",
            strokeColor: "rgba(54, 162, 235, 1)",
            pointColor: "rgba(46,204,113,1)",
            markerShape: "circle",
            pointStrokeColor: "rgba(255,255,255,1.00)",
            data: [<?= explode('+', $k_pembinaan[0]['pegawai'])[1];  ?>, <?= explode('+', $k_pembinaan[0]['barang'])[1];  ?>, <?= explode('+', $k_pembinaan[0]['pembangunan'])[1];  ?>, ],
            title: "Realisasi"
        }, {
            fillColor: "rgba(255, 206, 86, 0.2)",
            strokeColor: "rgba(255, 206, 86, 1)",
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
      scaleLineColor: "rgba(0,0,0,0.4)",
      scaleOverlay: false,
      scaleOverride: false,
      scaleSteps: 10,
      scaleStepWidth: 10,
      scaleStartValue: 0,
      inGraphDataShow: true,
      inGraphDataTmpl: '<%=v3%>',
      inGraphDataFontFamily: "'Open Sans'",
      inGraphDataFontStyle: "normal",
      inGraphDataFontColor: "rgba(255,255,255,1.00)",
      inGraphDataFontSize: 12,
      inGraphDataPaddingX: -2,
      inGraphDataPaddingY: 0,
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
      legendFontColor: "rgba(148,148,148,1)",
      legendFontSize: 15,
      showYAxisMin: false,
      rotateLabels: "smart",
      xAxisBottom: true,
      yAxisLeft: true,
      yAxisRight: false,
      scaleFontFamily: "'Open Sans'",
      scaleFontStyle: "normal normal",
      scaleFontColor: "rgba(148,148,148,1)",
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
      scaleYGridLinesStep: 1,
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
      barShowStroke: true,
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
</script> -->

<script>
    // Chart 9
    function MoreChartOptions() {}
    var ChartData = {
        labels: ["PRATUT", "TUT", "EKSEKUSI"],
        datasets: [
            //     {
            //     fillColor: "rgba(255, 99, 132, 0.2",
            //     strokeColor: "rgba(255, 99, 132, 1)",
            //     pointColor: "rgba(52,152,219,1)",
            //     markerShape: "circle",
            //     pointStrokeColor: "rgba(255,255,255,1.00)",
            //     data: [<?= explode('+', $k_pidum[1]['pratut'])[0];  ?>, <?= explode('+', $k_pidum[1]['tut'])[0];  ?>, <?= explode('+', $k_pidum[1]['eks'])[0];  ?>],
            //     title: "Target"
            // }, 
            {
                fillColor: "rgba(54, 162, 235, 0.2)",
                strokeColor: "rgba(54, 162, 235, 1)",
                pointColor: "rgba(46,204,113,1)",
                markerShape: "circle",
                pointStrokeColor: "rgba(255,255,255,1.00)",
                data: [<?= explode('+', $k_pidum[1]['pratut'])[1];  ?>, <?= explode('+', $k_pidum[1]['tut'])[1];  ?>, <?= explode('+', $k_pidum[1]['eks'])[1];  ?>],
                title: "Realisasi"
            },
            //  {

            //     fillColor: "rgba(255, 206, 86, 0.2)",
            //     strokeColor: "rgba(255, 206, 86, 1)",
            //     pointColor: "rgba(155,89,182,1)",
            //     markerShape: "circle",
            //     pointStrokeColor: "rgba(255,255,255,1)",
            //     data: [<?= explode('+', $k_pidum[0]['pratut'])[2];  ?>, <?= explode('+', $k_pidum[0]['tut'])[2];  ?>, <?= explode('+', $k_pidum[0]['eks'])[2];  ?>],
            //     title: "Sisa Anggaran"
            // },
        ]
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
        scaleLineColor: "rgba(0,0,0,0.4)",
        scaleOverlay: false,
        scaleOverride: false,
        scaleSteps: 10,
        scaleStepWidth: 10,
        scaleStartValue: 0,
        inGraphDataShow: true,
        inGraphDataTmpl: '<%=v3%>',
        inGraphDataFontFamily: "'Open Sans'",
        inGraphDataFontStyle: "normal",
        inGraphDataFontColor: "rgba(0, 0, 0,1.00)",
        inGraphDataFontSize: 12,
        inGraphDataPaddingX: -2,
        inGraphDataPaddingY: 0,
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
        legendFontColor: "rgba(148,148,148,1)",
        legendFontSize: 15,
        showYAxisMin: false,
        rotateLabels: "smart",
        xAxisBottom: true,
        yAxisLeft: true,
        yAxisRight: false,
        scaleFontFamily: "'Open Sans'",
        scaleFontStyle: "normal normal",
        scaleFontColor: "rgba(148,148,148,1)",
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
        scaleYGridLinesStep: 1,
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
        barShowStroke: true,
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
        },
        graphSubTitle: "Realisasi",
        graphTitleFontColor: "rgba(52,152,225,1)",
        graphSubTitleFontFamily: "'Open Sans'",
        graphSubTitleFontColor: "rgba(225,225,225,1)",
    };
    DrawTheChart(ChartData, ChartOptions, "k-pidum", "Bar");
</script>

<script>
    // Chart 10
    function MoreChartOptions() {}
    var ChartData = {
        labels: ["LID", "DIK", "PRATUT DAN TUT", "EKSEKUSI"],
        datasets: [
            //     {
            //     fillColor: "rgba(255, 99, 132, 0.2",
            //     strokeColor: "rgba(255, 99, 132, 1)",
            //     pointColor: "rgba(52,152,219,1)",
            //     markerShape: "circle",
            //     pointStrokeColor: "rgba(255,255,255,1.00)",
            //     data: [<?= explode('+', $k_pidsus[0]['lid'])[0];  ?>, <?= explode('+', $k_pidsus[0]['dik'])[0];  ?>, <?= explode('+', $k_pidsus[0]['tut'])[0];  ?>, <?= explode('+', $k_pidsus[0]['eks'])[0];  ?>],
            //     title: "Target"
            // },
            {
                fillColor: "rgba(54, 162, 235, 0.2)",
                strokeColor: "rgba(54, 162, 235, 1)",
                pointColor: "rgba(46,204,113,1)",
                markerShape: "circle",
                pointStrokeColor: "rgba(255,255,255,1.00)",
                data: [<?= explode('+', $k_pidsus[1]['lid'])[1];  ?>, <?= explode('+', $k_pidsus[1]['dik'])[1];  ?>, <?= explode('+', $k_pidsus[1]['tut'])[1];  ?>, <?= explode('+', $k_pidsus[1]['eks'])[1];  ?>],
                title: "Realisasi"
            },
            //  {
            //     fillColor: "rgba(255, 206, 86, 0.2)",
            //     strokeColor: "rgba(255, 206, 86, 1)",
            //     pointColor: "rgba(155,89,182,1)",
            //     markerShape: "circle",
            //     pointStrokeColor: "rgba(255,255,255,1)",
            //     data: [<?= explode('+', $k_pidsus[1]['lid'])[2];  ?>, <?= explode('+', $k_pidsus[1]['dik'])[2];  ?>, <?= explode('+', $k_pidsus[1]['tut'])[2];  ?>, <?= explode('+', $k_pidsus[1]['eks'])[2];  ?>],
            //     title: "Sisa Anggaran"
            // },
        ]
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
        scaleLineColor: "rgba(0,0,0,0.4)",
        scaleOverlay: false,
        scaleOverride: false,
        scaleSteps: 10,
        scaleStepWidth: 10,
        scaleStartValue: 0,
        inGraphDataShow: true,
        inGraphDataTmpl: '<%=v3%>',
        inGraphDataFontFamily: "'Open Sans'",
        inGraphDataFontStyle: "normal",
        inGraphDataFontColor: "rgba(255,255,255,1.00)",
        inGraphDataFontSize: 12,
        inGraphDataPaddingX: -2,
        inGraphDataPaddingY: 0,
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
        legendFontColor: "rgba(148,148,148,1)",
        legendFontSize: 15,
        showYAxisMin: false,
        rotateLabels: "smart",
        xAxisBottom: true,
        yAxisLeft: true,
        yAxisRight: false,
        scaleFontFamily: "'Open Sans'",
        scaleFontStyle: "normal normal",
        scaleFontColor: "rgba(148,148,148,1)",
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
        scaleYGridLinesStep: 1,
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
        barShowStroke: true,
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
        },
        graphSubTitle: "Realisasi",
        graphTitleFontColor: "rgba(52,152,225,1)",
        graphSubTitleFontFamily: "'Open Sans'",
        graphSubTitleFontColor: "rgba(225,225,225,1)",
    };
    DrawTheChart(ChartData, ChartOptions, "k-pidsus", "Bar");
</script>

<script>
    // Chart 10
    function MoreChartOptions() {}
    var ChartData = {
        labels: ["PERKARA", "INFORMASI PELAYANAN", "PERTIMBANGAN HUKUM"],
        datasets: [
            //     {
            //     fillColor: "rgba(255, 99, 132, 0.2",
            //     strokeColor: "rgba(255, 99, 132, 1)",
            //     pointColor: "rgba(52,152,219,1)",
            //     markerShape: "circle",
            //     pointStrokeColor: "rgba(255,255,255,1.00)",
            //     data: [<?= explode('+', $k_datun[1]['perkara'])[0];  ?>, <?= explode('+', $k_datun[1]['info'])[0];  ?>, <?= explode('+', $k_datun[1]['hukum'])[0];  ?>, ],
            //     title: "Target"
            // },
            {
                fillColor: "rgba(54, 162, 235, 0.2)",
                strokeColor: "rgba(54, 162, 235, 1)",
                pointColor: "rgba(46,204,113,1)",
                markerShape: "circle",
                pointStrokeColor: "rgba(255,255,255,1.00)",
                data: [<?= explode('+', $k_datun[1]['perkara'])[1];  ?>, <?= explode('+', $k_datun[1]['info'])[1];  ?>, <?= explode('+', $k_datun[1]['hukum'])[1];  ?>, ],
                title: "Realisasi"
            },
            //  {
            //     fillColor: "rgba(255, 206, 86, 0.2)",
            //     strokeColor: "rgba(255, 206, 86, 1)",
            //     pointColor: "rgba(155,89,182,1)",
            //     markerShape: "circle",
            //     pointStrokeColor: "rgba(255,255,255,1)",
            //     data: [<?= explode('+', $k_datun[1]['perkara'])[2];  ?>, <?= explode('+', $k_datun[1]['info'])[2];  ?>, <?= explode('+', $k_datun[1]['hukum'])[2];  ?>, ],
            //     title: "Sisa Anggaran"
            // },
        ]
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
        scaleLineColor: "rgba(0,0,0,0.4)",
        scaleOverlay: false,
        scaleOverride: false,
        scaleSteps: 10,
        scaleStepWidth: 10,
        scaleStartValue: 0,
        inGraphDataShow: true,
        inGraphDataTmpl: '<%=v3%>',
        inGraphDataFontFamily: "'Open Sans'",
        inGraphDataFontStyle: "normal",
        inGraphDataFontColor: "rgba(0, 0, 0,1.00)",
        inGraphDataFontSize: 12,
        inGraphDataPaddingX: -2,
        inGraphDataPaddingY: 0,
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
        legendFontColor: "rgba(148,148,148,1)",
        legendFontSize: 15,
        showYAxisMin: false,
        rotateLabels: "smart",
        xAxisBottom: true,
        yAxisLeft: true,
        yAxisRight: false,
        scaleFontFamily: "'Open Sans'",
        scaleFontStyle: "normal normal",
        scaleFontColor: "rgba(148,148,148,1)",
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
        scaleYGridLinesStep: 1,
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
        barShowStroke: true,
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
        },
        graphSubTitle: "Realisasi",
        graphTitleFontColor: "rgba(52,152,225,1)",
        graphSubTitleFontFamily: "'Open Sans'",
        graphSubTitleFontColor: "rgba(225,225,225,1)",
    };
    DrawTheChart(ChartData, ChartOptions, "k-datun-2021", "Bar");
</script>
<!-- Chart Kinerja Scripts End -->

<?= $this->endSection(); ?>