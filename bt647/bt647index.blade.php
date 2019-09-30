<!DOCTYPE html>
<html>
<head>
	<title>Products List</title>
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
				Product List
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<th>No</th>
						<th>Product Name</th>
						<th>Product Cost</th>
						<th>Product Discount</th>
						<th>Product Describe</th>
					</thead>
					<tbody>
						@foreach($productList as $item)
							<tr>
								<td>{{$index++}}</td>
								<td>{{$item->productName}}</td>
								<td>{{$item->productCost}}</td>
								<td>{{$item->productDiscount}}</td>
								<td>{{$item->productDescribe}}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{{$productList->links()}}
			</div>
		</div>		
	</div>

</body>
</html>