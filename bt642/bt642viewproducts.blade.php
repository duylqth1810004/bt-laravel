<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BT642 - View Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .row{
            height: 400px;
        }
        .img-product img{
            width: 100%;
            height: 250px;
            display: block;
        }
        .name-product{
            width: 100%;
            height: 25px;
            display: block;
            font-weight: bolder;
        }
        .price-product{
            float: left;
            width: 50%;
            height: 25px;
            display: inline-block;
            color: green;
            font-weight: bolder;
        }
        .price-reduce-product{
            
            width: 50%;
            height: 25px;
            display: inline-block;
            text-decoration: line-through;
            color: red;
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
        	@foreach($productsList as $item)
        		<div class="col-md-3">
	                <div class="img-product">
	                	<img src="{{ $item->Product_Thumbnail}}">
	                </div>
	                <div class="name-product">
	                    {{ $item->Product_Title}}
	                </div>
	                <div class="price-product">
	                    $ {{ $item->Product_Price}}
	                </div>
	                <div class="price-reduce-product">
	                    % {{ $item->Product_Discount}}
	                </div>
	            </div>
            @endforeach

        </div>


        {{ $productsList->links() }}

        <button class="btn btn-info" onclick="window.location.assign('http://localhost/gokisoft/public/danh-sach-san-pham-method-2');">GO TO ADD PRODUCT(S) PAGE</button>
    </div>
</body>
</html>