@extends('app')

@section('title')
Iniciar Sesión
@endsection

@section('content')

<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>@yield('title')</h2>
				@yield('title-meta')
			</div>
			<div class="panel-body">

				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

				<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="form-group">
						<label class="col-md-5 control-label">E-Mail</label>
						<div class="col-md-5">
							<input type="email" class="form-control" name="email" value="{{ old('email') }}">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-5 control-label">Contraseña</label>
						<div class="col-md-5">
							<input type="password" class="form-control" name="password">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="remember"> Recordarme
								</label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-primary">Iniciar Session</button>

							<a class="btn btn-link" href="{{ url('/password/email') }}">Olvidaste tu contraseña?</a>
						</div>
					</div>
				</form>
				
			</div>
		</div>
	</div>
</div>
@endsection
