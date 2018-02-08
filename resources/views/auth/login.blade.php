@extends('app.app')

@section('content')
<br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 login">
				<div class="panel panel-primary">
					<div class="panel-heading text-center">Login Admin</div>
					<div class="panel-body">
						<form action="{{url('login')}}" method="post">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fas fa-fw fa-user"></i></span>
									<input type="text" class="form-control" placeholder="Username" name="username" required>
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fas fa-fw fa-lock"></i></span>
									<input type="password" class="form-control" placeholder="Password" name="password" required>
								</div>
							</div>
							<div class="text-center">
								<button class="btn btn-primary">LOGIN</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection