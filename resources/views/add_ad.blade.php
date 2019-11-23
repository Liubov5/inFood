<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Добавить пост</h1>
	<!-- insert -->
	<form action="/insert_ad" method="POST">
		@csrf
		<input type="text" placeholder="product_id" name="product_id">
		<input type="text" placeholder="kg" name="kg">
		<input type="text" placeholder="price" name="price">
		<button type="submit">add ad</button>
	</form>
	
</body>
</html>