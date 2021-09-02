<?php $this->extend('templates/beta'); ?>
<?php $this->section('page-content'); ?>


<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Pengaturan Beta 0.1</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Pengaturan</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <!-- UI -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">UI</h3>
                        <div class="card-tools">
                            <button type="button" id="min-btn-1" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="wrapper-os">
                            <div class="left-book">
                                <div class="l-front">
                                    <div class="col-md-12">
                                    <h1 class="text-center frontTitle">Adhyaksa Creative Team</h1>
                                    </div>
                                </div>

                                <div class="l-back">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="tops">
                                                <img src="<?= base_url();?>/img/logo-only.png" class="img-responsive avatar" width="25" height="25"/>
                                                <h3 class="mywords"><strong> Adhyaksa Creative<trong></h3>
                                            </div>
                                          
                                            <div class="col-md-12">
                                                <h1 class="title addPadding">
                                                    <strong></strong>
                                                </h1>
                                                    <p class="pad">Terimakasih telah mempercayakan Project ini kepada Tim kami, semoga Anda bahagia dengan hasilnya.
                                                    </p>
                                                    <p class="pad">
                                                        Salam Hangat Adhyaksa CreativeTeam
                                                    </p>

                                                    <div class="col-md-12">
                                                        <div class="icons">
                                                            <i class="fa fa-twitter fa-2x"></i>
                                                            <i class="fa fa-facebook fa-2x"></i>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="right-book">
                                        <div class="diag"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </div>
                    </div>
                   
                </div>
               
            </div>

        </div>
    </div>
    
</section>

<?php $this->endSection(); ?>