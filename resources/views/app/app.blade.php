<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>RPL SMK Negeri 11 Bandung</title>
	
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('img/RPL-Favicon.png')}}">
		<link rel="icon" type="image/x-icon" href="{{asset('img/RPL-Favicon.png')}}">

	<!-- CSS Module -->
		<!-- Google Fonts -->
			<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,300,700">
		<!-- Font Awesome -->
			<link rel="stylesheet" type="text/css" href="{{asset('vendor/font-awesome/css/fontawesome-all.min.css')}}">
		<!-- Bootstrap -->
			<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
		<!-- Animate -->
			<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
			<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/set.css')}}">
		<!-- Gallery -->
			<link rel="stylesheet" type="text/css" href="{{asset('vendor/gallery/blueimp-gallery.min.css')}}">
		<!-- Custom Style -->
			<link rel="stylesheet" type="text/css" href="{{asset('vendor/style.css')}}">
		<!-- SweetAlert -->
			<link rel="stylesheet" type="text/css" href="{{asset('vendor/sweetalert/sweetalert2.css')}}">
		<!-- Wrapper -->
			<link rel="stylesheet" type="text/css" href="{{asset('css/wrapper.css')}}">
		<style type="text/css">
			.topbar {
				background:url(<?=asset('img/lines.png')?>);	
				height:5px;
				position: fixed;
				top: 0;
				width: 100%;
				z-index: 1000;
			}
			.loading{
				width:100%;
			    height:100%;
			    position:fixed;
			    left:0;
			    top:0;
			    bottom:0;
			    right:0;
			    z-index:999999;
			    background:#fff url("{{asset('img/preloader.gif')}}") no-repeat center center;
			}
			#maps-11{
				height: 100px;
			}
			.buat-keatas{
				position: fixed;
				bottom: 20px;
				right:20px;
				width: 50px;
				height: 50px;
				text-align: center;
				padding-top:17px;
				z-index: 99999999; 
				display: none;
			}
		</style>
		@yield('css')
</head>

<body>
	<div class="loading"></div>
	<div class="topbar animated fadeInLeftBig"></div>
	@include('app.header')
	
	<div class="content">
		@yield('content')
	</div>
	
	@guest
		@include('app.footer')
	@else
		@include('admin.wrapper')			
	@endguest

	<a href="#" id="buat-keatas" class="btn-dark buat-keatas"><i class="fas fa-fw fa-chevron-up"></i></a>
	<!-- JS Module -->
		<!-- Jquery -->
			<script type="text/javascript" src="{{asset('jquery-3.3.1.min.js')}}"></script>
			<script type="text/javascript" src="{{asset('vendor/jquery.js')}}"></script>
		<!-- WOW Animate -->
			<script type="text/javascript" src="{{asset('vendor/wow/wow.min.js')}}"></script>
		<!-- Bootstrap -->
			<script type="text/javascript" src="{{asset('vendor/bootstrap/js/bootstrap.js')}}"></script>
		<!-- Jquery Mobile -->
			<script type="text/javascript" src="{{asset('vendor/mobile/touchSwipe.min.js')}}"></script>
			<script type="text/javascript" src="{{asset('vendor/respond/respond.js')}}"></script>
		<!-- Gallery -->
			<script type="text/javascript" src="{{asset('vendor/gallery/jquery.blueimp-gallery.min.js')}}"></script>
		<!-- SweetAler -->
			<script type="text/javascript" src="{{asset('vendor/sweetalert/sweetalert2.js')}}"></script>
		<!-- Wrapper -->
			<script type="text/javascript" src="{{asset('js/wrapper.js')}}"></script>
		<!-- Custom JS -->
		@yield('js')
		<script type="text/javascript">
			$(window).on('load',function(){
				$('.loading').fadeOut('slow');
			});
			$(document).ready(function(){
				/*Buat Keatas*/
				var fixed = false;
				$(document).scroll(function(){
					if($(this).scrollTop() > 250){
						if (!fixed) {
							fixed = true;
							$('#buat-keatas').show("slow", function() {
								$('#buat-keatas').css({
									position: 'fixed',
									display: 'block'
								});
							});
						}
					}else{
						if (fixed) {
							fixed = false;
							$('#buat-keatas').hide("slow", function() {
								$('#buat-keatas').css({
									display: 'none'
								});
							});
						}
					}
				});

				$('#buat-keatas').click(function(){
					$("html , body").animate({ scrollTop : 0 },800);
				});


				/*Tooltip*/
				$('#aksesAdmin').tooltip();
				$('#navBeranda').tooltip();
				$('#navProfil').tooltip();
				$('#navVisiMisi').tooltip();
				$('#navStrukturOrganisasi').tooltip();
				$('#navKurikulum').tooltip();
				$('#navPeluangKerja').tooltip();
				$('#navInformasi').tooltip();
				$('#navBerita').tooltip();
				$('#navGuru').tooltip();
				$('#navAgenda').tooltip();
				$('#navDownload').tooltip();
				$('#navPengumuman').tooltip();
				$('#navBukuTamu').tooltip();

				$(".navMenu").hover(function(){
					$(this).css("background-color", "rgba(0,0,0,0.1)");
				    }, function(){
				    $(this).css("background-color", "#f8f8f8");
				});

				/*Scrolling Page*/
				//Profil
				$('#navProfil').click(function(){
				 	$("html, body").animate({ scrollTop: $(this.hash).offset().top }, 1000);
				 	return false;
				});
				//VisiMisi
				$('#navVisiMisi').click(function(){
				 	$("html, body").animate({ scrollTop: $(this.hash).offset().top }, 1000);
				 	return false;
				});
				//StrukturOrganisasi
				$('#navStrukturOrganisasi').click(function(){
				 	$("html, body").animate({ scrollTop: $(this.hash).offset().top }, 1000);
				 	return false;
				});
				//Kurikulum
				$('#navKurikulum').click(function(){
				 	$("html, body").animate({ scrollTop: $(this.hash).offset().top }, 1000);
				 	return false;
				});
				//PeluangKerja
				$('#navPeluangKerja').click(function(){
				 	$("html, body").animate({ scrollTop: $(this.hash).offset().top }, 1000);
				 	return false;
				});

				//Navigation

			});	


			var wow = new WOW(
			  {
			    boxClass:     'wowload',      // animated element css class (default is wow)
			    animateClass: 'animated', // animation css class (default is animated)
			    offset:       0,          // distance to the element when triggering the animation (default is 0)
			    mobile:       true,       // trigger animations on mobile devices (default is true)
			    live:         true        // act on asynchronously loaded content (default is true)
			  }
			);
			wow.init();

			function initMap() {
		        var uluru = {lat: -6.8969224, lng: 107.5642003};
		        var map = new google.maps.Map(document.getElementById('maps-11'), {
		          zoom: 14,
		          center: uluru
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }
		</script>
		<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvReOp8AQyNPv_xR8GRfvNYocnXhdupGY&callback=initMap"></script> -->


		@include('app.alert')
</body>
</html>