<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
   <link rel="icon" href="<?php echo base_url(); ?>asset/assets/img/icon.png" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/style.css">

		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/assets/css/bootstrap.min.css" />  

		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/assets/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/assets/css/fonts.googleapis.com.css" />		

<style>
body{
	margin: 0;
	padding: 0;
	background: #fff;
	position: fixed;
	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: fixed;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	/*background-image: url('<?php echo base_url(); ?>asset/assets/img/lockdor.jpg');*/
	background: url('<?php echo base_url(); ?>asset/assets/img/lockdor.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
	background-size: cover;
	min-height: 100%;
	-webkit-filter: blur(5px);
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.2;
}

.header{
	position: fixed;
	top: calc(50% - 120px);
	left: calc(50% - 400px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
	position: fixed;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: fixed;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=button]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
    </style>

 	

</head>

<body>
  <div class="body"></div>
		<div class="grad"></div>
		
		<div class="header">
			<div style="font-size: 40px">
			<center><img src="<?php echo base_url(); ?>asset/assets/img/icon.png" width="250px" alt="" /></center>
			<h3>PT Indonesia Comnets Plus</h3><span>SBU Regional <br>Jakarta</span>
			</div>
		</div>&nbsp;
		<div class="login">
		<form action="<?php echo $action; ?>" class="form-horizontal style-form" method="post" name="power" enctype="multipart/form-data" >
		<font color="red"> <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?></font>
		<fieldset>
				<input type="text" name="username"  class="form-control" placeholder="Username" />
				<input type="password" name="password" class="form-control" placeholder="Password" />

					<label class="col-lg-6"><br>*Login As</label>
					
							<span class="col-lg-9 block input-icon input-icon-left">
								<select class="form-control" name="person" id="person">
					                <option value="Super Admin">Super Admin</option>
					                <option value="SubAdmin">SubAdmin</option>
					            </select>
					            <br>
							</span>
									
					
				<button type="submit" class="pull-left btn btn-sm btn-primary col-lg-9">
					<i class="ace-icon fa fa-key"></i>
					LOGIN
				</button>
				
		</fieldset>
		</form>		
		</div>

 	<script src="<?php echo base_url(); ?>asset/css/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>asset/css/prefixfree.min.js"></script> 	
  
</body>
</html>