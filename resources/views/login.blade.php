@extends('layouts.app')

@section('content')
<div class="flexcenter">
	<form class="container" action="/loginUser" method="post">
        @csrf
		<div class="logintitle">Login</div>
		<div class="loginhint">Email</div>
		<input id="email" type="email" class="logininput" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
		<div class="loginhint">Password</div>
		<input id="password" type="password" class="logininput" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
		
		<div class="loginhint"></div>
		<div class="loginremember">
		
			<input class="logincheckbox" type="checkbox" name="remember" id="remember" value="{{ old('remember') ? 'checked' : '' }}">

			<label class="form-check-label" for="remember">
				{{ __('Remember Me') }}
			</label>
		</div>
		@if(session()->has('error'))
			<script>alert("{{ session()->get('error') }}")</script>
		@endif
		<div class="loginhint"></div>
		<input type="submit" value="Login" class="loginbutton">

	</form>
</div>
@endsection