@extends("layouts.app")
@section("title","Adidas EQT Support | JUST DU IT")
@section("body")
<body>
@include("parts.nav")
@include("parts.leftnav")
<div class="content">
	<img src="{{ url('/images/eqt.jpg') }}" class="shoepicture">
	<div class="shoedetail">
		<div class="shoenamedetail">Adidas EQT Support</div>
		<div class="description">This is a shoe. You will get a pair of shoe if you buy this. Sole is made of rubber with a power to jump over the everest</div>
		<div class="bottomright">
			<div class="shoepricedetail">Rp. 2,000,000</div>
			@guest
				<div class="addtocart disabled"><img class="noicon" src="{{ url('/images/no.png') }}">ADD TO CART</div>
			@else
				@if(Auth::user()->role=="User")
					<a class="addtocart" href="{{ url('/shoe/cart/1') }}">ADD TO CART</a>
				@elseif(Auth::user()->role=="Admin")
					<a class="addtocart" href="{{ url('/shoe/update/1') }}">UPDATE</a>
				@endif
			@endguest
		</div>
	</div>
</div>
</body>
@endsection