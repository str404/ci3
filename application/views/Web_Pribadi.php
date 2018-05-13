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
  #section1 {padding-top:50px;height:800px;color: #fff; }
  #section2 {padding-top:50px;height:1300px;color: #fff;  }
   #section31 {padding-top:50px;height:4390px;color: #fff;}
  #section31 {padding-top:50px;height:1000px;color: #fff;}
  #section32 {padding-top:50px;height:1050px;color: #fff;}
  #section33 {padding-top:50px;height:1000px;color: #fff;}
  #section4 {padding-top:50px;height:500px;color: #fff; }
  #section5 {padding-top:50px;height:700px;color: #fff; }

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
	font-size: xx-large;
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
	height:90px;
	line-height:45px;
	background:#333;
	color:#fff;
	
	position:absolute;
    bottom:0px;
 
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
          <li><a href="#section4">&ensp;&ensp;&ensp;&ensp;Home</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">&ensp;&ensp;&ensp;&ensp;Blog <span class="caret"></span></a>
      <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('Blog/create_action')?>">Create</a></li>
            <li><a href="#section1">Biodata</a></li>
            <li><a href="#section31">Game Favorit</a></li>
            <li><a href="#section32">Web Favorit</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">&ensp;&ensp;&ensp;&ensp;Kategori <span class="caret"></span></a>
      <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('Category/create')?>">Buat kategori</a></li>
            <li><a href="<?php echo site_url('Category')?>">list kategori</a></li>
          </ul>
        </li>
          <li><a href="#section5">&ensp;&ensp;&ensp;&ensp;About</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<br />
<br />
<br />

<h1 align="center" class="style2"><span class="navbar-inverse "><span class="text-danger style9">Welcome To My WEB</span></h1>

<br />
<br />

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" align="center" >
    <div class="item active ">
      <img src="<?php echo base_url('assets/gambar/str/1.jpg"  alt="#" width="500')?>" >
      <div class="carousel-caption">
        <h3>Muhammad Satria R.P</h3>
       
      </div>
    </div>

    <div class="item">
      <img src="<?php echo base_url('assets/gambar/str/2.jpg"  alt="#" width="500')?>">
      <div class="carousel-caption">
        <h3>Muhammad Satria R.P</h3>
        
      </div>
    </div>

    <div class="item">
      <img src="<?php echo base_url('assets/gambar/str/3.jpg"  alt="#" width="500')?>">
      <div class="carousel-caption">
        <h3>Muhammad Satria R.P</h3>
      
      </div>
    </div>

      <div class="item">
      <img src="<?php echo base_url('assets/gambar/str/lis.jpg"  alt="#" width="500')?>">
      <div class="carousel-caption">
        <h3>Muhammad Satria R.P</h3>

      </div>
    </div>

  <div class="item">
      <img src="<?php echo base_url('assets/gambar/str/5.jpg"  alt="#" width="500')?>">
      <div class="carousel-caption">
        <h3>Muhammad Satria R.P</h3>

      </div>
    </div>
  
  </div>
  </div>

<p>&nbsp;</p>
<div id="section4" class="container-fluid">
  <div class="transbox">
    <div align="center"><br><br><img src="<?php echo base_url('assets/gambar/str/POLINEMA.png')?>"></div>
    <p class="style6" align="center">Selamat Datang di WEB STR. Web ini berisi tentang diri saya. Mulai dari profil, minat, pengalaman, dan lain-lain. Silahkan untuk ke bagian blog untuk selengkapnya. Terima kasih</p>
</div>
</div>
</div>   

<div id="section1" class="container-fluid">
<div class="transbox">
  <div align="center" class="style7">
    <p>Biodata</p>
    </div>
    <br>
    <div align="center"><img src="<?php echo base_url('assets/gambar/str/1.jpg" alt="#" width="500')?>" ></div>
  <p align="center">
    Artikel ini akan membahasa tentang profil saya, mulai dari nama, tanggal lahir, asal, jenjang pendidikan dan lain-lain. Silahkan mengunjungi halaman ini... <a href="<?php echo site_url('Blog/Bio#section4')?>">Selengkapnya</a>
</p>
</div>
</div>

<div id="section31" class="container-fluid">
<div class="transbox">
<div align="center" class="style7">
    <p>Game Favorit</p>
    </div>
  <br>
<div align="center"><img src="<?php echo base_url('assets/gambar/str/lis.jpg" alt="#" width="500')?>" ></div>
<br>
<div align="center"><img src="<?php echo base_url('assets/gambar/str/5.jpg" alt="#" width="500')?>" ></div>
<p align="center"> Berikut adalah artikel yang akan membahasa tentang game-game apa saja yang menjadi favorit saya.... <a href="<?php echo site_url('Blog/Bio#section5')?>">Selengkapnya</a></p>
</div>
</div>

<div id="section32" class="container-fluid">
<div class="transbox">
<div align="center" class="style7">
    <p>Website Favorit</p>
    </div>
  <br>
<div align="center"><img src="<?php echo base_url('assets/gambar/str/kaskus.png" alt="#" width="500')?>" >
<br><br><img src="<?php echo base_url('assets/gambar/str/1cak.png" alt="#" width="500')?>" >
</div>
<p align="center">
  Pada artikel ke 3 ini saya akan memberi tahu website yang sering dikunjungi, apa aja website nya ? Monggo di cek...<a href="<?php echo site_url('Blog/Bio#section1')?>">Selengkapnya</a>
</p>
</div>
</div>

<div id="section5" class="container-fluid">
<div class="transbox">
<div align="center" class="style7">
    <p>Tentang Web ini</p>
    </div>
      <br>
<div align="center"><img src="<?php echo base_url('assets/gambar/str/CI.png')?>"></div>
<p align="center">
  Web ini dibuat pada tahun 2018 menggunakan CodeIgniter, untuk memenuhi tugas mata kuliah pemrograman web berbasis framework yang diajar oleh Bapak Farid Masruri, S.Kom., M.Eng. Terima Kasih
</p>
</div>
</div>

<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />

<div id="footer" align="center">
    <span class="success style17">&copy; STR_WEB 2018. CodeIgniter. All rights reserved. 		</span><br />
    Copyright &copy; 2017
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
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/smoothscroll.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.nav.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.parallax.js')?>"></script>
<script src="<?php echo base_url('assets/js/owl.carousel.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/isotope.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/wow.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/counter.js')?>"></script>
<script src="<?php echo base_url('assets/js/custom.js')?>"></script>
</body>
</html>
