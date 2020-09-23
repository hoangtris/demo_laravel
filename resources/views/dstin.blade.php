<!DOCTYPE html>
<html>
<head>
	<title>DS tin </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<table class="table thead-dark table-hover">
	
	<div class="container-fluid">
		<h2>Danh sach tin tuc</h2>
	@foreach($post as $bv)
		<a href="chitiettin/{{$bv->id}}">{{$bv->title}}</a> - Ngay dang: {{$bv->created_at}} <br>	
	@endforeach
	</div>
</table>



</body>
</html>