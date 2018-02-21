@extends('app.app')

@section('content')
	<div class="berita">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 Berita-header wowload flipInY">
					Berita Terkini
				</div>
					<form action="/berita/search" method="get" class="search">
						{!! csrf_field() !!}
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><button class="search-btn" type="submit"><i class="fas fa-fw fa-search"></i></button></span>
								<input class="form-control" placeholder="Search!" name="search"></input>
							</div>
						</div>
					</form>
				@if(count($berita))
					@foreach($berita as $bt)
						<div class="berita-box">
							<div class="berita-content">
								<div class="col-md-2 col-xs-4 berita-jadwal wowload slideInLeft">
									<div class="berita-tanggal">{!! substr($bt->created_at,8,2) !!}</div>
									<?php
										switch(substr($bt->created_at,5,2)){
											case '01':
												$bulan = 'Januari';
												break;
											case '02':
												$bulan = 'Februari';
												break;
											case '03':
												$bulan = 'Maret';
												break;
											case '04':
												$bulan = 'April';
												break;
											case '05':
												$bulan = 'Mei';
												break;
											case '06':
												$bulan = 'Juni';
												break;
											case '07':
												$bulan = 'Juli';
												break;
											case '08':
												$bulan = 'Agustus';
												break;
											case '09':
												$bulan = 'September';
												break;
											case '10':
												$bulan = 'Oktober';
												break;
											case '11':
												$bulan = 'November';
												break;
											case '12':
												$bulan = 'Desember';
												break;
											default:
												return 0;
												break;
										}
									?>
									<div class="berita-bulan">{!! $bulan !!}</div>
									<div class="berita-tahun">{!! substr($bt->created_at,0,4) !!}</div>
								</div>
								<div class="col-md-9 col-xs-8 berita-body">
									<div class="berita-judul"><strong>{!! $bt->judul !!}</strong></div>
									<br>
									<img class="col-md-4 col-xs-12 berita-img wowload fadeInUp" src="{{asset('img/informasi/berita/'.$bt->foto)}}"></img>
									<div class="col-md-8 berita-caption wowload bounceInRight">
										{!! $bt->isi !!}
									</div>
								</div>
							</div>
						</div>
					@endforeach
					{!! $berita->render() !!}
				@else
					<div class="berita-box">
						<div class="berita-content">
							<div class="panel panel-danger">
								<div class="panel-heading">
									Maaf Belum Ada Berita!
								</div>
							</div>
						</div> 
					</div>
				@endif
			</div>
		</div>
	</div>
@endsection