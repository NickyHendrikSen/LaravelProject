@extends("layouts.app")
@section("title","Update Shoe | JUST DU IT")
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
	<div class="viewallshoetitle">Update Shoe</div>
	<form method="POST" action="{{ url('/shoe/update/submit') }}" class="addshoecontainer" autocomplete="off" enctype="multipart/form-data">
		@csrf
		<input type="hidden" name="id" value="{{$shoe->id}}"/>
		<div class="updateshoeimagecontainer">
			<img src="{{asset('storage/' . $shoe->image)}}" class="updateshoedisplay">
			<label for="imagefile" class="addshoeimagelabel">Choose Image</label>
			<input type="file" accept="image/*" name="image" class="addshoeimageinput" id="imagefile">
		</div>
		<div class="updateshoedetail">
			<div class="updateshoename">{{$shoe->name}}</div>
			<div class="updateshoeprice">Rp. {{$shoe->price}}</div>
			<div class="updateshoedescription">{{$shoe->description}}</div>
		</div>
		@error('image')
				<span class="invalidimage" role="alert">
					<strong>{{ $message }}</strong>
				</span>
		@enderror
		<div class="addshoedetail">
			<input type="text" name="name" placeholder="Shoe Name" class="addshoeinput" value="{{$shoe->name}}">
			<input type="number" name="price" placeholder="Shoe Price" class="addshoeinput" value="{{$shoe->price}}">
			<div class="invalidshoe" role="alert">
					@error('name')
						<strong>{{ $message }}</strong>
					@enderror
				</div>
				<div class="invalidshoe" role="alert">
					@error('price')
						<strong>{{ $message }}</strong>
					@enderror
				</div>
			<input type="text" name="description" placeholder="Shoe Description" class="addshoeinputdouble" value="{{$shoe->description}}">
			@error('description')
				<span class="invalidshoelong" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
			<input type="submit" value="UPDATE SHOE" class="addshoebutton button"> 
		</div>
	</form>
</div>
</body>
<script>
$(document).ready(function(){
	setTimeout(function(){
		$(".overlayfinished").fadeOut();
	},1000);
		function readURL(input) {
		  if (input.files && input.files[0]) {
		    var reader = new FileReader();
		    
		    reader.onload = function(e) {
				$('.updateshoedisplay').fadeOut(function(){
		     		 $('.updateshoedisplay').attr('src', e.target.result).fadeIn();
				});
		    }
		    
		    reader.readAsDataURL(input.files[0]); // convert to base64 string
		  }
		}

		$("#imagefile").change(function() {
		  readURL(this);
		});
});
</script>
@endsection