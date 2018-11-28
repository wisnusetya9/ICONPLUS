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
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
        </div><!--/.row-->
                                        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading"> List <strong>"POP AB"</strong> </div>
                    <div class="panel-body">
                        <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1"  data-sort-name="name" data-sort-order="desc">
                            <thead>     
                                        <tr>
                                            
                                            <th data-sortable="true"><strong> No </strong> </th>
                                            <th width="100px" data-field="id" data-sortable="true">Kode POP </th>
                                            <th class="hidden-480">Alamat POP</th>
                                            <th class="hidden-480">Koordinat POP</th>
                                            <th class="hidden-480">CyberKey</th>
                                            <th class="hidden-480"><center>Action</center></th>
                                        </tr>
                            </thead>
                                    <tbody>
                                    <tr>
                                    <?php $no=1; ?>
                                    <?php if(count($result)):?>
                                    <?php foreach($result as $pop_ab): ?>
                                        
                                        <td width="80px"><?php echo $no ?></td>
                                        <td><?php echo $pop_ab->Kode_POP ?></td>
                                        <td><?php echo $pop_ab->Alamat_POP ?></td>
                                        <td><?php echo $pop_ab->Koordinat_POP ?></td>
                                        <td><?php echo $pop_ab->CyberKey ?></td>
                                        
                                        <td style="text-align:center" width="200px">
                                       <a href="<?php echo site_url('Ctrl_popab/read/'.$pop_ab->id_pop)?>">
                                            
                                        <button class="btn btn-success btn-xs no-border" id="open-event" title="Detail">
                                                <i class="ace-icon glyphicon glyphicon-list"></i>
                                            </button> 
                                    </a>
                                     
<!--                                             <?php 
                                            echo anchor(site_url('Ctrl_popbb/read/'.$pop_sb->id_pop.'/'.$parm),'Detail'); 
                                            ?> -->
                                        </td>
                                    </tr>
                                    <?php 
                                    $no++;
                                    endforeach; ?>
                                <?php else: ?>
                                    <!-- jika tidak ada data -->
                                    <tr>
                                        <td colspan="6">Tidak Ada Data</td>
                                    </tr>
                                <?php endif; ?>


                               </table>
                                            <div class="row">
                                                <div>
                                                    <div class="col-md-12">                                                            
                                                        <?php echo $pagination ?> <!-- Menampilkan pagination -->                                       
                                                    </div>
                                                </div>  
                                            </div>        
                    </div>
                </div>
            </div>
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