@extends("layouts.app")
@section("title","Add Shoe | JUST DU IT")
@section("body")
<body>
	@include("parts.nav")
	@include("parts.leftnav")
<div class="content">
	<div class="viewallshoetitle">Add Shoe</div>
	<form method="POST" class="addshoecontainer" action="addShoe" enctype="multipart/form-data">
		@csrf
		<div class="addshoeimagecontainer">
			<img src="#" class="addshoedisplay">
			<label for="imagefile" class="addshoeimagelabel">Choose Image</label>
			<input type="file" accept="image/*" name="image" class="addshoeimageinput" id="imagefile">
			@error('image')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
		</div>
			<!-- <input type="file" name="image" class="" id="imagefile">asd -->
		<div class="addshoedetail">
			<input type="text" name="name" placeholder="Shoe Name" class="addshoeinput">
			@error('name')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
			<input type="number" name="price" placeholder="Shoe Price" class="addshoeinput">
			@error('price')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
			<input type="text" name="description" placeholder="Shoe Description" class="addshoeinputdouble">
			@error('description')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
			<input type="submit" value="ADD SHOE" class="addshoebutton button"> 
		</div>
	</form>
</div>
</body>
<script>
	$(document).ready(function(){
		function readURL(input) {
		  if (input.files && input.files[0]) {
		    var reader = new FileReader();
		    
		    reader.onload = function(e) {
				$('.addshoedisplay').fadeOut(function(){
		     		 $('.addshoedisplay').attr('src', e.target.result).fadeIn();
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