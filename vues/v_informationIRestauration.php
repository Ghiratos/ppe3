<!DOCTYPE html>
<html>

	<body>

		<h2><center><font color="red">L'INSCRIPTION A ÉTÉ VALIDÉE</font></center></h2>
		<div class="blocCentral">
			<table id="tableauRecapInscription">
				<caption><i>Récapitulatif des repas commandés :</i></caption>
				<tbody>
					<tr><td><b>ASSOCIATION : </b></td>
						<td><?php echo $nomAssoc ?></td>
					</tr>
					<tr><td><b>NOMBRE DE REPAS : </b></td>
						<td><?php echo $nbInscrit ?></td>
					</tr>
					<tr><td><b>SAMEDI MATIN : </b></td>
						<td><?php echo $repasSMa ?></td>
					</tr>
					<tr><td><b>SAMEDI MIDI : </b></td>
						<td><?php echo $repasSMi ?></td>
					</tr>
					<tr><td><b>SAMEDI SOIR : </b></td>
						<td><?php echo $repasSS ?></td>
					</tr>
					<tr><td><b>DIMANCHE MIDI : </b></td>
						<td><?php echo $repasDM ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</body>
</html>