/*Daten zum testen des Programms*/

/*Firma hinfügen*/
insert into company
values
(NULL, 'MusterFirma GmbH','Musterstraße','17',12345,'Musterstadt');

/*user firstname NOT NULL entfernt*/
/*Begründung: Die Terminals werden auch als User geführt.
Für ein Terminal wird nur der "lastname" benötigt, er fungiert als Terminalnamen*/
alter table user
modify
firstname VARCHAR(255);

/*phoneNO von INT in VARCHAR geändert*/
alter table employee
modify
phoneNo varchar(255) NOT NULL;

/*user hinfügen*/
insert into user
values
(NULL, 'Max','Mustermann','Admin','Admin',0, 1),
(NULL, 'Martin','Müller','m.mueller@musterfirma.de','m.mueller@musterfirma.de',0, 1),
(NULL, 'Brigitte','Müller','b.mueller@musterfirma.de','b.mueller@musterfirma.de',1, 1),
(NULL, 'Silke','Maier','s.maier@musterfirma.de','s.maier@musterfirma.de',1, 1),
(NULL, '' ,'Haupteingang','haupteingang','haupteingang',2, 1),
(NULL, '' ,'Nordeingang','nordeingang','nordeingang',2, 1);

/*employee hinfügen*/
insert into employee
values
(NULL, 'Herr','Michael','Fischer','m.fischer@musterfirma.de', 'Buchhaltung', '210', '1234-56789123',1),
(NULL, 'Herr','Louis','Fischer','l.fischer@musterfirma.de', 'Personal', '305', '4567-8912345678',1),
(NULL, 'Frau','Manuela','Schmitt','m.schmitt@musterfirma.de', 'Entwicklung', '111', '1234-56789144',1),
(NULL, 'Herr','Stefan','Kaiser','s.kaiser@musterfirma.de', 'Hausmeister', '010' ,'1234-56789155',1),
(NULL, 'Frau','Michaela','Bauer','m.bauer@musterfirma.de', 'CEO', '501', '1234-56789166',1);
