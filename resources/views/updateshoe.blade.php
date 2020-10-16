@extends("layouts.app")
@section("title","Update Shoe | JUST DU IT")
@section("body")
<body>
@include("parts.nav")
@include("parts.leftnav")
<div class="content">
	<div class="viewallshoetitle">Update Shoe</div>
	<form method="POST" class="addshoecontainer" autocomplete="off">
		@csrf
		<input type="hidden" name="id" value="{{$shoe->id}}"/>
		<div class="updateshoeimagecontainer">
			<img src="{{asset('storage/' . $shoe->image)}}" class="updateshoedisplay">
		</div>
		<div class="updateshoedetail">
			<div class="updateshoename">{{$shoe->name}}</div>
			<div class="updateshoeprice">Rp. {{$shoe->price}}</div>
			<div class="updateshoedescription">{{$shoe->description}}</div>
		</div>
		<div class="addshoedetail">
			<input type="text" name="name" placeholder="Shoe Name" class="addshoeinput" value="{{$shoe->name}}">
			<input type="number" name="price" placeholder="Shoe Price" class="addshoeinput" value="{{$shoe->price}}">
			<input type="text" name="description" placeholder="Shoe Description" class="addshoeinputdouble" value="{{$shoe->description}}">
			<input type="submit" value="UPDATE SHOE" class="addshoebutton button"> 
		</div>
	</form>
</div>
</body>
@endsection