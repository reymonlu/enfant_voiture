CREATE TABLE Enfant(
  id_enfant INTEGER PRIMARY KEY,
  nom varchar(50) NOT NULL,
  prenom varchar(50) NOT NULL
);
CREATE TABLE Tuteur(
  id_tuteur INTEGER PRIMARY KEY,
  nom varchar(50) NOT NULL,
  prenom varchar(50) NOT NULL
);
CREATE TABLE Cours(
  id_cours INTEGER PRIMARY KEY,
  heure_debut text NOT NULL,
  heure_fin text NOT NULL,
  jour text CHECK(jour IN ('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'))
);
CREATE TABLE Disponible(
  tuteur INTEGER NOT NULL,
  cours INTEGER NOT NULL,
  PRIMARY KEY (tuteur, cours),
  FOREIGN KEY(cours) REFERENCES Cours(id_cours),
  FOREIGN KEY(tuteur) REFERENCES Cours(id_tuteur)
);
CREATE TABLE Inscription(
  id_inscription INTEGER PRIMARY KEY,
  jour_inscription text NOT NULL,
  enfant INTEGER NOT NULL,
  cours INTEGER NOT NULL,
  FOREIGN KEY(enfant) REFERENCES Enfant(id_enfant),
  FOREIGN KEY(cours) REFERENCES Cours(id_cours)
);
