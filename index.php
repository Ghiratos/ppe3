<?php
session_start();
require_once("util/class.pdoPPE3.inc.php");
include("vues/v_entete.php") ;
include("vues/v_menu.php") ;

if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];

$pdo = PdoMDS49::getPdoMDS49();
switch($uc)
{
	case 'accueil':
		{include("vues/v_Accueil.php");break;}
	case 'inscriptionCompet' :
		{include("controleurs/c_inscriptionCompet.php");break;}
	case 'gererPersonnel' :
		{include("controleurs/c_gererPersonnel.php");break;}
	case 'gererHebergeur' :
		{include("controleurs/c_gererHebergeur.php");break;}
	case 'gererComptabilite' :
		{include("controleurs/c_gererComptabilite.php");break;}
	case 'administrer' :
		{include("controleurs/c_administration.php");break;}
	case 'connexion' :
		{include("controleurs/c_connexion.php");break;}

}
?>