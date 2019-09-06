</div>
<!-- /.page-content -->
</div>
</div>
<!-- /.main-content -->

<div class="footer">
    <div class="footer-inner">
        <div class="footer-content">
            <span class="bigger-120">
                <span class="blue bolder">&copy; Asis v.2</span>
            </span>

        </div>
    </div>
</div>




<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
    <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
</div>
<!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="<?php echo base_url(); ?>asset/js/jquery-2.1.4.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="<?php echo base_url(); ?>asset/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url(); ?>asset/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>
<script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->


<script src="<?php echo base_url(); ?>asset/js/jquery-ui.custom.min.js"></script>
<script src="<?php echo base_url(); ?>asset/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo base_url(); ?>asset/js/bootbox.js"></script>
<script src="<?php echo base_url(); ?>asset/js/jquery.easypiechart.min.js"></script>
<script src="<?php echo base_url(); ?>asset/js/jquery.gritter.min.js"></script>
<script src="<?php echo base_url(); ?>asset/js/spin.js"></script>
<script src="<?php echo base_url(); ?>asset/js/select2.min.js"></script>
<script src="<?php echo base_url(); ?>asset/js/bootstrap-datepicker.min.js"></script>

<!-- ace scripts -->
<script src="<?php echo base_url(); ?>asset/js/ace-elements.min.js"></script>
<script src="<?php echo base_url(); ?>asset/js/ace.min.js"></script>


<script src="<?php echo base_url(); ?>asset/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>asset/js/jquery.dataTables.bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>asset/js/jquery.inputmask.bundle.js"></script>


<!-- inline scripts related to this page -->

<script>
    var myTable = $('#data-tb').DataTable();
</script>

<script>
    <?php if ($this->session->flashdata('success')) { ?>
        $.gritter.add({
            title: 'Sukses',
            text: '<?php echo $this->session->flashdata('success'); ?>',
            class_name: 'gritter-success gritter-dark'
        });
    <?php } ?>

    <?php if ($this->session->flashdata('error')) { ?>
        $.gritter.add({
            title: 'Error',
            text: '<?php echo $this->session->flashdata('error'); ?>',
            class_name: 'gritter-error gritter-dark'
        });
    <?php } ?>
</script>

<script>
    $('.select2').css('width', '100%').select2({
        placeholder: "Pilih"
    });
    $(".tglCalendar").datepicker({
        todayHighlight: true,
        autoclose: true,
        format: "dd-mm-yyyy"
    });

    $(".tglBulan").datepicker({
        autoclose: true,
        format: "mm-yyyy",
        viewMode: "months",
        minViewMode: "months"
    });

    $('.rupiah').inputmask('decimal', {
        allowMinus: false,
        autoGroup: true,
        groupSeparator: '.',
        rightAlign: false,
        autoUnmask: true,
        removeMaskOnSubmit: true
    });

    $("input").attr("autocomplete", "off");

    $(".edit-user").click(function() {
        $(".tipe").val("edit");
        $(".id_user").val($(this).attr('data-id_user'));
        $(".nama").val($(this).attr('data-nama'));
        $(".username").val($(this).attr('data-username'));
        $(".password").val($(this).attr('data-password'));
        $(".id_jabatan").val($(this).attr('data-id_jabatan'));
        $("#modalFormLabel").html("Ubah Data User");
    });

    $(".view-pemasok").click(function() {
        $(".kode_pemasok").html($(this).attr('data-kode_pemasok'));
        $(".nama_pemasok").html($(this).attr('data-nama_pemasok'));
        $(".telepon_pemasok").html($(this).attr('data-telepon_pemasok'));
        $(".email").html($(this).attr('data-email'));
        $(".website").html($(this).attr('data-website'));
        $(".alamat").html($(this).attr('data-alamat'));
        $(".kabupaten").html($(this).attr('data-kabupaten'));
        $(".provinsi").html($(this).attr('data-provinsi'));
        $(".kode_pos").html($(this).attr('data-kode_pos'));
        $(".nama_kontak").html($(this).attr('data-nama_kontak'));
        $(".telepon_kontak").html($(this).attr('data-telepon_kontak'));
        $(".keterangan").html($(this).attr('data-keterangan'));
    });

    $(".view-persediaan-akhir").click(function() {
        var kode_pemasok = $(this).attr('data-kode_pemasok');
        var nama_pemasok = $(this).attr('data-nama_pemasok');
        $("#modalViewLabel").html("Riwayat Persediaan Akhir - " + nama_pemasok);
        $.get("<?php echo base_url(); ?>pemasok/ajax_riwayat_persediaan_akhir", {
            kode_pemasok: kode_pemasok
        }, function(data) {
            $("#tempat-view").html(data);
            $('#data-tb2').DataTable();
        });
    });


    $(".edit-penjual").click(function() {
        $(".tipe").val("edit");
        $(".id_penjual").val($(this).attr('data-id_penjual'));
        $(".kode_penjual").val($(this).attr('data-kode_penjual'));
        $(".nama_penjual").val($(this).attr('data-nama_penjual'));
        $(".keterangan").val($(this).attr('data-keterangan'));
        $(".kode_penjual").attr("readonly", true);
        $("#modalFormLabel").html("Ubah Data Penjual");
    });

    $(".edit-rayon").click(function() {
        $(".tipe").val("edit");
        $(".id_rayon").val($(this).attr('data-id_rayon'));
        $(".kode_rayon").val($(this).attr('data-kode_rayon'));
        $(".nama_rayon").val($(this).attr('data-nama_rayon'));
        $(".keterangan").val($(this).attr('data-keterangan'));
        $(".kode_rayon").attr("readonly", true);
        $("#modalFormLabel").html("Ubah Data Rayon");
    });

    $(".edit-pelanggan").click(function() {
        $(".tipe").val("edit");
        $(".id_pelanggan").val($(this).attr('data-id_pelanggan'));
        $(".kode_pelanggan").val($(this).attr('data-kode_pelanggan'));
        $(".nama_pelanggan").val($(this).attr('data-nama_pelanggan'));
        $(".telepon_pelanggan").val($(this).attr('data-telepon_pelanggan'));
        $(".email").val($(this).attr('data-email'));
        $(".alamat").val($(this).attr('data-alamat'));
        $(".kabupaten").val($(this).attr('data-kabupaten'));
        $(".provinsi").val($(this).attr('data-provinsi'));
        $(".kode_pos").val($(this).attr('data-kode_pos'));
        $(".kode_rayon").val($(this).attr('data-kode_rayon'));
        $(".kode_penjual").val($(this).attr('data-kode_penjual'));
        $(".level_harga").val($(this).attr('data-level_harga'));
        $(".keterangan").val($(this).attr('data-keterangan'));
        $(".kode_pelanggan").attr("readonly", true);
        $("#modalFormLabel").html("Ubah Data pelanggan");
    });

    $(".view-pelanggan").click(function() {
        $(".kode_pelanggan").html($(this).attr('data-kode_pelanggan'));
        $(".nama_pelanggan").html($(this).attr('data-nama_pelanggan'));
        $(".telepon_pelanggan").html($(this).attr('data-telepon_pelanggan'));
        $(".email").html($(this).attr('data-email'));
        $(".alamat").html($(this).attr('data-alamat'));
        $(".kabupaten").html($(this).attr('data-kabupaten'));
        $(".provinsi").html($(this).attr('data-provinsi'));
        $(".kode_pos").html($(this).attr('data-kode_pos'));
        $(".nama_rayon").html($(this).attr('data-nama_rayon'));
        $(".nama_penjual").html($(this).attr('data-nama_penjual'));
        $(".level_harga").html($(this).attr('data-level_harga'));
        $(".keterangan").html($(this).attr('data-keterangan'));
    });

    $(".edit-faktur_penjualan").click(function() {
        $(".tipe").val("edit");
        $(".id_faktur_penjualan").val($(this).attr('data-id_faktur_penjualan'));
        $(".kode_pelanggan").val($(this).attr('data-kode_pelanggan')).trigger('change');
        $(".nama_pelanggan").val($(this).attr('data-nama_pelanggan'));
        $(".kode_penjual").val($(this).attr('data-kode_penjual')).trigger('change');
        $(".nama_penjual").val($(this).attr('data-nama_penjual'));
        $(".no_faktur").val($(this).attr('data-no_faktur'));
        $(".tanggal").val($(this).attr('data-tanggal'));
        $(".jumlah").val($(this).attr('data-jumlah'));
        $(".keterangan").val($(this).attr('data-keterangan'));
        $(".no_faktur").attr("readonly", true);
        $("#modalFormLabel").html("Ubah Faktur Penjualan");
    });

    $(".view-faktur_penjualan").click(function() {
        $(".no_faktur").html($(this).attr('data-no_faktur'));
        $(".nama_pelanggan").html($(this).attr('data-nama_pelanggan'));
        $(".nama_penjual").html($(this).attr('data-nama_penjual'));
        $(".tanggal").html($(this).attr('data-tanggal'));
        $(".jumlah").html($(this).attr('data-jumlah'));
        $(".keterangan").html($(this).attr('data-keterangan'));
    });

    $(".edit-retur_penjualan").click(function() {
        $(".tipe").val("edit");
        $(".id_retur_penjualan").val($(this).attr('data-id_retur_penjualan'));
        $(".kode_pelanggan").val($(this).attr('data-kode_pelanggan')).trigger('change');
        $(".nama_pelanggan").val($(this).attr('data-nama_pelanggan'));
        $(".kode_penjual").val($(this).attr('data-kode_penjual')).trigger('change');
        $(".nama_penjual").val($(this).attr('data-nama_penjual'));
        $(".no_retur").val($(this).attr('data-no_retur'));
        $(".tanggal").val($(this).attr('data-tanggal'));
        $(".jumlah").val($(this).attr('data-jumlah'));
        $(".keterangan").val($(this).attr('data-keterangan'));
        $(".no_retur").attr("readonly", true);
        $("#modalFormLabel").html("Ubah Retur Penjualan");
    });

    $(".view-retur_penjualan").click(function() {
        $(".no_retur").html($(this).attr('data-no_retur'));
        $(".nama_pelanggan").html($(this).attr('data-nama_pelanggan'));
        $(".nama_penjual").html($(this).attr('data-nama_penjual'));
        $(".tanggal").html($(this).attr('data-tanggal'));
        $(".jumlah").html($(this).attr('data-jumlah'));
        $(".keterangan").html($(this).attr('data-keterangan'));
    });

    $(".edit-laba_kotor").click(function() {
        $(".tipe").val("edit");
        $(".id_laba_kotor").val($(this).attr('data-id_laba_kotor'));
        $(".kode_pelanggan").val($(this).attr('data-kode_pelanggan')).trigger('change');
        $(".nama_pelanggan").val($(this).attr('data-nama_pelanggan'));
        $(".kode_penjual").val($(this).attr('data-kode_penjual')).trigger('change');
        $(".nama_penjual").val($(this).attr('data-nama_penjual'));
        $(".tanggal").val($(this).attr('data-tanggal'));
        $(".jumlah").val($(this).attr('data-jumlah'));
        $(".no_retur").attr("readonly", true);
        $("#modalFormLabel").html("Ubah Laba Kotor");
    });
</script>
</body>

</html>