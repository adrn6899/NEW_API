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
