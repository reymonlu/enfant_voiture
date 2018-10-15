--Insertion des jours
INSERT INTO Jour(jour) VALUES ('Lundi');
INSERT INTO Jour(jour) VALUES ('Mardi');
INSERT INTO Jour(jour) VALUES ('Mercredi');
INSERT INTO Jour(jour) VALUES ('Jeudi');
INSERT INTO Jour(jour) VALUES ('Vendredi');
INSERT INTO Jour(jour) VALUES ('Samedi');
INSERT INTO Jour(jour) VALUES ('Dimanche');

INSERT INTO Enfant(nom,prenom) VALUES('Lucas', 'REYMOND');
INSERT INTO Enfant(nom,prenom) VALUES('Daniel', 'VALENTIN');
INSERT INTO Enfant(nom,prenom) VALUES('enfant1', 'NOM1');
INSERT INTO Enfant(nom,prenom) VALUES('enfant2', 'NOM2');
INSERT INTO Enfant(nom,prenom) VALUES('enfant3', 'NOM3');
INSERT INTO Enfant(nom,prenom) VALUES('enfant4', 'NOM4');
INSERT INTO Enfant(nom,prenom) VALUES('enfant5', 'NOM5');

INSERT INTO Tuteur(nom,prenom,pourcentage_disponibilite) VALUES('NOM1', 'PRENOM1',30);
INSERT INTO Tuteur(nom,prenom,pourcentage_disponibilite) VALUES('NOM2', 'PRENOM2', 50);
INSERT INTO Tuteur(nom,prenom,pourcentage_disponibilite) VALUES('NOM3', 'PRENOM3', 50);
INSERT INTO Tuteur(nom,prenom,pourcentage_disponibilite) VALUES('NOM4', 'PRENOM4', 50);
INSERT INTO Tuteur(nom,prenom,pourcentage_disponibilite) VALUES('NOM5', 'PRENOM5',30);
INSERT INTO Tuteur(nom,prenom,pourcentage_disponibilite) VALUES('NOM6', 'PRENOM6', 50);
INSERT INTO Tuteur(nom,prenom,pourcentage_disponibilite) VALUES('NOM7', 'PRENOM7', 50);
INSERT INTO Tuteur(nom,prenom,pourcentage_disponibilite) VALUES('NOM8', 'PRENOM8', 50);
INSERT INTO Tuteur(nom,prenom,pourcentage_disponibilite) VALUES('NOM9', 'PRENOM9',30);
INSERT INTO Tuteur(nom,prenom,pourcentage_disponibilite) VALUES('NOM11', 'PRENOM10', 50);
INSERT INTO Tuteur(nom,prenom,pourcentage_disponibilite) VALUES('NOM12', 'PRENOM11', 50);
INSERT INTO Tuteur(nom,prenom,pourcentage_disponibilite) VALUES('NOM13', 'PRENOM12', 50);

-- Insertion des parents
INSERT INTO Parent VALUES (1,1);
INSERT INTO Parent VALUES (2,2);

INSERT INTO Cours(libelle, heure_debut,duree, jour) VALUES('Piano', '17:00', '00:30',2);
INSERT INTO Cours(libelle, heure_debut,duree, jour) VALUES('Guitare', '17:00', '01:00',3);
INSERT INTO Cours(libelle, heure_debut,duree, jour) VALUES('Musique', '17:00', '10:00',4);
INSERT INTO Cours(libelle, heure_debut,duree, jour) VALUES('Violon', '17:00', '01:00',1);
INSERT INTO Cours(libelle, heure_debut,duree, jour) VALUES('Musique', '17:00', '10:00',6);
INSERT INTO Cours(libelle, heure_debut,duree, jour) VALUES('Violon', '17:00', '01:00',4);
INSERT INTO Cours(libelle, heure_debut,duree, jour) VALUES('Musique', '17:00', '10:00',3);
INSERT INTO Cours(libelle, heure_debut,duree, jour) VALUES('Violon', '17:00', '01:00',3);
INSERT INTO Cours(libelle, heure_debut,duree, jour) VALUES('Musique', '17:00', '10:00',3);
INSERT INTO Cours(libelle, heure_debut,duree, jour) VALUES('Violon', '17:00', '01:00',4);


INSERT INTO Disponible VALUES(1,1);
INSERT INTO Disponible VALUES(2,2);
INSERT INTO Disponible VALUES(2,3);
INSERT INTO Disponible VALUES(3,3);
INSERT INTO Disponible VALUES(3,4);
INSERT INTO Disponible VALUES(4,5);
INSERT INTO Disponible VALUES(6,6);
INSERT INTO Disponible VALUES(4,2);
INSERT INTO Disponible VALUES(7,1);
INSERT INTO Disponible VALUES(5,3);
INSERT INTO Disponible VALUES(10,4);
INSERT INTO Disponible VALUES(9,4);
INSERT INTO Disponible VALUES(8,3);
INSERT INTO Disponible VALUES(7,3);


INSERT INTO Inscription(date_inscription, enfant, cours) VALUES('2018-10-29', '1', '1');
INSERT INTO Inscription(date_inscription, enfant, cours) VALUES('2018-10-30', '2', '2');
INSERT INTO Inscription(date_inscription, enfant, cours) VALUES('2018-10-30', '3', '2');
INSERT INTO Inscription(date_inscription, enfant, cours) VALUES('2018-10-30', '4', '2');
INSERT INTO Inscription(date_inscription, enfant, cours) VALUES('2018-10-30', '5', '3');
