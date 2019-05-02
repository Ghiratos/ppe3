<!DOCTYPE html>
<html>
	<body>


		<h2><center><font color="red">L'INSCRIPTION A ÉTÉ VALIDÉE</font></center></h2>
		<div class="blocCentral">
			<table id="tableauRecapInscription">
				<caption><i>Récapitulatif de l'inscription :</i></caption>
				<tbody>
					<tr><td><b>ASSOCIATION : </b></td>
						<td><?php echo $nomAssoc ?></td>
					</tr>
					<tr><td><b>COMPÉTITION : </b></td>
						<td><?php echo $nomCompet ?></td>
					</tr>
					<tr><td><b>NOMBRE DE JUGE(S) : </b></td>
						<td><?php echo $nbJuge ?></td>
					</tr>
					<tr><td><b>NOMBRE DE GYMNASTE(S) : </b></td>
						<td><?php echo $nbGymnaste ?></td>
					</tr>
					<tr><td><b>NOMBRE D'ÉQUIPE(S) : </b></td>
						<td><?php echo $nbEquipe ?></td>
					</tr>
					<tr><td><b>TRANSPORT : </b></td>
						<td><?php echo $nomTransport ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</body>
</html>