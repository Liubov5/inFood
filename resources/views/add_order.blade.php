<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<form action="/insert_order" method="POST">
		@csrf
		<input type="text" name="product_id" placeholder="продукт">
		<input type="text" name="kg" placeholder="кг">
		<input type="text" name="price" placeholder="цена">
		<button type="submit">Добавить</button>
	</form>
</body>
</html>