INSERT INTO Enfant(nom,prenom)
VALUES('Lucas',
       'REYMOND');


INSERT INTO Enfant(nom,prenom)
VALUES('Daniel',
       'VALENTIN');


INSERT INTO Tuteur(nom,prenom,pourcentage_disponibilite)
VALUES('Papa_Lucas',
       'REYMOND',
       3.3);


INSERT INTO Tuteur(nom,prenom,pourcentage_disponibilite)
VALUES('Papa_Daniel',
       'VALENTIN',
       50);


INSERT INTO Cours(libelle, heure_debut,duree, jour)
VALUES('Piano',
       '17:00',
       '00:30',
       'Mardi');


INSERT INTO Cours(libelle, heure_debut,duree, jour)
VALUES('Guitare',
       '17:00',
       '01:00',
       'Mercredi');


INSERT INTO Disponible
VALUES('1',
       '1');


INSERT INTO Disponible
VALUES('2',
       '2');


INSERT INTO Inscription(date_inscription, enfant, cours)
VALUES('2018-10-29',
       '1',
       '1');


INSERT INTO Inscription(date_inscription, enfant, cours)
VALUES('2018-10-30',
       '2',
       '2');
