-- Création : 14 Octobre
-- Auteur : Nour Thibault 
-- Utilité : Ajout des langues 
-- Version : 0.1
-- Statut : Test

CREATE TABLE IF NOT EXISTS `langue` (
	`langueId` integer NOT NULL,
	`langueLibelle` varchar(30), 
	`languePhoto` varchar(50),
	PRIMARY KEY (`langueId`)
) ENGINE=InnoDB DEFAULT CHARSET=UTF8;

-- Contenu de la table 

INSERT INTO `langue` (`langueId`, `langueLibelle`, `languePhoto`) VALUES
(0, 'FRANCE', 'drapeauFrance.png'),
(1, 'ANGLAIS', 'drapeauAnglais.png'),
(2, 'ALLEMAGNE', 'drapeauAllemagne.png'),
(3, 'ITALIE', 'drapeauItalie.png'),
(4, 'ESPAGNE', 'drapeauEspagne.png');
