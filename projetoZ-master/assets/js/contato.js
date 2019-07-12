function cadastrarEmail()
{
	
}

function faleConosco()
{
	document.getElementById('formSimple').style.display = 'block';
	document.getElementById('formOuvi').style.display = 'none';
	document.getElementById('formOthers').style.display = 'none';
	document.getElementById('formSend').style.display = 'none';
}

function outrosMeios()
{
	document.getElementById('formSimple').style.display = 'none';
	document.getElementById('formOuvi').style.display = 'none';
	document.getElementById('formOthers').style.display = 'block';
	document.getElementById('formSend').style.display = 'none';
}

function send()
{
	document.getElementById('formSimple').style.display = 'none';
	document.getElementById('formOuvi').style.display = 'none';
	document.getElementById('formSend').style.display = 'block';
}