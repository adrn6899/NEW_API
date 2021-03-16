<!DOCTYPE html>
<html>
<head>
	<title>DashBoard</title>
	<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.2/dist/bootstrap-table.min.css">
	<script src="https://unpkg.com/bootstrap-table@1.18.2/dist/bootstrap-table.min.js"></script>
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
    <div>
	    <table class="table table-dark">
	    	<thead>
	    		<th>ID</th>
	    		<th>Brand Name</th>
	    		<th>Generic Name</th>
	    		<th>Description</th>
	    		<th>Ask Doctor</th>
	    		<th>Dosage</th>
	    		<th>Pregnant</th>
	    		<th>Is Branded</th>
	    		<th>Medicine Name</th>
	    		<th>RXCUI ID</th>
	    		<th>Interaction</th>
	    		<th>Severity</th>
	    	</thead>
	    	<tbody>
	    		@foreach($interactions as $interaction)
		    		<tr>
			    		<td>{{ $interaction->id }}</td>
			    		<td>{{ $interaction->Brand_Name }}</td>
			    		<td>{{ $interaction->Generic_Name }}</td>
			    		<td>{{ $interaction->Description }}</td>
			    		<td>{{ $interaction->Ask_Doctor }}</td>
			    		<td>{{ $interaction->Dosage }}</td>
			    		<td>{{ $interaction->Pregnant }}</td>
			    		<td>{{ $interaction->Is_Branded }}</td>
			    		<td>{{ $interaction->Medicine_Name }}</td>
			    		<td>{{ $interaction->RXCUI_ID }}</td>
			    		<td>{{ $interaction->Interaction }}</td>
			    		<td>{{ $interaction->Severity }}</td>
		    		</tr>
	    		@endforeach
	    	</tbody>
	    </table>	
    </div>
    
</body>
</html>