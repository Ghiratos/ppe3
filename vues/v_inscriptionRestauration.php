<!doctype html>
<html>
    <head>
        <title>Inscription à la restauration</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link href="style.css" rel="stylesheet" type="text/css" /> 

    </head>
	
	
   <body>
	   <center><h2 id="titre">FORMULAIRE D'INSCRIPTION AUX REPAS :</h2></center><BR/>
	   <div class="blocCentral">
			<p id="paragrapheInscriptionRepas"><i>Chaque repas coute 6€, le pique-nique du dimanche midi coûte 3€. Sélectionner votre association puis cocher les cases des repas que vous voulez avoir.</i></p>

			<form action="index.php?uc=inscriptionCompet&action=confirmInscriptionRestauration" method="post" id="formulaireRepas">
		   
				<table>
				<tbody>
					<tr><td id="couleurPolice">Sélection de </br> l'association : </td>
					<td><select name="TAssociation" id="inputFormulaire">
						<?php 
							foreach ($associations as $association)
							{	
								echo "<option value'". $association['numAssoc'] . "'>".$association['nomAssoc']. "</option>";			
							}
						?>
						</select>
					</td></tr>
					<tr><td id="couleurPolice">Nombre de repas : </td><td><input type="number" min="1" name="TnbInscrit" ></td></tr>
					<tr><td id="couleurPolice">Samedi matin: </td><td><input type="checkbox" name="Trepassma" value="non"></td></tr>	
					<tr><td id="couleurPolice">Samedi midi : </td><td><input type="checkbox" name="Trepassmi" value="non"></td></tr>
					<tr><td id="couleurPolice">Samedi soir : </td><td><input type="checkbox" name="Trepasss" value="non"></td></tr>	
					<tr><td id="couleurPolice">Dimanche midi : </td><td><input type="checkbox" name="Trepasdm" value="non"></td></tr>	
				</tbody>
				</table>
				
		                <br/>
				<center><input type="submit" value="Valider" id="Valider"></center>
			</form>
	 	</div>
		
	</body>
</html>