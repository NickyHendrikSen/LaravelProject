@extends("layouts.app")
@section("title","Update Shoe | JUST DU IT")
@section("body")
<body>
@include("parts.nav")
@include("parts.leftnav")
<div class="content">
	<div class="viewallshoetitle">Update Shoe</div>
	<form method="post" class="addshoecontainer" autocomplete="off">
		<div class="updateshoeimagecontainer">
			<img src="images/eqt.jpg" class="updateshoedisplay">
		</div>
		<div class="updateshoedetail">
			<div class="updateshoename">Adidas EQT Support</div>
			<div class="updateshoeprice">Rp. 2,000,000</div>
			<div class="updateshoedescription">This is a shoe. You will get a pair of shoe if you buy this. Sole is made of rubber with a power to jump over the everest</div>
		</div>
		<div class="addshoedetail">
			<input type="text" name="name" placeholder="Shoe Name" class="addshoeinput" value="Adidas EQT Support">
			<input type="text" name="price" placeholder="Shoe Price" class="addshoeinput" value="2,000,000">
			<input type="text" name="description" placeholder="Shoe Description" class="addshoeinputdouble" value="This is a shoe. You will get a pair of shoe if you buy this. Sole is made of rubber with a power to jump over the everest">
			<input type="submit" value="UPDATE SHOE" class="addshoebutton button"> 
		</div>
	</form>
</div>
</body>
@endsection