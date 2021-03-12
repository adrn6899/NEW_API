<!DOCTYPE html>
<html>
<head>
	<title>VIEW PAGE</title>
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
  <li><a href="{{ url('openfda') }}">Home</a></li>
  <li><a href="{{ url('rx') }}">Rx</a></li>
  <li><a href="{{ url('interaction') }}">Interaction</a></li>
</ul>
    </div>
    <form action='#' method="GET" ></form>
    @csrf
	
    <div class="container">
        <h5>
            Brand Name: <span id="result-branded" name="brand_name" />
        </h5>
        <h5>
            Generic Name: <span id="result-generic" name="generic_name"/>
        </h5>
        <h5>
            Description: <span id="result-description" name="description"/>
        </h5>
        <h5>
            Ask Doctor: <span id="result-ask" name="ask_doctor"/>
        </h5>
        <h5>
            Dosage: <span id="result-dosage" name="dosage"/>
        </h5>
        <h5>
            Pregnant: <span id="result-pregnant" name="pregnant"/>
        </h5>
        {{-- RXCUI STATS --}}
        <h5>
            Is Branded: <span id="result-isbranded" name="is_branded"/>
        </h5>
        <h5>
            Medicine Name: <span id="result-medname" name="medicine_name"/>
        </h5> 
        <h5>
            RXCUI ID: <span id="result-rxcui" name="rxcui_id"/>
        </h5>    
        {{-- INTERACTION STAT --}}
        <h5>
            Interaction: <span id="result-interaction" name="interaction"/>
        </h5>
        <h5>
            Severity: <span id="result-severity" name="severity"/>
        </h5>
        
    </div>
    
        <button type="Submit" class="btn btn-success" id="fetch_all">Save</button>
    </form> 
   <script src="js/getall.js"></script> -
</body>
</html>