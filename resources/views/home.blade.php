@extends('app.app')

@section('js')
	<script type="text/javascript">
		$(document).ready(function(){
			$('.carousel').carousel({
				interval : 8000
			});
		});
	</script>
@endsection

@section('css')
	<style type="text/css">
		.struktur-organisasi{
			background:url("{{asset('img/lab.jpg')}}") center fixed; 
			background-size: cover; 
		}
		.peluang-kerja{
			background:url("{{asset('img/intro-bg.jpg')}}") center fixed; 
			background-size: cover; 
		}
	</style>
@endsection

@section('content')
	<!-- Start Profil RPL -->
		<div id="profil-rpl" class="profil-rpl">
			<div id="main-slider" class="no-margin">
				<div class="carousel slide">
		            <ol class="carousel-indicators">
		                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
		                <li data-target="#main-slider" data-slide-to="1"></li>
		                <li data-target="#main-slider" data-slide-to="2"></li>
		            </ol>
		            <div class="carousel-inner">
		                <div class="item active" style="background-image: url({{asset('img/portfolio/11.jpg')}})">
		                    <div class="container">
		                        <div class="row slide-margin">
		                            <div class="col-sm-6">
		                                <div class="carousel-content animation animated-item-1">
		                                	<h3 class="animation animated-item-2">RPL itu Apa?</h3>
		                                    <h5 class="animation animated-item-3">
		                                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		                                    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		                                    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		                                    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		                                    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		                                    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum...
		                                    </h5>
		                                    <a class="btn-slide animation animated-item-4" href="#">Read More</a>
		                                </div>
		                            </div>

		                            <div class="col-sm-6 hidden-xs animation animated-item-5">
		                                <div class="slider-img">
		                                    <img src="{{asset('img/portfolio/img1.png')}}" class="img-responsive">
		                                </div>
		                            </div>

		                        </div>
		                    </div>
		                </div><!--/.item-->

		                <div class="item" style="background-image: url({{asset('img/portfolio/12.jpg')}})">
		                    <div class="container">
		                        <div class="row slide-margin">
		                            <div class="col-sm-6">
		                                <div class="carousel-content animation animated-item-1">
		                                	<h3 class="animation animated-item-2">Sejarah RPL di SMK Negeri 11 Bandung</h3>
		                                    <h5 class="animation animated-item-3">
		                                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		                                    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		                                    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		                                    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		                                    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		                                    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum...
		                                    </h5>
		                                    <a class="btn-slide animation animated-item-4" href="#">Read More</a>
		                                </div>
		                            </div>

		                            <div class="col-sm-6 hidden-xs animation animated-item-5">
		                                <div class="slider-img">
		                                    <img src="{{asset('img/portfolio/img2.png')}}" class="img-responsive">
		                                </div>
		                            </div>

		                        </div>
		                    </div>
		                </div><!--/.item-->

		                <div class="item" style="background: url({{asset('img/portfolio/9.jpg')}})">
		                    <div class="container">
		                        <div class="row slide-margin">
		                            <div class="col-sm-6">
		                                <div class="carousel-content animation animated-item-1">
		                                	<h3 class="animation animated-item-2">Tentang RPL di SMK Negeri 11 Bandung </h3>
		                                    <h5 class="animation animated-item-3">
		                                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		                                    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		                                    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		                                    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		                                    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		                                    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum...
		                                    </h5>
		                                    <a class="btn-slide animation animated-item-4" href="#">Read More</a>
		                                </div>
		                            </div>

		                            <div class="col-sm-6 hidden-xs animation animated-item-5">
		                                <div class="slider-img">
		                                    <img src="{{asset('img/portfolio/img3.png')}}" class="img-responsive">
		                                </div>
		                            </div>

		                        </div>
		                    </div>
		                </div><!--/.item-->
		            </div><!--/.carousel-inner-->
		        </div><!--/.carousel-->
		        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
		            <i class="fas fa-chevron-left"></i>
		        </a>
		        <a class="next hidden-xs" href="#main-slider" data-slide="next">
		            <i class="fas fa-chevron-right"></i>
		        </a>
			</div>
		</div>
	<!-- End Profil RPL -->

	<!-- Start Visi Misi -->
		<div id="visi-misi" class="visi-misi">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="VM-header wowload fadeInUp">VISI</div>
						<p class="container-fluid wowload fadeInLeft">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
					<div class="col-md-6">
						<div class="VM-header wowload fadeInUp">MISI</div>
						<p class="container-fluid wowload fadeInLeft">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
		</div>
	<!-- End Visi Misi -->

	<!-- Start Struktur Organisasi -->
		<div id="struktur-organisasi" class="struktur-organisasi">
			<div class="overlay spacer">
				<div class="col-md-10 col-md-offset-1">
					<div class="SO-header wowload flipInY">Struktur Organisasi</div>
					<div class="row grid team wowload fadeInUpBig">
						<div class="col-sm-3 col-xs-6">
							<figure class="effect-chico">
								<img class="img-responsive" src="{{asset('img/team/12.jpg')}}"></img>
								<figcaption>
		            			<p>
		            				<b>Daniel D Fortuna</b>
		            				<br>
		            				Senior Web Programming
		            				<br>
		            				<a href="#"><i class="fab fa-2x fa-google-plus"></i></a> 
		            				<a href="#"><i class="fab fa-2x fa-facebook"></i></a> 
		            				<a href="#"><i class="fab fa-2x fa-twitter"></i></a>
		            			</p>            
		        				</figcaption>
							</figure>
						</div>
						<div class="col-sm-3 col-xs-6">
							<figure class="effect-chico">
								<img class="img-responsive" src="{{asset('img/team/12.jpg')}}"></img>
								<figcaption>
		            			<p>
		            				<b>Daniel D Fortuna</b>
		            				<br>
		            				Senior Web Programming
		            				<br>
		            				<a href="#"><i class="fab fa-2x fa-google-plus"></i></a> 
		            				<a href="#"><i class="fab fa-2x fa-facebook"></i></a> 
		            				<a href="#"><i class="fab fa-2x fa-twitter"></i></a>
		            			</p>            
		        				</figcaption>
							</figure>
						</div>
						<div class="col-sm-3 col-xs-6">
							<figure class="effect-chico">
								<img class="img-responsive" src="{{asset('img/team/12.jpg')}}"></img>
								<figcaption>
		            			<p>
		            				<b>Daniel D Fortuna</b>
		            				<br>
		            				Senior Web Programming
		            				<br>
		            				<a href="#"><i class="fab fa-2x fa-google-plus"></i></a> 
		            				<a href="#"><i class="fab fa-2x fa-facebook"></i></a> 
		            				<a href="#"><i class="fab fa-2x fa-twitter"></i></a>
		            			</p>            
		        				</figcaption>
							</figure>
						</div>
						<div class="col-sm-3 col-xs-6">
							<figure class="effect-chico">
								<img class="img-responsive" src="{{asset('img/team/12.jpg')}}"></img>
								<figcaption>
		            			<p>
		            				<b>Daniel D Fortuna</b>
		            				<br>
		            				Senior Web Programming
		            				<br>
		            				<a href="#"><i class="fab fa-2x fa-google-plus"></i></a> 
		            				<a href="#"><i class="fab fa-2x fa-facebook"></i></a> 
		            				<a href="#"><i class="fab fa-2x fa-twitter"></i></a>
		            			</p>            
		        				</figcaption>
							</figure>
						</div>
					</div>
					<div class="row">
						<br>
						<h4 class="text-center wowload slideInLeft">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
					</div>
				</div>
			</div>
		</div>
	<!-- End Struktur Organisasi -->

	<!-- Start Kurikulum RPL -->
		<div id="kurikulum-rpl" class="kurikulum-rpl">
			<div class="Kurikulum-header wowload flipInY">Kurikulum RPL</div>
			<div class="kurikulum-pdf">
				
			</div>
		</div>
	<!-- End Kurikulum RPL -->

	<!-- Start Peluang Kerja -->
		<div id="peluang-kerja" class="peluang-kerja">
			<div class="overlay spacer">
				<div class="col-md-10 col-md-offset-1">
					<div class="PK-header wowload flipInY">Peluang Kerja</div>
				</div>
			</div>
		</div>
	<!-- End Peluang Kerja -->
@endsection