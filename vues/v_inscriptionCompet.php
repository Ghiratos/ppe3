<!--<!doctype html>
<html>
    <head>
        <title>INSCRIPTION À UNE COMPÉTITION</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link href="style.css" rel="stylesheet" type="text/css" /> 

    </head>
	
	
   <body>-->
   <h2 id="titre"><center>INSCRIPTION À UNE COMPÉTITION :</center></h2><BR/>
	<div class="blocCentral">
	<form action="index.php?uc=inscriptionCompet&action=confirmInscriptionCompet" method="post" id="formulaireInscription">
   
		<table>
		<tbody>
			<tr><td id="couleurPolice">Sélection de </br>l'association : </td>
			<td><select name="TAssociation" id="inputFormulaire">
				<?php 
					foreach ($associations as $association)
					{	
						echo "<option value'". $association['numAssoc'] . "'>".$association['nomAssoc']. "</option>";			
					}
				?>
				</select>
			</td></tr>

			<tr><td id="couleurPolice">Sélection de la compétition : </td>
			<td><select name="TCompet" id="inputFormulaire">
				<?php 
					foreach ($competitions as $competition)
					{	
						echo "<option value'". $competition['numCompetition'] . "'>".$competition['libelle']. "</option>";			
					}
				?>
				</select>
			</td></tr>
			
			<tr><td id="couleurPolice">Nombre de juge(s) : </td><td><input type="number" min="0" name="TnbJuge" id="inputFormulaire" required></td></tr>
			<tr><td id="couleurPolice">Nombre de gymnaste(s) : </td><td><input type="number" min="0" name="TnbGymnaste" id="inputFormulaire" required></td></tr>	
			<tr><td id="couleurPolice">Nombre d'équipe(s) : </td><td><input type="number" min="0" name="TnbEquipe" id="inputFormulaire" required></td></tr>	
			<tr><td id="couleurPolice">Type de transport : </td>
			<td><select name="TTransport" id="inputFormulaire">
				<?php 
					foreach ($transports as $transport)
					{	
						echo "<option value'". $transport['numTransport'] . "'>".$transport['libelle']. "</option>";			
					}
				?>
				</select>
			</td></tr>

		</tbody>
		</table>
		
                <br/>
		<center><input type="submit" value="Valider" id="Valider"></center>
	</form>
 	</div>
	
	</body>
</html>