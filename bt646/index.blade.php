<!DOCTYPE html>
<html>
<head>
	<title>Hotel Details</title>
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
				Hotel Room List
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<th>Room ID</th>
						<th>Room Type</th>
						<th>Room Floor</th>
						<th>Room Cost</th>
					</thead>
					<tbody>
						@foreach($roomList as $item)
							<tr>
								<td>{{$item[0]}}</td>
								<td>{{$item[1]}}</td>
								<td>{{$item[2]}}</td>
								<td>{{$item[3]}}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>		
	</div>

</body>
</html>