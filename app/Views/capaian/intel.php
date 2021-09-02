<?= $this->extend('capaian/index'); ?>

<?= $this->section('page-data'); ?>

<div class="card-body">

    <table class="table table-bordered table-hover text-center">

        <thead>

            <tr>
                <th>NO</th>
                <th>LID/PAM/GAL</th>
                <th>PAKEM</th>
                <th>PENKUM</th>
                <th>JMS/JAKSA MENYAPA</th>
                <th>KET</th>
                <th>TGL INPUT</th>
                <th>Action</th>
            </tr>

            <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
            </tr>

        </thead>

        <tbody>

            <?php $i = 1; ?>

            <?php foreach ($data_h as $dh) : ?>

                <tr>

                    <td>
                        <?= $i++; ?>
                    </td>

                    <td>
                        <?= $dh['lpg'] ?>
                    </td>

                    <td>
                        <?= $dh['pakem'] ?>
                    </td>

                    <td>
                        <?= $dh['penkum'] ?>
                    </td>

                    <td>
                        <?= $dh['jms'] ?>
                    </td>

                    <td>
                        <?= $dh['ket'] ?>
                    </td>

                    <td>
                        <?= $dh['tgl_reg'] ?>
                    </td>

                    <td>
                        <a href="/rin/edit/<?= $head_t; ?>/<?= $dh['id'] ?>" class="btn btn-success"><i class="fas fa-eye"></i></a>
                        <a href="/rin/delete/<?= $head_t; ?>/<?= $dh['id'] ?>" class="btn btn-danger" onclick='return confirm("Yakin Hapus?")'><i class="fas fa-trash"></i></a>
                    </td>

                </tr>

            <?php endforeach ?>

        </tbody>

    </table>

    <?= $pager->links(); ?>

</div>

<?= $this->endSection(); ?>