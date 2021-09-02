<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <a href="#" class="brand-link ml-3">
        <!-- <img src="/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <i class="fab fa-medium"></i><span style="margin-top: 4px;" class="brand-text font-weight-bold"> Mc<b style="color:cornflowerblue;">Batola</b></span>
    </a>

    <!-- <i class="fab fa-medium"></i> -->
    <div class="sidebar">
        <?php
        // user()->user_image; 
        // user()->username;
        ?>
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url(); ?>/public/img/default.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="<?= base_url(); ?>/public/" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Beranda
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>
                            Laporan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">

                        <li class="nav-item">
                            <a href="<?= base_url(); ?>/public/capaian/laporan" class="nav-link">
                                <i style="color:green;" class="fas fa-caret-square-right nav-icon"></i>
                                <p>
                                    Anggaran
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>/public/kinerja/laporan" class="nav-link">
                                <i style="color:green;" class="fas fa-caret-square-right nav-icon"></i>
                                <p>
                                    Kinerja
                                </p>
                            </a>
                        </li>

                    </ul>

                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Form
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i style="color:green;" class="fas fa-caret-square-right nav-icon"></i>
                                <p>
                                    Anggaran
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: none;">
                                <li class="nav-item">
                                    <a href="<?= base_url(); ?>/public/anggaran/edit/intel" class="nav-link">
                                        <i class="far fa-caret-square-up nav-icon"></i>
                                        <p>Intel</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url(); ?>/public/anggaran/edit/pembinaan" class="nav-link">
                                        <i class="far fa-caret-square-up nav-icon"></i>
                                        <p>Pembinaan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url(); ?>/public/anggaran/edit/pidum" class="nav-link">
                                        <i class="far fa-caret-square-up nav-icon"></i>
                                        <p>PIDUM</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url(); ?>/public/anggaran/edit/pidsus" class="nav-link">
                                        <i class="far fa-caret-square-up nav-icon"></i>
                                        <p>PIDSUS</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url(); ?>/public/anggaran/edit/datun" class="nav-link">
                                        <i class="far fa-caret-square-up nav-icon"></i>
                                        <p>DATUN</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url(); ?>/public/anggaran/edit/bb" class="nav-link">
                                        <i class="far fa-caret-square-up nav-icon"></i>
                                        <p>BB</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i style="color:green;" class="fas fa-caret-square-right nav-icon"></i>
                                <p>
                                    Capaian Kinerja
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: none;">
                                <li class="nav-item">
                                    <a href="<?= base_url(); ?>/public/kinerja/edit/intel" class="nav-link">
                                        <i class="far fa-caret-square-up nav-icon"></i>
                                        <p>Intel</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url(); ?>/public/kinerja/edit/pembinaan" class="nav-link">
                                        <i class="far fa-caret-square-up nav-icon"></i>
                                        <p>Pembinaan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url(); ?>/public/kinerja/edit/pidum" class="nav-link">
                                        <i class="far fa-caret-square-up nav-icon"></i>
                                        <p>PIDUM</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url(); ?>/public/kinerja/edit/pidsus" class="nav-link">
                                        <i class="far fa-caret-square-up nav-icon"></i>
                                        <p>PIDSUS</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url(); ?>/public/kinerja/edit/datun" class="nav-link">
                                        <i class="far fa-caret-square-up nav-icon"></i>
                                        <p>DATUN</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url(); ?>/public/kinerja/edit/bb" class="nav-link">
                                        <i class="far fa-caret-square-up nav-icon"></i>
                                        <p>BB</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>

                </li>



                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Extra
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="http://10.22.10.101:4111/" class="nav-link">
                                <i style="color:green;" class="far fa-caret-square-up nav-icon"></i>
                                <p>CMS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://10.1.0.32/" class="nav-link">
                                <i style="color:green;" class="far fa-caret-square-up nav-icon"></i>
                                <p>SIMKARI</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i style="color:red;" class="far fa-caret-square-up nav-icon"></i>
                                <p>Indra-9</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <?php if (in_groups('admin')) : ?>
                    <li class="nav-item">
                        <a href="<?= base_url(); ?>/public/pengaturan" class="nav-link">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>
                                Pengaturan
                            </p>
                        </a>
                    </li>
                <?php endif ?>

                <li class="nav-item">
                    <a href="<?= base_url(); ?>/public/page/about" class="nav-link">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>
                            About
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url(); ?>/public/logout" class="nav-link">
                        <i style="color:red;" class="nav-icon fas fa-sign-out-alt"></i>
                        <p style="color:red;">
                            Logout
                        </p>
                    </a>
                </li>


            </ul>
        </nav>

    </div>

</aside>