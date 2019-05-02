<!doctype html>
<html>

	<head>
		<title>Modification du nombre de gymnastes</title>
	</head>

	<body>

		<h2 id="titre"><center>Sélection du nombre de gymnaste de l'association inscrite à la compétition</center></h2>

		<div class="blocCentral">
			<form action="index.php?uc=gererPersonnel&action=confirmationChoix" method="POST" id=formulaireInscription>
    			<table>
    				<tbody>
    					<tr>
    						<center>
    							<td id="couleurPolice">Sélection du nombre de gymnaste :</td>

    							<td>
									<input type="text" name="numAssociation" value="<?php echo $_POST['numAssociation'] ?>" hidden>
                					<input type="text" name="numCompetition" value="<?php echo $_POST['numCompetition'] ?>" hidden>
               						<input type="number" name="nombreGymnaste" value="<?php echo $inscription['nbGymnaste'] ?>" min="0" max="20">
               					</td>
               				</center>
               			</tr>
    				</tbody>	
    			</table>

          <center><input type="submit" value="Choisir" name="valider"></center>

			</form>
    </div>
	</body>
</html>