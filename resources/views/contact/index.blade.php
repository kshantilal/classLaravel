<!DOCTYPE html>
<html>
<head>
	<title>Contact Page</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Laravel Blog</a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="/">Home</a></li>
					<li><a href="{{ route('blog.index') }}">Blog</a></li>
					<li><a href="/contact">Contact</a></li>
				</ul>
			</div>
		</nav>
		<div class="row">
			<div class="col-md-12">
				<h1 class="title">This is the contact page</h1>
			</div>
		</div>
	</div>
	
	
<script type="text/javascript" src="/js/bootstrap.js"></script>
</body>
</html>