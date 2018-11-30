<?php
/** 
 * Classe d'accès aux données. 
 
 * Utilise les services de la classe PDO
 * pour l'application TransNat
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoTransNat qui contiendra l'unique instance de la classe
 *
 */

class PdoMDS49
{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=mds49';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monPdo;
		private static $pdoMDS49 = null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct()
	{
    		PdoMDS49::$monPdo = new PDO(PdoMDS49::$serveur.';'.PdoMDS49::$bdd, PdoMDS49::$user, PdoMDS49::$mdp); 
			PdoMDS49::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoMDS49::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 *
 
 * Appel : $instancePdoTransNat = PdoTransNat::getPdoTransNat();
 * @return l'unique objet de la classe PdoTransNat
 */
	public  static function getPdoMDS49()
	{
		if(PdoMDS49::$pdoMDS49 == null)
		{
			PdoMDS49::$pdoMDS49= new PdoMDS49();
		}
		return PdoMDS49::$pdoMDS49;  
	}



/**
 * Retourne toutes les associations sous forme d'un tableau associatif
 *
 * @return le tableau associatif des associations
*/
	public function getLesAssociations()
	{
		$req = "select * from association";
		$res = PdoMDS49::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

/**
 * Retourne toutes les competitions sous forme d'un tableau associatif
 *
 * @return le tableau associatif des competitions
*/
	public function getLesCompetitions()
	{
		$req = "select * from competition";
		$res = PdoMDS49::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

/**
 * Retourne tous les correspondants sous forme d'un tableau associatif
 *
 * @return le tableau associatif des correspondants
*/
	public function getLesCorrespondants()
	{
		$req = "select * from correspondant";
		$res = PdoMDS49::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

/**
 * Retourne tous les types de transports sous forme d'un tableau associatif
 *
 * @return le tableau associatif des types de transport
*/
	public function getLesTransports()
	{
		$req = "select * from typeTransport";
		$res = PdoMDS49::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

/**
 * Retourne tous les types de transports sous forme d'un tableau associatif
 *
 * @return le tableau associatif des types de transport
*/
	public function getLesJuges()
	{
		$req = "select * from Juge";
		$res = PdoMDS49::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}


	}
?>