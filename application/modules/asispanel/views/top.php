<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>asis | Cpanel</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/select2.min.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/fonts.googleapis.com.css" />

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/jquery-ui.custom.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/jquery.gritter.min.css" />


    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/ace-skins.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/ace-ie.min.css" />
		<![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="<?php echo base_url(); ?>asset/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
		<script src="<?php echo base_url(); ?>asset/js/html5shiv.min.js"></script>
		<script src="<?php echo base_url(); ?>asset/js/respond.min.js"></script>
        <![endif]-->

    <style>
        .modal-title {
            font-weight: bold;
        }

        .table-form {
            width: 100%;
        }

        .table-form tr td {
            vertical-align: middle;
            padding: 5px;
        }

        .table-form tr td.tblabel {
            font-weight: bold;
            width: 25%;
        }
    </style>
</head>

<body class="no-skin">
    <div id="navbar" class="navbar navbar-default ace-save-state">
        <div class="navbar-container ace-save-state" id="navbar-container">
            <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>
            </button>

            <div class="navbar-header pull-left">
                <a href="<?php echo base_url(); ?>" class="navbar-brand">
                    <small>
                        <i class="fa fa-desktop"></i>
                        asis | Cpanel
                    </small>
                </a>
            </div>

            <div class="navbar-buttons navbar-header pull-right" role="navigation">
                <ul class="nav ace-nav">

                    <li class="light-blue dropdown-modal">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <img class="nav-user-photo" src="<?php echo base_url(); ?>asset/images/avatars/user.jpg" alt="Jason's Photo" />
                            <span class="user-info">
                                <small>Selamat Datang,</small>
                                <?php echo $this->session->userdata("nama"); ?>
                            </span>

                            <i class="ace-icon fa fa-caret-down"></i>
                        </a>

                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                            <li>
                                <a href="#" data-toggle="modal" data-target="#modalPassword">
                                    <i class="ace-icon fa fa-lock"></i> Ubah Password
                                </a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="<?php echo base_url(); ?>">
                                    <i class="ace-icon fa fa-power-off"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.navbar-container -->
    </div>



    <div class="modal fade" id="modalPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modalFormLabel">Ubah Password</h4>
                </div>

                <form action="<?php echo base_url().$app; ?>master/save_password" method="post">
                    <div class="modal-body">
                        <table class="table-form">
                            <tbody>
                                <tr>
                                    <td class="tblabel">Password Lama </th>
                                    <td><input class="form-control" name="password_lama" type="password" required /></td>
                                </tr>
                                <tr>
                                    <td class="tblabel">Password Baru</th>
                                    <td><input class="form-control" name="password_baru" type="password" required /></td>
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