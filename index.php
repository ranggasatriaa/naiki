
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
<div id="home" class="banner">
	 <div class="container">
		 <div class="col-md-6 banner-info">
			 <div class="logo">
				 <a href="http://naiki.id"><img src="images/logo.png" alt=""/></a>
			 </div>
			 <!-- start slider -->
			 <div class="flexslider">
				 <ul class="slides">
					 <li>
						 <div class="tittle">
							 <h2>NAIKI Rental & Jasa</h2>
								<p>Nikmati kemudahan mencari rental dan jasadi tangan anda sekarang juga.</p>
							  <a class="hvr-shutter-in-horizontal" href="https://play.google.com/store/apps/details?id=com.hafidhaulia.rental&hl=en">Download di Playstore</a>
						</div>
					  </li>
						<li>
						 <div class="tittle">
							 <h2>NAIKI Rental & Jasa</h2>
								<p>Daftarkan vendormu dan lengkapi portofolio vendor anda</p>
							  <a class="hvr-shutter-in-horizontal" href="https://play.google.com/store/apps/details?id=com.hafidhaulia.rental&hl=en">Download di Playstore</a>
						</div>
					  </li>
					  <li>
						 <div class="tittle">
							 <h2>NAIKI Rental & Jasa</h2>
								<p>Punya event? Ingin mencari alat-alat event yang berkualitas dan murah? NAIKI Solusinya</p>
							  <a class="hvr-shutter-in-horizontal" href="https://play.google.com/store/apps/details?id=com.hafidhaulia.rental&hl=en">Download di Playstore</a>
						</div>
					  </li>
				  </ul>
			 </div>
			  <!-- end slider -->
		 </div>
		 <div class="col-md-6 banner-pic">
			 <img src="images/phone.png" alt=""/>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
<div class="navigation">
	 <div class="container">
	     <div class="fixed-header">
			 <div class="nav-logo">
				 <a class="scroll" href="#home"><img src="images/nav-logo.png" alt=""/></a>
			 </div>
			 <div class="top-menu">
					<span class="menu"> </span>
				 <nav class="cl-effect-21">
					<ul class="top-menu2">
						<li><a class="scroll" href="#home">HOME</a></li>
						<li><a class="scroll" href="#kategori">Kategori</a></li>
						<!-- <li><a class="scroll" href="#features">Fitur</a></li> -->
						<li><a href="howto/mendaftar/index.html">Cara Kerja</a></li>
						<li><a class="scroll" href="#team">Team</a></li>
						<li><a class="scroll" href="#contact">Hubungi Kami</a></li>
					</ul>
				</nav>
				</div>
				<script>
			$("span.menu").click(function(){
				$(".top-menu ul").slideToggle(500, function(){
				});
			});
			</script>

				<!-- script for menu -->
					<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
					</script>

				<!-- script for menu -->
				<script>
			 $(document).ready(function() {
				 var navoffeset=$(".navigation").offset().top;
				 $(window).scroll(function(){
					var scrollpos=$(window).scrollTop();
					if(scrollpos >=navoffeset){
						$(".navigation").addClass("fixed");
					}else{
						$(".navigation").removeClass("fixed");
					}
				 });

			 });
			 </script>

			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
							  <script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider ').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
<!-- --------------------------------------------- -->
<div id="about" class="about">
	<div class="container">
		<h3>NAIKI RENTAL & JASA</h3>
		<div class="videoWrapper">
			<!-- <img src="images/logo.png" alt=""/> -->
			<iframe width="560" height="315" src="https://www.youtube.com/embed/yS2uba97BSc" frameborder="0" allowfullscreen></iframe>
		</div>
		<!-- <hr style="color:#eec26b;"> -->
		<p>NAIKI Rental & Jasa adalah sebuah startup digital berjiwa sosial yang bertujuan untuk meningkatkan kesejahteraan vendor yang bergerak
			dibidang usaha sewa dan jasa yang ada di Indonesia. NAIKI Rental & Jasa hadir untuk mewadahi antara customer dan vendor usaha rental dan
			jasa yang ada, sehingga nantinya konsumen akan mempunyai banyak pilihan barang jasa.</p>
			<!-- <a class="hvr-bounce-to-top" href="#">TRY RIGHT NOW</a> -->
			<!-- <embed width="420" height="345"src="https://www.youtube.com/watch?v=yS2uba97BSc&t"type="application/x-shockwave-flash"></embed> -->
			<!-- <iframe width="420" height="345" src="https://youtube.com/yS2uba97BSc"> </iframe> -->
	</div>
</div>
<!-- ----------------------------------------- -->
<div class="fully">
	 <div class="container">
		 <!-- <img src="images/nav-logo.png" alt=""/> -->
		 <h3>Good Choice to Services Finding</h3>
	 </div>
</div>
<!-- ------------------------------ -->
<div class="numbers">
	 <div class="container">
		 <h3 style="text-align:center;">KENAPA MEMILIH NAIKI RENTAL & JASA</h3><br/>
		 <div class="number-grids">
			 <div class="col-md-3 numic-grid">
				 <div class="icon1"></div>
				 <h4>Portofolio Jelas </h4>
				 <label></label>
				 <p>Memberikan kemudahan untuk dapat melihat
					  Berbagai macam portofolio vendor
				</p>
			 </div>
			 <div class="col-md-3 numic-grid">
				 <div class="icon2"></div>
				 <h4>Hasil Memuaskan</h4>
				 <label></label>
				 <p>Vendor yang berkualitas, professional, dan terpercaya
					Dengan hasil yang lebih baik
					</p>
			 </div>
			 <div class="col-md-3 numic-grid">
				 <div class="icon3"></div>
				 <h4>Peningkatan keseajahteraan</h4>
				 <label></label>
				 <p>Mendapatkan order singkat tanpa harus menunggu
					Waktu yang lama
					</p>
			 </div>
			 <div class="col-md-3 numic-grid">
				 <!-- <img style="width:56px;height:35px;display:inline-block;	 margin-bottom:1em;" src="images/dr.png" alt=""> -->
				 <div class="icon1"></div>
				 <h4>Menciptakan pasar</h4>
				 <label></label>
				 <p>Membentuk tempat pasar secara online agar dapat
				Menjaring pasang yang lebih luas
				</p>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>

<!-- ---------------------------------------------------------- -->
<div id="kategori"></div>
<div class="fully">
	 <div class="container">
		 <img src="images/nav-logo.png" alt=""/>
		 <!-- <h3>Fully responsive</h3> -->
	 </div>
</div>
<!-- ------------------------------------------------ -->
<div class="container">
	<div id="portfoliolist">
		<h3 style="text-align:center;">KATEGORI PRODUK</h3><br/>
		 <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
			 <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
				 <!-- <a href="#small-dialog1" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim"> -->
					 <img src="images/multimediaweb.png" class="img-responsive" alt=""/>
					 <div class="tour-caption">
						 <!-- <h4>Multimedia</h4> -->
						 <p>Kategori multimedia meliput peminjaman LCD, Sound System, HT, Camera, Mic, Screen, dll</p>
						 <!-- <span> </span> -->
					 </div>
				 <!-- </a> -->
			 </div>
		 </div>
		 <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
			 <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
				 <!-- <a href="#small-dialog2" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim"> -->
					 <img src="images/mcweb.png" class="img-responsive" alt=""/>
					 <div class="tour-caption">
						 <!-- <h4>MC & Talent</h4> -->
						 <p>Kategori mc & talent	 meliputi jasa para profesional dibidang MC, talent, acoustic, band, fotografi, dll</p>
						 <!-- <span> </span> -->
						</div>
					<!-- </a> -->
			 </div>
		 </div>
		 <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
			 <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
				 <!-- <a href="#small-dialog3" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim"> -->
					 <img src="images/merchandiseweb.png" class="img-responsive" alt=""/>
					 <div class="tour-caption">
						 <!-- <h4>Merchendice</h4> -->
						 <p>Kategori merchandise meliputi pembuatan flower bcuket, piagam, plakat, digital creative, dll</p>
						 <!-- <span> </span> -->
					 </div>
				 <!-- </a> -->
			 </div>
		 </div>
		 <div class="clearfix"></div>
	</div>
</div>
<!-- ------------------------------- -->
<div id="team"></div>
<div class="fully">
	 <div class="container">
		 <img src="images/nav-logo.png" alt=""/>
		 <!-- <h3>Fully responsive</h3> -->
	 </div>
</div>
<!-- ------------------------------------------- -->
<div id="team" class="team">
	 <div class="container">
		 <div class="team-info">
			 <h3>Amazing Team NAIKI</h3>
			 <h5>NAIKI didirikan oleh orang-orang yang berkompeten dibidangnya masing-masing</h5>
		 </div>
		 <div class="team-grids">
			 <div class="col-md-4 team-grid">
				 <a href="#"><img src="images/fadel.jpg" alt=""/></a>
				 <h3>Alfi <b>Fadel</b> Majid</h3>
				 <h5>CFO</h5>
				 <div class="caption">
					 <p>Bergabung bersama NAIKI untuk memajukan vendormu</p>
						<!-- <div class="social-icons">
							<a href="#"><i class="twtr"></i></a>
							<a href="#"><i class="fb"></i></a>
							<a href="#"><i class="inst"></i></a>
						</div> -->
				 </div>
			 </div>
			 <div class="col-md-4 team-grid">
				 <a href="#">
					 <img src="images/sandy.jpg" alt=""/>
				 </a>
				 <h3>Alfonsus <b>Sandy</b> Dwi L.</h3>
				 <h5>CMO</h5>
				 <div class="caption">
					 <p>Kemudahan dan kenyamanan menjadi prioritas kami</p>
						<!-- <div class="social-icons">
							<a href="#"><i class="twtr"></i></a>
							<a href="#"><i class="fb"></i></a>
							<a href="#"><i class="inst"></i></a>
						</div> -->
				 </div>
			 </div>
			 <div class="col-md-4 team-grid">
				 <a href="#"><img src="images/hafidh.jpg" alt=""/></a>
				 <h3><b>Hafidh</b> Aulia W</h3>
				 <h5>CTO</h5>
				 <div class="caption">
					 <p>Fitur-fitur NAIKI Rental & Jasa Akan memudahkan para vendor dan penyewaa dalam satu media</p>
						<!-- <div class="social-icons">
							<a href="#"><i class="twtr"></i></a>
							<a href="#"><i class="fb"></i></a>
							<a href="#"><i class="inst"></i></a>
						</div> -->
				 </div>
			 </div>
			 <div class="col-md-2 team-grid">
			 </div>

			 <div class="col-md-4 team-grid" style="margin-top:30px;">
				 <a href="#"><img src="images/rangga.jpg" alt=""/></a>
				 <h3><b>Rangga</b> Satria A.</h3>
				 <h5>CFO</h5>
				 <div class="caption">
					 <p>Keuangan para vendor dan transaksi anda akan dioleh dengan mudah dan aman.</p>
						<!-- <div class="social-icons">
							<a href="#"><i class="twtr"></i></a>
							<a href="#"><i class="fb"></i></a>
							<a href="#"><i class="inst"></i></a>
						</div> -->
				 </div>
			 </div>
			 <div class="col-md-4 team-grid" style="margin-top:30px;">
				 <a href="#"><img src="images/afif.jpg" alt=""/></a>
				 <h3>Muhammad <b>Afif</b> A.</h3>
				 <h5>CIO</h5>
				 <div class="caption">
					 <p>Informasi vendor akan tersebar dengan luas dan untuk para pelanggan dapat mebandingan informasi vendor yang dibutuhkan</p>
						<!-- <div class="social-icons">
							<a href="#"><i class="twtr"></i></a>
							<a href="#"><i class="fb"></i></a>
							<a href="#"><i class="inst"></i></a>
						</div> -->
				 </div>
			 </div>
			 <div class="col-md-2 team-grid">
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<!-- <div id="work" class="work">
	 <div class="container">
		 <div class="work-info">
			 <h3>Just watch this promo!</h3>
			 <p>Whether you need simple pages, striking galleries, a professional blog, or an online store, it's all included with your Squarespace website. Best of all, everything is
				mobile-ready right from the start  with your Squarespace website</p>
			 <img src="images/phone2.png" alt=""/>
			 <div class="work-pic-info">
				 <h4>CUSTOMIZATION</h4>
				 <p>With our grea reliable and scalable cloud infrastructure, there's no downtime</p>
			 </div>
		 </div>
	 </div>
</div> -->
<!---->
<!-- <div class="subscribe">
	 <div class="container">
		 <img src="images/sub.png" alt=""/>
		 <form>
			 <input type="text" class="text" value="Enter your Email here to subscribe" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your Email here to subscribe';}">
			  <input type="submit" value="SUBSCRIBE ME"/>
		 </form>
	 </div>
</div>
<!---->
<!-- <div class="clients">
	 <div class="container">
		 <h3>Supported by</h3>
		 <div class="clients-grids">
				<img src="images/strundip.png" style="width:15%"/>
				<img src="images/bekraf.png" style="width:8%; margin-left:10px;"/>
				<img src="images/dilo.png" style="width:8%; margin-left:10px;"/>
		 </div>
	 </div>
</div>  -->
<!---->
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<!-- <div id="features" class="features">
	 <div class="container">
		 <div class="slider">
			 <div class="callbacks_container">
			 <ul class="rslides" id="slider">
	          <li>
				  <div class="features-info">
					 <img src="images/bird.png" alt=""/>
					 <p>Beautiful Examples of Login Forms for Websites and Apps <span>-http://w3layouts.com/</span>on Designmodo #inspiration. Share new designs with us!</p>
					 <h5><a href="mailto:info@example.com">@info(at)example.com</a> 6 days ago</h5>
				  </div>
				 </li>
				 <li>
					  <div class="features-info">
							<img src="images/fb.png" alt=""/>
							<p>Beautiful Examples of Login Forms for Websites and Apps <span>-http://w3layouts.com/</span>on Designmodo #inspiration. Share new designs with us!</p>
							<h5><a href="mailto:info@example.com">@info(at)example.com</a> 8 days ago</h5>
					  </div>
				 </li>
				 <li>
					  <div class="features-info">
							<img src="images/g-plus.png" alt=""/>
							<p>Beautiful Examples of Login Forms for Websites and Apps <span>-http://w3layouts.com/</span>on Designmodo #inspiration. Share new designs with us!</p>
							<h5><a href="mailto:info@example.com">@info(at)example.com</a> 1 week ago</h5>
					  </div>
				 </li>
			  </ul>
			  </div>
	     </div>
	  </div>
</div> -->
<!---->

<!---->
<!-- <div id="contact" class="contact">
	 <div class="container">
		 <div class="contact-info">
			 <h3>Still have questions, get back to us!</h3>
			 <p>Please use the form below to contact us. We look forward to working with you and will get back to you as soon as possible. All fields are required.</p>
		 </div>
		 <div class="contact-grids">
			 <div class="col-md-6 contact-details">
				 <form>
				 <li>
					 <input type="text" class="text" value="NAME" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'NAME';}">
					 <a class="icon11" href="#"></a>
				 </li>
				 <div class="clearfix"></div>
				 <li>
					 <input type="text" class="text" value="EMAIL" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'EMAIL';}">
					 <a class="icon22" href="#"></a>
				 </li>
				 <div class="clearfix"></div>
				 <li>
					 <input type="text" class="text" value="PHONE" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PHONE';}">
					 <a class="icon33 " href="#"></a>
				 </li>
				 <div class="clearfix"></div>
				 </form>
			 </div>
			  <div class="col-md-6 contact-details-right">
				 <form>
				 <textarea onfocus="if(this.value == 'MESSAGE') this.value='';" onblur="if(this.value == '') this.value='MESSAGE';">MESSAGE</textarea>
				 <input type="submit" value="SEND MESSAGE">
				 </form>
			 </div>
			 <div class="clearfix"></div>
		 </div>

		 <div class="social-media">
			 <a href="#"><i class="instagram"></i></a>
			 <a href="#"><i class="facebook"></i></a>
			 <a href="#"><i class="pinterest"></i></a>
			 <a href="#"><i class="twitter"></i></a>
			 <a href="#"><i class="google"></i></a>
		 </div>
	 </div>
</div> -->
<!---->
<script type="text/javascript" src="js/modernizr.custom.min.js"></script>
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>

			<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});

						});
				</script>

	     <!-- <div id="portfoliolist">
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
							<a href="#small-dialog1" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/pic1.jpg" class="img-responsive" alt=""/>
							<div class="tour-caption">
							<h4>Creative Dush Pro</h4>
							<p>New greate way to create open space in your city house.</p>
							<span> </span>
							</div></a>
						</div>
					</div>
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
							<a href="#small-dialog2" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/pic2.jpg" class="img-responsive" alt=""/>
							 <div class="tour-caption">
							 <h4>Creative Dush Pro</h4>
							 <p>New greate way to create open space in your city house.</p>
							<span> </span>
						     </div></a>
						</div>
					</div>
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
							<a href="#small-dialog3" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/pic3.jpg" class="img-responsive" alt=""/>
							 <div class="tour-caption">
							 <h4>Creative Dush Pro</h4>
							 <p>New greate way to create open space in your city house.</p>
							 <span> </span>
							 </div></a>
						</div>
					</div>
					<div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
							<a href="#small-dialog4" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/pic4.jpg" class="img-responsive" alt=""/>
							 <div class="tour-caption">
							 <h4>Creative Dush Pro</h4>
							 <p>New greate way to create open space in your city house.</p>
							 <span> </span>
							</div></a>
						</div>
					</div>
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
							<a href="#small-dialog5" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/pic5.jpg" class="img-responsive" alt=""/>
							 <div class="tour-caption">
							 <h4>Creative Dush Pro</h4>
							 <p>New greate way to create open space in your city house.</p>
							 <span> </span>
							 </div></a>
						</div>
					</div>
					<div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
							<a href="#small-dialog6" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/pic6.jpg" class="img-responsive" alt=""/>
							 <div class="tour-caption">
							 <h4>Creative Dush Pro</h4>
							 <p>New greate way to create open space in your city house.</p>
							 <span> </span>
							</div></a>
						</div>
			      </div>

		   <div class="clearfix"></div>
	  </div> -->

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
					 <p><a href="https://www.google.co.id/maps/place/Gedung+ICT+Undip/@-7.0544211,110.4368649,17z/data=!3m1!4b1!4m5!3m4!1s0x2e708c1d399ff9f9:0x2d2033fed8e955dd!8m2!3d-7.0544211!4d110.4390536">Gedung ICT Undip Lantai 2</a></p>
				 </div>
				 <div class="address-grid">
					 <img src="images/cc2.png" alt=""/>
					 <h4>Email</h4>
					 <p>OFFICE : <a href="mailto:naikiofficial@gmail.com"> naikiofficial@gmail.com</a></p>
				 </div>
				 <div class="clearfix"></div>
				 <div class="address-grid">
					 <img src="images/cc3.png" alt=""/>
					 <h4>Nomor HP</h4>
					 <p> <a href="https://api.whatsapp.com/send?phone=085786007245&text=Halo%20NAIKI">085786007245</a></p>
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
			 <form action="index.php" method="post">
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
</div> -->
<!-------------------------------------------------- -->
<!-- <div class="copy-right">
	 <p>Copyrights &copy; 2015 Sally-Blocks All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
</div> -->
<!------------------------------------------------------ 	-->
<div id="short" class="fotter">
	 <div class="container">
		 <div class="col-md-6 short-codes-left">
			 <div class="ftr-pic">
				 <img src="images/nav-logo.png" alt=""/>
			 </div>
			 <div class="ftr-info">
				 <p>NAIKI Rental & Jasa</p>
				 <p>-Good Choice to Service Finding-</p>
			 </div>
			 <div class="clearfix"></div>
		 </div>
		 <div class="col-md-6 short-codes-right">
			 	<p>Copyrights &copy; 2017 NAIKI Rental & Jasa | Template by W3layouts</p>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
