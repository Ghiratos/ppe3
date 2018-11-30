<?php
	$action=$_REQUEST['action'];
	switch($action)
	{
		case 'inscriptionCompet':
		{	
			$associations = $pdo->getLesAssociations();
			$competitions = $pdo->getLesCompetitions();
			$correspondants = $pdo->getLesCorrespondants();
			$transports = $pdo->getLesTransports();
			include("vues/v_inscriptionCompet.php");
			break;
		}

		case 'confirmInscriptionCompet':
		{
			$idCompet = $_REQUEST['TCompet'];
			$idAssoc = $_REQUEST['TAssociation'];
			$nbGymnaste = $_REQUEST['TnbGymnaste'];
			$nbJuge = $_REQUEST['TnbJuge'];
			$nbEquipe = $_REQUEST['TnbEquipe'];
			$idTransport = $_REQUEST['TTransport'];
			$pdo->inscrireCompetition($idCompet,$idAssoc,$nbGymnaste,$nbJuge,$nbEquipe,$idTransport);
			$lesClients = $pdo->getLesClients();
			include("vues/v_inscriptionRestauration.php");			
			break;
		}


		case 'inscriptionRestauration':
		{	
			$regions = $pdo->getLesRegions();
			include("vues/v_inscriptionRestauration.php");
			break;
		}



		case 'confirmInscriptionRestauration':
		{
			$nom = $_REQUEST['TNom'];
			$prenom = $_REQUEST['TPrenom'];
			$adresse = $_REQUEST['TAdresse'];
			$codepostal = $_REQUEST['TCodepostal'];
			$ville = $_REQUEST['TVille'];
			$idRegion = $_REQUEST['TRegion'];
			$pdo->creerClient($nom,$prenom,$adresse,$codepostal,$ville,$idRegion);
			$lesClients = $pdo->getLesClients();
			include("vues/v_inscriptionRestauration.php");			
			break;
		}



		case 'inscriptionHebergement':
		{	
			$regions = $pdo->getLesRegions();
			include("vues/v_inscriptionHebergement.php");
			break;
		}


		case 'confirmInscriptionHebergement':
		{
			$nom = $_REQUEST['TNom'];
			$prenom = $_REQUEST['TPrenom'];
			$adresse = $_REQUEST['TAdresse'];
			$codepostal = $_REQUEST['TCodepostal'];
			$ville = $_REQUEST['TVille'];
			$idRegion = $_REQUEST['TRegion'];
			$pdo->creerClient($nom,$prenom,$adresse,$codepostal,$ville,$idRegion);
			$lesClients = $pdo->getLesClients();
			include("vues/v_inscriptionRestauration.php");			
			break;
		}
	}
?>