<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Мои предложения покупателям:</h1>
	@foreach($bids as $bid)

	@if($bid->status == 0)
	<p>Твое предложение c id: {{ $bid->id }} на заказ c id: {{ $bid->order_id }} ожидает ответа от покупателя с id: {{ $bid->customer_id }}</p>
	@elseif($bid->status == 1)
	<p>Твое предложение c id: {{ $bid->id }} на заказ c id: {{ $bid->order_id }} принято покупателем с id: {{ $bid->customer_id }}. Доставляй</p>
	@elseif($bid->status == 2)
	<p>Твое предложение c id: {{ $bid->id }} на заказ c id: {{ $bid->order_id }} отклонено покупателем с id: {{ $bid->customer_id }} .</p>
	<p>Можешь отправить повторное предложение:</p>
	<form action="/" method="POST">
		<!-- доделать update: -->
		@csrf
		<input type="hidden" name="ad_id" value="{{ $bid->ad_id }}">
		<input type="hidden" name="order_id" value="{{ $bid->order_id }}">
		<input type="text" name="price" placeholder="своя цена от продавца">
		<button>Предложить свою цену</button>
	</form>
	@endif
	@endforeach
	
</body>
</html>