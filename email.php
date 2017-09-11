
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	if(isset($_POST['submit'])){
		error_reporting(-1);
		ini_set('display_errors', 'On');
		set_error_handler("var_dump");
	//    ini_set( 'display_errors', 1 );
		//  error_reporting( E_ALL );

			$from = "official@naiki.id";    //email tergantung hostinger
			//$from = ($_POST['email']);    //email tergantung hostinger
			$to = "ranggasatriaa@gmail.com";
			$subject = 'Request: '.($_POST['nama']); //subject
			$message = '<html><body>';
			$message .= 'Email: ';
			$message .= ($_POST['email']);
			$message .= '<br><br>Pesan: <br>';
			$message .= ($_POST['pesan']);
			$message .= '</body></html>';
			$headers = "From:" . strip_tags($from) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			//mail($to,$subject,$message, $headers);
			if(mail($to, $subject, $message, $headers)){
				//return complete();
				echo 'SUCCESS: Pesan anda berhasil di kirim. <a href="index.php">Kembali</a>';
			}else{
				echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="index.php">Kembali</a>';
			}
		}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="images/naikiico.ico">
<title>NAIKI Rental & Jasa</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Naiki Rental & Jasa Platform Pihak Ketiga Rental Alat Event dan Juga Jasa Seperti MC dan Talent" />

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/hover.css" rel="stylesheet" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!-- Custom Theme files -->

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<!---- start-smoth-scrolling---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
 	<!---- start-smoth-scrolling---->

</head>
<body>
<!---->


<!---->
<div id="contact" class="sally">
	 <div class="container">
		 <h3>Cari Tau Kami NAIKI Rental & Jasa</h3>
	 </div>
</div>
<!---->
<div class="say-hello">
	 <div class="container">
		 <div class="col-md-6 hello-grid-address">
			 <h3>Hubungi Kami</h3>
			 <div class="address-grids">
				 <div class="address-grid">
					 <img src="images/cc1.png" alt=""/>
					 <h4>Lokasi</h4>
					 <p>Gedung ICT Undip Lantai 2</p>
				 </div>
				 <div class="address-grid">
					 <img src="images/cc2.png" alt=""/>
					 <h4>Email</h4>
					 <p>OFFICE : <a href="mailto:info@example.com"> naikiofficial@gmail.com</a></p>
				 </div>
				 <div class="clearfix"></div>
				 <div class="address-grid">
					 <img src="images/cc3.png" alt=""/>
					 <h4>Nomor HP</h4>
					 <p>0753 860 0724</p>
				 </div>
				 <div class="address-grid">
					 <img src="images/cc4.png" alt=""/>
					 <h4>SOCIAL MEDIA</h4>
					 <p><a href="mailto:info@example.com"> Facebook </a> </p>
					 <p><a href="https://www.instagram.com/naiki.id/"> Instagram </a></p>
					 <p><a href="https://www.youtube.com/watch?v=yS2uba97BSc&t=13s"> Youtube </a></p>
				 </div>
				 <div class="clearfix"></div>
			 </div>
		 </div>
		 <div class="col-md-6 hello-grid-form">
			 <h3>Email Kami</h3>
			 <form action="email.php" method="post">
				 <li class="text"><input type="text" name="nama" placeholder="Nama Kamu" required/><div class="p1"></div></li>
				 <li class="text"><input type="email" name="email" placeholder="Email Kamu" required/><div class="p2"></div></li>
				 <li class="text"><textarea name="pesan" placeholder="Pesan Kamu"></textarea></li>
				 <input type="submit" name="submit" value="Kirim Pesan"/>
				 <input type="reset" value="Reset"/>
			 </form>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
<!-- <div class="map">
	 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d869435.6992783837!2d-113.2693743!3d31.6548391!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88623b1c0c42dded%3A0x550548b5cee5c94e!2sCamp+MACOBA!5e0!3m2!1sen!2sin!4v1424323366904" frameborder="0" style="border:0"></iframe>
	 <div class="up">
		 <a class="scroll" href="#home"><img src="images/map-up.png" alt=""/></a>
	 </div>
</div>
<!---->
<!-- <div class="copy-right">
	 <p>Copyrights &copy; 2015 Sally-Blocks All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
</div>  -->
<!---->
<div id="short" class="fotter">
	 <div class="container">
		 <div class="col-md-6 short-codes-left">
			 <div class="ftr-pic">
				 <img src="images/nav-logo.png" alt=""/>
			 </div>
			 <div class="ftr-info">
				 <p>NAIKI Rental & Jasa</p>
				 <p>- Good Choice to Service Finding - </p>
			 </div>
			 <div class="clearfix"></div>
		 </div>
		 <div class="col-md-6 short-codes-right">
			 	<p>Copyrights &copy; 2017 NAIKI Rental & Jasa | Template by W3layouts</p>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
