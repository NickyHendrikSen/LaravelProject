@extends("layouts.app")
@section("title","Transaction | JUST DU IT")
@section("body")
<body>
@include("parts.nav")
@include("parts.leftnav")
<div class="content">
	<div class="viewallshoetitle">Transactions</div>
	<div class="transactions">
		@foreach($transactions as $transaction)
		<div class="transaction" id="{{ $transaction->id }}">
			<div class="transactionheader">
				<!-- <div class="transactiontime">13 June 2020 - 13:00</div> -->
				<div class="transactiontime">{{$transaction->date}}</div>
				<div class="transactionprice">{{$transaction->countPrice($transaction->Detail)}}</div>
			</div>
				<div class="transactionimages">
					@foreach($transaction->Detail as $detail)
					<img src="{{asset('storage/' . $detail->Shoe->image)}}" class="transactionimage">
					@endforeach
				</div>
		</div>
		@endforeach
	</div>
</div>
<script>
$(document).ready(function(){
	@if(Session::has("id"))
		$("#{{ Session::get('id') }}").hide();
		$("#{{ Session::get('id') }}").slideDown();
	@endif
});
</script>
@endsection