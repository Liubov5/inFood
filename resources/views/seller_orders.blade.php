<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	@foreach($orders as $order)
	<p>{{ $order->kg }}</p>
	<p>{{ $order->price }}</p>
	<p>{{ $order->ads_id }}</p>
	<p>{{ $order->id }}</p>
	
	<form action="/insert_bid" method="POST">
		@csrf
		<input type="text" name="ad_id" value="{{$order->ads_id}}">
		<input type="text" name="order_id" value="{{$order->id}}">
		<input type="text" name="price" placeholder="своя цена от продавца">
		<button>Предложить свою цену</button>
	</form>
	@endforeach

	
</body>
</html>