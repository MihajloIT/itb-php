CREATE DATABASE `relacije`;


CREATE TABLE `korisnici`
(
    `id` INT PRIMARY KEY,
    `korisnicko_ime` VARCHAR(45)
);

CREATE TABLE `profili`
(
    id int PRIMARY KEY,
    adresa VARCHAR(45),
    telefon VARCHAR(45),
    korisnicki_id INT UNIQUE
);

ALTER TABLE `profili`
ADD CONSTRAINT `profili_korisnik_fk`
FOREIGN KEY (`korisnicki_id`)
REFERENCES `korisnici`(`id`)
ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE `korisnici` ENGINE = INNODB;

INSERT INTO `korisnici` 
VALUE 
(1,'Mihajlo'),
(2,'Jovan'),
(3,'Krstivoje'),
(4,'Andjela');

INSERT INTO `profili` 
VALUE 
(1,'Majska','064123456',1),
(2,'Knez','064123456',3),
(3,'Viseslava','064123456',4),
(4,'Ugrinovacka','064123456',2);







CREATE TABLE `korisnici1`
(
    id int primary key,
    korisnicko_ime varchar(45),
    lozinka varchar(45)
)ENGINE=INNODB;


CREATE TABLE `profili1`
(
    id int primary key,
    adresa varchar(45),
    telefon varchar(45),
    korisnik_id int UNIQUE
)engine=INNODB;

ALTER TABLE `profili1`
ADD CONSTRAINT `profili1_korisnici1_fk`
FOREIGN KEY (`korisnik_id`)
REFERENCES `korisnici1`(`id`)
ON DELETE NO ACTION ON UPDATE CASCADE;

INSERT INTO `korisnici1` 
VALUE 
(1,'Mihajlo',123),
(2,'Jovan',333),
(3,'Krstivoje',321),
(4,'Andjela',222);

INSERT INTO `profili1` 
VALUE 
(1,'Majska','064123456',1),
(2,'Knez','064123456',3),
(3,'Viseslava','064123456',4),
(4,'Ugrinovacka','064123456',2);

UPDATE `korisnici1` SET `id` = '5' WHERE `korisnici1`.`id` = 2;


CREATE TABLE `objave`
(
    `id` int primary key,
    `naslov` varchar(45),
    `tekst_objave` varchar(45)
)ENGINE = INNODB;

CREATE TABLE `komentari`
(
    id int primary key,
    `tekst_komentara` text
)ENGINE = INNODB;


ALTER TABLE `komentari`
ADD COLUMN 
(`id_objave` int ,
CONSTRAINT `komentari_objave_pk`
FOREIGN KEY (`id_objave`)
REFERENCES `objave`(`id`)
ON DELETE NO ACTION ON UPDATE CASCADE);

INSERT INTO `objave`
VALUE
(1,'Nafta pala','Nafta u padu zbog UK'),
(2,'Zlato raste','Zlato raste pada dolar'),
(3,'Srebro','Srebro pada zbog masovne proizvodnje');

INSERT INTO `komentari`
VALUE
(1, 'Bravoo nafta', 1),
(2, 'Bravoo zlato', 2),
(3, 'Bravoo srebro', 3),
(4, 'Bravoo nafta', 1),
(5, 'Bravoo zlato', 2),
(6, 'Bravoo srebro', 3);


CREATE TABLE `post`
(
    id int primary key,
    `naslov objave` varchar(45),
    `tekst objave` text
);

CREATE TABLE `comm`
(
    id int primary key,
    `naziv_comm` varchar(45)
);

CREATE TABLE `post_has_comm`
(
    `id_post` int,
    `id_comm` int
);

ALTER TABLE `post` ENGINE = INNODB;
ALTER TABLE `comm` ENGINE = INNODB;
ALTER TABLE `post_has_comm` ENGINE = INNODB;

ALTER TABLE `post_has_comm`
ADD CONSTRAINT `comm_post_pk`
    FOREIGN KEY (`id_comm`)
    REFERENCES `comm`(`id`)
    ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `post_has_comm`
ADD CONSTRAINT `post_to_has_pk`
FOREIGN KEY (`id_post`)
REFERENCES `post`(`id`)
ON DELETE NO ACTION ON UPDATE NO ACTION;


ALTER TABLE `post` MODIFY COLUMN `id` int NOT NULL;
ALTER TABLE `comm` MODIFY COLUMN `id` int NOT NULL;
ALTER TABLE `post_has_comm` MODIFY COLUMN `id_post` int NOT NULL;
ALTER TABLE `post_has_comm` MODIFY COLUMN `id_comm` int NOT NULL;