<!DOCTYPE html>
<html>
<head>
	<title>BT 645 - Add Product Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				ADD PRODUCT
			</div>
			<div class="panel-body">
				<FORM method="get" action="{{ Route('addProduct')}}">
				<div class="form-group">
					<label>* Product Name: </label>
					<input class="form-control" type="text" name="productName">
				</div>
				<div class="form-group">
					<label>* Product Image Link: </label>
					<input class="form-control" type="text" name="productImgLink">
				</div>
				<div class="form-group">
					<label>* Product Cost: </label>
					<input class="form-control" type="text" name="productCost">
				</div>
				<div class="form-group">
					<label>* Product Discount: </label>
					<input class="form-control" type="text" name="productDiscount">
				</div>
				<div class="form-group">
					<label>* Product Describe: </label>
					<textarea class="form-control" type="text" name="productDescribe" cols="10" rows="4"></textarea>
				</div>
				<button class="btn btn-primary">ADD PRODUCT</button>
				</FORM>
			</div>
		</div>
	</div>
</body>
</html>