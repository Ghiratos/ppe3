<?php
$action = $_REQUEST['action'];
switch($action)
{
	case 'ajoutHebergeur':
	{
		$lesHerbergements = $pdo->getLesHebergements();
		$lesHebergeurs = $pdo->getLesHebergeurs();
		include("vues/v_ajoutHebergeur.php");
		break;
	}

		case 'confirmAjoutHebergeur':
	{
		$hebergement = $_REQUEST['THebergement'];
		$hebergeur = $_REQUEST['THebergeur'];
		$pdo->inscrireHebergeurHebergement($hebergement, $hebergeur);
		include("vues/v_confirmAjoutHebergeur.php");
		break;
	}
}
?>