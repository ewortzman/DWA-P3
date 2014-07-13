<!DOCTYPE html>
<html>
<head>
	<title>
	@section('title')
		Data Generator
	@show
	</title>

	<link rel="stylesheet" href="../css/bootstrap.css"  type="text/css"/>
	@yield('styles')
</head>
<body>
	<div class="page-header">
		<h1>Data Generator <small>Made with Bootstrap</small></h1>
	</div>

	@yield('content')

	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="../js/bootstrap.js"></script>	

	@yield('scripts')
</body>
</html>