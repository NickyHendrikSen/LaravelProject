@extends('layouts.app')

@section('content')
<div class="flexcenter">
	<form class="container" action="/registerUser" method="post">
		@csrf
		<div class="logintitle">Register</div>
		<div class="loginhint">Username</div>
		<input type="text" class="logininput" name="username" value="{{ old('username') }}">
		<div>
			@error('username')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
		</div>
		<div class="loginhint">Email</div>
		<input type="email" class="logininput" name="email" value="{{ old('email') }}">
		<div>
			@error('email')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
		</div>
		<div class="loginhint">Password</div>
		<input type="password" class="logininput" name="password">
		<div>
			@error('password')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
		</div>
		<div class="loginhint">Confirm Password</div>
		<input type="password" class="logininput" name="confirm_password">
		<div>
			@error('confirm_password')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
		</div>
		<div class="loginhint"></div>
		<input type="submit" value="Register" class="loginbutton">

	</form>
</div>
@endsection