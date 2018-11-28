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
                </ul>
            </div>
                            
        </div><!-- /.container-fluid -->
    </nav>
        
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    
       <div class="form-group">
             <form action="<?php echo site_url('Ctrl_popbb/search_key/') ?>" class="form-horizontal style-form" method="post" name="search" enctype="multipart/form-data">
             <!--     <input type="text" class="form-control" name="search" id="search" placeholder="search" required />
                  <button type="submit" class="btn btn-primary">Search</button>  -->
           </form> </div>

       
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
                <div class="panel panel-default">
                    
                    <div class="panel-body">
                        <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                            <thead>
                                        <tr>
                                            
                                            <th data-field="id" data-sortable="true"><strong> No </strong> </th>
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
                                    <?php foreach($result as $pop_sb): ?>
                                        
                                        <td width="80px"><?php echo $no ?></td>
                                        <td><?php echo $pop_sb->Kode_POP ?></td>
                                        <td><?php echo $pop_sb->Alamat_POP ?></td>
                                        <td><?php echo $pop_sb->Koordinat_POP ?></td>
                                        <td><?php echo $pop_sb->CyberKey ?></td>
                                        
                                        <td style="text-align:center" width="200px">
                                            <?php 
                                            if($pop_sb->Tipe_POP == 'POP SB')
                                            {
                                            	$parm = 'sb';
                                            } else if($pop_sb->Tipe_POP == 'POP BB')
                                            {
                                            	$parm = 'bb';
                                            }else if($pop_sb->Tipe_POP == 'POP D')
                                            {
                                            	$parm = 'd';
                                            }else if($pop_sb->Area_POP == 'Area Barat')
                                            {
                                            	$parm = 'ab';
                                            }else if($pop_sb->Area_POP == 'Area Pusat')
                                            {
                                            	$parm = 'ap';
                                            }else if($pop_sb->Area_POP == 'Area Timur')
                                            {
                                            	$parm = 'at';
                                            }

                                            echo anchor(site_url('Ctrl_popbb/read/'.$pop_sb->id_pop.'/'.$parm),'Detail'); 
                                            ?>
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
                        </table>
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