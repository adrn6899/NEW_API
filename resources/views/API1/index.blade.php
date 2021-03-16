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
{{-- <form action="interaction"  method="POST"> --}}
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
            <button type="submit" onclick="handleSubmit()"><a href="API2">COPY DETAILS</a></button> 
        </div>
{{-- <input type="submit" onclick="handleSubmit()"/> --}}
        {{-- <button type="submit" onclick="handleSubmit()"><a href="API2">COPY DETAILS</a></button> --}}
    </div>
{{-- </form> --}}
    {{-- <script src="js/index.js"></script>
    <script src="js/copyall.js"></script>
    <script src="js/rx.js"></script>
    <script src="js/interaction.js"></script> --}}
    <script type="text/javascript">
        
$(document).ready(function(){
    
    $("#fetch1").click(function(e){
        var mdcn = document.getElementById("medicine").value;
        e.preventDefault();
        $('#main-left').html('')
        $.ajax({
            type: 'GET',
            url: 'https://api.fda.gov/drug/label.json?api_key=VwV6GVBKrGlTQQ1cI7CdFwzgKRwttF4hHdRz5HpX&search=drug_label=' + mdcn,
            success: function (response){
                console.log(response)
                        if(!response.results[0].openfda.brand_name){
                                $('#main-left').append(`
                                    <div class="card mx-auto" style="width: 98%; ">
                                        <div class="card body">
                                            <p class="card-text" style="padding-left: 5px;">
                                                <label>Brand Name: </label><br>
                                                <input type="text" id="b_name" value="No Brand Name Available"><br>
                                            </p>
                                        </div>
                                    </div>`)

                            }
                            else{
                                $('#main-left').append(`
                                    <div class="card mx-auto" style="width: 98%; ">
                                        <div class="card body">
                                            <p class="card-text" style="padding-left: 5px;">
                                                <label>Brand Name: </label><br>
                                                <input type="text" id="b_name" value="${response.results[0].openfda.brand_name}"><br>
                                            </p>
                                        </div>
                                    </div>`)
                            }

                            if(!response.results[0].openfda.generic_name){
                                $('#main-left').append(`
                                    <div class="card mx-auto" style="width: 98%; ">
                                        <div class="card body">
                                            <p class="card-text" style="padding-left: 5px;">
                                                <label>Brand Name: </label><br>
                                                <input type="text" id="g_name" value="No Generic Name Available"><br>
                                            </p>
                                        </div>
                                    </div>`)

                            }
                            else{
                                $('#main-left').append(`
                                    <div class="card mx-auto" style="width: 98%; ">
                                        <div class="card body">
                                            <p class="card-text" style="padding-left: 5px;">
                                                <label>Brand Name: </label><br>
                                                <input type="text" id="g_name" value="${response.results[0].openfda.generic_name}"><br>
                                            </p>
                                        </div>
                                    </div>`)
                            }
                        if(!response.results[0].description){
                            $('#main-left').append(`
                                <div class="card mx-auto" style="width: 98%; ">
                                    <div class="card body">
                                        <p class="card-text" style="padding-left: 5px;">
                                            <label>Description: </label><br>
                                            <input type="text" id="d_desc" value="No Description Available"><br>
                                        </p>
                                    </div>
                                </div>`)

                        }
                        else{
                            $('#main-left').append(`
                                <div class="card mx-auto" style="width: 98%; ">
                                    <div class="card body">
                                        <p class="card-text" style="padding-left: 5px;">
                                            <label>Description: </label><br>
                                            <input type="text" id="d_desc" value="${response.results[0].description}" size = "100"><br>
                                        </p>
                                    </div>
                                </div>`)
                        }

                        

                        if (!response.results[0].ask_doctor){
                            $('#main-left').append(`
                                <div class="card mx-auto" style="width: 98%; ">
                                    <div class="card body">
                                        <p class="card-text" style="padding-left: 5px;">
                                            <label>Ask Doctor: </label><br>
                                            <input type="text" id="ask_d" value="Doctor's Approval is not needed"><br>
                                        </p>
                                    </div>
                                </div>`)
                                    }
                        else{
                            $('#main-left').append(`
                                <div class="card mx-auto" style="width: 98%; ">
                                    <div class="card body">
                                        <p class="card-text" style="padding-left: 5px;">
                                            <label>Ask Doctor: </label><br>
                                            <input type="text" id="ask_d" value="${response.results[0].ask_doctor}"><br>
                                        </p>
                                    </div>
                                </div>`)
                                    }
                                    
                    if (!response.results[0].dosage_forms_and_strengths){
                            $('#main-left').append(`
                                <div class="card mx-auto" style="width: 98%; ">
                                    <div class="card body">
                                        <p class="card-text" style="padding-left: 5px;">
                                            <label>Dosage forms and Strengths: </label><br>
                                            <input type="text" id="d_dos" value="No Dosage forms and Strengths Available"><br>
                                        </p>
                                    </div>
                                </div>`)
                                    }
                        else{
                            $('#main-left').append(`
                                <div class="card mx-auto" style="width: 98%; ">
                                    <div class="card body">
                                        <p class="card-text" style="padding-left: 5px;">
                                            <label>Dosage forms and Strengths: </label><br>
                                            <input type="text" id="d_dos" value="${response.results[0].dosage_forms_and_strengths}"><br>
                                        </p>
                                    </div>
                                </div>`)
                                    }

                    if (!response.results[0].pregnancy){
                            $('#main-left').append(`
                                <div class="card mx-auto" style="width: 98%; ">
                                    <div class="card body">
                                        <p class="card-text" style="padding-left: 5px;">
                                            <label>Pregnancy: </label><br>
                                            <input type="text" id="d_preg" value="Safe for Pregnants"><br>
                                        </p>
                                    </div>
                                </div>`)
                                    }
                        else{
                            $('#main-left').append(`
                                <div class="card mx-auto" style="width: 98%; ">
                                    <div class="card body">
                                        <p class="card-text" style="padding-left: 5px;">
                                            <label>Pregnancy: </label><br>
                                            <input type="text" id="d_preg" value="${response.results[0].pregnancy}"><br>
                                        </p>
                                    </div>
                                </div>`)
                                    }
                
            }
        })
    });
});
    </script>
    <script type="text/javascript">
        function handleSubmit(){
            const brand = document.getElementById('b_name').value;
            const generic = document.getElementById('g_name').value;
            const desc = document.getElementById('d_desc').value;
            const ask = document.getElementById('ask_d').value;
            const dosage = document.getElementById('d_dos').value;
            const preggy = document.getElementById('d_preg').value;
            sessionStorage.setItem("BRANDED",brand);
            sessionStorage.setItem("GENERIC",generic);
            sessionStorage.setItem("DESCRIPTION",desc);
            sessionStorage.setItem("ASKED",ask);
            sessionStorage.setItem("DOSAGE",dosage);
            sessionStorage.setItem("PREGNANT",preggy);
}
    </script>
</body>

</html>