<!doctype html>
<html>
	<body>
  		<h2 id="titre"><center>Inscription d'un hébérgeur à un hébérgement :</center></h2><br/>

		<div class="blocCentral">
			<form action="index.php?uc=gererHebergeur&action=confirmAjoutHebergeur" method="post" id="formulaireInscription">
		   
				<table>
					<tbody>
						<tr>
							<td id="couleurPolice">Sélection de la chambre : </td>
							<td>
								<select name="THebergement">
									<?php 
										foreach ($lesHerbergements as $hebergement)
										{				
											echo "<option value='".$hebergement['numChambre']."'>".$hebergement['numChambre']."</option>";
										}
									?>
								</select>
							</td>
						</tr>

						<tr>
							<td id="couleurPolice">Sélection de l'hébérgeur : </td>
							<td>
								<select name="THebergeur">
									<?php 
										foreach ($lesHebergeurs as $hebergeur)
										{			
											echo "<option value='".$hebergeur['numHebergeur']."'>".$hebergeur['nomHebergeur']." ".$hebergeur['prenomHebergeur']."</option>";
										}
									?>
								</select>
							</td>
						</tr>
					</tbody>
				</table>
				<br/>

				<center><input type="submit" value="Valider" id="Valider"></center>
			</form>
	 	</div>
	</body>
</html>