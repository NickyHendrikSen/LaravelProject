@extends('layouts.app')
@section("title","Login | JUST DU IT")
@section('body')
<body>
@include("parts.nav")
@include("parts.leftnav")
<div class="content">
	<div class="viewallshoetitle">
		All Shoes
		<div class="pagination">
			<a href="#" class="paginatebutton left"></a>
			<a href="#" class="paginatebutton right"></a>
		</div>
	</div>
	<div class="shoes">
		<a class="shoe" href="{{ url('/shoe/1') }}">
			<img src="images/eqt.jpg" class="shoeimage">
			<div class="shoename">Adidas EQT</div>
			<div class="price">Rp. 2,000,000</div>
		</a>
	</div>
</div>
</body>
@endsection
