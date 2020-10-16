@extends("layouts.app")
@section("title","Adidas EQT Support | JUST DU IT")
@section("body")
<body>
@include("parts.nav")
@include("parts.leftnav")
<div class="content">
	<div class="addcartoverlay">
		<div class="flexbox">
			<div class="addcartcontainer">
				<div class="addtocarttitle">Add to Cart</div>
				<img src="{{ $shoe->image_path }}" class="addtocartimage">
				<div class="addtocartdetail">
					<div class="addtocartshoename">{{ $shoe->name }}</div>
					<div class="addtocartprice">{{ $shoe->price_format }}</div>
					<input type="number" value="1" placeholder="Qty" class="qtyinput"><br>
					<input type="submit" value="Add to Cart" class="button">
				</div>
			</div>
		</div>
	</div>
	<img src="images/eqt.jpg" class="shoepicture">
	<div class="shoedetail">
		<div class="shoenamedetail">Adidas EQT Support</div>
		<div class="description">This is a shoe. You will get a pair of shoe if you buy this. Sole is made of rubber with a power to jump over the everest</div>
		<div class="bottomright">
			<div class="shoepricedetail">Rp. 2,000,000</div>
			<!--<div class="addtocart">ADD TO CART</div>!-->
			<!--<div class="addtocart">UPDATE ICON</div>!-->
			<div class="addtocart disabled"><img class="noicon" src="images/no.png">ADD TO CART</div>
		</div>
	</div>
</div>
</body>
@endsection