<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>ICON+ Dashboard</title>
		 <link rel="icon" href="<?php echo base_url(); ?>asset/assets/img/icon.png" />
		<meta name="description" content="SBU &amp; POP SB" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/assets/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link href="<?php echo base_url(); ?>asset/assetsu/css/bootstrap-table.css" rel="stylesheet">
		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script href="<?php echo base_url(); ?>asset/assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<img src="<?php echo base_url(); ?>asset/assets/img/icon.png" width="50px" alt="" />
							 Dashboard
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">
                        <li class="light-blue dropdown-modal">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="<?php echo base_url(); ?>asset/assets/img/user.png" alt="Jason's Photo" />
                                <span class="user-info">
                                    <small>Welcome,</small>
                                    Admin
                                </span>

                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>

                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li>
                                  <a href="<?php echo base_url('index.php/Ctrl_pop/logout/')?>">
                                        <i class="ace-icon fa fa-power-off"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				 <?php include('menu.php'); ?>

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								 <a href="<?php echo base_url(); ?>index.php/Home">Dashbord</a>
							</li>

							<li>
								 <a href="<?php echo base_url(); ?>index.php/Ctrl_pop/pop_Data/1/sb">POP SB</a>
							</li>

							<li class="active">Detail POP SB & List Room
							</li>
							
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							

							
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Detail "POP SB - <strong><?php echo $kode_pop ?>" </strong>
								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
<!--Start page content-->
        <div id="content" class="main-content-inner">

            <div class="inner">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Detail POP SB
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">

											<div class="modal-body no-padding">
												<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
			
                                    <thead align="center">
                                        <tr>
                                            <th width="200px"><strong>Jenis</strong></th>
                                            <th><strong>Kondisi</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <td> <strong>Kode POP</strong> </td>
                                            <td><?php echo $Kode_POP; ?></td>
                                        </tr>
                                        <tr class="warning">
                                            <td> <strong>Alamat POP</strong></td>
                                            <td><?php echo $Alamat_POP; ?></td>
                                        </tr>
                                        <tr class="active">
                                            <td> <strong>Koordinat POP</strong></td>
                                            <td><?php echo $Koordinat_POP; ?></td>
                                        </tr>
                                        <tr class="warning">
                                            <td><strong> CyberKey</strong></td>
                                            <td><?php echo $CyberKey; ?></td>
                                        </tr>
                                         <tr class="active">
                                            <td> <strong>Area POP</strong></td>
                                            <td><?php echo $Area_POP; ?></td>
                                        </tr>
                                         <tr class="warning">
                                            <td> <strong>Tipe POP</strong></td>
                                            <td><?php echo $Tipe_POP; ?></td>
                                        </tr>
                                         <tr class="active">
                                            <td> <strong>Foto POP</strong></td>
                                            <td><?php $gambar = $Foto_POP;?>
                                                <a href="#gamb" data-toggle="modal"> <img src="<?php echo base_url('public/POP/Foto/'.$gambar);?>" class="img-responsive" width="120px" height="120px"></a>
                                                <?php echo $Foto_POP; ?></td>
                                        </tr>
                                        <tr class="warning">
                                            <td> </td>
                                            <td><?php $gambar2 = $Foto_POP2;?>
                                                <a href="#gamb2" data-toggle="modal"><img src="<?php echo base_url('public/POP/Foto/'.$gambar2);?>" class="img-responsive" width="120px" height="120px"></a>
                                                <?php echo $Foto_POP2; ?></td>
                                        </tr>
                                        <tr class="active">
                                        	<td><strong> Keterangan</strong> </td>
                                        	<td><textarea type="text" class="form-control" readonly="true" style="height: 200px" name="Keterangan" id="Keterangan" ><?php echo $Keterangan; ?> </textarea> </td>
                                        </tr>
                                        <tr class="warning">
                                            <td><strong> File</strong></td>
                                            <td><a href="<?=base_url()?>public/POP/File/<?=$File_POP;?>">
                                                <?php echo $File_POP; ?></td>
                                        </tr>

                                        <tr class="warning">
                                            <td><strong> Tanggal Upload</strong></td>
                                            <td><?php echo $Tgl_upload; ?></td>
                                        </tr>
                                        <tr class="warning">
                                            <td><strong> Waktu Upload</strong></td>
                                            <td><?php echo $Wkt_upload; ?></td>
                                        </tr>
                                    </tbody>

												</table>
											</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><hr>


            
       
     <!--    <?php //echo anchor(site_url('Ctrl_pop/createRoom/'.$id_pop),'Tambah'); ?> -->
   
<br><br>	
            <div class="col-lg-12">
                <div class="panel panel-default" align="center">
                    <div class="panel-heading" align="center"><h3>List Room &nbsp - &nbsp POP <strong>" <?php echo $Kode_POP?> "</strong></h3></div>
                    <div class="panel-body" style="width: 800px">
                    <div class="col-md-12" align="left">
                    <a href="#modal-table" class="btn btn-info no-border" data-toggle="modal">Tambah Room</a>
                    </div>    
                        <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                            <font color="red"> <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?></font>
                                    <thead align="center" class="">
                                        <tr>
                                            <th>KODE ROOM</th>
                                            <th>NAMA ROOM </th>
                                            <th class="center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                                if ($room!=null) {
                                                foreach ($room as $room) {
                                            ?>
                                                <td><?php echo $room->kode_room;?></td>
                                                <td><?php echo $room->nama_room;?></td>  
                        				<td>
                        	<a href="<?php echo site_url('Ctrl_pop/createRak/'.$room->id)?>">
											
										<button class="btn btn-success btn-xs no-border" id="open-event" title="Detail">
												<i class="ace-icon glyphicon glyphicon-list"></i>
											</button> 
										</a>  

										<a href="<?php echo site_url('Ctrl_pop/update_room/'.$room->id.'/'.$id_pop)?>">
											
										<button class="btn btn-primary btn-xs no-border " id="hide-option" title="Update">
												<i class="ace-icon glyphicon glyphicon-pencil"></i>
											</button>                               

										</a>  
										<?php echo anchor(site_url('Ctrl_pop/delete_room/'.$room->id.'/'.$id_pop),'<button class="btn btn-danger btn-xs no-border"  id="show-option" title="Delete">
												<i class="ace-icon glyphicon glyphicon-trash"></i>
											</button> ','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); ?>
                            </td>
                    </tr>
                                        <tr>
                        <?php 
                    }
                }else{
                    echo "<td colspan='3'>Data ROOM Belum Ada</td>";
                }
                ?>
            </tr>
                    </tbody>
                    
        </table>
        <div class="col-md-12" align="right">
         	<a href="<?php echo base_url('index.php/Ctrl_pop/back/')?>" class="btn btn-danger" data-toggle="modal">
				Kembali 
			</a>
		</div>

    </div> 
<!--POP UP GAMBAR -->

    <div id="gamb" class="modal fade" role="dialog" tabindex="-1" >
									<div class="modal-dialog">
										<div class="modal-content col-md-12">
											<div class="modal-header no-padding">
												<div class="table-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														<span class="white">&times;</span>
													</button>
													Gambar 1
												</div>
											</div>
                      <div class="img-responsive">
<img src="<?php echo base_url('public/POP/Foto/'.$gambar);?>" class="img-responsive" width="100%" height="100%">
                                                <?php echo $Foto_POP; ?>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div>

<div id="gamb2" class="modal fade" role="dialog" tabindex="-1" >
									<div class="modal-dialog">
										<div class="modal-content col-md-12">
											<div class="modal-header no-padding">
												<div class="table-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														<span class="white">&times;</span>
													</button>
													Gambar 1
												</div>
											</div>
                      <div class="img-responsive">
<img src="<?php echo base_url('public/POP/Foto/'.$gambar2);?>" class="img-responsive" width="100%" height="100%">
                                                <?php echo $Foto_POP2; ?>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div>	 
<!-- POP UP GAMBAR-->

    <div id="modal-table" class="modal fade" role="dialog" tabindex="-1" >
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header no-padding">
												<div class="table-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														<span class="white">&times;</span>
													</button>
													TAMBAH ROOM
												</div>
											</div>

<!--Start page content-->
											<div class="modal-body no-padding">

    							<form action="<?php echo $action; ?>"  class="form-horizontal style-form" method="post" name="power" enctype="multipart/form-data" >
 
	 					  			 <label class="col-lg-3 control-label" for="varchar">Kode POP</label>
								    <div class="form-group">
									<div class="col-lg-5">
					      				<input type="text" class="form-control" name="kode_pop" id="kode_pop" placeholder="Kode POP" readonly="true" value="<?php echo $kode_pop; ?>" />
					      				<?php echo form_error('kode_pop') ?>
								    </div>
								    </div>

								    <label class="col-lg-3 control-label" for="varchar">Kode ROOM</label>
								    	<div class="form-group">
								    		<div class="col-lg-5">
								      			<input type="text" class="form-control" name="kode_room" id="kode_room" placeholder="Kode Room" value="<?php echo $kode_room; ?>" /> <?php echo form_error('kode_room') ?> 
								    		</div>
								    	</div>
					    
								    <label class="col-lg-3 control-label" for="varchar">Nama ROOM </label>
								    	<div class="form-group">
								    		<div class="col-lg-5">
								      			<input type="text" style="text-transform: capitalize;" class="form-control" name="nama_room" id="nama_room" placeholder="Nama Room" value="<?php echo $nama_room; ?>" /> <?php echo form_error('nama_room') ?> 
								    		</div>
								    	</div>

			                        <label class="col-lg-3 control-label" for="varchar">Foto Room  </label>
			                      <div class="form-group">
			                        <div class="col-lg-5">
			                          <input type="file" class="form-control" name="Foto_Room" onchange="ubah_file()" id="Foto_Room" placeholder="Foto Room" value="<?php echo $Foto_Room; ?>" /><?php echo form_error('Foto_Room') ?>
			                          <input type="hidden" name="nama_file" class="form-control" id="nama_file">
			                        </div>    
			                      </div>

			                        <label class="col-lg-3 control-label" for="varchar">Foto Room</label>
			                      <div class="form-group">
			                        <div class="col-lg-5">
			                          <input type="file" class="form-control" name="Foto_Room2" onchange="ubah_file3()" id="Foto_Room2" placeholder="Foto Room" value="<?php echo $Foto_Room2; ?>" /><?php echo form_error('Foto_Room') ?>
			                          <input type="hidden" name="nama_file3" class="form-control" id="nama_file3">
			                        </div>
			                      </div>

			                      <label class="col-lg-3 control-label" for="varchar">File Room</label>
			                    <div class="form-group">
			                        <div class="col-lg-5">
			                          <input type="file" class="form-control" onchange="ubah_file2()" name="File_Room" id="File_Room" placeholder="File Room" value="<?php echo $File_Room; ?>" /> <?php echo form_error('File_Room') ?>
			                          <input type="hidden" name="nama_file1" class="form-control" id="nama_file1">
			                        </div>
			                      </div>
			                   
			                    <label class="col-lg-3 control-label" for="int">Tanggal Upload </label>
			                      <div class="form-group">
			                        <div class="col-lg-3 control-label">
			                          <input type="text" class="form-control" readonly="true" name="tgl_upload_room" id="tgl_upload_room" placeholder="Tanggal Upload" 
			                          value="<?php if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta'); echo date('d-m-Y'); ?>" />
			                          <?php echo form_error('tgl_upload_room') ?>

			                        </div>  
			                        <label class="col-lg-2 control-label" for="int">Jam Upload </label>
			                        <div class="col-lg-2 control-label">
			                          <input type="text" class="form-control" readonly="true" name="wkt_upload_room" id="wkt_upload_room"
			                          value="<?php if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta'); echo date('H:i:s'); ?>" />

			                          <?php echo form_error('wkt_upload_room') ?>
			                        </div> 
			                      </div>
					     <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                                   
                            <a href="#" class="btn btn-danger no-border" data-dismiss="modal">Cancel</a>


    							</form>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div>  







						<!--End page content-->

					</div><!-- /.page-content -->

				</div>
			</div><!-- /.main-content -->


		<script src="<?php echo base_url(); ?>asset/assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url(); ?>asset/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url(); ?>asset/assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="<?php echo base_url(); ?>asset/assets/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url(); ?>asset/assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>asset/assets/js/dataTables.buttons.min.js"></script>
		<script src="<?php echo base_url(); ?>asset/assets/js/buttons.flash.min.js"></script>
		<script src="<?php echo base_url(); ?>asset/assets/js/buttons.html5.min.js"></script>
		<script src="<?php echo base_url(); ?>asset/assets/js/buttons.print.min.js"></script>
		<script src="<?php echo base_url(); ?>asset/assets/js/buttons.colVis.min.js"></script>
		<script src="<?php echo base_url(); ?>asset/assets/js/dataTables.select.min.js"></script>

		<!-- ace scripts -->
		<script src="<?php echo base_url(); ?>asset/assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url(); ?>asset/assets/js/ace.min.js"></script>
	    <script src="<?php echo base_url(); ?>asset/assets/plugins/jasny/js/bootstrap-fileupload.js"></script>

		<!-- inline scripts related to this page -->
<script src="<?php echo base_url(); ?>asset/assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo base_url(); ?>asset/assets/jquery-ui.min.js"></script>	
    <script src="<?php echo base_url(); ?>asset/assetsu/js/bootstrap-table.js"></script>		
<script type="text/javascript">
					//tooltips
				$( "#show-option" ).tooltip({
					show: {
						effect: "slideDown",
						delay: 250
					}
				});
			
				$( "#hide-option" ).tooltip({
					hide: {
						effect: "explode",
						delay: 250
					}
				});
			
				$( "#open-event" ).tooltip({
					show: null,
					position: {
						my: "left top",
						at: "left bottom"
					},
					open: function( event, ui ) {
						ui.tooltip.animate({ top: ui.tooltip.position().top + 10 }, "fast" );
					}
				});
</script>		
		 <script type="text/javascript">
                        function ubah_file(){
                          var file      = document.power.Foto_Room.value;
                          var nama_file = document.power.nama_file;

                          var startIndex = (file.indexOf('\\') >= 0 ? file.lastIndexOf('\\') : file.lastIndexOf('/'));
                          var filename = file.substring(startIndex);
                          if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                            filename = filename.substring(1);
                          }
                          nama_file.value=filename;
                        }
                        function ubah_file2(){
                          var file      = document.power.File_Room.value;
                          var nama_file = document.power.nama_file1;

                          var startIndex = (file.indexOf('\\') >= 0 ? file.lastIndexOf('\\') : file.lastIndexOf('/'));
                          var filename = file.substring(startIndex);
                          if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                            filename = filename.substring(1);
                          }
                          nama_file.value=filename;
                        }
                         function ubah_file3(){
                          var file      = document.power.Foto_Room2.value;
                          var nama_file = document.power.nama_file3;

                          var startIndex = (file.indexOf('\\') >= 0 ? file.lastIndexOf('\\') : file.lastIndexOf('/'));
                          var filename = file.substring(startIndex);
                          if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                            filename = filename.substring(1);
                          }
                          nama_file.value=filename;
                        }
                      </script>
		<script type="text/javascript">



			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],
					
					
					//"bProcessing": true,
			        //"bServerSide": true,
			        //"sAjaxSource": "http://127.0.0.1/table.php"	,
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			
			
					select: {
						style: 'multi'
					}
			    } );
			
				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					  {
						"extend": "colvis",
						"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: ':not(:first):not(:last)'
					  },
					  {
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "csv",
						"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "excel",
						"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "pdf",
						"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: 'This print was produced using the Print button for DataTables'
					  }		  
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});
			
			
			
				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				
				
				
				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/
				
				
				
				
				
				/**
				//add horizontal scrollbars to a simple table
				$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
				  {
					horizontal: true,
					styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
				).css('padding-top', '12px');
				*/
			
			
			})
		</script>
	</body>
</html>
