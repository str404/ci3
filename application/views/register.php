<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>STR WEB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/css/animate.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/css/font-awesome.min.css')?>">
   	<link rel="stylesheet" href="<?php echo base_url('assets/css/css/owl.theme.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/css/owl.carousel.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/css/style.css')?>">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">
 <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
  <style>
  body {
   position: relative; 
   background:url(<?php echo base_url('assets/gambar/str/bg.jpg') ?>) no-repeat fixed;
   -webkit-background-size: 100% 100%;
   -moz-background-size: 100% 100%;
   -o-background-size: 100% 100%;
   background-size: 100% 100%;
  }
  #section1 {padding-top:50px;height:0px;color: #fff; }
  #section2 {padding-top:50px;height:1300px;color: #fff;  }
   #section31 {padding-top:50px;height:4390px;color: #fff;}
  #section31 {padding-top:50px;height:1000px;color: #fff;}
  #section32 {padding-top:50px;height:1590px;color: #fff;}
  #section33 {padding-top:50px;height:1550px;color: #fff;}
  #section4 {padding-top:50px;height:1100px;color: #fff; }
  #section5 {padding-top:50px;height:3900px;color: #fff; }

  .style2 {color: #FF0000; font-family: Georgia, "Times New Roman", Times, serif; }
  
  
  div.transbox {
  margin: 30px;
  background-color:rgba(252,252,252, 0.7);
  border: 1px solid black;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: #000000;
}
  .style6 {font-family: "Helvetica Neue", Helvetica, Arial, sans-serif ;
  font-size: 16px;}
  .style7 {
	font-size: large;
	font-weight: bold;
	color: #000000;
}
.style9 {color: yellow}
  .style10 {color: red}
  .style11 {color: #000000}
  .style12 {
	font-weight: bold;
	color: #000000;
}

#footer{
	height:100px;
	line-height:45px;
	background:#333;
	color:#fff;
	
	position:absolute;
    bottom:-100px;
 
    width:100%;
}
.style14 {font-size: 36px}
.style17 {font-size: 16px}
  </style>
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>      
		  </button>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><img src="<?php echo base_url('assets/gambar/str/1.jpg"  alt="#" width="70" height"50"')?>" ></li>
          <li><a href="<?php echo site_url('User/login')?>">&ensp;&ensp;&ensp;&ensp;Login</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<br />
<br />
<br />

<h1 align="center" class="style2"><span class="navbar-inverse "><span class="text-danger style9">Pendaftaran Member</span></h1>

<br />
<br />

<div class="container-fluid">
<div class="transbox">
  <div align="center" class="style7">
  <p align="center">
    <center>
		<h1>Silahkan menambah member baru</h1>
		<h3>Tambah member baru</h3>
	</center>
      <div class="row">
      <div class="col-md-4 col-md-offset-4">
  <?php echo form_open('User/register', array('class' => 'needs-validation', 'novalidate' => '')); ?>
  <?php echo validation_errors()?>	

   <div class="form-group">
       <label>Nama Lengkap</label>
       <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?php echo set_value('nama') ?>">
   </div>

	<div class="form-group">
    <label>Kodepos</label>
    <input type="text" class="form-control" name="kodepos" placeholder="Kodepos" value="<?php echo set_value('kodepos') ?>">
   </div>

   <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo set_value('email') ?>">
   </div>

   <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo set_value('username') ?>">
   </div>

   <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" name="password" placeholder="Password">
   </div>

   <div class="form-group">
    <label>Konfirmasi Password</label>
    <input type="text" class="form-control" name="password2" placeholder="Konfirmasi Password">
   </div>

&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
<button type="submit" class="btn btn-primary btn-block">Daftar</button>
    <?php form_close() ?>

</div>
</div>
</p>
</div>
</div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div id="footer" align="center">
    <span class="success style17">&copy; STR_WEB 2018. CodeIgniter. All rights reserved. 		</span><br />
    Copyright &copy; 2018
Designed by Muhammad Satria R P</div>
</div>

 <script>
$(document).ready(function(){
    $('body').scrollspy({target: ".navbar", offset: 50});   
	$("#myNavbar a").on('click', function(event) {
	if (this.hash !== "") {
	 event.preventDefault();
	 var hash = this.hash;
	 $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 800, function(){
	  window.location.hash = hash;
    });

  }
  });
});
    </script>
	

<script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
<!-- <script src="<?php //echo base_url('assets/js/bootstrap.min.js')?>"></script> -->
<script src="<?php echo base_url('assets/js/smoothscroll.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.nav.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.parallax.js')?>"></script>
<script src="<?php echo base_url('assets/js/owl.carousel.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/isotope.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/wow.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/counter.js')?>"></script>
<!-- <script src="<?php //echo base_url('assets/js/custom.js')?>"></script> -->
<script src="<?php echo base_url() ?>assets/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="<?php echo base_url() ?>assets/js/holder.min.js"></script>

    <!-- Custom -->
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
</body>
</html>
