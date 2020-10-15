
<nav class="nav">
	<div class="logo">
		<img src="{{ url('/images/logo.png') }}" class="logoimage">
	</div>
	<div class="searchbar">
		<img src="{{ url('/images/search.png') }}" class="searchicon">
		<input type="text" placeholder="search" class="searchinput">
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