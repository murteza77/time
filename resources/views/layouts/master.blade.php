<!DOCTYPE html>
<html>
<head>
	<title>Time Afghanistan</title>

	<!--  <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css"> -->
	<link href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}"rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}" rel="stylesheet" type="text/css">
	<!--<link href="{{ URL::asset('bootstrap/js/jquery-1.12.0.min.js') }}" rel="stylesheet" type="text/css"> -->

	<script src="URL::asset('bootstrap/js/jquery-1.12.0.min.js')"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

</head>
<body>
<div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">

				<a class="navbar-brand" href="#">TODO</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="{{URL::route('viewlist')}}">LISTS <span class="sr-only">(current)</span></a></li>
					<li><a href="#">Tasks</a></li>
					<li class="active"><a href="#">Notification <span class="sr-only">(current)</span></a></li>

				</ul>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control " placeholder="Search">
					</div>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Contact</a></li>
					<li><a href="#">Profile</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

		</div>
	</div>
</div>


@yield('content')
</body>
</html>