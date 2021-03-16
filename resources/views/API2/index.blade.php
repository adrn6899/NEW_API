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
@csrf
    <div class="container" style="width: auto">
        <div id="center">
            <label>RX</label>
            <input type="text" name="rxc" id="rxc">
            <button id="fetch2" class="btn btn-success">Fetch</button>
            <div class="row" id="main-center" style="width: 300px; ">
                
            </div>
            <button type="submit" onclick="handleSubmit()"><a href="API3">COPY DETAILS</a></button>
        </div>
        
    </div>
    {{-- <input type="submit" onclick="handleSubmit()"/> --}}
     
    <script type="text/javascript">
        $(document).ready(function(){

    $("#fetch2").click(function(e){
        var rxcui = document.getElementById("rxc").value;

        e.preventDefault();
        $('#main-center').html('')

        $.ajax({
            type: 'GET',
            url: 'https://rxnav.nlm.nih.gov/REST/rxcui.json?name='+rxcui,
            success: function(response){
                var rxid = response.idGroup.rxnormId;
                console.log(rxid)
                $.ajax({
                    type: 'GET',
                    url: 'https://rxnav.nlm.nih.gov/REST/rxcui/'+ rxid +'/historystatus.json?caller=RxNav',
                    success: function(response){
                        console.log(response);

                        $('#main-center').append(`
                            <div class="card mx-auto" style="width: 100%;">
                            <div class="card body">
                                <p class="card-text" style="padding-left: 5px;">
                                    <div class="-main-body" style="padding-top: 10px; padding-left: 15px;">
                                        <label>IsBranded</label>
                                        <input type="text" id="is_branded" value="${response.rxcuiStatusHistory.attributes.isBranded}" style="margin-left: 30px;"><br>
                                        <label>Name</label>
                                        <input type="text" id="med_name" value="${response.rxcuiStatusHistory.attributes.name}" style="margin-left: 60px;"><br>
                                        <label>RXCUI</label>
                                        <input type="text" id="rxcui_id" value="${response.rxcuiStatusHistory.attributes.rxcui}" style="margin-left: 55px;">
                                    </div>
                                </p>
                                
                            </div>
                        </div>
                            `)
                    }
                })
            }
        })
    });
});

    </script>
    <script type="text/javascript">
        function handleSubmit(){
        const branded = document.getElementById('is_branded').value;
        const medName = document.getElementById('med_name').value;
        const rxcui = document.getElementById('rxcui_id').value;
        sessionStorage.setItem("BRAND_NAME",branded);
        sessionStorage.setItem("MED_NAME",medName);
        sessionStorage.setItem("RXCUI",rxcui);
    }
    </script>
</body>

</html>