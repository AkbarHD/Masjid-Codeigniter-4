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
                        <th>Nama User</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($user as $key => $value) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td>
                                <?= $value['nama_user'] ?>
                            </td>
                            <td>
                                <?= $value['email'] ?>
                            </td>
                            <td>
                                <?= $value['password'] ?>
                            </td>
                            <td>
                                <button class="btn btn-flat btn-sm btn-warning" data-toggle="modal" data-target="#modal-edit<?= $value['id_user'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                <button class="btn btn-flat btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete<?= $value['id_user'] ?>"><i class="fas fa-trash"></i></button>
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

<!-- /.modal-tambah -->
<div class="modal fade" id="modal-tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah <?= $judul ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open('User/InsertData') ?>

                <div class="form-group">
                    <label>Nama User</label>
                    <input class="form-control" name="nama_user" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" name="password">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- /.modal-edit -->
<?php foreach ($user as $key => $value) { ?>
    <div class="modal fade" id="modal-edit<?= $value['id_user'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit <?= $judul ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open('User/UpdateData/' . $value['id_user']) ?>
                    <div class="form-group">
                        <label>Nama User</label>
                        <input class="form-control" value="<?= $value['nama_user'] ?>" name="nama_user" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" value="<?= $value['email'] ?>" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" value="<?= $value['password'] ?>" name="password">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
                <?php echo form_close() ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <!-- /.modal-Delete -->
    <div class="modal fade" id="modal-delete<?= $value['id_user'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete <?= $judul ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Ingin Hapus Data ? <br>
                    <b><?= $value['nama_user'] ?></b>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('User/DeleteData/' . $value['id_user']) ?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>