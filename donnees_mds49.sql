--
-- Contenu de la table `typetransport`
--

INSERT INTO `typeTransport` (`libelle`) VALUES
('Autocar'),
('Voiture'),
('Train'),
('Avion'),
('Autres');

-- --------------------------------------------------------
--
-- Contenu de la table `competition`
--

INSERT INTO `competition` (`dateCompetition`,`villeCompetition`,`libelle`) VALUES
('2018-10-05', 'Angers', 'Envolee de Dax');

-- --------------------------------------------------------
--
-- Contenu de la table `correspondant`
--

INSERT INTO `correspondant` (`numCorrespondant`, `nomCorrespondant`,`prenomCorrespondant`,`telCorrespondant`,`mailCorrespondant`) VALUES
(1, 'Martin', 'Wilfried', '0607080910', 'wilfriedmartin@gmail.com'),
(2, 'Durand', 'Rene', '0698765432', 'renedurand@gmail.com'),
(3, 'Dupont', 'Marcel', '0611121314', 'marceldupont@gmail.com');

-- --------------------------------------------------------
--
-- Contenu de la table `region`
--

INSERT INTO `region` (`numRegion`, `nomRegion`) VALUES
(1, 'Pays de la Loire'),
(2, 'Normandie'),
(3, 'Bretagne');

-- --------------------------------------------------------
--
-- Contenu de la table `association`
--

INSERT INTO `association` (`numAssoc`, `nomAssoc`,`adresseAssoc`,`cpAssoc`,`villeAssoc`,`numRegion`,`mailAssoc`,`numCorrespondant`,`validationPaiement`) VALUES
(1, 'gymAngers', '11 rue des sapins', '49000', 'Angers', 1, 'gymangers@gmail.com', 1, TRUE),
(2, 'gymCaen', '12 rue des peupliers', '14000', 'Caen', 2, 'gymcaen@gmail.com', 3, FALSE),
(3, 'gymQuimper', '4 rue des hortensias', '29000', 'Quimper', 3, 'gymquimper@gmail.com', 2, TRUE);


-- --------------------------------------------------------
--
-- Contenu de la table `typeprestation`
--

INSERT INTO `typePrestation` (`numPrestation`, `libelle`, `concerne`,`cout`) VALUES
(1, 'Repas vendredi soir', 'juge','6'),
(2, 'Hebergement par l organisateur le vendredi soir', 'juge','10'),
(3, 'Repas samedi midi', 'juge','6'),
(4, 'Repas officiel samedi soir', 'juge','6'),
(5, 'Fete de nuit', 'juge','15'),
(6, 'Hebergement par l organisateur le samedi soir', 'juge','10'),
(7, 'Pique nique dimanche midi', 'juge','3'),
(8, 'Repas samedi matin', 'equipe','6'),
(9, 'Repas samedi midi', 'equipe','6'),
(10, 'Repas samedi soir', 'equipe','6'),
(11, 'Repas dimanche midi', 'equipe','3'),
(12, 'Dortoir samedi soir', 'equipe','10'),
(13, 'Engagement par gymnaste', 'equipe','5');

-- --------------------------------------------------------
--
-- Contenu de la table `prestation`
--

INSERT INTO `prestation` (`numPrestation`, `typePrestation`,`nbInscrit`) VALUES
(1, 8, 5),
(2, 9, 5),
(3, 10, 15),
(4, 1, 1),
(5, 3, 1),
(6, 4, 1);
-- --------------------------------------------------------
--
-- Contenu de la table `inscription`
--

INSERT INTO `inscription` (`numInscription`, `numAssoc`,`numCompetition`,`nbJuge`,`transport`,`nbEquipe`,`nbGymnaste`) VALUES
(1, 2, 1, 3, 2, 1, 5),
(2, 1, 1, 5, 1, 3, 15),
(3, 3, 1, 1, 3, 1, 5);

-- --------------------------------------------------------
--
-- Contenu de la table `niveau`
--

INSERT INTO `niveau` (`numNiveau`, `libelleNiveau`) VALUES
(1, 'Poussin'),
(2, 'Benjamin'),
(3, 'Minime'),
(4, 'Cadet'),
(5, 'Seniors');

-- --------------------------------------------------------
--
-- Contenu de la table `juge`
--

INSERT INTO `juge` (`numAssoc`, `nomJuge`, `prenomJuge`, `numNiveau`, `telPortableJuge`, `mailJuge`, `adresseJuge`, `cpJuge`, `villeJuge`, `numRegion`, `telFixeJuge`, `sexe`) VALUES
(1, 'Lenvain', 'Eudes', 5, '0678901234', 'eudeslenvain@gmail.com', '2 rue des tilleuls', '49300', 'Cholet', 1, '0241414141', 'Masculin'),
(2, 'Zitoune', 'Katia', 4, '0666666666', 'katiazitoune@gmail.com', '22 rue des jonquilles', '14000', 'Caen', 2, '0231323334', 'Feminin'),
(3, 'Albatros', 'Eugene', 3, '0699887766', 'eugenealbatros@gmail.com', '3 rue des chenes', '29000', 'Quimper', 3, '0257585960', 'Masculin');

-- --------------------------------------------------------
--
-- Contenu de la table `inscriptionjuge`
--

INSERT INTO `inscriptionJuge` (`numCompetition`,`numJuge`) VALUES
(1, 1),
(1, 2),
(1, 3);

-- --------------------------------------------------------
--
-- Contenu de la table `hebergeur`
--

INSERT INTO `hebergeur` (`nomHebergeur`,`prenomHebergeur`,`telHebergeur`,`mailHebergeur`,`adresseHebergeur`,`cpHebergeur`,`villeHebergeur`,`nbChambre`) VALUES
('Delarue', 'Thierry', '0777777777', 'thierrydelarue@gmail.com', '19 rue des lilas', '49000', 'Angers',2),
('Angers','Louison' , '0611991199', 'louisonangers@gmail.com', '12 rue de la tulipe', '49000', 'Angers',7),
('Chollet','Khabib', '0633557799', 'khabibchollet@gmail.com', '1 rue des champignons', '49000', 'Angers',1),
('Elmokthar','Khalida', '0665465406', 'khalidaelmokthar@gmail.com', '25 rue des champs de rose', '49000', 'Angers',3);

-- --------------------------------------------------------
--
-- Contenu de la table `hebergement`
--

INSERT INTO `hebergement` (`numHebergeur`) VALUES
(1),
(2),
(3),
(4);

-- --------------------------------------------------------
--
-- Contenu de la table `chambre`
--

INSERT INTO `chambre` (`numChambre`,`numJuge`,`numHebergement`) VALUES
(1,1,1),
(2,2,2),
(3,3,3);

-- --------------------------------------------------------
--
-- Contenu de la table `participer`
--

INSERT INTO `participer` (`numCompetition`,`numInscription`) VALUES
(1,1),
(1,2),
(1,3);

-- --------------------------------------------------------
--
-- Contenu de la table `inscrire`
--

INSERT INTO `inscrire` (`numInscriptionJuge`,`numJuge`) VALUES
(1,1),
(2,2),
(3,3);

-- --------------------------------------------------------
--
-- Contenu de la table `evaluer`
--

INSERT INTO `evaluer` (`numNiveau`,`numJuge`) VALUES
(5,1),
(4,2),
(3,3);

-- --------------------------------------------------------
--
-- Contenu de la table `loger`
--

INSERT INTO `loger` (`numJuge`,`numChambre`) VALUES
(1,1),
(2,2),
(3,3);

-- --------------------------------------------------------
--
-- Contenu de la table `choisir`
--

INSERT INTO `choisir` (`numPrestation`,`numInscriptionJuge`) VALUES
(1,1),
(2,2),
(3,3);

-- --------------------------------------------------------
--
-- Contenu de la table `souscrire`
--

INSERT INTO `souscrire` (`numInscription`,`numPrestation`) VALUES
(1,1),
(2,2),
(3,3);

-- --------------------------------------------------------
--
-- Contenu de la table `concourir`
--

INSERT INTO `concourir` (`numAssoc`,`numInscription`) VALUES
(2,1),
(1,2),
(3,3);

-- --------------------------------------------------------
--
-- Contenu de la table `transporter`
--

INSERT INTO `transporter` (`numTransport`,`numInscription`) VALUES
(2,1),
(1,2),
(3,3);

-- --------------------------------------------------------
--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`login`,`mdp`) VALUES
('admin1', 'a1234'),
('admin2', 'z1234');
