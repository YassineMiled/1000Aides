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
(2, 'Police', 911,'Contact the police in an emergency or to report a crime.' , 2),    
(3, 'Police', 911,'Contact the police in an emergency or to report a crime.' , 3),  
(4, 'Police', 110,'Die Polizei im Notfall kontaktieren oder ein Verbrechen melden.' , 4),
(5, 'Police', 110, 'Contact the police in an emergency or to report a crime.',5);     


INSERT INTO serviceUrgence (idUrgence, nomService, numero, description, idPays) VALUES
(6, 'Pompiers', 18,  "En cas d'incendie ou d'accident, contactez les pompiers.", 1), 
(7, 'Pompiers', 911, "In case of fire or accident, contact the fire department.",2), 
(8, 'Pompiers', 999,"In case of fire or accident, contact the fire department.",3), 
(9, 'Pompiers', 112, "Im Falle eines Brandes oder Unfalls, kontaktieren Sie die Feuerwehr.",4), 
(10,'Pompiers', 119,"In case of fire or accident, contact the fire department.", 5);    



INSERT INTO serviceUrgence (idUrgence, nomService, numero, description, idPays) VALUES
(11, 'SAMU', 15, "En cas d'urgence médicale, contactez le SAMU.", 1),
(12, 'SAMU', 911, "In case of medical emergency, contact emergency medical services (EMS).", 2),
(13, 'SAMU', 999, "In case of medical emergency, contact emergency medical services (EMS).", 3),
(14, 'SAMU', 112, "Im Falle eines medizinischen Notfalls, kontaktieren Sie den Rettungsdienst.", 4),
(15, 'SAMU', 119, "In case of medical emergency, contact emergency medical services (EMS).", 5);


INSERT INTO serviceUrgence (idUrgence, nomService, numero, description, idPays) VALUES
(16, 'Alerte attentat', 197, "En cas d'alerte attentat ou d'enlèvement, signalez-le aux autorités compétentes.", 1),
(17, 'Alerte attentat', 911, "In case of terrorist alert or abduction, report it to the appropriate authorities.", 2),
(18, 'Alerte attentat', 999, "In case of terrorist alert or abduction, report it to the appropriate authorities.", 3),
(19, 'Alerte attentat', 110, "Im Falle einer Terrorwarnung oder Entführung, melden Sie dies den zuständigen Behörden.", 4),
(20, 'Alerte attentat', 911, "In case of terrorist alert or abduction, report it to the appropriate authorities.", 5);


INSERT INTO serviceUrgence (idUrgence, nomService, numero, description, idPays) VALUES
(21, 'Enfants en danger', 119, "Pour signaler des enfants en danger, contactez les services sociaux ou la ligne d'urgence dédiée.", 1),
(22, 'Enfants en danger', 911, "To report children in danger, contact social services or the dedicated emergency hotline.", 2),
(23, 'Enfants en danger', 112, "To report children in danger, contact social services or the dedicated emergency hotline.", 3),
(24, 'Enfants en danger', 110, "Um gefährdete Kinder zu melden, kontaktieren Sie bitte die Sozialdienste oder die spezielle Notrufnummer.", 4),
(25, 'Enfants en danger', 110, "To report children in danger, contact social services or the dedicated emergency hotline.", 5);      



INSERT INTO serviceUrgence (idUrgence, nomService, numero, description, idPays) VALUES
(26, 'Violences sexistes et sexuelles', "3919", "En cas de violences sexistes et sexuelles, contactez les autorités locales ou des associations spécialisées pour obtenir de l'aide et du soutien.", 1),
(27, 'Violences sexistes et sexuelles', "4673", "If you experience gender-based or sexual violence, contact local authorities or specialized organizations for assistance and support.", 2),
(28, 'Violences sexistes et sexuelles', "0808 2000 247", "If you experience gender-based or sexual violence, contact local authorities or specialized organizations for assistance and support.", 3),
(29, 'Violences sexistes et sexuelles', "08000 116 016", "Bei geschlechtsbezogener oder sexueller Gewalt wenden Sie sich an die örtlichen Behörden oder spezialisierte Organisationen, um Unterstützung und Hilfe zu erhalten.", 4),
(30, 'Violences sexistes et sexuelles', "0570 0 81093", "If you experience gender-based or sexual violence, contact local authorities or specialized organizations for assistance and support.", 5);   


INSERT INTO serviceUrgence (idUrgence, nomService, numero, description, idPays) VALUES
(31,'SOS Suicide', 014539, "En cas de détresse émotionnelle, n'hésitez pas à appeler SOS Suicide pour recevoir du soutien et de l'écoute.", 1),
(32,'SOS Suicide', 18002, "If you are in emotional distress, don't hesitate to call a suicide prevention hotline for support and listening.",2),
(33,'SOS Suicide', 1161, "If you are in emotional distress, don't hesitate to call a suicide prevention hotline for support and listening.",3),
(34,'SOS Suicide', 080011,  "Bei emotionaler Notlage zögern Sie nicht, eine Selbstmordpräventionshotline anzurufen, um Unterstützung und Gehör zu erhalten.",4),
(35,'SOS Suicide', 035774, "If you are in emotional distress, don't hesitate to call a suicide prevention hotline for support and listening.",5);

INSERT INTO serviceUrgence (idUrgence, nomService, numero, description, idPays) VALUES
(36,'Centre Anti-Poison', "01 40 05 48 48", "En cas d'ingestion accidentelle ou d'exposition à des substances toxiques, contactez immédiatement le Centre Anti-Poison pour des conseils médicaux d'urgence.",1),
(37,'Centre Anti-Poison', "1 800 222 1222", "In case of accidental ingestion or exposure to toxic substances, immediately contact the Poison Control Center for emergency medical advice.",2),
(38,'Centre Anti-Poison', "111", "In case of accidental ingestion or exposure to toxic substances, immediately contact the Poison Control Center for emergency medical advice.",3),
(39,'Centre Anti-Poison', "030 19240", "Im Falle einer versehentlichen Einnahme oder Exposition gegenüber giftigen Substanzen, wenden Sie sich sofort an das Giftinformationszentrum für medizinische Notfallberatung.",4),
(40,'Centre Anti-Poison', "03 3541 8211", "In case of accidental ingestion or exposure to toxic substances, immediately contact the Poison Control Center for emergency medical advice.",5);



INSERT INTO utilisateurs (idUser, nom,prenom, age,sexe) VALUES
(1,'Miled','Yassine',20,'Masculin');


select * from serviceUrgence Where idPays = 1;


select numero from serviceUrgence where idPays = 1 and nomService = 'Police';

delete from utilisateurs where idUser=nombre;