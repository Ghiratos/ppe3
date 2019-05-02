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
			$nomAssoc = $_REQUEST['TAssociation'];
			$getidAssoc = $pdo->getIdAssociation($nomAssoc);
			$idAssoc = $getidAssoc['numAssoc'];

			$nomCompet = $_REQUEST['TCompet'];
			$getidCompet = $pdo->getIdCompetition($nomCompet);
			$idCompet = $getidCompet['numCompetition'];

			$nbJuge = $_REQUEST['TnbJuge'];

			$nomTransport = $_REQUEST['TTransport'];
			$getidTransport = $pdo->getIdTypeTransport($nomTransport);
			$idTransport = $getidTransport['numTransport'];

			$nbEquipe = $_REQUEST['TnbEquipe'];

			$nbGymnaste = $_REQUEST['TnbGymnaste'];
			

			$participation = $pdo->getLaCompetAssoc($idAssoc,$idCompet);
			if ($participation==NULL) {
				$pdo->ajouterInscription($idAssoc,$idCompet,$nbJuge,$idTransport,$nbEquipe,$nbGymnaste);
				include("vues/v_informationInscription.php");
			}
			else {
				include("vues/v_informationInscriptionNonValide.php");
			}
			
			//$pdo->ajouterInscription($idAssoc,$idCompet,$nbJuge,$idTransport,$nbEquipe,$nbGymnaste);
			
						
			break;
		}


		case 'inscriptionRestauration':
		{	
			$associations = $pdo->getLesAssociations();
			include("vues/v_inscriptionRestauration.php");
			break;
		}



		case 'confirmInscriptionRestauration':
		{
			$nomAssoc = $_REQUEST['TAssociation'];
			$nbInscrit = $_REQUEST['TnbInscrit'];
			$getidAssoc = $pdo->getIdAssociation($nomAssoc);
			$idAssoc = $getidAssoc['numAssoc'];

			$repasSMa = isset($_POST['Trepassma']) ? $_POST['Trepassma'] : NULL;
			$repasSMi = isset($_POST['Trepassmi']) ? $_POST['Trepassmi'] : NULL;
			$repasSS = isset($_POST['Trepasss']) ? $_POST['Trepasss'] : NULL;
			$repasDM = isset($_POST['Trepasdm']) ? $_POST['Trepasdm'] : NULL;

			$participation = $pdo->getLaCompetAssoc($idAssoc,1);
			if ($participation==NULL) {
				include("vues/v_informationRestaurationNonValide.php");
			}
			else {
				
				if ($repasSMa==NULL) {$repasSMa="NON";}
				else {$repasSMa="OUI";$idRepas=8;$pdo->ajouterPrestationAssoc($idRepas,$nbInscrit,$idAssoc);}

				if ($repasSMi==NULL) {$repasSMi="NON";}
				else {$repasSMi="OUI";$idRepas=9;$pdo->ajouterPrestationAssoc($idRepas,$nbInscrit,$idAssoc);}

				if ($repasSS==NULL) {$repasSS="NON";}
				else {$repasSS="OUI";$idRepas=10;$pdo->ajouterPrestationAssoc($idRepas,$nbInscrit,$idAssoc);}
				
				if ($repasDM==NULL) {$repasDM="NON";}
				else {$repasDM="OUI";$idRepas=11;$pdo->ajouterPrestationAssoc($idRepas,$nbInscrit,$idAssoc);}
				
				include("vues/v_informationIRestauration.php");	
			}		
			break;
		}



		case 'inscriptionHebergement':
		{	
			
			$associations = $pdo->getLesAssociations();
			$juges = $pdo-> getLesJuges();

			include("vues/v_inscriptionHebergement.php");
			break;
		}


		case 'confirmInscriptionHebergement':
		{
			$juge=$_REQUEST['TJuge'];
			$RepasVJuge = isset($_POST['RepasVJuge']) ? $_POST['RepasVJuge'] : NULL;
			$RepasVConj = isset($_POST['RepasVConj']) ? $_POST['RepasVConj'] : NULL;

			$HerbVSJuge = isset($_POST['HerbVSJuge']) ? $_POST['HerbVSJuge'] : NULL;
			$RepasSSConj = isset($_POST['RepasSSConj']) ? $_POST['RepasSSConj'] : NULL;

			$RepasSSJuge = isset($_POST['RepasSSJuge']) ? $_POST['RepasSSJuge'] : NULL;
			$RepasSSConj = isset($_POST['RepasSSConj']) ? $_POST['RepasSSConj'] : NULL;

			$RepasOSSJuge = isset($_POST['RepasOSSJuge']) ? $_POST['RepasOSSJuge'] : NULL;
			$RepasOSSConj = isset($_POST['RepasOSSConj']) ? $_POST['RepasOSSConj'] : NULL;

			$FeteNJuge = isset($_POST['FeteNJuge']) ? $_POST['FeteNJuge'] : NULL;
			$FeteNConj = isset($_POST['FeteNConj']) ? $_POST['FeteNConj'] : NULL;

			$HerbOSSJuge = isset($_POST['HerbOSSJuge']) ? $_POST['HerbOSSJuge'] : NULL;
			$HerbOSSConj = isset($_POST['HerbOSSConj']) ? $_POST['HerbOSSConj'] : NULL;

			$PiqueDMJuge = isset($_POST['PiqueDMJuge']) ? $_POST['PiqueDMJuge'] : NULL;
			$PiqueDMConj = isset($_POST['PiqueDMConj']) ? $_POST['PiqueDMConj'] : NULL;

			$RepVoiture = isset($_POST['RepVoiture']) ? $_POST['RepVoiture'] : NULL;
			$RepTrain = isset($_POST['RepTrain']) ? $_POST['RepTrain'] : NULL;
			$RepAutre = isset($_POST['RepAutre']) ? $_POST['RepAutre'] : NULL;
			
			

			if($RepasVJuge!=NULL&&$RepasVConj!=NULL)
		{
			$idTypePrestation="1";
			$nbinscrit="2";
			$pdo->ajouterPrestationJuge ($idTypePrestation, $nbinscrit, $juge);
		
		}

		else if($RepasVJuge!=NULL)
		{
			$idTypePrestation="1";
			$nbinscrit="1";
			$pdo->ajouterPrestationJuge ($idTypePrestation, $nbinscrit, $juge);
		}

		/*else
			{
				$_POST['RepasVJuge']:NULL;
				$_POST['RepasVConj']:NULL;

			}*/

		
		

			if($HerbVSJuge!=NULL&&$HerbVSConj!=NULL)
		{
			$idTypePrestation="2";
			$nbinscrit="2";
			$pdo->ajouterPrestationJuge ($idTypePrestation, $nbinscrit, $juge);
		
		}
		else if($HerbVSJuge!=NULL)
		{
			$idTypePrestation="1";
			$nbinscrit="1";
			$pdo->ajouterPrestationJuge ($idTypePrestation, $nbinscrit, $juge);

		}

		/*else
			{
				$_POST['HerbVSJuge']=NUll;
				$_POST['HerbVSConj']=NULL;

			}*/



			if($RepasSSJuge!=NULL&&$RepasSSConj!=NULL)
		{
			$idTypePrestation="9";
			$nbinscrit="2";
			$pdo->ajouterPrestationJuge ($idTypePrestation, $nbinscrit, $idjuge);
		
		}
		else if($RepasSSJuge!=NULL)
		{
			$idTypePrestation="9";
			$nbinscrit="1";
			$pdo->ajouterPrestationJuge ($idTypePrestation, $nbinscrit, $idjuge);

		}

		/*else
			{
				$_POST['RepasSSJuge']=NUll;
				$_POST['RepasSSConj']=NULL;

			}*/

			if($RepasOSSJuge!=NULL&&$RepasOSSConj!=NULL)
		{
			$idTypePrestation="4";
			$nbinscrit="2";
			$pdo->ajouterPrestationJuge ($idTypePrestation, $nbinscrit, $idjuge);
		
		}
		else if($RepasOSSJuge!=NULL)
		{
			$idTypePrestation="4";
			$nbinscrit="1";
			$pdo->ajouterPrestationJuge ($idTypePrestation, $nbinscrit, $idjuge);

		}
		/*else
			{
				$_POST['RepasOSSJuge']=NUll;
				$_POST['RepasOSSConj']=NULL;

			}*/



			if($FeteNJuge!=NULL&&$FeteNConj!=NULL)
		{
			$idTypePrestation="5";
			$nbinscrit="2";
			$pdo->ajouterPrestationJuge ($idTypePrestation, $nbinscrit, $idjuge);
		
		}
		else if($FeteNJuge!=NULL)
		{
			$idTypePrestation="5";
			$nbinscrit="1";
			$pdo->ajouterPrestationJuge ($idTypePrestation, $nbinscrit, $idjuge);

		}
		/*else
			{
				$_POST['FeteNJuge']=NUll;
				$_POST['FeteNConj']=NULL;

			}*/




			if($HerbOSSJuge!=NULL&&$HerbOSSConj!=NULL)
		{
			$idTypePrestation="6";
			$nbinscrit="2";
			$pdo->ajouterPrestationJuge ($idTypePrestation, $nbinscrit, $idjuge);
		
		}
		else if($HerbOSSJuge!=NULL)
		{
			$idTypePrestation="6";
			$nbinscrit="1";
			$pdo->ajouterPrestationJuge ($idTypePrestation, $nbinscrit, $idjuge);

		}
		/*else
			{
				$_POST['HerbOSSJuge']=NUll;
				$_POST['HerbOSSConj']=NULL;

			}*/

		if($PiqueDMJuge!=NULL&&$PiqueDMConj!=NULL)
		{
			$idTypePrestation="7";
			$nbinscrit="2";
			$pdo->ajouterPrestationJuge ($idTypePrestation, $nbinscrit, $idjuge);
		
		}
		else if($PiqueDMJuge!=NULL)
		{
			$idTypePrestation="7";
			$nbinscrit="1";
			$pdo->ajouterPrestationJuge ($idTypePrestation, $nbinscrit, $idjuge);

		}
		/*else
			{
				$_POST['PiqueDMJuge']=NUll;
				$_POST['PiqueDMConj']=NULL;

			}*/
			$RepVoiture = isset($_POST['RepVoiture']) ? $_POST['RepVoiture'] : NULL;
			$RepTrain = isset($_POST['RepTrain']) ? $_POST['RepTrain'] : NULL;
			$RepAutre = isset($_POST['RepAutre']) ? $_POST['RepAutre'] : NULL;
			
			if($RepVoiture!=NULL)
			{
				$numTransport='2';
				$pdo->ajouterTransportJuge ($numTransport, $juge);

			}
			else if($RepTrain!=NULL)
			{
				$numTransport='3';
				$pdo->ajouterTransportJuge ($numTransport, $juge);

			}
			else if($RepAutre!=NUll)
			{
				$numTransport='5';
				$pdo->ajouterTransportJuge ($numTransport, $juge);

			}
			include("vues/v_validationInscription.php");
			break;



		}
	}
	
?>