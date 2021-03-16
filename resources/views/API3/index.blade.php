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
    

        <div class="container" style="width: auto">
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
            {{-- <input type="submit" onclick="handleSubmit()" /> --}}
        <button type="submit" onclick="handleSubmit()"><a href="interaction">COPY DETAILS</a></button>

    <script type="text/javascript">
        
$(document).ready(function(){
    
    $("#fetch3").click(function(e){
        var mdcn1 = document.getElementById("medicine1").value;
        var mdcn2 = document.getElementById("medicine2").value;
        var data = [];
        e.preventDefault();
        $('#main').html('')
        $.ajax({
            type: 'GET',
            url: 'https://rxnav.nlm.nih.gov/REST/rxcui.json?name=' +  mdcn1,
            success: function (response){
                var rxcui1 = response.idGroup.rxnormId;
                // console.log(response)
                $.ajax({
                    type: 'GET',
                    url: 'https://rxnav.nlm.nih.gov/REST/rxcui.json?name=' +  mdcn2,
                    success: function(response){
                        var rxcui2 = response.idGroup.rxnormId;
                        // console.log(response)
                            $.ajax({
                                    type: 'GET',
                                    url:'https://rxnav.nlm.nih.gov/REST/interaction/list.json?rxcuis=' + rxcui1 + "+" + rxcui2,
                                    success: function (response){
                                        console.log(response)
                                            $('#main-right').append(`
                                                <h1 class="card-title">Interaction</h1>
                                                    <input type="text" id="inter_desc" value="${response.fullInteractionTypeGroup[0].fullInteractionType[0].interactionPair[0].description}">
                                                    <h1>Severity</h1>
                                                    <input type="text" id="inter_severe" value="${response.fullInteractionTypeGroup[0].fullInteractionType[0].interactionPair[0].severity}">                                        
                                                `)
                                            
                                        }
                                    })
                    }
                })
            }
        })
        

        });
    });


    </script>
    <script type="text/javascript">
        function handleSubmit(){
            const interDesc = document.getElementById('inter_desc').value;
            const interSevere = document.getElementById('inter_severe').value;
            sessionStorage.setItem("DESC",interDesc);
            sessionStorage.setItem("SEVERITY",interSevere);
    }
    </script>
</body>

</html>