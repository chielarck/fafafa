<div class="row">
    <div class="col-md-12">
        <div class="widget-box widget-color-dark">
            <div class="widget-header">
                <h5 class="widget-title"><?php echo $judul; ?></h5>

                <div class="widget-toolbar">
                </div>
            </div>

            <div class="widget-body">
                <div class="widget-main">
                    <div>
                        <table id="data-tb" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jabatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($jabatan->result_array() as $data) { ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $data['nama_jabatan']; ?></td>
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