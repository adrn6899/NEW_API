<!DOCTYPE html>
<html>
<head>
	<title>RxNorm</title>
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="navbar">
        <ul>
  <!-- <li><a href="index.html">Home</a></li> -->
  <li><a href="{{ url('openfda') }}">Home</a></li>
  <li><a href="{{ url('rx') }}">Rx</a></li>
  <li><a href="{{ url('interaction') }}">Interaction</a></li>
</ul>
    </div>
	<div class="container">
		
		<input type="text" name="rxc" id="rxc">
		<button id="fetch">Fetch</button>
		<div class="row" id="main">
			
		</div>
	</div>
	<script src="js/Rx.js"></script>
</body>
</html>