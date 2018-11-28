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
                    <svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></use></svg>&nbsp; Detail Perangkat <?php echo $kode_perangkat?>  
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal col-md-9" action="" method="post">
                            <fieldset>
                                <!-- Name input-->
                                                        
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

                                <!-- input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" >Kode Perangkat</label>
                                    <div class="col-md-9">
                                        <input id="Rak" name="Rak" type="text" value="<?php echo $kode_perangkat; ?>" readonly="true" class="form-control">
                                    </div>
                                    <br><br>
                                </div>


                                <!-- input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" >Nama Perangkat</label>
                                    <div class="col-md-9">
                                        <input id="Rak" name="Rak" type="text" value="<?php echo $nama_perangkat; ?>" readonly="true" class="form-control">
                                    </div>
                                    <br><br>
                                </div>	                                

                                <!-- input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" >Merk</label>
                                    <div class="col-md-9">
                                        <input id="Rak" name="Rak" type="text" value="<?php echo $Merk; ?>" readonly="true" class="form-control">
                                    </div>
                                    <br><br>
                                </div>

                                <!-- input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" >Tipe</label>
                                    <div class="col-md-9">
                                        <input id="Rak" name="Rak" type="text" value="<?php echo $Tipe; ?>" readonly="true" class="form-control">
                                    </div>
                                    <br><br>
                                </div>

                                <!-- input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" >Kapasitas</label>
                                    <div class="col-md-9">
                                        <input id="Rak" name="Rak" type="text" value="<?php echo $Capasitas; ?>" readonly="true" class="form-control">
                                    </div>
                                    <br><br>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" >Tanggal Upload</label>
                                    <div class="col-md-9">
                                        <input id="Rak" name="Rak" type="text" value="<?php echo $Tanggal_input; ?>" readonly="true" class="form-control">
                                    </div>
                                    <br><br>
                                </div>  

                                <div class="form-group">        
                                    <label class="col-md-3 control-label" >Perangkat</label>                            
                                        <div class="col-md-9">
                                            <textarea readonly="true" rows="3" class="form-control">  <?php echo $keterangan; ?></textarea>
                                        </div>                                        
                                </div>

                                    <br><br>
                                </div>                                                              

                          

                            </fieldset>
                        </form>

                    </div>

                    <br><br>
<!--                          <div align="center"><a href="#next" class="btn btn-danger">Kembali</a>    -->                    
                </div>
</div>
<div class="col-lg-6 col-md-8">     
                                <div class="panel panel-default">
                                     <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin:0 auto">
                                     </div>
                                </div>
                             </div>
							<div class="col-lg-6 col-md-8">

								<div class="col-lg-12" align="center">
		                          	<h4><strong>Riwayat Update Perangkat</strong></h4>
		                        </div>

								<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true"  data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">			
                                    <tr>
								      <th>Kode Perangkat</th>
								      <th>Nama Perangkat</th>
								      <th>Waktu Update</th>
								    </tr>
								    <tr>
								       <tr>
								                <?php
								                if ($perangkat2!=null) {
								                foreach ($perangkat2 as $data) {
								                    ?>
								                    <td><?php echo $data->kode_perangkat;?></td>
								                    <td><?php echo $data->nama_perangkat;?></td>
								                    <td><?php echo $data->Tanggal_input;?></td>
								               </tr>
								               <tr>
								                <?php 
											        }
												        }else{
												            echo "<td colspan='3'>Data Perangkat Belum Ada</td>";
												        }
											        ?>
								        		</tr>
								        </tr>
								  </table>
								                      <div class="col-lg-11" align="right">
								                      <br><br><br><br>
                     <a href="javascript:history.back()" class="btn btn-danger no-border" >Kembali</a>
                    </div>	
							</div>

</div> 
                           
                        </div>
                        </div>

<!--End page content-->
					</div><!-- /.page-content -->

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


     <script type="text/javascript">
<?php 
$conn = new mysqli('localhost', 'root', '');  
mysqli_select_db($conn, 'icon_plus');  
?>

<?php
$setSqlTipe = "SELECT Beban_Rectifier, Tanggal_input FROM tb_perangkat where kode_perangkat ='$kode_perangkat' ORDER BY Tanggal_input ASC";
$setRecTipe = mysqli_query($conn, $setSqlTipe);
$coloran = array('red','black','green','yellow','brown','orange','silver','magenta','cyan','grey');
// $dataJ= array(0,0,0,0,0,0);
// $dataT = array('POP SB','POP BB', 'POP D','Area Barat','Area Pusat','Area Timur');
$char = 0;


?>
<?php
// $setSqlTipe2 = "SELECT Area_POP, COUNT(*) AS 'Jumlah2' FROM tb_pop GROUP BY Area_POP ORDER BY Jumlah2 DESC Limit 10";
// $setRecTipe2 = mysqli_query($conn, $setSqlTipe2);


while ($row1 = mysqli_fetch_array($setRecTipe)) {
   extract($row1);
    $datapieTipe[] = array($Tanggal_input, intval($Beban_Rectifier));
    $dataT[] = $Tanggal_input;
    $dataJ[] = intval($Beban_Rectifier);
    $char++;
}
// $char = 3;
// while ($row2 = mysqli_fetch_array($setRecTipe2)) {
//    extract($row2);
//     $datapieTipe[] = array($Area_POP, intval($Jumlah2));
//     $dataT[$char] = $Area_POP;
//     $dataJ[$char] = intval($Jumlah2);
//     $char++;
// }
$dataTipe = json_encode($datapieTipe);
?>
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Beban Rectifier'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [<?php for ($i=0; $i<count($dataT); $i++) { 
            ?> '<?php echo $dataT[$i];?>',
            <?php
        } ?>]
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:12px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} tools</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0.5
        }
    },
    series: [{
        name: '',
        color : 'orange',
        data: [<?php for ($i=0; $i <count($dataT) ; $i++) { 
          ?>
          {name: '<?php echo $dataT[$i];?>',y:<?php echo $dataJ[$i]; ?>, color: '<?php echo $coloran[$i];?>'},
          <?php
        }?>]

    }]
});

Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
    return {
        radialGradient: {
            cx: 0.5,
            cy: 0.3,
            r: 0.7
        },
        stops: [
            [0, color],
            [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
        ]
    };
});

// Build the chart




</script>

</body>

</html>