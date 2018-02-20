@extends('app.app')

@section('content')
	<div class="agenda">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 Agenda-header wowload flipInY">
					Agenda Terkini
				</div>

				<div class="agenda-box">
					<div class="agenda-content">
						<div class="col-md-2 col-xs-4 agenda-jadwal wowload slideInLeft">
							<div class="agenda-tanggal">30</div>
							<div class="agenda-bulan">Februari</div>
							<div class="agenda-tahun">2018</div>
						</div>
						<div class="col-md-9 col-xs-8 agenda-body">
							<div class="agenda-judul"><strong>Judul Agenda</strong></div>
							<br>
							<img class="col-md-4 col-xs-12 agenda-img wowload fadeInUp" src="{{asset('img/lab.jpg')}}"></img>
							<div class="col-md-8 agenda-caption wowload bounceInRight">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							<br><br>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							<br><br>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection