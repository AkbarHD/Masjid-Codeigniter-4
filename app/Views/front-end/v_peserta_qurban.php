<div class="col-md-12">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Data <?= $judul ?></h3>
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
            <div class="row">
                <?php foreach ($kelompok as $key => $value) { ?>
                    <div class="col-md-6">
                        <div class="card card-outline card-success">
                            <div class="card-header">
                                <h3 class="card-title"><?= $value['nama_kelompok'] ?></h3>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-borderless">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Peserta</th>
                                        <th>Biaya</th>
                                    </tr>
                                    <?php
                                    $db = \Config\Database::connect();
                                    $peserta = $db->table('tbl_peserta_kelompok')
                                        ->where('id_kelompok', $value['id_kelompok'])
                                        ->get()->getResultArray();
                                    $no = 1;

                                    foreach ($peserta as $key => $peserta) {
                                        $biaya = $db->table('tbl_peserta_kelompok')
                                            ->where('id_kelompok', $peserta['id_kelompok'])
                                            ->select('tbl_peserta_kelompok.id_kelompok')
                                            ->groupBy('tbl_peserta_kelompok.id_kelompok')
                                            ->selectSum('tbl_peserta_kelompok.biaya')
                                            ->get()->getRowArray();

                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $peserta['nama_peserta'] ?></td>
                                            <td>Rp. <?= number_format($peserta['biaya'], 0) ?></td>
                                        </tr>
                                    <?php } ?>
                                    <tr class="text-primary">
                                        <td></td>
                                        <td><b>Total Biaya : </b></td>
                                        <td><b>Rp <?= $peserta == null ? '0' : number_format($biaya['biaya'], 0) ?></b></td>
                                    </tr>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                <?php  } ?>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>