@extends("layouts.app")
@section("title","Add Shoe | JUST DU IT")
@section("body")
<body>
	@include("parts.nav")
	@include("parts.leftnav")
<div class="content">
	<div class="viewallshoetitle">Add Shoe</div>
	<form method="post" class="addshoecontainer" autocomplete="off">
		<div class="addshoeimagecontainer">
			<img src="#" class="addshoedisplay">
			<label for="imagefile" class="addshoeimagelabel">Choose Image</label>
			<input type="file" accept="image/*" class="addshoeimageinput" id="imagefile">
		</div>
		<div class="addshoedetail">
			<input type="text" name="name" placeholder="Shoe Name" class="addshoeinput">
			<input type="text" name="price" placeholder="Shoe Price" class="addshoeinput">
			<input type="text" name="description" placeholder="Shoe Description" class="addshoeinputdouble">
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