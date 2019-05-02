USE db672809001;

DROP TABLE admin;
DROP TABLE choisir;
DROP TABLE competition;
DROP TABLE concourir;
DROP TABLE evaluer;
DROP TABLE inscription;
DROP TABLE inscriptionJuge;
DROP TABLE inscrire;
DROP TABLE juge;
DROP TABLE loger;
DROP TABLE niveau;
DROP TABLE participer;
DROP TABLE prestation;
DROP TABLE souscrire;
DROP TABLE transporter;
DROP TABLE typePrestation;
DROP TABLE typeTransport;
DROP TABLE association;  
DROP TABLE correspondant;
DROP TABLE region;
DROP TABLE chambre;
DROP TABLE hebergement;
DROP TABLE hebergeur;
# -----------------------------------------------------------------------------
#       TABLE : ASSOCIATION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS association
 (
   numAssoc int(5) NOT NULL  AUTO_INCREMENT,
   nomAssoc varchar(32) NOT NULL  ,
   adresseAssoc varchar(32) NOT NULL  ,
   cpAssoc int(5) NOT NULL  ,
   villeAssoc varchar(32) NOT NULL  ,
   numRegion int(2) NOT NULL  ,
   mailAssoc char(32) NOT NULL  ,
   numCorrespondant int(4) NOT NULL ,
   validationPaiement boolean NOT NULL  
   , PRIMARY KEY (numAssoc) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE ASSOCIATION
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_ASSOCIATION_CORRESPONDANT
     ON association (numCorrespondant ASC);

CREATE  INDEX I_FK_ASSOCIATION_REGION
     ON association (numRegion ASC);
# -----------------------------------------------------------------------------
#       TABLE : HEBERGEMENT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS hebergement
 (
   numHebergement int(4) NOT NULL  AUTO_INCREMENT,
   numHebergeur int(4) NOT NULL  
   , PRIMARY KEY (numHebergement) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE HEBERGEMENT
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_HEBERGEMENT_HEBERGEUR
     ON hebergement (numHebergeur ASC);

# -----------------------------------------------------------------------------
#       TABLE : CORRESPONDANT
# -----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS correspondant
 (
   numCorrespondant int(4) NOT NULL AUTO_INCREMENT ,
   nomCorrespondant varchar(32) NOT NULL  ,
   prenomCorrespondant varchar(32) NOT NULL  ,
   telCorrespondant varchar(32) NOT NULL  ,
   mailCorrespondant varchar(32) NOT NULL  
   , PRIMARY KEY (numCorrespondant) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       TABLE : INSCRIPTIONJUGE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS inscriptionJuge
 (
   numInscriptionJuge int(4) NOT NULL  AUTO_INCREMENT,
   numCompetition int(4) NOT NULL  ,
   numJuge int(4) NOT NULL 
   , PRIMARY KEY (numInscriptionJuge) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       TABLE : REGION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS region
 (
   numRegion int(2) NOT NULL  AUTO_INCREMENT,
   nomRegion CHAR(32) NOT NULL  
   , PRIMARY KEY (numRegion) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       TABLE : INSCRIPTION
# -----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS inscription
 (
   numInscription int(4) NOT NULL  AUTO_INCREMENT,
   numAssoc int(5) NOT NULL  ,
   numCompetition int(4) NOT NULL  ,
   nbJuge int(3) NOT NULL  ,
   transport int(2) NOT NULL  ,
   nbEquipe int(3) NOT NULL  ,
   nbGymnaste int(3) NOT NULL  
   , PRIMARY KEY (numInscription) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       TABLE : PRESTATION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS prestation
 (
   numPrestation int(2) NOT NULL  AUTO_INCREMENT,
   typePrestation int(4) NOT NULL  ,
   nbInscrit int(3) NOT NULL   
   , PRIMARY KEY (numPrestation) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

 CREATE  INDEX I_FK_PRESATION_TYPEPRESTATION
     ON prestation (typePrestation ASC);
# -----------------------------------------------------------------------------
#       TABLE : TYPETRANSPORT
# -----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS typeTransport
 (
   numTransport int(2) NOT NULL  AUTO_INCREMENT,
   libelle varchar(32) NULL  
   , PRIMARY KEY (numTransport) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       TABLE : COMPETITION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS competition
 (
   numCompetition int(4) NOT NULL  AUTO_INCREMENT,
   dateCompetition date NOT NULL  ,
   villeCompetition varchar(32) NOT NULL  ,
   libelle varchar(32) NOT NULL  
   , PRIMARY KEY (numCompetition) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       TABLE : CHAMBRE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS chambre
 (
   numChambre int(5) NOT NULL  AUTO_INCREMENT,
   numJuge int(4) NOT NULL  ,
   numHebergement int(4) NOT NULL  
   , PRIMARY KEY (numChambre) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE CHAMBRE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_CHAMBRE_HEBERGEMENT
     ON chambre (numHebergement ASC);

# -----------------------------------------------------------------------------
#       TABLE : NIVEAU
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS niveau
 (
   numNiveau int(2) NOT NULL AUTO_INCREMENT ,
   libelleNiveau varchar(32) NOT NULL  
   , PRIMARY KEY (numNiveau) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       TABLE : HEBERGEUR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS hebergeur
 (
   numHebergeur int(4) NOT NULL AUTO_INCREMENT ,
   nomHebergeur varchar(32) NOT NULL  ,
   prenomHebergeur varchar(32) NOT NULL  ,
   telHebergeur varchar(32) NOT NULL  ,
   mailHebergeur varchar(32) NOT NULL  ,
   adresseHebergeur varchar(32) NOT NULL  ,
   cpHebergeur int(5) NOT NULL  ,
   villeHebergeur varchar(32) NOT NULL  ,
   nbCHambre int(3) NOT NULL  
   , PRIMARY KEY (numHebergeur) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       TABLE : JUGE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS juge
 (
   numJuge int(4) NOT NULL  AUTO_INCREMENT,
   numAssoc int(1) NOT NULL  ,
   nomJuge varchar(32) NOT NULL  ,
   prenomJuge varchar(32) NOT NULL  ,
   numNiveau int(2) NOT NULL  ,
   telPortableJuge varchar(32) NOT NULL  ,
   mailJuge varchar(32) NOT NULL  ,
   adresseJuge varchar(32) NOT NULL  ,
   cpJuge int(5) NOT NULL  ,
   villeJuge varchar(32) NOT NULL  ,
   numRegion int (2) NOT NULL    ,
   telFixeJuge varchar(32) NOT NULL  ,
   sexe varchar(32) NOT NULL  
   , PRIMARY KEY (numJuge) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE JUGE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_JUGE_ASSOCIATION
     ON juge (numAssoc ASC);

CREATE  INDEX I_FK_JUGE_REGION
     ON juge (numRegion ASC);

# -----------------------------------------------------------------------------
#       TABLE : TYPEPRESTATION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS typePrestation
 (
   numPrestation int(4) NOT NULL  AUTO_INCREMENT,
   libelle varchar(32) NOT NULL,
   concerne varchar(32) NOT NULL,
   cout float(10) NOT NULL
   , PRIMARY KEY (numPrestation) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       TABLE : PARTICIPER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS participer
 (
   numCompetition int(4) NOT NULL  ,
   numInscription int(4) NOT NULL  
   , PRIMARY KEY (numCompetition,numInscription) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE PARTICIPER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_PARTICIPER_COMPETITION
     ON participer (numCompetition ASC);

CREATE  INDEX I_FK_PARTICIPER_INSCRIPTION
     ON participer (numInscription ASC);

# -----------------------------------------------------------------------------
#       TABLE : INSCRIRE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS inscrire 
 (
   numInscriptionJuge int(4) NOT NULL  ,
   numJuge int(4) NOT NULL  
   , PRIMARY KEY (numInscriptionJuge,numJuge) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE INSCRIRE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_INSCRIRE_INSCRIPTIONJUGE
     ON inscrire (numInscriptionJuge ASC);

CREATE  INDEX I_FK_INSCRIRE_JUGE
     ON inscrire (numJuge ASC);

# -----------------------------------------------------------------------------
#       TABLE : EVALUER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS evaluer
 (
   numNiveau int(2) NOT NULL  ,
   numJuge int(4) NOT NULL  
   , PRIMARY KEY (numNiveau,numJuge) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE EVALUER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_EVALUER_NIVEAU
     ON evaluer (numNiveau ASC);

CREATE  INDEX I_FK_EVALUER_JUGE
     ON evaluer (numJuge ASC);

# -----------------------------------------------------------------------------
#       TABLE : LOGER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS loger
 (
   numJuge int(4) NOT NULL  ,
   numChambre int(5) NOT NULL  
   , PRIMARY KEY (numJuge,numChambre) 
 ) 
 ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE LOGER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_LOGER_JUGE
     ON loger (numJuge ASC);

CREATE  INDEX I_FK_LOGER_CHAMBRE
     ON loger (numChambre ASC);

# -----------------------------------------------------------------------------
#       TABLE : CHOISIR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS choisir
 (
   numPrestation int(4) NOT NULL  ,
   numInscriptionJuge int(4) NOT NULL  
   , PRIMARY KEY (numPrestation,numInscriptionJuge) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE CHOISIR
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_CHOISIR_PRESTATION
     ON choisir (numPrestation ASC);

CREATE  INDEX I_FK_CHOISIR_INSCRIPTIONJUGE
     ON choisir (numInscriptionJuge ASC);

# -----------------------------------------------------------------------------
#       TABLE : SOUSCRIRE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS souscrire
 (
   numInscription int(4) NOT NULL  ,
   numPrestation int(4) NOT NULL  
   , PRIMARY KEY (numInscription,numPrestation) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE SOUSCRIRE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_SOUSCRIRE_INSCRIPTION
     ON souscrire (numInscription ASC);

CREATE  INDEX I_FK_SOUSCRIRE_PRESTATION
     ON souscrire (numPrestation ASC);

# -----------------------------------------------------------------------------
#       TABLE : CONCOURIR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS concourir
 (
   numAssoc int(1) NOT NULL  ,
   numInscription int(4) NOT NULL  
   , PRIMARY KEY (numAssoc,numInscription) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE CONCOURIR
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_CONCOURIR_ASSOCIATION
     ON concourir (numAssoc ASC);

CREATE  INDEX I_FK_CONCOURIR_INSCRIPTION
     ON concourir (numInscription ASC);

# -----------------------------------------------------------------------------
#       TABLE : TRANSPORTER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS transporter
 (
   numTransport int(2) NOT NULL  ,
   numInscription int(4) NOT NULL  
   , PRIMARY KEY (numTransport,numInscription) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE TRANSPORTER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_TRANSPORTER_TYPETRANSPORT
     ON transporter (numTransport ASC);

CREATE  INDEX I_FK_TRANSPORTER_INSCRIPTION
     ON transporter (numInscription ASC);


# -----------------------------------------------------------------------------
#       TABLE : ADMIN
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS admin
 (
   id int(5) NOT NULL  AUTO_INCREMENT,
   login varchar(32) NOT NULL  ,
   mdp varchar(32) NOT NULL  
   , PRIMARY KEY (id) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;     


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE association 
  ADD FOREIGN KEY FK_ASSOCIATION_CORRESPONDANT (numCorrespondant)
      REFERENCES correspondant (numCorrespondant) ;


ALTER TABLE association 
  ADD FOREIGN KEY FK_ASSOCIATION_REGION (numRegion)
      REFERENCES region (numRegion) ;


ALTER TABLE hebergement 
  ADD FOREIGN KEY FK_HEBERGEMENT_HEBERGEUR (numHebergeur)
      REFERENCES hebergeur (numHebergeur) ;


ALTER TABLE chambre 
  ADD FOREIGN KEY FK_CHAMBRE_HEBERGEMENT (numHebergement)
      REFERENCES hebergement (numHebergement) ;


ALTER TABLE juge 
  ADD FOREIGN KEY FK_JUGE_ASSOCIATION (numAssoc)
      REFERENCES association (numAssoc) ;

      ALTER TABLE juge 
  ADD FOREIGN KEY I_FK_JUGE_REGION (numRegion)
      REFERENCES region (numRegion) ;


ALTER TABLE participer 
  ADD FOREIGN KEY FK_PARTICIPER_COMPETITION (numCompetition)
      REFERENCES competition (numCompetition) ;


ALTER TABLE participer 
  ADD FOREIGN KEY FK_PARTICIPER_INSCRIPTION (numInscription)
      REFERENCES inscription (numInscription) ;


ALTER TABLE inscrire 
  ADD FOREIGN KEY FK_INSCRIRE_INSCRIPTIONJUGE (numInscriptionJuge)
      REFERENCES inscriptionJuge (numInscriptionJuge) ;


ALTER TABLE inscrire 
  ADD FOREIGN KEY FK_INSCRIRE_JUGE (numJuge)
      REFERENCES juge (numJuge) ;


ALTER TABLE evaluer 
  ADD FOREIGN KEY FK_EVALUER_NIVEAU (numNiveau)
      REFERENCES niveau (numNiveau) ;


ALTER TABLE evaluer 
  ADD FOREIGN KEY FK_EVALUER_JUGE (numJuge)
      REFERENCES juge (numJuge) ;


ALTER TABLE loger 
  ADD FOREIGN KEY FK_LOGER_JUGE (numJuge)
      REFERENCES juge (numJuge) ;


ALTER TABLE loger 
  ADD FOREIGN KEY FK_LOGER_CHAMBRE (numChambre)
      REFERENCES chambre (numChambre) ;


ALTER TABLE choisir 
  ADD FOREIGN KEY FK_CHOISIR_PRESTATION (numPrestation)
      REFERENCES prestation (numPrestation) ;


ALTER TABLE choisir 
  ADD FOREIGN KEY FK_CHOISIR_INSCRIPTIONJUGE (numInscriptionJuge)
      REFERENCES inscriptionJuge (numInscriptionJuge) ;


ALTER TABLE souscrire 
  ADD FOREIGN KEY FK_SOUSCRIRE_INSCRIPTION (numInscription)
      REFERENCES inscription (numInscription) ;


ALTER TABLE souscrire 
  ADD FOREIGN KEY FK_SOUSCRIRE_PRESTATION (numPrestation)
      REFERENCES prestation (numPrestation) ;


ALTER TABLE concourir 
  ADD FOREIGN KEY FK_CONCOURIR_ASSOCIATION (numAssoc)
      REFERENCES association (numAssoc) ;


ALTER TABLE concourir 
  ADD FOREIGN KEY FK_CONCOURIR_INSCRIPTION (numInscription)
      REFERENCES inscription (numInscription) ;


ALTER TABLE transporter 
  ADD FOREIGN KEY FK_TRANSPORTER_TYPETRANSPORT (numTransport)
      REFERENCES typeTransport (numTransport) ;


ALTER TABLE transporter 
  ADD FOREIGN KEY FK_TRANSPORTER_INSCRIPTION (numInscription)
      REFERENCES inscription (numInscription) ;

