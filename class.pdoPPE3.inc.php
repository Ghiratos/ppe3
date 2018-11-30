<?php
/** 
 * Classe d'accès aux données. 
 
 * Utilise les services de la classe PDO
 * pour l'application PPE3
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoPPE3 qui contiendra l'unique instance de la classe
 *
 */

class PdoPPE3
{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=mds49';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monPdo;
		private static $monPdoPPE3 = null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct()
	{
    		PdoPPE3::$monPdo = new PDO(PdoPPE3::$serveur.';'.PdoPPE3::$bdd, PdoPPE3::$user, PdoPPE3::$mdp); 
			PdoPPE3::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoPPE3::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 *
 
 * Appel : $instancePdoPPE3 = PdoPPE3::getPdoPPE3();
 * @return l'unique objet de la classe PdoPPE3
 */
	public  static function getPdoPPE3()
	{
		if(PdoPPE3::$monPdoPPE3 == null)
		{
			PdoPPE3::$monPdoPPE3= new PdoPPE3();
		}
		return PdoPPE3::$monPdoPPE3;  
	}



/**
 * Retourne toutes les associations sous forme d'un tableau associatif
 *
 * @return le tableau associatif des associations
*/
	public function getLesAssociations()
	{
		$req = "select * from association";
		$res = PdoPPE3::$monPdo->query($req);
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
		$res = PdoPPE3::$monPdo->query($req);
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
		$res = PdoPPE3::$monPdo->query($req);
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
		$res = PdoPPE3::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

	}
?>