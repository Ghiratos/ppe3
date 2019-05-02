<?php
$action = $_REQUEST['action'];
switch($action)
{
	case 'administrer' :
	{
		$repasSamediMa = $pdo->nbInscritParRepas(8);
		$repasSamediMiJuge = $pdo->nbInscritParRepas(3);
		$repasSamediMiAssoc = $pdo->nbInscritParRepas(9);
		$repasSamediMi=$repasSamediMiAssoc+$repasSamediMiJuge;
		$repasSamediSJuge = $pdo->nbInscritParRepas(4);
		$repasSamediSAssoc = $pdo->nbInscritParRepas(10);
		$repasSamediS=$repasSamediSAssoc+$repasSamediSJuge;
		$repasDimancheMJuge = $pdo->nbInscritParRepas(7);
		$repasDimancheMAssoc = $pdo->nbInscritParRepas(11);
		$repasDimancheM=$repasDimancheMJuge+$repasDimancheMAssoc;
		include("vues/v_infoAdministrationRepas.php");			
		break;
	}
}
?>