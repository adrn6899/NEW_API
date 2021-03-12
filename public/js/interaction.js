
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

