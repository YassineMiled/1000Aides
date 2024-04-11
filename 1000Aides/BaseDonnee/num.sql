CREATE TABLE utilisateur(
   idUser INT AUTO_INCREMENT PRIMARY KEY ,
   nom VARCHAR(50),
   prenom VARCHAR(50),
   age VARCHAR(50),
   sexe VARCHAR(50)
);

CREATE TABLE Pays(
   idPays INT,
   nomPays VARCHAR(50),
   PRIMARY KEY(idPays)
);

CREATE TABLE serviceUrgence(
   idUrgence INT,
   nomService VARCHAR(50),
   numero INT,
   idPays INT NOT NULL,
   PRIMARY KEY(idUrgence),
   FOREIGN KEY(idPays) REFERENCES Pays(idPays)
);

CREATE TABLE Photo(
   idPhoto INT,
   idUrgence INT NOT NULL,
   PRIMARY KEY(idPhoto),
   FOREIGN KEY(idUrgence) REFERENCES serviceUrgence(idUrgence)
);

CREATE TABLE utilise(
   idUser INT,
   idUrgence INT,
   favorie VARCHAR(50),
   PRIMARY KEY(idUser, idUrgence),
   FOREIGN KEY(idUser) REFERENCES utilisateur(idUser),
   FOREIGN KEY(idUrgence) REFERENCES serviceUrgence(idUrgence)
);

select numero from serviceUrgence where idPays = 1 and nomService = 'Police';




INSERT INTO Pays (idPays, nomPays) VALUES
(1, 'France'),
(2, 'États-Unis'),
(3, 'Royaume-Uni'),
(4, 'Allemagne'),
(5, 'Japon');


INSERT INTO serviceUrgence (idUrgence, nomService, numero, idPays) VALUES
(1, 'Police', 17, 1),   
(2, 'Police', 911, 2),    
(3, 'Police', 999, 3),   
(4, 'Police', 110, 4),
(5, 'Police', 110, 5);     


INSERT INTO serviceUrgence (idUrgence, nomService, numero, idPays) VALUES
(6, 'Pompiers', 18, 1), 
(7, 'Pompiers', 911, 2), 
(8, 'Pompiers', 999, 3), 
(9, 'Pompiers', 112, 4), 
(10,'Pompiers', 119, 5);    



INSERT INTO serviceUrgence (idUrgence, nomService, numero, idPays) VALUES
(11, 'SAMU', 15, 1),
(12, 'SAMU', 911, 2),
(13, 'SAMU', 999, 3),
(14, 'SAMU', 112, 4),
(15, 'SAMU', 119, 5);


INSERT INTO serviceUrgence (idUrgence, nomService, numero, idPays) VALUES
(16, 'Alerte attentat', 197, 1),
(17, 'Alerte attentat', 911, 2),
(18, 'Alerte attentat', 676, 3),
(19, 'Alerte attentat',437 , 4),
(20, 'Alerte attentat', 110, 5);


INSERT INTO serviceUrgence (idUrgence, nomService, numero, idPays) VALUES
(21, 'Enfants en danger', 119, 1),
(22, 'Enfants en danger', 911, 2),
(23, 'Enfants en danger', 080, 3),
(24, 'Enfants en danger', 554, 4),
(25, 'Enfants en danger', 110, 5);      



INSERT INTO serviceUrgence (idUrgence, nomService, numero, idPays) VALUES
(26, 'Violences sexistes et sexuelles', 3919, 1),
(27, 'Violences sexistes et sexuelles', 7233, 2),
(28, 'Violences sexistes et sexuelles',9999, 3),
(29, 'Violences sexistes et sexuelles',6016, 4),
(30, 'Violences sexistes et sexuelles', 110, 5);   




INSERT INTO utilisateur (idUser, nom,prenom, age,sexe) VALUES
(1,'Miled','Yassine',20,'Masculin');


