@extends('app.app')

@section('content')
	<div class="agenda">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 Agenda-header wowload flipInY">
					Agenda Terkini
				</div>
				<form action="/agenda/search" method="get" class="search">
					{!! csrf_field() !!}
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><button class="search-btn" type="submit"><i class="fas fa-fw fa-search"></i></button></span>
							<input class="form-control" placeholder="Search!" name="search"></input>
						</div>
					</div>
				</form>
				@if(count($agenda))
					@foreach($agenda as $ag)
						<div class="agenda-box">
							<div class="agenda-content">
								<div class="col-md-2 col-xs-4 agenda-jadwal wowload slideInLeft">
									<div class="agenda-tanggal">{!! substr($ag->tanggal,8,2) !!}</div>
									<?php
										switch(substr($ag->tanggal,5,2)){
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
									<div class="agenda-bulan">{!! $bulan !!}</div>
									<div class="agenda-tahun">{!! substr($ag->tanggal,0,4) !!}</div>
								</div>
								<div class="col-md-9 col-xs-8 agenda-body">
									<div class="agenda-judul"><strong>{!! $ag->judul !!}</strong></div>
									<br>
									<img class="col-md-4 col-xs-12 agenda-img wowload fadeInUp" src="{{asset('img/informasi/agenda/'.$ag->foto)}}"></img>
									<div class="col-md-8 agenda-caption wowload bounceInRight">
										{!! $ag->isi !!}
									</div>
								</div>
							</div>
						</div>
					@endforeach
					{!! $agenda->render() !!}
				@else
					<div class="agenda-box">
						<div class="agenda-content">
							<div class="panel panel-danger">
								<div class="panel-heading">
									Maaf Belum Ada Agenda!
								</div>
							</div>
						</div> 
					</div>
				@endif
			</div>
		</div>
	</div>
@endsection