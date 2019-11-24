<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	@foreach($bids as $bid)

	@if($bid->status == 0)
	<p>Твое предложение {{ $bid->id }} ожидает ответа от покупателя</p>
	@elseif($bid->status == 1)
	<p>Твое предложение {{ $bid->id }} принято покупателем {{ $bid->customer_id }} .Доставляй</p>
	@elseif($bid->status == 2)
	<p>Твое предложение {{ $bid->id }} отклонено покупателем {{ $bid->customer_id }} .</p>
	<p>Можешь отправить повторное предложени:</p>
	<form action="/" method="POST">
		<!-- доделать update: -->
		@csrf
		<input type="text" name="ad_id" value="">
		<input type="text" name="order_id" value="">
		<input type="text" name="price" placeholder="своя цена от продавца">
		<button>Предложить свою цену</button>
	</form>
	@endif
	@endforeach
	
</body>
</html>