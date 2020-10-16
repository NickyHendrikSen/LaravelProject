@extends('layouts.app')
@section("title","Login | JUST DU IT")
@section('body')
<body>
@include("parts.nav")
@include("parts.leftnav")
<div class="content">
@if(Session::has("success"))
	<div class="overlayfinished">
		<img src="{{ url('/images/shopping-cart.png') }}" class="savedicon">
		<div class="savedword">Added to Cart</div>
	</div>
@endif
	<div class="viewallshoetitle">
		All Shoes
		<div class="pagination">
			<a href="{{$shoes->previousPageUrl()}}" class="paginatebutton left"></a>
			<a href="{{$shoes->nextPageUrl()}}" class="paginatebutton right"></a>
		</div>
	</div>
	<div class="shoes">
	@foreach($shoes as $shoe)
		<a class="shoe" href="{{ url('/shoe/' . $shoe->id) }}">
			<img src="{{ asset('storage/' . $shoe->image) }}" class="shoeimage">
			<div class="shoename">{{$shoe->name}}</div>
			<div class="price">{{$shoe->price_format}}</div>
		</a>
	@endforeach
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
