<div class="row">
    <div class="col-md-12">
        <div class="widget-box widget-color-dark">
            <div class="widget-header">
                <h5 class="widget-title"><?php echo $judul; ?></h5>

                <div class="widget-toolbar">


                    <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modalForm">
                        <i class="fa fa-plus"> </i> Tambah Data
                    </a>


                </div>
            </div>

            <div class="widget-body">
                <div class="widget-main">
                    <div>
                        <table id="data-tb" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($user->result_array() as $data) { ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $data['nama']; ?></td>
                                        <td><?php echo $data['nama_jabatan']; ?></td>
                                        <td><?php echo $data['username']; ?></td>
                                        <td><?php echo $data['password']; ?></td>
                                        <td class="text-center">
                                            <a class="btn btn-xs btn-success edit-user" href="" data-toggle="modal" data-target="#modalForm" data-id_user="<?php echo $data['id_user']; ?>" data-nama="<?php echo $data['nama']; ?>" data-username="<?php echo $data['username']; ?>" data-password="<?php echo $data['password']; ?>" data-id_jabatan="<?php echo $data['id_jabatan']; ?>"><i class="fa fa-pencil bigger-120"> </i></a>
                                            <a class="btn btn-xs btn-danger " href="<?php echo base_url().$app . 'master/delete_user/' . $data['id_user']; ?>" onclick="return confirm('Yakin ingin hapus data ?');"><i class="fa fa-trash bigger-120"> </i></a>
                                        </td>
                                    </tr>
                                <?php $no++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalFormLabel">Tambah Data user</h4>
            </div>

            <form action="<?php echo base_url() . $app; ?>master/save_user" method="post">
                <input class="tipe" type="hidden" name="tipe" value="add">
                <input class="id_user" type="hidden" name="id_user">
                <div class="modal-body">
                    <table class="table-form">
                        <tbody>
                            <tr>
                                <td class="tblabel">Nama User</th>
                                <td><input class="form-control nama" name="nama" type="text" required /></td>
                            </tr>
                            <tr>
                                <td class="tblabel">Posisi</th>
                                <td>
                                    <select class="form-control id_jabatan" name="id_jabatan" required>
                                        <?php echo $combo_jabatan; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="tblabel">Username</th>
                                <td><input class="form-control username" name="username" type="text" required /></td>
                            </tr>

                            <tr>
                                <td class="tblabel">Password</th>
                                <td><input class="form-control password" name="password" type="password" required /></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary"><i class="fa fa-save"> </i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>