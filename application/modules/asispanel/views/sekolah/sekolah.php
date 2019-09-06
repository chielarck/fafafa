<div class="row">
    <div class="col-md-12">
        <div class="widget-box widget-color-dark">
            <div class="widget-header">
                <h5 class="widget-title"><?php echo $judul; ?></h5>

                <div class="widget-toolbar">


                    <a href="#" class="btn btn-danger btn-xs edit-sekolah" data-toggle="modal" data-target="#modalForm">
                        <i class="fa fa-edit"> </i> Ubah Data
                    </a>


                </div>
            </div>

            <div class="widget-body">
                <div class="widget-main">
                    <div>
                        <table class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:200px;">Nama Sekolah</th>
                                    <td style="width:10px;">:</td>
                                    <td><?php echo $nama_sekolah; ?></td>
                                </tr>
                                <tr>
                                    <th>NPSN</th>
                                    <td>:</td>
                                    <td><?php echo $npsn; ?></td>
                                </tr>
                                <tr>
                                    <th>NSS</th>
                                    <td>:</td>
                                    <td><?php echo $nss; ?></td>
                                </tr>
                                <tr>
                                    <th>Provinsi</th>
                                    <td>:</td>
                                    <td><?php echo $provinsi; ?></td>
                                </tr>
                                <tr>
                                    <th>Kabupaten</th>
                                    <td>:</td>
                                    <td><?php echo $kabupaten; ?></td>
                                </tr>
                                <tr>
                                    <th>Kecamatan</th>
                                    <td>:</td>
                                    <td><?php echo $kecamatan; ?></td>
                                </tr>
                                <tr>
                                    <th>Kelurahan</th>
                                    <td>:</td>
                                    <td><?php echo $kelurahan; ?></td>
                                </tr>
                                <tr>
                                    <th>Kodepos</th>
                                    <td>:</td>
                                    <td><?php echo $kodepos; ?></td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>:</td>
                                    <td><?php echo $alamat; ?></td>
                                </tr>
                                <tr>
                                    <th>No.Telepon</th>
                                    <td>:</td>
                                    <td><?php echo $no_telepon; ?></td>
                                </tr>
                                <tr>
                                    <th>Website</th>
                                    <td>:</td>
                                    <td><?php echo $website; ?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>:</td>
                                    <td><?php echo $email; ?></td>
                                </tr>
                                <tr>
                                    <th>Logo</th>
                                    <td>:</td>
                                    <td>
                                        <?php 
                                            if(empty($logo)) {
                                                echo '<img src="'.base_url().'upload/noimage.png" style="width:250px;height:150px;">';
                                            } else {
                                                echo '<img src="'.base_url().'upload/'.$logo.'" style="width:250px;height:150px;">';
                                            }
                                        ?>
                                    </td>
                                </tr>
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
                <h4 class="modal-title" id="modalFormLabel">Ubah Data Sekolah</h4>
            </div>

            <form action="<?php echo base_url() . $app; ?>master/save_sekolah" method="post" enctype="multipart/form-data">
                <input class="tipe" type="hidden" name="tipe" value="add">
                <input class="id_user" type="hidden" name="id_user">
                <div class="modal-body">
                    <table class="table-form">
                        <tbody>
                            <tr>
                                <td class="tblabel">Nama Sekolah</th>
                                <td><input class="form-control nama_sekolah" name="nama_sekolah" type="text" value="<?php echo $nama_sekolah; ?>" required /></td>
                            </tr>
                            <tr>
                                <td class="tblabel">NPSN</th>
                                <td><input class="form-control npsn" name="npsn" value="<?php echo $npsn; ?>" type="text"  /></td>
                            </tr>
                            <tr>
                                <td class="tblabel">NSS</th>
                                <td><input class="form-control nss" name="nss" value="<?php echo $nss; ?>" type="text"  /></td>
                            </tr>
                            <tr>
                                <td class="tblabel">Provinsi</th>
                                <td><input class="form-control provinsi" name="provinsi" value="<?php echo $provinsi; ?>" type="text"  /></td>
                            </tr>
                            <tr>
                                <td class="tblabel">Kabupaten</th>
                                <td><input class="form-control kabupaten" name="kabupaten" value="<?php echo $kabupaten; ?>"  type="text"  /></td>
                            </tr>
                            <tr>
                                <td class="tblabel">Kecamatan</th>
                                <td><input class="form-control kecamatan" name="kecamatan" value="<?php echo $kecamatan; ?>" type="text"  /></td>
                            </tr>
                            <tr>
                                <td class="tblabel">Kelurahan</th>
                                <td><input class="form-control kelurahan" name="kelurahan" value="<?php echo $kelurahan; ?>" type="text"  /></td>
                            </tr>
                            <tr>
                                <td class="tblabel">Kodepos</th>
                                <td><input class="form-control kodepos" name="kodepos" value="<?php echo $kodepos; ?>" type="text"  /></td>
                            </tr>
                            <tr>
                                <td class="tblabel">Alamat</th>
                                <td><input class="form-control alamat" name="alamat" value="<?php echo $alamat; ?>" type="text"  /></td>
                            </tr>
                            <tr>
                                <td class="tblabel">No.Telepon</th>
                                <td><input class="form-control no_telepon" name="no_telepon" value="<?php echo $no_telepon; ?>" type="text"  /></td>
                            </tr>
                            <tr>
                                <td class="tblabel">Website</th>
                                <td><input class="form-control website" name="website" value="<?php echo $website; ?>" type="text"  /></td>
                            </tr>
                            <tr>
                                <td class="tblabel">Email</th>
                                <td><input class="form-control email" name="email" value="<?php echo $email; ?>" type="email"  /></td>
                            </tr>
                            <tr>
                                <td class="tblabel">Logo</th>
                                <td><input class="form-control" name="logo" type="file"  /></td>
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