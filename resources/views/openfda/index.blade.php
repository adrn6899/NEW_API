<!DOCTYPE html>
<html>
<head>
    <title>Open FDA</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
</head>
<body>
{{--     <div class="navbar">
        <ul>
  <li><a href="{{ url('openfda') }}">Home</a></li>
  <li><a href="{{ url('rx') }}">Rx</a></li>
  <li><a href="{{ url('interaction') }}">Interaction</a></li>
</ul>
    </div> --}}
<form action="interaction"  method="POST">
    @csrf
    <div class="container" style="width: auto">
        <div id="left">
           <div>
                <label>Medicine</label>
                <input type="text" name="medicine" id="medicine">
                <button id="fetch1" class="btn btn-success">Search</button>
            </div>
            <div class="row" id="main-left" style="width: 350px; ">

            </div> 
        </div>
        <div id="center">
            <label>RX</label>
            <input type="text" name="rxc" id="rxc">
            <button id="fetch2" class="btn btn-success">Fetch</button>
            <div class="row" id="main-center" style="width: 300px; ">
                
            </div>
        </div>
        <div id="right">
            <div>
                <label>Interaction</label>
                <input type="text" name="medicine1" id="medicine1"> +
                <input type="text" name="medicine2" id="medicine2">
                <button id="fetch3" class="btn btn-success">Search</button>
            </div>
            <div class="row" id="main-right" style="width: 300px; ">

            </div>
        </div>
    </div>
    <input type="submit" onclick="handleSubmit()"/>
</form>
    <script src="js/index.js"></script>
    <script src="js/copyall.js"></script>
    <script src="js/rx.js"></script>
    <script src="js/interaction.js"></script>
</body>

</html>