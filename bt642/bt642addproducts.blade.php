<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BT642 - Add Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        
    </style>
</head>
<body>
    @php
        if (isset($notification)){
            echo '<script type="text/javascript">';
            echo 'alert(' . $notification . ')';
            echo '</script>';
        }
    @endphp
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Add Product(s)
            </div>
            <div class="panel-body">
                <form method="post" action="{{ route('addProducts') }}" class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-3">*Product Title: </label>
                        <div class="col-sm-9">
                            <input required type="text" name="productTitle" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">*Product Image Link: </label>
                        <div class="col-sm-9">
                            <input required type="text" name="productThumbnail" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">*Product Price: </label>
                        <div class="col-sm-9">
                            <input required type="number" name="productPrice" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">*Product Discount: </label>
                        <div class="col-sm-9">
                            <input required type="number" name="productDiscount" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3"></label>
                        <div class="col-sm-3">
                            <button class="btn btn-primary form-control">ADD PRODUCT</button>
                        </div>
                        <div class="col-sm-3">
                            <button type="button" onclick="goToProductsPage()" class="btn btn-info form-control">GO TO PRODUCTS PAGE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
    function goToProductsPage(){
        window.location.assign('http://localhost/gokisoft/public/danh-sach-san-pham');
    }
</script>
</html>