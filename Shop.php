<!DOCTYPE html>
<html lang="en">
<?php
 $appid = "your_appid.appspot.com";
 $page = $_GET['p'];
 if($page=='') $page='main';
 $title = $page;
 function panel_include($title,$file,$ptype='default'){
echo "<div class='panel panel-$ptype'>";
echo "<div class='panel-heading'>$title</div>";
echo "<div class='panel-body'>";
if(file_exists($file)){
 include($file);
}else{
 echo "ไม่พบไฟล์ $file ";
}
echo "</div>";
echo "</div>";
 }
?>



<head>
  <meta charset="utf-8">
  <title>EasyShop</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
    
  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">
  
  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">
  
  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet"> 
  
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">
  
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  
<!-- =======================================================
  Theme Name: Imperial
  Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
  Author: BootstrapMade.com
  Author URL: https://bootstrapmade.com
======================================================= -->
</head>

<body>
  <div id="preloader"></div>
  

  
<!--==========================
  Header Section
============================-->
  <header id="header">
    <div class="container">
    
      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>
        
      <nav id="nav-menu-container">
	  
        <ul class="nav-menu">
		
          <li class="menu-active"><a href="#hero">หน้าแรก</a></li>
          <li><a href="#about">รองเท้ากีฬา</a></li>
          <li><a href="#services">รองเท้าแฟชั่น</a></li>
          <li><a href="#portfolio">รองเท้าเด็ก</a></li>          
          <li><a href="#team">ผู้จัดทำ</a></li>
          
           
              
		
        </ul>
		
      </nav><!-- #nav-menu-container -->
	  
    </div>
	
  </header>
    
<!--==========================
  รองเท้ากีฬา
============================-->

  <section id="about">
  <div class="col-sm-3"; style="left:1000px;">
			<?php panel_include("User","login.php") ?>
			</div>
     <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">รองเท้ากีฬา</h3>
      </div>
      
     <div class="SHOES"> <!-- ใส่รูปรถ ใส่ได้divละ 3 อัน-->
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>NIKE HYPERVENOMX PHELON 3 IC<br><br>
											<img src="img/NIKE HYPERVENOMX PHELON 3 IC.jpg"" width="250" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>NIKE kobe<br><br>
											<img src="img/NIKE kobe-ad-id.png" width="250" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>NIKE MERCURIALX PROXIMO II CR7 IC <br><br>
											<img src="img/NIKE MERCURIALX PROXIMO II CR7 IC.jpg" width="250" height="150">
										</li><br>
									</div>
								</div>
							</div>
						</div>
        
        ><div class="SHOES"> <!-- ใส่รูปรถ ใส่ได้divละ 3 อัน-->
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>NIKE magista-obra-ii-id<br><br>
											<img src="img/NIKE magista-obra-ii-id.png" width="250" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>NIKE LUNAR CONTROL VAPOR<br><br>
											<img src="imgsp/NIKE LUNAR CONTROL VAPOR.jpg" width="250" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>NIKE MERCURIALX PROXIMO II TF<br><br>
											<img src="imgsp/NIKE MERCURIALX PROXIMO II TF.jpg" width="250" height="150">
										</li><br>
									</div>
								</div>
							</div>
						</div>
        <div class="SHOES"> <!-- ใส่รูปรถ ใส่ได้divละ 3 อัน-->
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>NIKE FREE RN MOTION FLYKNIT 2017<br><br>
											<img src="imgsp/NIKE FREE RN MOTION FLYKNIT 2017.jpg" width="250" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>NIKE AIR MAX JEWELL QS<br><br>
											<img src="imgsp/NIKE AIR MAX JEWELL QS.jpg" width="250" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>ADIDAS-ACE 17.1 Primeknit Firm Ground Boots<br><br><!-- ใส่ชื่อยี่ห้อรองเท้า-->
											<img src="imgsp/ADIDAS-ACE 17.1 Primeknit Firm Ground Boots.jpg" width="250" height="150"> <!-- ใส่ไฟล์รูป ดูที่โฟล์เดอร์เก็บไฟล์ด้วย-->
										</li><br>
									</div>
								</div>
							</div>
						</div>
						<div class="SHOES"> <!-- ใส่รูปรถ ใส่ได้divละ 3 อัน-->
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>NIKE mercurial-vapor-xi-id<br><br><!-- ใส่ชื่อยี่ห้อรองเท้า-->
											<img src="imgsp/NIKE mercurial-vapor-xi-id.png"" width="250" height="150"> <!-- ใส่ไฟล์รูป ดูที่โฟล์เดอร์เก็บไฟล์ด้วย-->
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>ADIDAS-Pure Boost<br><br><!-- ใส่ชื่อยี่ห้อรองเท้า-->
											<img src="imgsp/ADIDAS-Pure Boost.jpg" width="250" height="150"><!-- ใส่ไฟล์รูป ดูที่โฟล์เดอร์เก็บไฟล์ด้วย-->
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>NIKE LUNAREPIC FLYKNIT<br><br><!-- ใส่ชื่อยี่ห้อรองเท้า-->
											<img src="imgsp/NIKE LUNAREPIC FLYKNIT.jpg" width="250" height="150"><!-- ใส่ไฟล์รูป ดูที่โฟล์เดอร์เก็บไฟล์ด้วย-->
										</li><br>
									</div>
								</div>
							</div>
							<div class="SHOES"> <!-- ใส่รูปรถ ใส่ได้divละ 3 อัน-->
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>NIKE AIR ZOOM ALL OUT FLYKNIT<br><br><!-- ใส่ชื่อยี่ห้อรองเท้า-->
											<img src="imgsp/NIKE AIR ZOOM ALL OUT FLYKNIT.jpg"" width="250" height="150"> <!-- ใส่ไฟล์รูป ดูที่โฟล์เดอร์เก็บไฟล์ด้วย-->
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>NIKE mercurial-vapor-xi-id<br><br><!-- ใส่ชื่อยี่ห้อรองเท้า-->
											<img src="imgsp/NIKE mercurial-vapor-xi-id.png" width="250" height="150"><!-- ใส่ไฟล์รูป ดูที่โฟล์เดอร์เก็บไฟล์ด้วย-->
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>ADIDAS-Yeezy Boost 350 V2<br><br><!-- ใส่ชื่อยี่ห้อรองเท้า-->
											<img src="imgsp/ADIDAS-Yeezy Boost 350 V2.jpg" width="250" height="150"><!-- ใส่ไฟล์รูป ดูที่โฟล์เดอร์เก็บไฟล์ด้วย-->
										</li><br>
									</div>
								</div>
							</div>
	</section>
<!--==========================
  รองเท้าแฟชั่น
============================-->
  <section id="services">
     <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">รองเท้าแฟชั่น</h3>
      </div>
      
      <div class="SHOES"> <!-- ใส่รูปรถ ใส่ได้divละ 3 อัน-->
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Nike Foams2<br><br>
											<img src="imgf/Nike Foams2.jpg"" width="250" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Adidas Originals Superstar<br><br>
											<img src="imgf/Adidas Originals Superstar.jpg" width="250" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Converse black<br><br>
											<img src="imgf/Converse black.jpg" width="250" height="150">
										</li><br>
									</div>
								</div>
							</div>
						</div>
        <div class="SHOES"> <!-- ใส่รูปรถ ใส่ได้divละ 3 อัน-->
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>ADIDAS FLUX<br><br>
											<img src="imgf/ADIDAS FLUX.jpg" width="250" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Chanel2<br><br>
											<img src="imgf/Chanel2.jpg" width="250" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Converse<br><br>
											<img src="imgf/Converse.jpg" width="250" height="150">
										</li><br>
									</div>
								</div>
							</div>
						</div>
        <div class="SHOES"> <!-- ใส่รูปรถ ใส่ได้divละ 3 อัน-->
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>happy<br><br>
											<img src="imgf/happy.jpg"" width="250" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>NIKE<br><br>
											<img src="imgf/NIKE.jpg" width="250" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>. ASICS3 <br><br>
											<img src="imgf/. ASICS3.jpg" width="250" height="150">
										</li><br>
									</div>
								</div>
							</div>
						</div>
						<div class="SHOES"> <!-- ใส่รูปรถ ใส่ได้divละ 3 อัน-->
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>happy<br><br><!-- ใส่ชื่อยี่ห้อรองเท้า-->
											<img src="imgf/happy.jpg"" width="250" height="150"> <!-- ใส่ไฟล์รูป ดูที่โฟล์เดอร์เก็บไฟล์ด้วย-->
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Style Jeans<br><br><!-- ใส่ชื่อยี่ห้อรองเท้า-->
											<img src="imgf/Style Jeans.jpg" width="250" height="150"><!-- ใส่ไฟล์รูป ดูที่โฟล์เดอร์เก็บไฟล์ด้วย-->
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>details of Marino 2<br><br><!-- ใส่ชื่อยี่ห้อรองเท้า-->
											<img src="imgf/details of Marino 2.jpg" width="250" height="150"><!-- ใส่ไฟล์รูป ดูที่โฟล์เดอร์เก็บไฟล์ด้วย-->
										</li><br>
									</div>
								</div>
							</div>
							<div class="SHOES"> <!-- ใส่รูปรถ ใส่ได้divละ 3 อัน-->
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Onitsuka Tiger MEXICO66 Original THL7C2-1619<br><br><!-- ใส่ชื่อยี่ห้อรองเท้า-->
											<img src="imgf/Onitsuka Tiger MEXICO66 Original THL7C2-1619.jpg"" width="250" height="150"> <!-- ใส่ไฟล์รูป ดูที่โฟล์เดอร์เก็บไฟล์ด้วย-->
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Fashionable Shoes<br><br><!-- ใส่ชื่อยี่ห้อรองเท้า-->
											<img src="imgf/Fashionable Shoes.jpg" width="250" height="150"><!-- ใส่ไฟล์รูป ดูที่โฟล์เดอร์เก็บไฟล์ด้วย-->
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Chained in Fashion Shoes<br><br><!-- ใส่ชื่อยี่ห้อรองเท้า-->
											<img src="imgf/Chained in Fashion Shoes.jpg" width="250" height="150"><!-- ใส่ไฟล์รูป ดูที่โฟล์เดอร์เก็บไฟล์ด้วย-->
										</li><br>
									</div>
								</div>
							</div>
        
  </section>
  
<!--==========================
  รองเท้าเด็ก
============================-->
  <section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">รองเท้าเด็ก</h3>
      </div>
      
      <div class="SHOES"> <!-- ใส่รูปรถ ใส่ได้divละ 3 อัน-->
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>A Guide to Adidas Kids<br><br>
											<img src="imgkid/A Guide to Adidas Kids.jpg"" width="250" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>tiger toddler shoes<br><br>
											<img src="imgkid/tiger toddler shoes.jpg" width="250" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Asics <br><br>
											<img src="imgkid/Asics.jpg" width="250" height="150">
										</li><br>
									</div>
								</div>
							</div>
						</div>
        <div class="SHOES"> <!-- ใส่รูปรถ ใส่ได้divละ 3 อัน-->
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Mexico 66 TS<br><br>
											<img src="imgkid/Mexico 66 TS.jpg"" width="250" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Mexico 66 Baja<br><br>
											<img src="imgkid/Mexico 66 Baja.jpg" width="250" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Ultimate 81 <br><br>
											<img src="imgkid/Ultimate 81.jpg" width="250" height="150">
										</li><br>
									</div>
								</div>
							</div>
						</div>
        <div class="SHOES"> <!-- ใส่รูปรถ ใส่ได้divละ 3 อัน-->
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>onitsuka tiger<br><br>
											<img src="imgkid/onitsuka tiger.jpg"" width="250" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Onitsuka Tiger Kids<br><br>
											<img src="imgkid/Onitsuka Tiger Kids.jpg" width="250" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Timberland<br><br>
											<img src="imgkid/Timberland.jpg" width="250" height="150">
										</li><br>
									</div>
								</div>
							</div>
						</div>
						<div class="SHOES"> <!-- ใส่รูปรถ ใส่ได้divละ 3 อัน-->
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>puma Red<br><br><!-- ใส่ชื่อยี่ห้อรองเท้า-->
											<img src="imgkid/puma Red.jpg"" width="250" height="150"> <!-- ใส่ไฟล์รูป ดูที่โฟล์เดอร์เก็บไฟล์ด้วย-->
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>paurfank kid<br><br><!-- ใส่ชื่อยี่ห้อรองเท้า-->
											<img src="imgkid/paurfank kid.jpg" width="250" height="150"><!-- ใส่ไฟล์รูป ดูที่โฟล์เดอร์เก็บไฟล์ด้วย-->
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>puma Archives<br><br><!-- ใส่ชื่อยี่ห้อรองเท้า-->
											<img src="imgkid/puma Archives.jpg" width="250" height="150"><!-- ใส่ไฟล์รูป ดูที่โฟล์เดอร์เก็บไฟล์ด้วย-->
										</li><br>
									</div>
								</div>
							</div>
							<div class="SHOES"> <!-- ใส่รูปรถ ใส่ได้divละ 3 อัน-->
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Romirus<br><br><!-- ใส่ชื่อยี่ห้อรองเท้า-->
											<img src="imgkid/Romirus.jpg"" width="250" height="150"> <!-- ใส่ไฟล์รูป ดูที่โฟล์เดอร์เก็บไฟล์ด้วย-->
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Ultimate 81<br><br><!-- ใส่ชื่อยี่ห้อรองเท้า-->
											<img src="imgkid/Ultimate 81.jpg" width="250" height="150"><!-- ใส่ไฟล์รูป ดูที่โฟล์เดอร์เก็บไฟล์ด้วย-->
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Timberland<br><br><!-- ใส่ชื่อยี่ห้อรองเท้า-->
											<img src="imgkid/Timberland.jpg" width="250" height="150"><!-- ใส่ไฟล์รูป ดูที่โฟล์เดอร์เก็บไฟล์ด้วย-->
										</li><br>
									</div>
								</div>
							</div>
        
  </section>
    


<!--==========================
  Team Section
============================-->    
  <section id="team">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">คณะผู้จัดทำ</h3>
          <div class="section-title-divider"></div>
          
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-1.jpg" alt=""></div>
            <h4>Tew</h4>
            <span>Chief Executive Officer</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
        
        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-2.jpg" alt=""></div>
            <h4>Zo</h4>
            <span>Product Manager</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
        
        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-3.jpg" alt=""></div>
            <h4>Bam</h4>
            <span>CTO</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
        
        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="img/team-4.jpg" alt=""></div>
            <h4>Gift</h4>
            <span>Accountant</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
        
      </div>  
    </div>
  </section>
    
<!--==========================
  Contact Section
============================--> 
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Contact Us</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>A108 Adam Street<br>New York, NY 535022</p>
            </div>
            
            <div>
              <i class="fa fa-envelope"></i>
              <p>info@example.com</p>
            </div>
            
            <div>
              <i class="fa fa-phone"></i>
              <p>+1 5589 55488 55s</p>
            </div>
            
          </div>
        </div>
        
        <div class="col-md-5 col-md-push-2">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  
<!--==========================
  Footer
============================--> 
  <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright">
              &copy; Copyright <strong>Imperial Theme</strong>. All Rights Reserved
            </div>
            <div class="credits">
              <!-- 
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
              -->
              Bootstrap Themes by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
  </footer><!-- #footer -->
  
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    
  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>
  
  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>
  
  <script src="contactform/contactform.js"></script>
  
    
</body>
</html>