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
	@foreach($shoes as $shoe)
		<a class="shoe" href="{{ url('/shoe/' . $shoe->id) }}">
			<img src="{{ asset('storage/' . $shoe->image) }}" class="shoeimage">
			<div class="shoename">{{$shoe->name}}</div>
			<div class="price">{{$shoe->price_format}}</div>
		</a>
	@endforeach
	</div>
	{{$shoes->links()}}
</div>
</body>
@endsection
