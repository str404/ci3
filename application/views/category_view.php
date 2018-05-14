<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>STR WEB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">
   	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">

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
	height:100px;
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
          <li><a href="<?php echo site_url('Welcome/Tugas')?>">&ensp;&ensp;&ensp;&ensp;Home</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">&ensp;&ensp;&ensp;&ensp;Blog <span class="caret"></span></a>
      <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('Blog/create_action')?>">Create</a></li>
            <li><a href="<?php echo site_url('Blog/bio')?>">Beranda</a></li>
            <li><a href="#section4">Biodata</a></li>
            <li><a href="#section5">Game Favorit</a></li>
            <li><a href="#section1">Web Favorit</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">&ensp;&ensp;&ensp;&ensp;Kategori <span class="caret"></span></a>
      <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('Category/create')?>">Buat kategori</a></li>
            <li><a href="<?php echo site_url('Category')?>">list kategori</a></li>
          </ul>
        </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<br />
<br />
<br />

<h1 align="center" class="style2"><span class="navbar-inverse "><span class="text-danger style9">Blog</span></h1>

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

<div class="container-fluid">
<div class="transbox">
  <div align="center" class="style7">
    <p>List kategori</p>
    </div>
<div class="container">

      <table class="table table-bordered table-striped" id="mydata">

            <thead>

                  <tr>

                        <td>Id</td>

                        <td>Nama Category</td>

                        <td>Deskripsi</td>

                        <td>date_created</td>

                        <td>action</td>


                  </tr>

            </thead>

            <tbody>

                  <?php

                        foreach($x->result_array() as $i):

                              $id_kategori=$i['id_kategori'];

                              $nama=$i['nama'];

                              $deskripsi=$i['deskripsi'];

                              $date_created=$i['date_created'];

                  ?>

                  <tr>

                        <td><?php echo $id_kategori;?> </td>

                        <td><?php echo $nama;?> </td>

                        <td><?php echo $deskripsi;?> </td>

                        <td><?php echo $date_created;?> </td>

                        <td><a href="<?php echo site_url ('Category/hapus/'.$id_kategori); ?>" class="btn btn-danger btn-xs pull-right" role="button">Delete </i></a>
      <a href=" <?php echo site_url('Category/edit/'.$id_kategori); ?>" class="btn btn-primary btn-xs" role="button">Edit </i></a></td>

                  </tr>

                  <?php endforeach;?>

            </tbody>

      </table>

</div>

<div class="container-fluid">
<div class="transbox">
  <div align="center" class="style7">
    <p>List kategori</p>
    </div>
<div class="container">
<table class="table table-bordered table-striped" id="mydata">
<?php foreach($all_categories as $i){ ?>
<div class="col-md-4">
  <div class="thumbnail">
    <div class="caption">
      <h4 class=""> <?php echo $i->nama ?></h4>
      <hr>
      <p class=""> <?php echo $i->deskripsi ?> </p>
      <a href="<?php echo site_url ('Category/hapus/'.$i->id_kategori); ?>" class="btn btn-danger btn-xs pull-right" role="button">Delete </i></a>
      <a href=" <?php echo site_url('Category/edit/'.$i->id_kategori); ?>" class="btn btn-primary btn-xs" role="button">Edit </i></a>
    </div>
  </div>
</div>
<?php } 
?>
</table>
</div>

<div align="center">
<?php
        // $links ini berasal dari fungsi pagination
        // Jika $links ada (data melebihi jumlah max per page), maka tampilkan
            echo $links;
        ?>
</div>

<!-- <div align="center">
<nav aria-label="Page navigation example">
 <ul class="pagination justify-content-center">
   <li class="page-item disabled">
     <a class="page-link" href="#" tabindex="-1">Previous</a>
   </li>
   <li class="page-item"><a class="page-link" href="#">1</a></li>
   <li class="page-item"><a class="page-link" href="#">2</a></li>
   <li class="page-item"><a class="page-link" href="#">3</a></li>
   <li class="page-item">
     <a class="page-link" href="#">Next</a>
   </li>
 </ul>
</nav>
</div>  -->

</div>
</div>



<br>
<br>
<br>
<br>
<br>
<br>

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
<script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"> </script>

<script>

      $(document).ready(function(){

            $('#mydata').DataTable();

      });

</script>


</body>
</html>
