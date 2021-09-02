<?php
$kondis = $cont_dis;
if ($kondis == 1) {
    $exte = 'dataRin/tambah/index';
} else {
    $exte = 'dataRin/edit/index';
}
?>
<?= $this->extend($exte); ?>

<?= $this->section('page-data-tambah'); ?>

<div class="card-body">

    <div class="row">

        <div class="col-md-6">

            <div class="form-group">

                <label>Tanggal Input</label>
                <input name="tgl_reg" class="form-control" type="date">

            </div>

        </div>

        <div class="col-md-6">

            <div class="form-group">

                <label>Kantor</label>
                <select class="form-control select2 select2-hidden-accessible" disabled="" style="width: 100%;" data-select2-id="4" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="6">KEJAKSAAN NEGERI BARITO KUALA</option>
                </select>

            </div>

        </div>


    </div>

    <div class="row mt-5">
        <div class="col-6 mb-2 text-center">
            <h5>LID/PAM/GAL</h5>
        </div>
        <div class="col-6 mb-2 text-center">
            <h5>PAKEM</h5>
        </div>
        <div class="col-md-2 text-center">
            <div class="forn-group">
                <label>Target</label>
                <input name="no_masuk" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="forn-group">
                <label>Realisasi</label>
                <input name="no_masuk" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="forn-group">
                <label>Sisa Anggaran</label>
                <input name="no_masuk" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="forn-group">
                <label>Target</label>
                <input name="no_masuk" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="forn-group">
                <label>Realisasi</label>
                <input name="no_masuk" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="forn-group">
                <label>Sisa Anggaran</label>
                <input name="no_masuk" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
            </div>
        </div>

    </div>

    <div class="row mt-5">
        <div class="col-6 mb-2 text-center">
            <h5>PENKUM</h5>
        </div>
        <div class="col-6 mb-2 text-center">
            <h5>JMS / Jaksa Menyapa</h5>
        </div>
        <div class="col-md-2 text-center">
            <div class="forn-group">
                <label>Target</label>
                <input name="no_masuk" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="forn-group">
                <label>Realisasi</label>
                <input name="no_masuk" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="forn-group">
                <label>Sisa Anggaran</label>
                <input name="no_masuk" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="forn-group">
                <label>Target</label>
                <input name="no_masuk" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="forn-group">
                <label>Realisasi</label>
                <input name="no_masuk" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="forn-group">
                <label>Sisa Anggaran</label>
                <input name="no_masuk" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
            </div>
        </div>

    </div>



    <div class="row mt-3">
        <div class="col-md-12">
            <div class="forn-group">
                <label>Asal Surat</label>
                <textarea name="ket" class="form-control" rows="5"></textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="form-group">
                <button class="btn btn-primary float-right">Simpan</button>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>