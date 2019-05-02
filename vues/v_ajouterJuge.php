<!doctype html>
<html>
    <head>
        <title>Inscription d'un juge à une compétition</title>
	</head>
	
	
	<body>
  		<h2 id="titre"><center>Inscription à une compétition :</center></h2><br/>

		<div class="blocCentral">
			<form action="index.php?uc=gererPersonnel&action=confirmAjoutJuge" method="post" id="formulaireInscription">
		   
				<table>
					<tbody>
						<tr>
							<td id="couleurPolice">Sélection de la compétition : </td>
							<td>
								<select name="TCompet">
									<?php 
										foreach ($lesCompetitions as $competition)
										{				
											echo "<option value='".$competition['numCompetition']."'>".$competition['libelle']."</option>";
										}
									?>
								</select>
							</td>
						</tr>

						<tr>
							<td id="couleurPolice">Sélection du juge : </td>
							<td>
								<select name="TJuge">
									<?php 
										foreach ($lesJuges as $juge)
										{			
											echo "<option value='".$juge['numJuge']."'>".$juge['nomJuge']." ".$juge['prenomJuge']."</option>";
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