<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
	@section('title')
		Data Generator
	@show
	</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">

	<style type="text/css">
	body{
		padding-top: 70px;
	}
	</style>

	@yield('styles')

</head>
<body>
<nav id="navbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"> </span>
				<span class="icon-bar"> </span>
				<span class="icon-bar"> </span>
			</button>
			<a class="navbar-brand" href="/">Home</a>
		</div>

		<div class="collapse navbar-collapse" id="navbar-collapse">
			<ul class="nav navbar-nav">
				<li id="nav_lorem"><a href="/lorem">Lorem Ipsum</a></li>
				<li id="nav_user"><a href="/user">User Generator</a></li>
				<li id="nav_about"><a href="/about">About the Author</a></li>
			</ul>					
		</div>
	</div>			
</nav>
<div class="container">
	<div class="jumbotron">
	@yield('jumbotron')
	</div>
</div>

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="../js/bootstrap.js"></script>	

@yield('script')
</body>
</html>