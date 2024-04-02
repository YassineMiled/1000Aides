
INSERT INTO serviceUrgence (idUrgence, nomService, numero, idPays) VALUES 
(1, 'Police', '911', (SELECT idPays FROM Pays WHERE nomPays = 'États-Unis')),
(2, 'Police', '999', (SELECT idPays FROM Pays WHERE nomPays = 'Royaume-Uni')),
(3, 'Police', '17', (SELECT idPays FROM Pays WHERE nomPays = 'France')),
(4, 'Police', '110', (SELECT idPays FROM Pays WHERE nomPays = 'Allemagne')),
(5, 'Police', '911', (SELECT idPays FROM Pays WHERE nomPays = 'Canada')),
(6, 'Police', '000', (SELECT idPays FROM Pays WHERE nomPays = 'Australie')),
(7, 'Police', '110', (SELECT idPays FROM Pays WHERE nomPays = 'Japon')),
(8, 'Police', '110', (SELECT idPays FROM Pays WHERE nomPays = 'Chine')),
(9, 'Police', '100', (SELECT idPays FROM Pays WHERE nomPays = 'Inde')),
(10, 'Police', '112', (SELECT idPays FROM Pays WHERE nomPays = 'Russie')),
(11, 'Police', '190', (SELECT idPays FROM Pays WHERE nomPays = 'Brésil')),
(12, 'Police', '10111', (SELECT idPays FROM Pays WHERE nomPays = 'Afrique du Sud'));

INSERT INTO serviceUrgence (idUrgence, nomService, numero, idPays) VALUES 
(13, 'Pompiers', '911', (SELECT idPays FROM Pays WHERE nomPays = 'États-Unis')),
(14, 'Pompiers', '999', (SELECT idPays FROM Pays WHERE nomPays = 'Royaume-Uni')),
(15, 'Pompiers', '18', (SELECT idPays FROM Pays WHERE nomPays = 'France')),
(16, 'Pompiers', '112', (SELECT idPays FROM Pays WHERE nomPays = 'Allemagne')),
(17, 'Pompiers', '911', (SELECT idPays FROM Pays WHERE nomPays = 'Canada')),
(18, 'Pompiers', '000', (SELECT idPays FROM Pays WHERE nomPays = 'Australie')),
(19, 'Pompiers', '119', (SELECT idPays FROM Pays WHERE nomPays = 'Japon')),
(20, 'Pompiers', '119', (SELECT idPays FROM Pays WHERE nomPays = 'Chine')),
(21, 'Pompiers', '101', (SELECT idPays FROM Pays WHERE nomPays = 'Inde')),
(22, 'Pompiers', '112', (SELECT idPays FROM Pays WHERE nomPays = 'Russie')),
(23, 'Pompiers', '193', (SELECT idPays FROM Pays WHERE nomPays = 'Brésil')),
(24, 'Pompiers', '10177', (SELECT idPays FROM Pays WHERE nomPays = 'Afrique du Sud'));

INSERT INTO serviceUrgence (idUrgence, nomService, numero, idPays) VALUES 
(25, 'SAMU', '911', (SELECT idPays FROM Pays WHERE nomPays = 'États-Unis')),
(26, 'SAMU', '999', (SELECT idPays FROM Pays WHERE nomPays = 'Royaume-Uni')),
(27, 'SAMU', '15', (SELECT idPays FROM Pays WHERE nomPays = 'France')),
(28, 'SAMU', '112', (SELECT idPays FROM Pays WHERE nomPays = 'Allemagne')),
(29, 'SAMU', '911', (SELECT idPays FROM Pays WHERE nomPays = 'Canada')),
(30, 'SAMU', '000', (SELECT idPays FROM Pays WHERE nomPays = 'Australie')),
(31, 'SAMU', '119', (SELECT idPays FROM Pays WHERE nomPays = 'Japon')),
(32, 'SAMU', '120', (SELECT idPays FROM Pays WHERE nomPays = 'Chine')),
(33, 'SAMU', '102', (SELECT idPays FROM Pays WHERE nomPays = 'Inde')),
(34, 'SAMU', '112', (SELECT idPays FROM Pays WHERE nomPays = 'Russie')),
(35, 'SAMU', '192', (SELECT idPays FROM Pays WHERE nomPays = 'Brésil')),
(36, 'SAMU', '10177', (SELECT idPays FROM Pays WHERE nomPays = 'Afrique du Sud'));

INSERT INTO serviceUrgence (idUrgence, nomService, numero, idPays) VALUES 
(37, 'Attentat', '911', (SELECT idPays FROM Pays WHERE nomPays = 'États-Unis')),
(38, 'Attentat', '999', (SELECT idPays FROM Pays WHERE nomPays = 'Royaume-Uni')),
(39, 'Attentat', '197', (SELECT idPays FROM Pays WHERE nomPays = 'France')),
(40, 'Attentat', '110', (SELECT idPays FROM Pays WHERE nomPays = 'Allemagne')),
(41, 'Attentat', '911', (SELECT idPays FROM Pays WHERE nomPays = 'Canada')),
(42, 'Attentat', '000', (SELECT idPays FROM Pays WHERE nomPays = 'Australie')),
(43, 'Attentat', '110', (SELECT idPays FROM Pays WHERE nomPays = 'Japon')),
(44, 'Attentat', '110', (SELECT idPays FROM Pays WHERE nomPays = 'Chine')),
(45, 'Attentat', '100', (SELECT idPays FROM Pays WHERE nomPays = 'Inde')),
(46, 'Attentat', '112', (SELECT idPays FROM Pays WHERE nomPays = 'Russie')),
(47, 'Attentat', '190', (SELECT idPays FROM Pays WHERE nomPays = 'Brésil')),
(48, 'Attentat', '10111', (SELECT idPays FROM Pays WHERE nomPays = 'Afrique du Sud'));


INSERT INTO Pays (idPays, nomPays) VALUES 
(1, 'États-Unis'),
(2, 'Royaume-Uni'),
(3, 'France'),
(4, 'Allemagne'),
(5, 'Canada'),
(6, 'Australie'),
(7, 'Japon'),
(8, 'Chine'),
(9, 'Inde'),
(10, 'Russie'),
(11, 'Brésil'),
(12, 'Afrique du Sud');


CREATE TABLE utilisateur(
   idUser INT,
   nom VARCHAR(50),
   prenom VARCHAR(50),
   age VARCHAR(50),
   sexe VARCHAR(50),
   PRIMARY KEY(idUser)
);

INSERT INTO utilisateur (idUser,nom, prenom, age,sexe) VALUES 
(6,'Da Costa','Alex',21,'Masculin');