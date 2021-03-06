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
             <form action="<?php echo site_url('Ctrl_pop/search_key/') ?>" class="form-horizontal style-form" method="post" name="search" enctype="multipart/form-data">
<!--                  <input type="text" class="form-control" name="search" id="search" placeholder="search" required />
                  <button type="submit" class="btn btn-primary">Search</button>  -->
            </div></form>
        
        <?php include('menu.php'); ?>
        
        <div class="attribution"> © 2017 Indonesia Comnets Plus<br/><a href="http://www.glyphs.co" style="color: #333;"> Dashboard</a></div>
    </div><!--/.sidebar-->
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>
            </ol>
        </div><!--/.row-->
        



     <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                     <svg class="glyph stroked table"><use xlink:href="#stroked-table"/></use></svg>&nbsp; Detail Rack "<?php echo $kode_rak?>"  
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal col-md-10  " action="" method="post">
                            <fieldset>
                                <!-- Name input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">Kode POP</label>
                                    <div class="col-md-9">
                                    <input id="name" name="name" type="text" value="<?php echo $kode_pop; ?>" readonly="true" class="form-control">
                                    </div>
                                    <br><br>
                                </div>
                                                        
                                <!-- input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" >Kode Room</label>
                                    <div class="col-md-9">
                                        <input id="room" name="room" type="text" value="<?php echo $kode_room; ?>" readonly="true" class="form-control">
                                    </div>
                                    <br><br>
                                </div>

                                <!-- input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" >Kode Rack</label>
                                    <div class="col-md-9">
                                        <input id="Rak" name="Rak" type="text" value="<?php echo $kode_rak; ?>" readonly="true" class="form-control">
                                    </div>
                                    <br><br>
                                </div>


                                <!-- input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" >Nama Rack</label>
                                    <div class="col-md-9">
                                        <input id="Rak" name="Rak" type="text" value="<?php echo $kode_rak; ?>" readonly="true" class="form-control">
                                    </div>
                                    <br><br>
                                </div>

                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Foto Rack</label>
                                    <div class="col-md-9">
                                        <?php $gambar = $Foto_Rak;?>
                                                <a href="#gamb" data-toggle="modal"> <img src="<?php echo base_url('public/Rack/Foto/'.$gambar);?>" width="80px" height="80px"> </a>
                                        <?php echo $Foto_Rak; ?>

                                        <?php $gambar2 = $Foto_Rak2;?>
                                               <a href="#gamb2" data-toggle="modal">  <img src="<?php echo base_url('public/Rack/Foto/'.$gambar2);?>" width="80px" height="80px"></a>
                                        <?php echo $Foto_Rak2; ?>
                                    </div>
                                    <br><br><br><br>
                                </div>

                                                                
                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="email">File</label>
                                    <div class="col-md-9">
                                        <a href="<?=base_url()?>public/Rack/File/<?=$File_Rak;?>" class="form-control">
                                                <?php echo $File_Rak; ?></a>
                                    </div>
                                </div>


                                <label class="col-lg-3 control-label" for="int">Tanggal Upload </label>
                                  <div class="form-group">
                                    <div class="col-lg-2 control-label">
                                      <input type="text" class="form-control" readonly="true" name="tgl_upload_rak" id="tgl_upload_rak" placeholder="Tanggal Upload" 
                                      value="<?php if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta'); echo date('d-m-Y'); ?>" />
                                      <?php echo form_error('tgl_upload_rak') ?>

                                    </div>  
                                    <label class="col-lg-2 control-label" for="int">Jam Upload </label>
                                    <div class="col-lg-2 control-label">
                                      <input type="text" class="form-control" readonly="true" name="wkt_upload_rak" id="wkt_upload_rak"
                                      value="<?php if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta'); echo date('H:i:s'); ?>" />

                                      <?php echo form_error('wkt_upload_rak') ?>
                                    </div> 
                                  </div>

                            </fieldset>
                        </form>
                    </div>
                    <br><br>                
                </div>
</div>
</div> 
                                



    
       <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default" align="center">

                   <div class="panel-heading"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg>
                      List Perangkat Rack "<?php echo $kode_rak?>"</h3></div>
                    <div class="panel-body" style="width: 800px">
                        <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                                    <thead align="center">
                                        <tr>
                                              <th>Kode Perangkat</th>
                                              <th>Nama Perangkat</th>
                                              <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                           <?php
                                            if ($perangkat!=null) {
                                            foreach ($perangkat as $data) {
                                            ?>
                                                <td><?php echo $data->kode_perangkat;?></td>
                                                <td><?php echo $data->nama_perangkat;?></td>
                                                <td><a href="<?php echo site_url('Ctrl_popbb/read_perangkat/'.$data->id_perangkat)?>">
                                            
                                        <button class="btn btn-success btn-xs no-border" id="open-event" title="Detail">
                                                <i class="ace-icon glyphicon glyphicon-list"></i>
                                            </button> 
                                    </a>  </td>
                                        </tr>
                                        <tr>
                                            <?php 
                                            }
                                              }else{
                                                    echo "<td colspan='3'>Data Perangkat Belum Ada</td>";
                                             }
                                            ?>
                                        </tr>
                                       
                                    </tbody>                                    
                        </table>
                                         <div class="col-lg-12" align="right">
                                       <a href="javascript:history.back()" class="btn btn-danger">Kembali</a>        
  </div>
                    </div>
                </div>

            </div>
        </div><!--/.row-->  

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
                                    <img src="<?php echo base_url('public/Rack/Foto/'.$gambar);?>" class="img-responsive" width="100%" height="100%">
                                        <?php echo $Foto_Rak; ?>
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
                                        <img src="<?php echo base_url('public/Rack/Foto/'.$gambar2);?>" class="img-responsive" width="100%" height="100%">
                                            <?php echo $Foto_Rak2; ?>

                                        <div align="right">
                                            <a href="#" class="btn btn-danger no-border" data-dismiss="modal">Close</a>
                                        </div>
                                    <br>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>
    </div>  <!--/.main-->


<div id="modaldong" class="modal fade" role="dialog" tabindex="-1" >
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header no-padding">
                                                <div class="table-header">
                                                <strong >Detail Perangkat</strong>
                                                </div>
                                            </div>

                                            <div class="modal-body no-padding">
                        
 <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead align="center">
                                        <tr>
                                            <th>Jenis</th>
                                            <th>Kondisi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="warning">
                                            <td> Kode Room</td>
                                            <td><?php echo $kode_room; ?></td>
                                        </tr>
                                        <tr class="warning">
                                            <td> Kode Rak</td>
                                            <td><?php echo $kode_rak; ?></td>
                                        </tr>
                                        <tr class="success">
                                            <td> Kode Perangkat</td>
                                            <td><?php echo $kode_perangkat; ?></td>
                                        </tr>
                                        <tr class="warning">
                                            <td> Nama Perangkat</td>
                                            <td><?php echo $nama_perangkat; ?></td>
                                        </tr>   
                                    </tbody>
                                </table>
                            </div>
                                    <div align="right">
                            <a href="#" class="btn btn-danger no-border" data-dismiss="modal">Cancel</a>
                                    </div>
                        </div>
              
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>                        
    </div>  <!--/.main-->

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