<?php
    session_start();
    if(isset($_SESSION['user'])){
    }else{
        echo "Pas de session en cours";
    }
?>
<!doctype html>
<html>
<head>
	<Meta charset = 'UTF-8'/>
</head>
<body> 
	<h1>Compte Administration</h1>
<section>
	<h2>Récupération des images du Carroussel</h2>
	<div id='container03'>Données</div>
	<button window.onload ='loadDocFichierXML()'>Boutton</button>
    <img src=" " height="42" width="42"/>
</section>
<section>
<h2>Modification du texte</h2>

</section>
<section>
<h2>Récupéraation des messages</h2>

</section>


</body>

<script>
function loadDocFichierXML(){
		let xmlhttp = new XMLHttpRequest();
		// methode evènementelles
		xmlhttp.onreadystatechange = function(){
			if (this.readyState == 4 && this.status == 200) {
				let rootNode = this.responseXML;//réponse XML
				let myTab = rootNode.getElementsByTagName('FILENAME');
				let myText = myTab[0].nodeValue + '</br>';
				myText += myTab[1].nodeValue + '</br>';
				myText += myTab[2].nodeValue + '</br>';
				
				document.getElementById('container03').innerHTML = myText;
			}else{
				document.getElementById('container02').innerHTML = 'ERREUR DE TRANSMISSION';
			}
		}
		// envoi de la requête
		xmlhttp.open('GET', 'XML.xml', true);
		xmlhttp.send();
	}

</script>

</html>