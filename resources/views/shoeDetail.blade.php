@extends("layouts.app")
@section("title","Adidas EQT Support | JUST DU IT")
@section("body")
<body>
@include("parts.nav")
@include("parts.leftnav")
<div class="content">
	<img src="{{ asset('storage/' . $shoe->image) }}" class="shoepicture">
	<div class="shoedetail">
		<div class="shoenamedetail">{{$shoe->name}}</div>
		<div class="description">{{$shoe->description}}</div>
		<div class="bottomright">
			<div class="shoepricedetail">{{$shoe->price_format}}</div>
			@guest
				<div class="addtocart disabled"><img class="noicon" src="{{ url('/images/no.png') }}">ADD TO CART</div>
			@else
				@if(Auth::user()->role=="User")
					<a class="addtocart" href="{{ url('/shoe/cart/' . $shoe->id) }}">ADD TO CART</a>
				@elseif(Auth::user()->role=="Admin")
					<a class="addtocart" href="{{ url('/shoe/update/' . $shoe->id) }}">UPDATE</a>
				@endif
			@endguest
		</div>
	</div>
</div>
</body>
<script>
$(document).ready(function(){
	setTimeout(function(){
		$(".overlayfinished").fadeOut();
	},1000);
});
</script>
@endsection