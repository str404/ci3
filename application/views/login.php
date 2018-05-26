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


<br />
<br />
<br />

<h1 align="center" class="style2"><span class="navbar-inverse "><span class="text-danger style9">Login</span></h1>

<br />
<br />

   <?php if($this->session->flashdata('user_registered')): ?>
         <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
       <?php endif; ?>

       <?php if($this->session->flashdata('login_failed')): ?>
         <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
       <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedout')): ?>
         <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
       <?php endif; ?>


<div class="container-fluid">
<div class="transbox">
  <div align="center" class="style7">
  <p align="center">
   <div class="row">
   <div class="col-md-4 col-md-offset-4">
 <?php echo form_open('User/login'); ?>
 <?php echo validation_errors()?>
   
            <h1 class="text-center"><?php echo $page_title; ?></h1>
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required autofocus>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
            <?php echo form_close(); ?>
            <br>
<a href="<?php echo site_url('User/register')?>"><button  class="btn btn-warning btn-block">Register</button></a>
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
