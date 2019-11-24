<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	@foreach($bids as $bid)
	<p>{{$bid->price}}</p>
	<p>{{$bid->seller_id}}</p>
	<form action="update_bid" method="POST">
		@csrf
		<input type="text" value="{{$bid->id}}" name="bid_id">
		<input type="text" value="1" name="status">
		<button>Принять</button>
	</form>
	<form action="update_bid" method="POST">
		@csrf
		<input type="text" value="{{$bid->id}}" name="bid_id">
		<input type="text" value="2" name="status">
		<button>Отклонить</button>
	</form>
	@endforeach
</body>
</html>