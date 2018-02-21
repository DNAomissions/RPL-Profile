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
		#s-keterangan{
			min-height: 200px;
			height: inherit;
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
		            	@foreach($profilRPL as $PRPL)
		            		@if($PRPL->slide == 'slide1')
				                <div class="item active" style="background-image: url({{asset($PRPL->background_image)}})">
				                    <div class="container">
				                        <div class="row slide-margin">
				                            <div class="col-sm-6">
				                                <div class="carousel-content animation animated-item-1">
				                                	<h3 class="animation animated-item-2">{!! $PRPL->judul !!}</h3>
				                                    <h5 class="animation animated-item-3">
				                                    	{!! substr($PRPL->keterangan,0,200) !!}...
				                                    </h5>
				                                    <button type="button" class="btn-profile animation animated-item-4" data-toggle="modal" data-target="#modal{{$PRPL->slide}}">READ MORE</button>
				                                </div>
				                            </div>

				                            <div class="col-sm-6 hidden-xs animation animated-item-5">
				                                <div class="slider-img">
				                                    <img src="{{asset($PRPL->image)}}" class="img-responsive">
				                                </div>
				                            </div>

				                        </div>
				                    </div>
				                </div><!--/.item-->
				            @else
				            	<div class="item" style="background-image: url({{asset($PRPL->background_image)}})">
				                    <div class="container">
				                        <div class="row slide-margin">
				                            <div class="col-sm-6">
				                                <div class="carousel-content animation animated-item-1">
				                                	<h3 class="animation animated-item-2">{!! $PRPL->judul !!}</h3>
				                                    <h5 class="animation animated-item-3">
				                                    	{!! substr($PRPL->keterangan,0,200) !!}...
				                                    </h5>
				                                    <button type="button" class="btn-profile animation animated-item-4" data-toggle="modal" data-target="#modal{{$PRPL->slide}}">READ MORE</button>
				                                </div>
				                            </div>

				                            <div class="col-sm-6 hidden-xs animation animated-item-5">
				                                <div class="slider-img">
				                                    <img src="{{asset($PRPL->image)}}" class="img-responsive">
				                                </div>
				                            </div>

				                        </div>
				                    </div>
				                </div><!--/.item-->
				            @endif
				            
		                @endforeach
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
		<!-- Modal -->
				            <div class="modal fade" id="#modalslide1" role="dialog">
				            	<div class="modal-dialog">
				            		<div class="modal-content">
				            			<div class="modal-header">
				            				<button type="button" class="close" data-dismiss="modal">&times;</button>
                               				<h4 class="modal-title">Modal Header</h4>
				            			</div>
				            			<div class="modal-body">
				            				
				            			</div>
				            			<div class="modal-footer">
				            				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				            			</div>
				            		</div>
				            	</div>
				            </div>
	<!-- End Profil RPL -->

	<!-- Start Visi Misi -->
		<div id="visi-misi" class="visi-misi">
			<div class="container">
				<div class="row">
					@foreach($visiMisi as $vM)
						<div class="col-md-6">
							<div class="VM-header wowload fadeInUp">{!! strtoupper($vM->tentang) !!}</div>
							<p class="container-fluid wowload fadeInLeft">{!! $vM->isi !!}</p>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	<!-- End Visi Misi -->
*	*	*	*	*	*	*	*	*	*	*	*
				@ 	@	
	<!-- Start Struktur Organisasi -->
		<div id="struktur-organisasi" class="struktur-organisasi">
			<div class="overlay spacer">
				<div class="SO-header wowload flipInY">Struktur Organisasi</div>
				<div class="row">
					<div class="SO-chart">
						<div class="tree">
						    <ul>
								<li><!-- Paling Tinggi -->
									<a href="#">
										<h4>Daniel D Fortuna</h4>
										<h5><strong>Ketua</strong></h5>
									</a>
									<ul>
										<li><!-- Cukup Tinggi 1 -->
											<a href="#">
												<h4>Daniel D Fortuna</h4>
												<h5><strong>Wakil 1</strong></h5>
											</a>
											<ul>
												<li><!-- Anak Buah -->
													<a href="#">Grand Child</a>
												</li>
											</ul>
										</li>
										<li><!-- Cukup Tinggi 2 -->
											<a href="#">
												<h4>Daniel D Fortuna</h4>
												<h5><strong>Wakil 2</strong></h5>
											</a>
											<ul>
												<li><a href="#">Grand Child</a></li><!-- Anak Buah 1 -->
												<li><!-- Anak Buah 2 -->
													<a href="#">Grand Child</a>
													<ul>
														<li>
															<a href="#">Great Grand Child</a>
														</li>
														<li>
															<a href="#">Great Grand Child</a>
														</li>
														<li>
															<a href="#">Great Grand Child</a>
														</li>
													</ul>
												</li>
												<li><a href="#">Grand Child</a></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- <div class="row grid team wowload fadeInUpBig"> -->
					<!-- <div class="col-md-3 col-xs-6">
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
					</div> -->
				<!-- </div> -->
				<div class="container">
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
				<div class="PK-header wowload flipInY">Peluang Kerja</div>
				<div class="PK-body wowload fadeInLeft">
					<div class="container">
						{!! $peluangKerja->isi !!}
					</div>
				</div>
			</div>
		</div>
	<!-- End Peluang Kerja -->
@endsection

	
