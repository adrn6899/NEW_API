
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