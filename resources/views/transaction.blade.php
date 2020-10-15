@extends("layouts.app")
@section("title","Transaction | JUST DU IT")
@section("body")
<body>
@include("parts.nav")
@include("parts.leftnav")
<div class="content">
	<div class="viewallshoetitle">Transactions</div>
	<div class="transactions">
		<div class="transaction">
			<div class="transactionheader">
				<div class="transactiontime">13 June 2020 - 13:00</div>
				<div class="transactionprice">Rp. 6,000,000</div>
			</div>
				<div class="transactionimages">
					<img src="images/eqt.jpg" class="transactionimage">
					<img src="images/eqt.jpg" class="transactionimage">
					<img src="images/eqt.jpg" class="transactionimage">
					<img src="images/eqt.jpg" class="transactionimage">
					<img src="images/eqt.jpg" class="transactionimage">
					<img src="images/eqt.jpg" class="transactionimage">
				</div>
		</div>
		<div class="transaction">
			<div class="transactionheader">
				<div class="transactiontime">13 June 2020 - 13:00</div>
				<div class="transactionprice">Rp. 6,000,000</div>
			</div>
				<div class="transactionimages">
					<img src="images/eqt.jpg" class="transactionimage">
				</div>
		</div>
	</div>
</div>
@endsection