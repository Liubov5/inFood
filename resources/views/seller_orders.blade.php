<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Заказы покупателей:</h1>
	@foreach($orders as $order)
	<p><span>Кг: </span>{{ $order->kg }}</p>
	<p><span>Купит за: </span>{{ $order->price }}<span> рублей.</span></p>
	<p><span>id-объявления: </span>{{ $order->ads_id }}</p>
	<p><span>id-заказа: </span>{{ $order->id }}</p>
	
	<form action="/insert_bid" method="POST">
		@csrf
		<input type="hidden" name="ad_id" value="{{ $order->ads_id }}">
		<input type="hidden" name="order_id" value="{{ $order->id }}">
		<input type="text" name="price" placeholder="Своя цена от продавца">
		<button>Предложить свою цену</button>
	</form>
	@endforeach
</body>
</html>