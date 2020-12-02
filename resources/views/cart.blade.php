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
				<form method="POST" action="{{url('shoe/cart')}}" autocomplete="false" >
					@csrf
					<input type="hidden" value="{{$shoe->id}}" name="id"/>
					<div class="addtocartshoename">{{ $shoe->name }}</div>
					<div class="addtocartprice">{{ $shoe->price_format }}</div>
					<input type="number" value="1" min="1" placeholder="Qty" class="qtyinput" name="quantity"><br>
					@error('quantity')
						{{$message}}
					@enderror
					<input type="submit" value="Add to Cart" class="button">
				</form>
				</div>
			</div>
		</div>
	</div>
	<img src="{{ $shoe->image_path }}" class="shoepicture">
	<div class="shoedetail">
		<div class="shoenamedetail">{{ $shoe->name }}</div>
		<div class="description">{{ $shoe->description }}</div>
		<div class="bottomright">
			<div class="shoepricedetail">{{ $shoe->price_format }}</div>@guest
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
@endsection