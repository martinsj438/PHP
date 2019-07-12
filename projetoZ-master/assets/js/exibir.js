var fn = 1;
var ac = 1;
var cf = 1;
function exibirFN(){
	if(fn==1){
		apagar()
		document.getElementById('fn').style.display="block";
		fn = 0;
		ac = 1;
		cf = 1;
	}else if(fn==0){
		document.getElementById('fn').style.display="none";
		fn = 1;
		
	}
}

function exibirAC(){
	if(ac==1){
		apagar()
		document.getElementById('ac').style.display="block";
		fn = 1;
		ac = 0;
		cf = 1;
	}else if(ac==0){
		document.getElementById('ac').style.display="none";
		ac = 1;
		
	}
}

function exibirCF(){
	if(cf==1){
		apagar()
		document.getElementById('cf').style.display="block";
		fn = 1;
		ac = 1;
		cf = 0;
	}else if(cf==0){
		document.getElementById('cf').style.display="none";
		cf = 1;
		
	}
}
function apagar(){
	document.getElementById('cf').style.display = 'none';
	document.getElementById('fn').style.display = 'none';
	document.getElementById('ac').style.display = 'none';
}
