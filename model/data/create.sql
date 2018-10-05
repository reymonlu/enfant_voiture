CREATE TABLE Enfant(
  id_enfant INTEGER PRIMARY KEY AUTO_INCREMENT,
  nom varchar(50) NOT NULL,
  prenom varchar(50) NOT NULL
);
CREATE TABLE Tuteur(
  id_tuteur INTEGER PRIMARY KEY AUTO_INCREMENT,
  nom varchar(50) NOT NULL,
  prenom varchar(50) NOT NULL,
  pourcentage_disponibilite numeric(2,2) NOT NULL
);
CREATE TABLE Cours(
  id_cours INTEGER PRIMARY KEY AUTO_INCREMENT,
  libelle char(50) NOT NULL,
  heure_debut text NOT NULL,
  duree text NOT NULL,
  jour text CHECK(jour IN ('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'))
);
CREATE TABLE Disponible(
  tuteur INTEGER NOT NULL,
  cours INTEGER NOT NULL,
  PRIMARY KEY (tuteur, cours),
  FOREIGN KEY(tuteur) REFERENCES Tuteur(id_tuteur),
  FOREIGN KEY(cours) REFERENCES Cours(id_cours)
);
CREATE TABLE Inscription(
  date_inscription text NOT NULL CHECK(date_inscription > date('now')),
  enfant INTEGER NOT NULL,
  cours INTEGER NOT NULL,
  FOREIGN KEY(enfant) REFERENCES Enfant(id_enfant),
  FOREIGN KEY(cours) REFERENCES Cours(id_cours),
  PRIMARY KEY (enfant, cours)
);
