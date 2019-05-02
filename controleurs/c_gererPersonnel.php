<?php
$action = $_REQUEST['action'];
switch($action)
{
	case 'ajoutJuge':
	{
		$lesCompetitions = $pdo->getLesCompetitions();
		$lesJuges = $pdo->getLesJuges();
		include("vues/v_ajouterJuge.php");
		break;
	}

	case 'confirmAjoutJuge':
	{
		$competition = $_REQUEST['TCompet'];
		$juge = $_REQUEST['TJuge'];
		$leJuge = $pdo->getLeJuge($juge);
		$laCompetition = $pdo->getLaCompetition($competition);
		$pdo->inscrireJugeCompetition($competition, $juge);
		include("vues/v_confirmAjoutJuge.php");
		break;
	}

	case 'modifJuge':
	{
		$lesCompetitions = $pdo->getLesCompetitions();
		include ("vues/v_modifJuge.php");
		break;
	}
	case 'choixJuge';
	{
		$numCompet = $_REQUEST['numCompet'];
		$lesJuges = $pdo->getLesJugesCompet($numCompet);
		$lesJugesF = $pdo->getLesJugesCompetFinal($numCompet);
		include("vues/v_choixJuge.php");
		break;
	}

	case 'choixJugeConfirmation';
	{
		$numCompet = $_REQUEST['numCompet'];
		$leJuge = $_REQUEST['numJuge'];
		$leJugeF = $_REQUEST['numJugeFinal'];
		$pdo->remplaceJugeCompet($numCompet,$leJuge,$leJugeF);
		include("vues/v_redirection.php");
		break;
	}

	case 'modifNbGymnaste':
	{
		$lesAssociations = $pdo->getLesAssociations();
		include ("vues/v_modifNbGymnaste.php");
		break;
	}

	case 'choixCompetition':
	{
		$numAssociation = $_REQUEST['numAssociation'];
		$lesCompetitions = $pdo->getLesCompetAssoc($numAssociation);
		include ("vues/v_choixCompetition.php");
		break;
	}

	case 'choixNbGymnaste':
	{
		$numAssociation = $_REQUEST['numAssociation'];
		$numCompetition = $_REQUEST['numCompetition'];
		$inscription = $pdo->getInscriptionAssoc($numAssociation,$numCompetition);
		include ("vues/v_choixNbGymnaste.php");
		break;
	}

	case 'confirmationChoix';
	{
		$numAssociation = $_REQUEST['numAssociation'];
		$numCompetition = $_REQUEST['numCompetition'];
		$nbGymnaste = $_REQUEST['nombreGymnaste'];
		$pdo->updateInscriptionAssoc($numAssociation,$numCompetition,$nbGymnaste);
		include("vues/v_redirection.php");
		break;
	}
}
?>