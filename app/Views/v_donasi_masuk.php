<div class="col-md-12">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Data <?= $judul ?></h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modal-tambah"><i class="fas fa-plus"></i> Tambah
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php
            if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-success">';
                echo session()->getFlashdata('pesan');
                echo '</div>';
            }
            ?>

            <table class="table" id="example1">
                <thead>
                    <tr>
                        <th width="50px">NO</th>
                        <th>Rekening Tujuan</th>
                        <th>Rekening Pengirim</th>
                        <th>Jumlah</th>
                        <th>Bukti</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($donasi as $key => $value) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td>
                                <p>
                                <h5><b><?= $value['nama_bank_tujuan'] ?></b></h5>
                                <?= $value['no_rek_tujuan'] ?> <br>
                                </p>
                            </td>
                            <td>
                                <p>
                                <h5><b><?= $value['nama_bank_pengirim'] ?></b></h5>
                                <?= $value['no_rek_pengirim'] ?> <br>
                                a.n : <?= $value['nama_pengirim'] ?> <br>
                                Tanggal : <?= $value['tgl'] ?>
                                </p>
                            </td>
                            <td>Rp. <?= number_format($value['jumlah'], 0) ?> <br>
                                <?= $value['jenis_donasi'] == 'Masjid' ? ' <span class="right badge badge-success">Masjid</span>' : ' <span class="right badge badge-primary">Sosial</span>' ?>
                            </td>
                            <td>
                                <img src="<?= base_url('bukti/' . $value['bukti']) ?>" width="350px">
                            </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>