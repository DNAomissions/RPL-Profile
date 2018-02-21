@extends('app.app')

@section('content')
	<div class="guru" id="guru">
		<div class="container">
			<div class="row box-off">
				@foreach($guru as $gr)
					<div class="wowload fadeInUpBig">
						<div class="col-sm-3 col-xs-2">
							<img src="{{asset('img/team/'.$gr->foto)}}" class="foto-guru">
						</div>
						<div class="col-sm-7 col-xs-8">
							<h4 class="text-center">{!! $gr->nama !!}</h4>
							<hr>
							<h5>
								<table class="table-guru">
									<tr>
										<td>NIP</td>
										<td>&nbsp;:&nbsp;</td>
										<td><strong>{!! $gr->nip !!}</strong></td>
									</tr>
									<tr>
										<td>Tempat, Tanggal Lahir</td>
										<td>&nbsp;:&nbsp;</td>
										<td><strong>{!! $gr->tempat_tanggal_lahir !!}</strong></td>
									</tr>
									<tr>
										<td>Mata Pelajaran</td>
										<td>&nbsp;:&nbsp;</td>
										<td><strong>{!! $gr->mata_pelajaran !!}</strong></td>
									</tr>	
									<tr>
										<td>Tentang</td>
										<td>&nbsp;:&nbsp;</td>
										<td><strong>{!! $gr->tentang !!}</strong></td>
									</tr>
								</table>
							</h5>
							<!-- <h5 class="">NIP : <b>{!! $gr->nip !!}</b></h5>
							<h5 class="">Tempat, Tanggal Lahir : <b>{!! $gr->tempat_tanggal_lahir !!}</b></h5>
							<h5 class="">Mata Pelajaran : <b>{!! $gr->mata_pelajaran !!}</b></h5>
							<h5 class="">Tentang</h5> -->
							<!-- <table>
								<tr>
									<td>Nama</td>
									<td>&nbsp;:&nbsp;</td>
									<td>{!! $gr->nama !!}</td>
								</tr>
								<tr>
									<td>NIP</td>
									<td>&nbsp;:&nbsp;</td>
									<td>{!! $gr->nip !!}</td>
								</tr>
								<tr>
									<td>Tempat, Tanggal Lahir</td>
									<td>&nbsp;:&nbsp;</td>
									<td>{!! $gr->tempat_tanggal_lahir !!}</td>
								</tr>
								<tr>
									<td>Tentang</td>
									<td>&nbsp;:&nbsp;</td>
									<td>{!! $gr->tentang !!}</td>
								</tr>
							</table> -->
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection