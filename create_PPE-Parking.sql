CREATE DATABASE PARKING;

CREATE TABLE UTILISATEUR
(
	numUtilisateur int(5) NOT NULL,
	nom varchar(25),
	prenom varchar(25),
	tel int(10),
	adresse varchar(50),
	cp varchar(5),
	mail varchar(50),
	mdp int(10) NOT NULL,
	estAdmin int(1),
	liste_attente int(1),
)
constraint PK_numUtilisateur primary key (numUtilisateur)
ENGINE=INNODB;

CREATE TABLE PLACE
(
	num_place int(2),
)
constraint PK_num_place primary key (num_place)
ENGINE=INNODB;

CREATE TABLE RESERVATION
(
	id_reservation int(3),
	date_debut date,
	date_fin date,
)
constraint PK_id_reservation primary key (id_reservation)
ENGINE=INNODB;

