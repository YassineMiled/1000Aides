CREATE TABLE Utilisateurs (
   idUser INT AUTO_INCREMENT PRIMARY KEY,
   nom VARCHAR(50),
   prenom VARCHAR(50),
   email VARCHAR(50),
   motDePasse VARCHAR(500),
   sexe VARCHAR(50)
);


CREATE TABLE Pays(
   idPays INT,
   nomPays VARCHAR(50),
   PRIMARY KEY(idPays)
);

CREATE TABLE ServiceUrgence(
   idUrgence INT,
   nomService VARCHAR(50),
   numero VARCHAR(50),
   description VARCHAR(500),
   idPays INT NOT NULL,
   PRIMARY KEY(idUrgence),
   FOREIGN KEY(idPays) REFERENCES Pays(idPays)
);

CREATE TABLE Photo(
   idPhoto INT,
   idUrgence INT NOT NULL,
   PRIMARY KEY(idPhoto),
   FOREIGN KEY(idUrgence) REFERENCES ServiceUrgence(idUrgence)
);

CREATE TABLE utiliser(
   idUser INT,
   idUrgence INT,
   favorie VARCHAR(50),
   PRIMARY KEY(idUser, idUrgence),
   FOREIGN KEY(idUser) REFERENCES Utilisateurs(idUser),
   FOREIGN KEY(idUrgence) REFERENCES ServiceUrgence(idUrgence)
);




INSERT INTO Pays (idPays, nomPays) VALUES
(1, 'France'),
(2, 'États-Unis'),
(3, 'Royaume-Uni'),
(4, 'Allemagne'),
(5, 'Japon');


INSERT INTO serviceUrgence (idUrgence, nomService, numero, description, idPays) VALUES
(1, 'Police', 17,'Contacter la police en cas d urgence ou pour signaler un crime.' , 1),
(2, 'Police', 911,'Contacter la police en cas d urgence ou pour signaler un crime.' , 2),    
(3, 'Police', 911,'Contacter la police en cas d urgence ou pour signaler un crime.' , 3),  
(4, 'Police', 110,'Contacter la police en cas d urgence ou pour signaler un crime.' , 4),
(5, 'Police', 110, 'Contacter la police en cas d urgence ou pour signaler un crime.',5);     


INSERT INTO serviceUrgence (idUrgence, nomService, numero, description, idPays) VALUES
(6, 'Pompiers', 18,  "En cas d'incendie ou d'accident, contactez les pompiers.", 1), 
(7, 'Pompiers', 911, "En cas d'incendie ou d'accident, contactez les pompiers.",2), 
(8, 'Pompiers', 999,"En cas d'incendie ou d'accident, contactez les pompiers.",3), 
(9, 'Pompiers', 112, "En cas d'incendie ou d'accident, contactez les pompiers.",4), 
(10,'Pompiers', 119,"En cas d'incendie ou d'accident, contactez les pompiers.", 5);    



INSERT INTO serviceUrgence (idUrgence, nomService, numero, description, idPays) VALUES
(11, 'SAMU', 15, "En cas d'urgence médicale, contactez le SAMU.", 1),
(12, 'SAMU', 911, "En cas d'urgence médicale, contactez le SAMU.", 2),
(13, 'SAMU', 999, "En cas d'urgence médicale, contactez le SAMU.", 3),
(14, 'SAMU', 112, "En cas d'urgence médicale, contactez le SAMU.", 4),
(15, 'SAMU', 119, "En cas d'urgence médicale, contactez le SAMU.", 5);


INSERT INTO serviceUrgence (idUrgence, nomService, numero, description, idPays) VALUES
(16, 'Alerte attentat', 197, "En cas d'alerte attentat ou d'enlèvement, signalez-le aux autorités compétentes.", 1),
(17, 'Alerte attentat', 911, "En cas d'alerte attentat ou d'enlèvement, signalez-le aux autorités compétentes.", 2),
(18, 'Alerte attentat', 999, "En cas d'alerte attentat ou d'enlèvement, signalez-le aux autorités compétentes.", 3),
(19, 'Alerte attentat', 110, "En cas d'alerte attentat ou d'enlèvement, signalez-le aux autorités compétentes.", 4),
(20, 'Alerte attentat', 911, "En cas d'alerte attentat ou d'enlèvement, signalez-le aux autorités compétentes.", 5);


INSERT INTO serviceUrgence (idUrgence, nomService, numero, description, idPays) VALUES
(21, 'Enfants en danger', 119, "Pour signaler des enfants en danger, contactez les services sociaux ou la ligne d'urgence dédiée.", 1),
(22, 'Enfants en danger', 911, "Pour signaler des enfants en danger, contactez les services sociaux ou la ligne d'urgence dédiée.", 2),
(23, 'Enfants en danger', 112, "Pour signaler des enfants en danger, contactez les services sociaux ou la ligne d'urgence dédiée.", 3),
(24, 'Enfants en danger', 110, "Pour signaler des enfants en danger, contactez les services sociaux ou la ligne d'urgence dédiée.", 4),
(25, 'Enfants en danger', 110, "Pour signaler des enfants en danger, contactez les services sociaux ou la ligne d'urgence dédiée.", 5);      



INSERT INTO serviceUrgence (idUrgence, nomService, numero, description, idPays) VALUES
(26, 'Violences sexistes et sexuelles', "3919", "En cas de violences sexistes et sexuelles, contactez les autorités locales ou des associations spécialisées pour obtenir de l'aide et du soutien.", 1),
(27, 'Violences sexistes et sexuelles', "4673", "En cas de violences sexistes et sexuelles, contactez les autorités locales ou des associations spécialisées pour obtenir de l'aide et du soutien.", 2),
(28, 'Violences sexistes et sexuelles', "0808 2000 247", "En cas de violences sexistes et sexuelles, contactez les autorités locales ou des associations spécialisées pour obtenir de l'aide et du soutien.", 3),
(29, 'Violences sexistes et sexuelles', "08000 116 016", "En cas de violences sexistes et sexuelles, contactez les autorités locales ou des associations spécialisées pour obtenir de l'aide et du soutien.", 4),
(30, 'Violences sexistes et sexuelles', "0570 0 81093", "En cas de violences sexistes et sexuelles, contactez les autorités locales ou des associations spécialisées pour obtenir de l'aide et du soutien.", 5);   


INSERT INTO serviceUrgence (idUrgence, nomService, numero, description, idPays) VALUES
(31,'SOS Suicide', 014539, "En cas de détresse émotionnelle, n'hésitez pas à appeler SOS Suicide pour recevoir du soutien et de l'écoute.", 1),
(32,'SOS Suicide', 18002, "En cas de détresse émotionnelle, n'hésitez pas à appeler SOS Suicide pour recevoir du soutien et de l'écoute.",2),
(33,'SOS Suicide', 1161, "En cas de détresse émotionnelle, n'hésitez pas à appeler SOS Suicide pour recevoir du soutien et de l'écoute.",3),
(34,'SOS Suicide', 080011,  "En cas de détresse émotionnelle, n'hésitez pas à appeler SOS Suicide pour recevoir du soutien et de l'écoute.",4),
(35,'SOS Suicide', 035774, "En cas de détresse émotionnelle, n'hésitez pas à appeler SOS Suicide pour recevoir du soutien et de l'écoute.",5);

INSERT INTO serviceUrgence (idUrgence, nomService, numero, description, idPays) VALUES
(36,'Centre Anti-Poison', "01 40 05 48 48", "En cas d'ingestion accidentelle ou d'exposition à des substances toxiques, contactez immédiatement le Centre Anti-Poison pour des conseils médicaux d'urgence.",1),
(37,'Centre Anti-Poison', "1 800 222 1222", "En cas d'ingestion accidentelle ou d'exposition à des substances toxiques, contactez immédiatement le Centre Anti-Poison pour des conseils médicaux d'urgence.",2),
(38,'Centre Anti-Poison', "111", "En cas d'ingestion accidentelle ou d'exposition à des substances toxiques, contactez immédiatement le Centre Anti-Poison pour des conseils médicaux d'urgence.",3),
(39,'Centre Anti-Poison', "030 19240", "En cas d'ingestion accidentelle ou d'exposition à des substances toxiques, contactez immédiatement le Centre Anti-Poison pour des conseils médicaux d'urgence.",4),
(40,'Centre Anti-Poison', "03 3541 8211", "En cas d'ingestion accidentelle ou d'exposition à des substances toxiques, contactez immédiatement le Centre Anti-Poison pour des conseils médicaux d'urgence.",5);



INSERT INTO utilisateurs (idUser, nom,prenom, age,sexe) VALUES
(1,'Miled','Yassine',20,'Masculin');


select * from serviceUrgence Where idPays = 1;


select numero from serviceUrgence where idPays = 1 and nomService = 'Police';

delete from utilisateurs where idUser=nombre;