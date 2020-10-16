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
	<img src="{{asset('storage/' . $cart->Shoe->image)}}" class="editcartimage">
		<div class="editcartdetail">
			<div class="editcartname">{{$cart->Shoe->name}}</div>
			<div class="editcartdescription">{{$cart->Shoe->description}}</div>
			<div class="editcartprice">{{$cart->Shoe->price_format}}</div>
			<form action="{{url('cart/update')}}" method="POST">
				@csrf
				<input type="hidden" name="id" value="{{$cart->id}}" />
				<input type="number" class="editcartinput" value="{{$cart->quantity}}" name="quantity"></br>
				@error('quantity')
					{{$message}}
				@enderror
				<input type="submit" class="button editsubmit" value="Save">
			</form>
			<a  href="{{url('cart/delete/' . $cart->id)}}"><img src="{{ url('/images/trash.png') }}" class="deletebutton"></a>
		</div>
	</div>
</div>
</body>
@endsection