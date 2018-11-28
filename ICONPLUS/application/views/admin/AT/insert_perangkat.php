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
		<script type="text/javascript" src="<?php echo base_url(); ?>asset/ckeditor/ckeditor.js"></script>

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
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Tables</a>
							</li>
							<li class="active">Simple &amp; Dynamic</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Tables
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Static &amp; Dynamic Tables
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
<!--Start page content-->

 <h2 style="margin-top:0px">Tambah PERANGKAT</h2>
  <h4>ROOM <?php echo $kode_room; ?> --- RAK <?php echo $kode_rak; ?></h4>
  <div class="row">
 
    <form action="<?php echo $action; ?>" class="form-horizontal style-form"  method="post" name="power" enctype="multipart/form-data">

        <label class="col-lg-3 control-label" for="int">Kode ROOM</label>
                    <div class="form-group">
                      <div class="col-lg-5">
                           <input type="text" class="form-control" name="kode_room" id="kode_room" placeholder="Kode POP" readonly="true" value="<?php echo $kode_room; ?>" required/>
                           <?php echo form_error('kode_room') ?>
                      </div>    
                    </div>

     <label class="col-lg-3 control-label" for="int">Kode RAK</label>
                    <div class="form-group">
                      <div class="col-lg-5">
                           <input type="text" class="form-control" name="kode_rak" id="kode_rak" placeholder="kode_rak" readonly="true" value="<?php echo $kode_rak; ?>" required/>
                           <?php echo form_error('kode_rak') ?>
                      </div>    
                    </div>

   <label class="col-lg-3 control-label" for="int">Kode Perangkat</label>
                    <div class="form-group">
                      <div class="col-lg-5">
                             <input type="text" class="form-control" name="kode_perangkat" id="kode_perangkat" placeholder="kode_perangkat" required/>
                           <?php echo form_error('kode_perangkat') ?>
                      </div>    
                    </div>

    <label class="col-lg-3 control-label" for="int">Nama Perangkat</label>
                    <div class="form-group">
                      <div class="col-lg-5">
                            <input type="text" class="form-control" style="text-transform: capitalize;" name="nama_perangkat" id="nama_perangkat" placeholder="nama_perangkat" required/>
                             <?php echo form_error('nama_perangkat') ?>
                      </div>    
                    </div>

    			<label class="col-lg-3 control-label" for="int">Merk</label>
                    <div class="form-group">
                      <div class="col-lg-5">
                            <input type="text" style="text-transform: capitalize;" class="form-control" name="Merk" id="Merk" placeholder="Merk" required/>
                             <?php echo form_error('Merk_Perangkat') ?>
                      </div>    
                    </div>
      			<label class="col-lg-3 control-label" for="int">Tipe</label>
                    <div class="form-group">
                      <div class="col-lg-5">
                            <input type="text" style="text-transform: capitalize;" class="form-control" name="Tipe" id="Tipe" placeholder="Tipe" required/>
                             <?php echo form_error('Tipe') ?>
                      </div>    
                    </div>

                <label class="col-lg-3 control-label" for="int">Capasitas</label>
                    <div class="form-group">
                      <div class="col-lg-5">
                            <input type="text" class="form-control" name="Capasitas" id="Capasitas" placeholder="Capasitas" required/>
                             <?php echo form_error('Capasitas') ?>
                      </div>    
                    </div>

                      <label class="col-lg-3 control-label" for="int">Beban Rectifier</label>
                    <div class="form-group">
                      <div class="col-lg-5">
                            <input type="text" class="form-control" name="Beban_Rectifier" id="Beban_Rectifier" placeholder="Beban Rectifier" />
                             <?php echo form_error('Beban_Rectifier') ?>
                      </div>    
                    </div>

                    <label class="col-lg-3 control-label" for="varchar">Foto Perangkat </label>
                      <div class="form-group">
                        <div class="col-lg-5">
                          <input type="file" class="form-control" name="Foto_perangkat" onchange="ubah_file()" id="Foto_perangkat" placeholder="Foto POP AP" value="<?php echo $Foto_perangkat; ?>" /><?php echo form_error('Foto_perangkat') ?>
                          <input type="hidden" value="<?php echo $Foto_perangkat; ?>" name="nama_file" class="form-control" id="nama_file">
                        </div>    
                      </div>

                        <label class="col-lg-3 control-label" for="varchar">Foto Perangkat</label>
                      <div class="form-group">
                        <div class="col-lg-5">
                          <input type="file" required class="form-control" name="Foto_perangkat2" onchange="ubah_file3()" id="Foto_perangkat2" placeholder="Foto POP2" value="<?php echo $Foto_perangkat2; ?>" /><?php echo form_error('Foto_perangkat2') ?>
                          <input type="hidden" value="<?php echo $Foto_perangkat2; ?>" name="nama_file3" class="form-control" id="nama_file3">
                        </div>
                      </div>

                      <label class="col-lg-3 control-label" for="varchar">File Perangkat</label>
                    <div class="form-group">
                        <div class="col-lg-5">
                          <input type="file" required class="form-control" onchange="ubah_file2()" name="File_perangkat" id="File_perangkat" placeholder="File File_perangkat" value="<?php echo $File_perangkat; ?>" /> <?php echo form_error('File_perangkat') ?>
                          <input type="hidden" name="nama_file1" value="<?php echo $File_perangkat; ?>" class="form-control" id="nama_file1">
                        </div>
                      </div>

                      <label class="col-lg-3 control-label for="varchar">Keterangan Perangkat <?php echo form_error('keterangan_perangkat') ?></label>
                        <div class="form-group">
                        	<div class="col-lg-6 control-label">
						      <textarea name="keterangan" id="keterangan" placeholder="specifikasi perangkat" class="ckeditor"></textarea>
						      <script type="text/javascript">
						      	CKEDITOR.replace( 'keterangan' );
						      </script>
				      		</div>
				      	</div>

                       <label class="col-lg-3 control-label" for="int">Tanggal Upload </label>
                      <div class="form-group">
                        <div class="col-lg-3 control-label">
                          <input  class="form-control" readonly="true" name="Tanggal_input" id="Tanggal_input" placeholder="Tanggal Upload" 
                          value="<?php if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta'); 
                          	echo date("Y-m-d  h:i:sa"); ?>" />

                          <?php echo form_error('Tanggal_input') ?>
                        </div>  
                        </div>

                        

    <label class="col-lg-3 control-label" for="int"></label>
                    <div class="form-group">
                      <div class="col-lg-5">
                             <input type="hidden" name="id" value="<?php echo $id_rak;?>">
                             <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                              <a href="javascript:history.back()" class="btn btn-default">Cancel</a>
                      </div>    
                    </div>   
   
  </form>
</div>
<br><br><br><br><br>
<!--End page content-->
					</div><!-- /.page-content -->

				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Icon Plus</span>
							Dashboard &copy; 2017
						</span>

						&nbsp; &nbsp;

					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
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

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
                        function ubah_file(){
                          var file      = document.power.Foto_perangkat.value;
                          var nama_file = document.power.nama_file;

                          var startIndex = (file.indexOf('\\') >= 0 ? file.lastIndexOf('\\') : file.lastIndexOf('/'));
                          var filename = file.substring(startIndex);
                          if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                            filename = filename.substring(1);
                          }
                          nama_file.value=filename;
                        }
                        function ubah_file2(){
                          var file      = document.power.File_perangkat.value;
                          var nama_file = document.power.nama_file1;

                          var startIndex = (file.indexOf('\\') >= 0 ? file.lastIndexOf('\\') : file.lastIndexOf('/'));
                          var filename = file.substring(startIndex);
                          if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                            filename = filename.substring(1);
                          }
                          nama_file.value=filename;
                        }
                         function ubah_file3(){
                          var file      = document.power.Foto_perangkat2.value;
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
