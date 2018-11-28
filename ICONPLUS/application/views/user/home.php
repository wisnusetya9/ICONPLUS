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
                <img src="">
                
            </div>
                            
        </div><!-- /.container-fluid -->
    </nav>
        
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
       <!--  <form role="search"> -->
            <div class="form-group">
                <form action="<?php echo site_url('Ctrl_popbb/search_key/') ?>" class="form-horizontal style-form" method="post" name="search" enctype="multipart/form-data">
                    <!-- <input type="text" class="form-control" name="search" id="search" placeholder="search" required />
                    <button type="submit" class="btn btn-primary">Search</button>  -->
                </form>
            </div>
        
      <?php include('menu.php'); ?>
      
        <div class="attribution"> © 2017 Indonesia Comnets Plus<br/><a href="http://www.glyphs.co" style="color: #333;"> Dashboard</a></div>
    </div><!--/.sidebar-->
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Home</li>
            </ol>
        </div><!--/.row--><br>

        <div class="row">
                              <div class="col-lg-7 col-md-12 col-xs-12" >
                              <div class="panel panel-default">
                                <img src="<?php echo base_url(); ?>asset/assets/img/homeicon.jpg" width="1080px" height="500px" alt="">
                              </div>
                              </div>
                            </div><br>

                            <div class="col-lg-6 col-md-8">
                                <div class="panel panel-default">
                                     <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin:0 auto"></div>
                                    </div>
                                </div>

                            <div class="col-lg-6 col-md-8">
                                 <div class="panel panel-default">
                                     <div id="container2" style="min-width: 310px; height: 400px; max-width: 600px; margin:0 auto"></div>
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
$setSqlTipe = "SELECT Tipe_POP, COUNT(*) AS 'Jumlah' FROM tb_pop GROUP BY Tipe_POP ORDER BY Jumlah DESC Limit 10";
$setRecTipe = mysqli_query($conn, $setSqlTipe);
$coloran = array('red','black','green','yellow','brown','orange','silver','magenta','cyan','grey');
$dataJ= array(0,0,0);
$dataT = array('POP SB','POP BB', 'POP D');
$char = 0;



?>
<?php
$setSqlTipe2 = "SELECT Area_POP, COUNT(*) AS 'Jumlah2' FROM tb_pop GROUP BY Area_POP ORDER BY Jumlah2 DESC Limit 10";
$setRecTipe2 = mysqli_query($conn, $setSqlTipe2);
$dataJ2= array(0,0,0);
$dataT2 = array('Area Barat','Area Timur', 'Area Pusat');
$char2 = 0;

while ($row1 = mysqli_fetch_array($setRecTipe)) {
   extract($row1);
    $datapieTipe[] = array($Tipe_POP, intval($Jumlah));
    $dataT[$char] = $Tipe_POP;
    $dataJ[$char] = intval($Jumlah);
    $char++;
}
// $char = 3;
while ($row2 = mysqli_fetch_array($setRecTipe2)) {
   extract($row2);
    $datapieTipe2[] = array($Area_POP, intval($Jumlah2));
    $dataT2[$char2] = $Area_POP;
    $dataJ2[$char2] = intval($Jumlah2);
    $char2++;
}
$dataTipe = json_encode($datapieTipe);
$dataTipe2 = json_encode($datapieTipe2);
?>
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Jumlah POP Berdasarkan Tipe'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ['POP SB','POP BB', 'POP D']
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
        name: 'Jumlah',
        color : 'orange',
        data: [<?php for ($i=0; $i <3 ; $i++) { 
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
Highcharts.chart('container2', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Jumlah POP Berdasarkan Area POP'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                },
                connectorColor: 'silver'
            }
        }
    },
    series: [{
          name: 'Jumlah',
        color : 'orange',
        data: [<?php for ($i=0; $i <3 ; $i++) { 
          ?>
          {name: '<?php echo $dataT2[$i];?>',y:<?php echo $dataJ2[$i]; ?>},
          <?php
        }?>]

    }]
});


</script>

</body>

</html>