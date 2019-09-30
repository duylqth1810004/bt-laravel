<!DOCTYPE html>
<html>
<head>
	<title>Room Details</title>
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
				Room Details
			</div>
			<div class="panel-body">
				<h1>* Room ID: {{$roomID}}</h1>
				<h1>* Room Type: {{$roomType}}</h1>
				<h1>* Room Cost: {{$roomCost}}</h1>
				<h1>* Room Floor: {{$roomFloor}}</h1>
			</div>
		</div>		
	</div>

</body>
</html>