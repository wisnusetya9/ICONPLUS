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
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Admin <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <!-- <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
                            <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li> -->
                            <li><a href="<?php echo base_url('index.php/Ctrl_popbb/indexlogin/')?>"><svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"></use></svg> Login</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
                            
        </div><!-- /.container-fluid -->
    </nav>
        
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
       <div class="form-group">
             <form action="<?php echo site_url('Ctrl_popbb/search_key/') ?>" class="form-horizontal style-form" method="post" name="search" enctype="multipart/form-data">
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
                     <svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg>&nbsp; Detail ROOM "<?php echo $kode_room?>"
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal col-md-4  " action="" method="post">
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



                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Foto Room</label>
                                    <div class="col-md-9">
                                        <?php $gambar = $Foto_Room;?>
                                                <a href="#gamb" data-toggle="modal"> <img src="<?php echo base_url('public/Room/Foto/'.$gambar);?>" width="80px" height="80px"> </a>
                                        <?php echo $Foto_Room; ?>

                                        <?php $gambar2 = $Foto_Room2;?>
                                               <a href="#gamb2" data-toggle="modal">  <img src="<?php echo base_url('public/Room/Foto/'.$gambar2);?>" width="80px" height="80px"></a>
                                        <?php echo $Foto_Room2; ?>
                                    </div>
                                    <br><br><br><br>
                                </div>

                                                                
                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" >File</label>
                                    <div class="col-md-9">
                                        <a href="<?=base_url()?>public/Room/File/<?=$File_Room;?>" class="form-control">
                                                <?php echo $File_Room; ?></a>
                                    </div>
                                    <br><br>
                                </div>

                                <label class="col-lg-3 control-label" for="int">Tanggal Upload </label>
                                  <div class="form-group">
                                    <div class="col-lg-2 control-label">
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

                            </fieldset>
                        </form>
                    </div>
                    <br><br>
<!--                          <div align="center"><a href="#next" class="btn btn-danger">Kembali</a>    -->                    
                </div>
</div>
</div> 

    
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default" align="center">
                    <div class="panel-heading "><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg>
                        List Rack Room "<?php echo $kode_room?>"</h3></div>
                    <div class="panel-body" style="width: 800px">
                        <table  data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc" >
                             <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                            <thead align="center" >
                                        <tr>
                                            <th data-field="id" data-sortable="true" >Kode Rack</th>
                                            <th>Nama Rack</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                                <?php
                                                if ($rak!=null) {
                                                foreach ($rak as $rak) {
                                                ?>
                                            <td><?php echo $rak->kode_rak;?></td>
                                            <td><?php echo $rak->nama_rak;?></td>
                                            <td>
                                                <a href="<?php echo site_url('Ctrl_popat/listperangkat/'.$rak->id_rak)?>">                             
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
                                    <img src="<?php echo base_url('public/Room/Foto/'.$gambar);?>" class="img-responsive" width="100%" height="100%">
                                        <?php echo $Foto_Room; ?>
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
                                        <img src="<?php echo base_url('public/Room/Foto/'.$gambar2);?>" class="img-responsive" width="100%" height="100%">
                                            <?php echo $Foto_Room2; ?>

                                        <div align="right">
                                            <a href="#" class="btn btn-danger no-border" data-dismiss="modal">Close</a>
                                        </div>
                                    <br>
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