@extends("layouts.app")
@section("title","My Cart | JUST DU IT")
@section("body")
<body>
@include("parts.nav")
@include("parts.leftnav")
<div class="content">
	<div class="viewallshoetitle">My Cart <div class="totalprice">Rp. 6,000,000</div></div>
	<div class="carts">


		<div class="cart">
			<img src="images/eqt.jpg" class="cartimage">
			<div class="cartdetail">
				<div class="cartname">Adidas EQT Support</div>
				<div class="cartprice">Rp. 2,000,000</div>
				<div class="cartqty">Qty: 1</div>
				<a href="{{ url('/cart/update/1') }}" class="cartedit button">Edit</a>
			</div>
		</div>


		<div class="checkoutbutton button">CHECKOUT</div>
	</div>
</div>
@endsection