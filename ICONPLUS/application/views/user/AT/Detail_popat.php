<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ICON+ Dashboard</title>
 <link rel="icon" href="<?php echo base_url(); ?>asset/assets/img/icon.png" />
<link href="<?php echo base_url(); ?>asset/assetsu/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>asset/assetsu/css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>asset/assetsu/css/styles.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>asset/assetsu/css/bootstrap-table.css" rel="stylesheet">
<!--Icons-->
<script src="<?php echo base_url(); ?>asset/assetsu/js/lumino.glyphs.js"></script>
        <script src="<?php echo base_url()?>asset/code/highcharts.js"></script>
        <script src="<?php echo base_url()?>asset/code/modules/exporting.js"></script>

        <script src="<?php echo base_url()?>asset/code/modules/drilldown.js"></script>

<!-- [if lt IE 9]> -->
<script src="<?php echo base_url(); ?>asset/assetsu/js/html5shiv.js"></script>
<script src="<?php echo base_url(); ?>asset/assetsu/js/respond.min.js"></script>
<!-- <![endif] -->

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-  fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span>ICON+</span>Dashboard</a>

            </div>
                            
        </div><!-- /.container-fluid -->
    </nav>
        
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="form-group">
             <form action="<?php echo site_url('Ctrl_popbb/search_key/') ?>" class="form-horizontal style-form" method="post" name="search" enctype="multipart/form-data">
<!--                  <input type="text" class="form-control" name="search" id="search" placeholder="search" required />
                  <button type="submit" class="btn btn-primary">Search</button>  -->
            </div>
        </form>
       
       <?php include('menu.php'); ?>
       
        <div class="attribution"> © 2017 Indonesia Comnets Plus<br/><a href="http://www.glyphs.co" style="color: #333;"> Dashboard</a></div>
    </div><!--/.sidebar-->
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active"> POP AT  /  Detail <strong>"POP AT"</strong></li>
            </ol>
        </div><!--/.row-->
                                                
<div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg> Detail "POP AT <?php echo $Kode_POP; ?>"         </div>
                    <div class="panel-body">
                        <form class="form-horizontal col-md-9" action="" method="post">
                            <fieldset>
                                <!-- Name input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">Name</label>
                                    <div class="col-md-9">
                                    <input id="name" name="name" type="text" class="form-control" value="<?php echo $Kode_POP; ?>" readonly="true">
                                    </div>
                                </div>
                            
                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="email">Alamat POP</label>
                                    <div class="col-md-9">
                                        <input id="email" name="email" type="text" value="<?php echo $Alamat_POP; ?>" readonly="true" class="form-control">
                                    </div>
                                </div>

                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="email">Koordinat POP</label>
                                    <div class="col-md-9">
                                        <input id="email" name="email" type="text" value="<?php echo $Koordinat_POP; ?>" readonly="true" class="form-control">
                                    </div>
                                </div>

                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="email">Cyberkey</label>
                                    <div class="col-md-9">
                                        <input id="email" name="email" type="text" value="<?php echo $CyberKey; ?>" readonly="true" class="form-control">
                                    </div>
                                </div>

                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="email">Area POP</label>
                                    <div class="col-md-9">
                                        <input id="email" name="email" type="text" value="<?php echo $Area_POP; ?>" readonly="true" class="form-control">
                                    </div>
                                </div>

                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="email">Tipe POP</label>
                                    <div class="col-md-9">
                                        <input id="email" name="email" type="text" value="<?php echo $Tipe_POP; ?>" readonly="true" class="form-control">
                                    </div>
                                </div>

                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="email">Foto POP</label>
                                    <div class="col-md-9">
                                        <?php $gambar = $Foto_POP;?>
                                                <a href="#gamb" data-toggle="modal"> <img src="<?php echo base_url('public/POP/Foto/'.$gambar);?>" width="80px" height="80px"> </a>
                                        <?php echo $Foto_POP; ?>

                                        <?php $gambar2 = $Foto_POP2;?>
                                               <a href="#gamb2" data-toggle="modal">  <img src="<?php echo base_url('public/POP/Foto/'.$gambar2);?>" width="80px" height="80px"></a>
                                        <?php echo $Foto_POP2; ?>
                                    </div>
                                </div>

                                
                                <!-- Message body -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="Keterangan">Keterangan</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="Keterangan" name="Keterangan"rows="5" fixed="true" readonly="true"><?php echo $Keterangan; ?></textarea>
                                    </div>
                                </div>
                                
                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="email">File</label>
                                    <div class="col-md-9">
                                        <a href="<?=base_url()?>public/POP/File/<?=$File_POP;?>" class="form-control">
                                                <?php echo $File_POP; ?></a>
                                    </div>
                                </div>
                                
                                <label class="col-lg-3 control-label" for="int">Tanggal Upload </label>
                                  <div class="form-group">
                                    <div class="col-lg-2 control-label">
                                      <input type="text" class="form-control" readonly="true" name="tgl_upload" id="tgl_upload" placeholder="Tanggal Upload" 
                                      value="<?php if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta'); echo date('d-m-Y'); ?>" />
                                      <?php echo form_error('tgl_upload') ?>

                                    </div>  
                                    <label class="col-lg-2 control-label" for="int">Jam Upload </label>
                                    <div class="col-lg-2 control-label">
                                      <input type="text" class="form-control" readonly="true" name="wkt_upload" id="wkt_upload"
                                      value="<?php if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta'); echo date('H:i:s'); ?>" />

                                      <?php echo form_error('wkt_upload') ?>
                                    </div> 
                                  </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                </div>
                </div>
    
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default" align="center">
                    <div class="panel-heading "><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg>List ROOM POP "<?php echo $Kode_POP?>"</div>
                    <div class="panel-body" style="width: 800px">
                        <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                            <font color="red"> <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?></font>
                                    <thead align="center" class="">
                                        <tr>
                                            <th>KODE ROOM</th>
                                            <th>NAMA ROOM </th>
                                            <th>Action</th>
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
                                                    <a href="<?php echo site_url('Ctrl_popat/createRak/'.$room->id)?>">          
                                                        <button class="btn btn-success btn-xs no-border" id="open-event" title="Detail">
                                                                <i class="ace-icon glyphicon glyphicon-list"></i>
                                                        </button> 
                                                    </a>
                                                </td>
                                                
                                        </tr>
                                        <tr>
                                            <?php 
                                                }
                                                }else{
                                                    echo "<td colspan='3'>Data RAK Belum Ada</td>";
                                                }
                                                ?>
                                         </tr>                 
                                    </tbody>
                        </table> 
                        <div align="right"><a href="javascript:history.back()" class="btn btn-danger">Kembali</a></div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->  
    </div>  <!--/.main-->
                                <div id="gamb" class="modal fade" role="dialog" tabindex="-1" >
                                    <div class="modal-dialog">
                                        <div class="modal-content col-md-12">
                                            <div class="modal-header no-padding">
                                                <div class="table-header">
                                                    <span><strong>
                                                    Gambar 1</strong></span>
                                                </div>
                                            </div>
                                <div class="img-responsive">
                                    <img src="<?php echo base_url('public/POP/Foto/'.$gambar);?>" class="img-responsive" width="100%" height="100%">
                                        <h4><?php echo $Foto_POP; ?></h4>
                                        <div align="right">
                                            <a href="#" class="btn btn-danger no-border" data-dismiss="modal">Close</a>
                                        </div>
                                    <br>
                                </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>

                                <div id="gamb2" class="modal fade" role="dialog" tabindex="-1" >
                                    <div class="modal-dialog">
                                        <div class="modal-content col-md-12">
                                            <div class="modal-header no-padding">
                                                <div class="table-header">
                                                    <span><strong>
                                                    Gambar 2</strong></span>
                                                </div>
                                            </div>
                                    <div class="img-responsive">
                                        <img src="<?php echo base_url('public/POP/Foto/'.$gambar2);?>" class="img-responsive" width="100%" height="100%">
                                           <h4> <?php echo $Foto_POP2; ?></h4>

                                        <div align="right">
                                            <a href="#" class="btn btn-danger no-border" data-dismiss="modal">Close</a>
                                        </div>
                                    <br>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>
    <script src="<?php echo base_url(); ?>asset/assetsu/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/assetsu/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/assetsu/js/chart.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/assetsu/js/chart-data.js"></script>
    <script src="<?php echo base_url(); ?>asset/assetsu/js/easypiechart.js"></script>
    <script src="<?php echo base_url(); ?>asset/assetsu/js/easypiechart-data.js"></script>
    <script src="<?php echo base_url(); ?>asset/assetsu/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>asset/assetsu/js/bootstrap-table.js"></script>
    <script>
        $('#calendar').datepicker({
        });

        !function ($) {
            $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
                $(this).find('em:first').toggleClass("glyphicon-minus");      
            }); 
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function () {
          if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function () {
          if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })
    </script>

</body>

</html>