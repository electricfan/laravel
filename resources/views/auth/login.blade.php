@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<!-- <div class="panel panel-default">
				<div class="panel-heading">Login</div>
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

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Login</button>

								<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
							</div>
						</div>
					</form>
                                        
				</div>
			</div> -->
		</div>
	</div>
</div>


        <div id="loginform">
            
            <form action="{{ url('/auth/login') }}" method="post">
                <div class="loginlogo">
                    <img src="/dist/img/logo.gif" />
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @if (count($errors) > 0)
                    <div class="error">
                        <h5 style="margin: 5px 0px; padding: 0px;"><i class="fa fa-exclamation-triangle"></i><span style="margin-left: 7px;">Look! theres an error!</span></h5>
			<ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
			</ul>
                    </div>
                    @endif
                <fieldset>
                    <label>Username</label>           
                    <input type="text" class="usr" maxlength="30" name="email" value="{{ old('email') }}" />
                    <label>Password</label>
                    <input type="password" class="pss" maxlength="30" name="password" value="" />
                </fieldset>
                <div style="display: table; margin: 0 auto;">
                    <button>Login Now</button>
                </div>
            </form>
            <h3 style="padding: 10px 0px 0px 0px; margin: 0px; text-align: center; color: rgba(0,0,0,0.5); font: normal 12px 'mplight', sans-serif;">
                MOT &copy; 2014. All Rights Reserved.
            </h3>
        </div>
@endsection
