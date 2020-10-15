@extends("layouts.app")
@section("title","Edit Cart | JUST DU IT")
@section("body")
<body>
	@include("parts.nav")
	@include("parts.leftnav")
<div class="content editcartcontent">
	<img class="editcartbackground" src="images/eqt.jpg">
	<div class="editcarttitle">Edit Cart</div>
	<div class="editcartcontainer">
	<img src="images/eqt.jpg" class="editcartimage">
		<div class="editcartdetail">
			<div class="editcartname">Adidas EQT Support</div>
			<div class="editcartdescription">This is a shoe. You will get a pair of shoe if you buy this. Sole is made of rubber with a power to jump over the everest</div>
			<div class="editcartprice">Rp. 2,000,000</div>
			<input type="number" class="editcartinput" value="1"></br>
			<input type="submit" class="button editsubmit" value="Save">
			<img src="{{ url('/images/trash.png') }}" class="deletebutton">
		</div>
	</div>
</div>
</body>
@endsection