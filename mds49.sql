DROP DATABASE IF EXISTS mds49;

CREATE DATABASE IF NOT EXISTS mds49;
USE mds49;
# -----------------------------------------------------------------------------
#       TABLE : ASSOCIATION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS association
 (
   numAssoc int(5) NOT NULL  ,
   nomAssoc varchar(32) NOT NULL  ,
   adresseAssoc varchar(32) NOT NULL  ,
   cpAssoc int(5) NOT NULL  ,
   villeAssoc varchar(32) NOT NULL  ,
   numRegion int(2) NOT NULL  ,
   mailAssoc char(32) NOT NULL  ,
   numCorrespondant int(4) NOT NULL  
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
   numHebergement int(4) NOT NULL  ,
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
   numCorrespondant int(4) NOT NULL  ,
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
   numInscription int(4) NOT NULL  ,
   numCompetition int(4) NOT NULL  ,
   numJuge int(4) NOT NULL  ,
   cout float(10) NOT NULL  ,
   prestation int(2) NOT NULL
   , PRIMARY KEY (numInscription) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;;

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE HEBERGEMENT
# -----------------------------------------------------------------------------

 CREATE  INDEX I_FK_INSCRIPTIONJUGE_JUGE
     ON inscriptionJuge (numJuge ASC);

  CREATE  INDEX I_FK_INSCRIPTIONJUGE_COMPETITION
     ON inscriptionJuge (numCompetition ASC);

  CREATE INDEX I_FK_INSCRIPTIONJUGE_PRESTATION
    ON inscriptionJuge (prestation ASC);

# -----------------------------------------------------------------------------
#       TABLE : REGION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS region
 (
   numRegion int(2) NOT NULL  ,
   nomRegion CHAR(32) NOT NULL  
   , PRIMARY KEY (numRegion) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       TABLE : INSCRIPTION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS inscription
 (
   numInscription int(4) NOT NULL  ,
   numAssoc int(5) NOT NULL  ,
   numCompetition int(4) NOT NULL  ,
   nbJuge int(3) NOT NULL  ,
   transport int(2) NOT NULL  ,
   nbEquipe int(3) NOT NULL  ,
   nbGymnaste int(3) NOT NULL  ,
   prestation int(2) NOT NULL
   , PRIMARY KEY (numInscription) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

 # -----------------------------------------------------------------------------
#       INDEX DE LA TABLE HEBERGEMENT
# -----------------------------------------------------------------------------

 CREATE  INDEX I_FK_INSCRIPTION_ASSOCIATION
     ON inscription (numAssoc ASC);

  CREATE  INDEX I_FK_INSCRIPTION_COMPETITION
     ON inscription (numCompetition ASC);

  CREATE INDEX I_FK_INSCRIPTION_PRESTATION
    ON inscription (prestation ASC);

# -----------------------------------------------------------------------------
#       TABLE : PRESTATION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS prestation
 (
   numPrestation int(2) NOT NULL  ,
   typePrestation varchar(32) NOT NULL  ,
   nbInscrit int(3) NOT NULL  ,
   cout float(10) NOT NULL  
   , PRIMARY KEY (numPrestation) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       TABLE : TYPETRANSPORT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS typeTransport
 (
   numTransport int(2) NOT NULL  ,
   libelle varchar(32) NULL  
   , PRIMARY KEY (numTransport) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       TABLE : COMPETITION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS competition
 (
   numCompetition int(4) NOT NULL  ,
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
   numChambre int(5) NOT NULL  ,
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
   numNiveau int(2) NOT NULL  ,
   libelleNiveau varchar(32) NOT NULL  
   , PRIMARY KEY (numNiveau) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       TABLE : HEBERGEUR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS hebergeur
 (
   numHebergeur int(4) NOT NULL  ,
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

CREATE TABLE IF NOT EXISTS Juge
 (
   numJuge int(4) NOT NULL  ,
   numAssoc int(1) NOT NULL  ,
   nomJuge varchar(32) NOT NULL  ,
   prenomJuge varchar(32) NOT NULL  ,
   numNiveau int(2) NOT NULL  ,
   telPortableJuge varchar(32) NOT NULL  ,
   mailJuge varchar(32) NOT NULL  ,
   adresseJuge varchar(32) NOT NULL  ,
   cpJuge int(5) NOT NULL  ,
   villeJuge varchar(32) NOT NULL  ,
   telFixeRegion varchar(32) NOT NULL  ,
   sexe varchar(32) NOT NULL  
   , PRIMARY KEY (numJuge) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE JUGE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_JUGE_ASSOCIATION
     ON juge (numAssoc ASC);

CREATE  INDEX I_FK_JUGE_NIVEAU
     ON juge (numNiveau ASC);


# -----------------------------------------------------------------------------
#       TABLE : INSCRIRE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS INSCRIRE
 (
   NUMINSCRIPTION BIGINT(4) NOT NULL  ,
   NUMJUGE BIGINT(4) NOT NULL  
   , PRIMARY KEY (NUMINSCRIPTION,NUMJUGE) 
 ) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE association 
  ADD FOREIGN KEY I_FK_ASSOCIATION_CORRESPONDANT (numCorrespondant)
      REFERENCES correspondant (numCorrespondant) ;


ALTER TABLE association 
  ADD FOREIGN KEY I_FK_ASSOCIATION_REGION (numRegion)
      REFERENCES region (numRegion) ;


ALTER TABLE hebergement 
  ADD FOREIGN KEY I_FK_HEBERGEMENT_HEBERGEUR (numHebergeur)
      REFERENCES hebergeur (numHebergeur) ;


ALTER TABLE chambre 
  ADD FOREIGN KEY I_FK_CHAMBRE_HEBERGEMENT (numHebergement)
      REFERENCES hebergement (numHebergement) ;


ALTER TABLE juge 
  ADD FOREIGN KEY I_FK_JUGE_ASSOCIATION (numAssoc)
      REFERENCES association (numAssoc) ;

ALTER TABLE inscriptionJuge 
  ADD FOREIGN KEY I_FK_INSCRIPTIONJUGE_JUGE (numJuge)
      REFERENCES juge (numJuge) ;

ALTER TABLE inscriptionJuge 
  ADD FOREIGN KEY I_FK_INSCRIPTIONJUGE_COMPETITION (numCompetition)
      REFERENCES competition (numCompetition) ;

ALTER TABLE inscriptionJuge 
  ADD FOREIGN KEY I_FK_INSCRIPTIONJUGE_PRESTATION (prestation)
      REFERENCES prestation (numPrestation) ;

ALTER TABLE inscription
  ADD FOREIGN KEY I_FK_INSCRIPTION_ASSOCIATION (numAssoc)
      REFERENCES association (numAssoc) ;

ALTER TABLE inscription 
  ADD FOREIGN KEY I_FK_INSCRIPTION_COMPETITION (numCompetition)
      REFERENCES competition (numCompetition) ;

ALTER TABLE inscription
  ADD FOREIGN KEY I_FK_INSCRIPTION_PRESTATION (prestation)
      REFERENCES prestation (numPrestation) ;

ALTER TABLE chambre 
  ADD FOREIGN KEY I_FK_CHAMBRE_HEBERGEMENT (numHebergement)
      REFERENCES hebergement (numHebergement) ;

ALTER TABLE juge 
  ADD FOREIGN KEY I_FK_JUGE_NIVEAU (numNiveau)
      REFERENCES niveau (numNiveau) ;