<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Предложения от продавцов:</h1>
	@foreach($bids as $bid)
	<p><span>id-продавца: </span> {{ $bid->seller_id }}</p>
	<p><span>Предлагает тебе купить за: </span> {{ $bid->price }} <span> рублей.</span></p>
	
	<p><span>твой id-покупателя: </span> {{ $bid->customer_id }}</p>
	<form action="update_bid" method="POST">
		@csrf
		<input type="hidden" value="{{ $bid->id }}" name="bid_id">
		<input type="hidden" value="1" name="status">
		<button>Принять</button>
	</form>
	<form action="update_bid" method="POST">
		@csrf
		<input type="hidden" value="{{ $bid->id }}" name="bid_id">
		<input type="hidden" value="2" name="status">
		<button>Отклонить</button>
	</form>
	@endforeach
</body>
</html>