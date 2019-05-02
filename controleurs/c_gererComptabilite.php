<?php
$action = $_REQUEST['action'];
switch($action)
{
	case 'Comptabilite':
	{
  		$lesAssociations = $pdo->getLesAssociations();
		include("vues/v_reglementCompet.php");
  		break;
	}
}
?>

