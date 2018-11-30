<!doctype html>
<html>
    <head>
        <title>Inscription à une compétition</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link href="style.css" rel="stylesheet" type="text/css" /> 

    </head>
	
	
   <body>
   <p><h1>Inscription à une compétition :</h1></p><BR/>
	<form action="index.php?uc=inscriptionCompet&action=confirmInscriptionCompet" method="post">
   
		<table>
		<tbody>
			<tr><td>Sélection de la compétition : </td>
			<td><select name="TCompet">
				<?php 
					foreach ($competitions as $competition)
					{	
						echo "<option value'". $competition['numCompetition'] . "'>".$competition['libelle']. "</option>";			
					}
				?>
				</select>
			</td></tr>
			<tr><td>Sélection de l'association : </td>
			<td><select name="TAssociation">
				<?php 
					foreach ($associations as $association)
					{	
						echo "<option value'". $association['numAssoc'] . "'>".$association['nomAssoc']. "</option>";			
					}
				?>
				</select>
			</td></tr>
			<tr><td>Nombre de gymnaste(s) : </td><td><input type="number" name="TnbGymnaqte"></td></tr>	
			<tr><td>Nombre de juge(s) : </td><td><input type="number" name="TnbJuge"></td></tr>
			<tr><td>Nombre de juge(s) : </td><td><input type="number" name="TnbEquipe"></td></tr>	
			<tr><td>Type de transport : </td>
			<td><select name="TTransport">
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
		<input type="submit" value="Valider">
	</form>
 
	
	</body>
</html>