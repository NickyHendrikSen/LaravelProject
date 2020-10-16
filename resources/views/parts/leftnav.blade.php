
@if(Auth::check())
@if(Auth::user()->role == "Admin")
<div class="leftnav">
	<div class="leftmenu @if(Request::segment(1)=='home' || Request::segment(1)=='shoe') selected @endif"><div class="inner @if(Request::segment(1)=='home' || Request::segment(1)=='shoe') active @endif"><a href="{{ url('/home') }}">All Shoes</a></div></div>
	<div class="leftmenu @if(Request::segment(1)=='addshoe') selected @endif"><div class="inner @if(Request::segment(1)=='addshoe') active @endif"><a href="{{ url('/addshoe') }}">Add Shoe</a></div></div>
	<div class="leftmenu @if(Request::segment(1)=='alltransaction') selected @endif"><div class="inner @if(Request::segment(1)=='alltransaction') active @endif"><a href="{{ url('/alltransaction') }}">View Transactions</a></div></div>
</div>
@else
<div class="leftnav">
	<div class="leftmenu @if(Request::segment(1)=='home' || Request::segment(1)=='shoe') selected @endif"><div class="inner @if(Request::segment(1)=='home' || Request::segment(1)=='shoe') active @endif"><a href="{{ url('/home') }}">All Shoes</a></div></div>
	<div class="leftmenu @if(Request::segment(1)=='cart') selected @endif"><div class="inner @if(Request::segment(1)=='cart') active @endif"><a href="{{ url('/cart') }}">My Cart</a></div></div>
	<div class="leftmenu @if(Request::segment(1)=='history') selected @endif"><div class="inner @if(Request::segment(1)=='history') active @endif"><a href="{{ url('/history') }}">Transactions</a></div></div>
</div>
@endif
@else
<div class="leftnav">
	<div class="leftmenu"><div class="inner @if(Request::segment(1)=='home' || Request::segment(1)=='shoe') active @endif"><a href="{{ url('/home') }}">All Shoes</a></div></div>
</div>
@endif