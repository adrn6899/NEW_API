window.addEventListener('load', () => {
	const branded = sessionStorage.getItem('BRANDED');
	const generic = sessionStorage.getItem('GENERIC');
	const description = sessionStorage.getItem('DESCRIPTION');
	const ask = sessionStorage.getItem('ASKED');
	const dosage = sessionStorage.getItem('DOSAGE');
	const preggy = sessionStorage.getItem('PREGNANT');

	const brand = sessionStorage.getItem('BRAND_NAME');
	const medName = sessionStorage.getItem('MED_NAME');
	const rxcui = sessionStorage.getItem('RXCUI');

	const desc = sessionStorage.getItem('DESC');
	const severe = sessionStorage.getItem('SEVERITY');

	document.getElementById('result-branded').innerHTML = branded;
	document.getElementById('result-generic').innerHTML = generic;
	document.getElementById('result-description').innerHTML = description;
	document.getElementById('result-ask').innerHTML = ask;
	document.getElementById('result-dosage').innerHTML = dosage;
	document.getElementById('result-pregnant').innerHTML = preggy;

	document.getElementById('result-isbranded').innerHTML = brand;
	document.getElementById('result-medname').innerHTML = medName;
	document.getElementById('result-rxcui').innerHTML = rxcui;

	document.getElementById('result-interaction').innerHTML = desc;
	document.getElementById('result-severity').innerHTML = severe;
})