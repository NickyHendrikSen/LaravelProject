
<nav class="nav">
	<a class="logo" href="{{ url('/home') }}">
		<img src="{{ url('/images/logo.png') }}" class="logoimage">
	</a>
	<div class="searchbar">
		<form action="{{ url('/home') }}" method="GET">
			<input type="submit"  value="" class="searchicon"/>
			<input type="text" placeholder="search" class="searchinput" name="search">
		</form>
	</div>
    @guest
	
	<div class="menus">
		<a href="{{ url('/login') }}" class="menu">Login</a>
		<a href="{{ url('/register') }}" class="menu">Register</a>
	</div>
    @else
	<div class="profile">
		<div class="profilename">{{ Auth::user()->username }}</div>
		<div class="dropdowns">
			<a href="{{ url('/logoutUser') }}" class="dropdown">Logout</a>
		</div>
	</div>
    @endguest
</nav>