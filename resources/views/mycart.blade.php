@extends("layouts.app")
@section("title","My Cart | JUST DU IT")
@section("body")
<body>
@include("parts.nav")
@include("parts.leftnav")
<div class="content">
@if(Session::has("success"))
	<div class="overlayfinished">
		<img src="{{ url('/images/save.png') }}" class="savedicon">
		<div class="savedword">SAVED</div>
	</div>
@endif
	<div class="viewallshoetitle">My Cart <div class="totalprice">{{"Rp. ".number_format($total , 0, ',', '.')}}</div></div>
	<div class="carts">


		@foreach($carts as $cart)
		<div class="cart">
			<img src="{{asset('storage/' . $cart->Shoe->image)}}" class="cartimage">
			<div class="cartdetail">
				<div class="cartname">{{$cart->Shoe->name}}</div>
				<div class="cartprice">{{$cart->Shoe->price_format}}</div>
				<div class="cartqty">Qty: {{$cart->quantity}}</div>
				<a href="{{ url('/cart/update/' . $cart->id) }}" class="cartedit button">Edit</a>
			</div>
		</div>
		@endforeach

		<form action="{{url('checkout')}}" method="POST">
			@csrf
			<input type="submit" class="checkoutbutton button" value="CHECKOUT">
		</form>
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