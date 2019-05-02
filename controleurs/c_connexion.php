<?php
$action=$_REQUEST['action'];

switch($action)
{
	case 'seconnecter':
	{
		if(!isset($_SESSION['idAdmin']))
		{
			include("vues/v_ChampConnexion.php");
		}
		break;
	}

	case 'confirmationConnexion':
	{
		if(empty($_POST['identificationConnexion']))
		{
			$nom=NULL;

		}
		else 
		{
			$nom=$_POST['identificationConnexion'];
			
		}


		if(empty($_POST['mdpConnexion']))
		{
			$mdp=NULL;
		}
		else
		{
			$mdp=$_POST['mdpConnexion'];

		}
		
		$leClient=$pdo->getIdAdmin($nom,$mdp);
		$_SESSION['idAdmin']=$leClient['id'];
		
		
		
		if(isset($_SESSION['idAdmin']))
		{
			include("vues/v_redirection.php");
		}
		break;
	}

	case 'sedeconnecter':
	{
		session_destroy();	

		include("vues/v_redirection.php");

	}
}
?>