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
      	private static $serveur='mysql:host=db672809001.db.1and1.com';
      	private static $bdd='dbname=db672809001';   		
      	private static $user='dbo672809001' ;    		
      	private static $mdp='BMw1234*BGPV' ;	
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
 * Retourne tous les hébérgeurs sous forme d'un tableau associatif
 *
 * @return le tableau associatif des hébérgeurs
*/
	public function getLesHebergeurs()
	{
		$req = "select * from hebergeur";
		$res = PdoMDS49::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

	/**
 * Retourne tous les hébérgeurs sous forme d'un tableau associatif
 *
 * @return le tableau associatif des hébérgeurs
*/
	public function getLesHebergements()
	{
		$req = "select * from chambre";
		$res = PdoMDS49::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

/**
 * Retourne toutes les régions sous forme d'un tableau associatif
 *
 * @return le tableau associatif des régions
*/
	public function getLesRegions()
	{
		$req = "select * from region";
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
 * Retourne tous les juges sous forme d'un tableau associatif
 *
 * @return le tableau associatif des juges
*/
	public function getLesJuges()
	{
		$req = "select * from juge";
		$res = PdoMDS49::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

/**
 * Retourne le juge d'id $juge
*/

	public function getLeJuge($juge)
	{
		$req = "select * from juge where numJuge = $juge";
		$res = PdoMDS49::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

/**
 * Retourne la competition d'id $competition
*/
	public function getLaCompetition($competition)
	{
		$req = "select * from competition where numCompetition = $competition";
		$res = PdoMDS49::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

/**
 * Créé l'inscription d'un juge dans la table inscriptionJuge
 *
*/

	public function inscrireJugeCompetition($competition, $juge)
	{
		$req = "INSERT INTO inscriptionJuge(numCompetition,numJuge) VALUES ('$competition','$juge')";
 		$res = PdoMDS49::$monPdo->exec($req);
	}

/**
 * Créé l'inscription d'un juge dans la table inscriptionJuge
 *
*/

	public function inscrireHebergeurhebergement($hebergement, $hebergeur)
	{
		$req = "INSERT INTO hebergement VALUES ('$hebergement, $hebergeur')";
 		$res = PdoMDS49::$monPdo->exec($req);
	}

/**
 * Retourne toutes les juges qui sont inscris à une competition sous forme d'un tableau associatif
 *
 * @return le tableau associatif des juges
*/
	public function getLesJugesCompet($num)
	{
		$req = "select * from juge inner join inscriptionJuge on juge.numJuge=inscriptionJuge.numJuge
									inner join competition on inscriptionJuge.numCompetition=competition.numCompetition
									where competition.numCompetition=$num";
		$res = PdoMDS49::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

/**
 * Retourne tous les juges qui ne sont pas inscris à une competition sous forme d'un tableau associatif
 *
 * @return le tableau associatif des juges non inscris
*/
	public function getLesJugesCompetFinal($num)
	{
		$req = "select * from juge where juge.numJuge not in (select inscriptionJuge.numJuge from juge 
							inner join inscriptionJuge on juge.numJuge=inscriptionJuge.numJuge
							inner join competition on inscriptionJuge.numCompetition=competition.numCompetition
							where competition.numCompetition=$num)";
		$res = PdoMDS49::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

/**
 * Remplace un juge par un autre
 *
*/
	public function remplaceJugeCompet($numCompet,$numJugeRemplace,$numJuge)
	{
		
		$req = "DELETE from inscriptionJuge where numJuge = $numJugeRemplace and numCompetition = $numCompet";

		$req1 = "INSERT into inscriptionJuge (numCompetition,numJuge) values ($numCompet,$numJuge)";

		$res = PdoMDS49::$monPdo->exec($req);
		$res1 = PdoMDS49::$monPdo->exec($req1);
	}

/**
 * Retourne les competitions auxquelles participe une association  
 *
*/
	public function getLesCompetAssoc($numAssoc)
	{
		$req = "select * from inscription INNER JOIN competition on inscription.numCompetition=competition.numCompetition where numAssoc=$numAssoc";
		$res = PdoMDS49::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

/**
 * Retourne si l'association participe ou non à la compétition
 *
*/
	public function getLaCompetAssoc($numAssoc,$numCompetition)
	{
		$req = "select * from inscription INNER JOIN competition on inscription.numCompetition=competition.numCompetition where numAssoc=$numAssoc and competition.numCompetition=$numCompetition";
		$res = PdoMDS49::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

/**
 * Retourne le nombre de gymnastes de l'inscription d'une association à une competition 
 *
*/
	public function getInscriptionAssoc($numAssoc,$numCompet)
	{
		$req = "SELECT nbGymnaste from inscription where numAssoc=$numAssoc and numCompetition=$numCompet";
		$res = PdoMDS49::$monPdo->query($req);
		$lesLignes = $res->fetch();
		return $lesLignes;
	}

/**
 * met à jour le nombre de gymnastes de l'inscription d'une association à une competition 
 *
*/
	public function updateInscriptionAssoc($numAssoc,$numCompet,$nbGymnaste)
	{
		$req = "UPDATE inscription SET nbGymnaste=$nbGymnaste where numAssoc=$numAssoc and numCompetition=$numCompet";
		$res = PdoMDS49::$monPdo->exec($req);
	}



/**
 * Retourne l'id de l'association
 *
*/
	public function getIdAssociation($nomAssoc)
	{
		$req = "SELECT numAssoc from association where nomAssoc='$nomAssoc'";
		$res = PdoMDS49::$monPdo->query($req);
		$lesLignes = $res->fetch();
		return $lesLignes;
	}

/**
 * Retourne l'id de la competition
 *
*/
	public function getIdCompetition($nomCompet)
	{
		$req = "SELECT numCompetition from competition where libelle='$nomCompet'";
		$res = PdoMDS49::$monPdo->query($req);
		$lesLignes = $res->fetch();
		return $lesLignes;
	}


/**
 * Retourne l'id de typetransport
 *
*/
	public function getIdTypeTransport($nomTransport)
	{
		$req = "SELECT numTransport from typeTransport where libelle='$nomTransport'";
		$res = PdoMDS49::$monPdo->query($req);
		$lesLignes = $res->fetch();
		return $lesLignes;
	}


	/**
 	* Fonction qui permet l'insertion d'une inscription
 	*/
 	public function ajouterInscription ($idAssoc,$idCompet,$nbJuge,$idTransport,$nbEquipe,$nbGymnaste) {
 		$req = "INSERT INTO inscription(numAssoc,numCompetition,nbJuge,transport,nbEquipe,nbGymnaste) VALUES ('$idAssoc','$idCompet','$nbJuge','$idTransport','$nbEquipe','$nbGymnaste')";
 		$res = PdoMDS49::$monPdo->exec($req);

 	}

/**
* Fonction qui permet de récupérer l'id de l'admin
*/
	

	public function getIdAdmin($nom,$mdp)
	{
		$req = "SELECT id from admin where login='$nom'and mdp='$mdp'";
		$res = PdoMDS49::$monPdo->query($req);
		$lesLignes = $res->fetch();
		return $lesLignes;
	}

	/**
* Fonction qui permet de récupérer le nom de l'admin
*/
	

	public function getNomAdmin($idAdmin)
	{
		$req = "SELECT login from admin where id='$idAdmin'";
		$res = PdoMDS49::$monPdo->query($req);
		$lesLignes = $res->fetch();
		return $lesLignes;
	}

/**
* Fonction qui permet de récupérer le mdp de l'admin
*/
	

	public function getMDPAdmin($nom,$mdp)
	{
		$req = "SELECT id from admin where login='$nom'and mdp='$mdp'";
		$res = PdoMDS49::$monPdo->query($req);
		$lesLignes = $res->fetch();
		return $lesLignes;
	}



	/**
 	* Fonction qui permet l'insertion d'une prestation
 	*/
 	public function ajouterPrestationAssoc ($idRepas, $nbInscrit, $idAssoc) {
 		$req = "select max(numPrestation) as maxi from prestation";
 		$res = PdoMDS49::$monPdo->query($req);
		$laLigne = $res->fetch();
		$maxi = $laLigne['maxi'] ;
		$maxi++;
		$numPrestation = $maxi;
		$req = "INSERT INTO prestation(numPrestation, typePrestation,nbInscrit) VALUES ('$numPrestation','$idRepas','$nbInscrit')";
		$res = PdoMDS49::$monPdo->exec($req);
		$req = "select numInscription from inscription where numAssoc='$idAssoc'";
		$res = PdoMDS49::$monPdo->query($req);
		$laLigne = $res->fetch();
		$numInscription = $laLigne['numInscription'] ;
		$req = "INSERT INTO souscrire(numInscription,numPrestation) VALUES ('$numInscription','$numPrestation')";
		$res = PdoMDS49::$monPdo->exec($req);
 	}





	/**
 	* Fonction qui permet l'insertion d'une prestation pour un juge
 	*/
 	public function ajouterPrestationJuge ($idTypePrestation, $nbInscrit, $idJuge) {
 		$req = "select max(numPrestation) as maxi from prestation";
 		$res = PdoMDS49::$monPdo->query($req);
		$laLigne = $res->fetch();
		$maxi = $laLigne['maxi'] ;
		$maxi++;
		$numPrestation = $maxi;
		$req = "INSERT INTO prestation(numPrestation, typePrestation,nbInscrit) VALUES ('$numPrestation','$idTypePrestation',1)";
		$res = PdoMDS49::$monPdo->exec($req);
		$req = "select numInscriptionJuge from inscriptionJuge where numJuge='$idJuge'";
		$res = PdoMDS49::$monPdo->query($req);
		$laLigne = $res->fetch();
		$numInscriptionJuge = $laLigne['numInscriptionJuge'] ;
		$req = "INSERT INTO choisir(numInscriptionJuge,numPrestation) VALUES ('$numInscriptionJuge','$numPrestation')";
		$res = PdoMDS49::$monPdo->exec($req);
 	}

/**
 	* Fonction qui permet de récupérer l'id admin
 	*
 	public function getIdAdmin($nom,$mdp)
	{
		$req = "SELECT id from admin where login='$nom'and mdp='$mdp'";
		$res = PdoMDS49::$monPdo->query($req);
		$lesLignes = $res->fetch();
		return $lesLignes;
	}


	/**
 	* Fonction qui permet de récupérer le nombre d'inscrit par repas
 	*/
 	public function nbInscritParRepas($numRepas)
	{
		$req = "SELECT SUM(nbInscrit) as nbrepas FROM prestation WHERE typePrestation='$numRepas'";
		$res = PdoMDS49::$monPdo->query($req);
		$laLigne = $res->fetch();
		$nbrepas = $laLigne['nbrepas'] ;
		if(!isset($nbrepas)) {
			$nbrepas=0;
		}
		return $nbrepas;
	}

}
?>