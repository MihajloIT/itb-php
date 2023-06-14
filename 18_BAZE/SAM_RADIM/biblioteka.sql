CREATE DATABASE `biblioteka`;

CREATE TABLE `clanovi`
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    ime varchar(45),
    prezime varchar(45),
    adresa varchar(45),
    telefon varchar(15)
)ENGINE = INNODB;

CREATE TABLE `knjige`
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    naziv varchar(45),
    pisac varchar(45)
)ENGINE = INNODB;

CREATE TABLE `zanr`
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    naziv varchar(45)
)ENGINE = INNODB;

CREATE TABLE `zaduzenje`
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    datum DATE,
    vratio BOOLEAN
)ENGINE = INNODB;

CREATE TABLE `pisac`
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    ime varchar(45),
    prezime varchar(45),
    bio text,
    god_rodj date
)ENGINE = INNODB;

ALTER TABLE `zanr` MODIFY COLUMN `id` INT NOT NULL;

CREATE TABLE `zanr_has_knjiga`
(
    `id_zanr` int not null, 
    CONSTRAINT `has_to_zanr_fk`
    FOREIGN KEY (`id_zanr`)
    REFERENCES `zanr`(`id`)
    ON DELETE NO ACTION ON UPDATE NO ACTION,
    `id_knjiga` INT NOT NULL,
    CONSTRAINT `has_to_knjiga`
    FOREIGN KEY (`id_knjiga`)
    REFERENCES `knjige`(`id`)
    ON DELETE NO ACTION ON UPDATE NO ACTION
)ENGINE = INNODB;

CREATE TABLE `clan_has_knjiga`
(
    `id_clan` INT NOT NULL,
    CONSTRAINT `has_to_osoba`
    FOREIGN KEY (`id_clan`)
    REFERENCES `clanovi`(`id`)
    ON DELETE NO ACTION ON UPDATE NO ACTION,
    `id_knjiga_clan` INT NOT NULL,
    CONSTRAINT `clan_has_knjige_fk`
    FOREIGN KEY (`id_knjiga_clan`)
    REFERENCES `knjige`(`id`)
    ON DELETE NO ACTION ON UPDATE NO ACTION
)ENGINE = INNODB;

CREATE TABLE `knjiga_has_pisac`
(
    `id_knjiga_pis` INT NOT NULL,
    CONSTRAINT `knjiga_has_pisac`
    FOREIGN KEY (`id_knjiga_pis`)
    REFERENCES `knjige`(`id`)
    ON DELETE NO ACTION ON UPDATE CASCADE,
    `id_pisac_knj` INT NOT NULL,
    CONSTRAINT `pisac_has_knjige`
    FOREIGN KEY (`id_pisac_knj`)
    REFERENCES `pisac`(`id`)
    ON DELETE NO ACTION ON UPDATE CASCADE
)ENGINE = INNODB;

DROP TABLE `clan_has_knjiga`;

ALTER TABLE `zaduzenje` ADD COLUMN `id_clan` INT NOT NULL;

ALTER TABLE `zaduzenje` ADD COLUMN `id_knjiga_clan` INT NOT NULL;

ALTER TABLE `zaduzenje`
    ADD CONSTRAINT `has_to_osoba`
    FOREIGN KEY (`id_clan`)
    REFERENCES `clanovi`(`id`)
    ON DELETE NO ACTION ON UPDATE NO ACTION,
    ADD CONSTRAINT `clan_has_knjige_fk`
    FOREIGN KEY (`id_knjiga_clan`)
    REFERENCES `knjige`(`id`)
    ON DELETE NO ACTION ON UPDATE NO ACTION;

INSERT INTO `knjige` 
VALUE
( 1,'Crvenkapa', 'Jova'),
( 2,'Plavi cuperak' , 'Laza'),
( 3,'Bela griva' , 'Aca'),
( 4,'Orlovi rano lete' , 'Gaga'),
( 5,'Hasanaginica' , 'CUcic'),
( 6,'Cigani lete u nebo' , 'Maja');

INSERT INTO `zanr`
VALUE
(1, 'horor'),
(2, 'komedija'),
(3, 'akcija'),
(4, 'triler'),
(5, 'ljubavni'),
(6, 'avantura');

INSERT INTO `zanr_has_knjiga`
VALUE
(1,1),
(1,6),
(2,3),
(2,5),
(2,2),
(5,5);

INSERT INTO `pisac`
VALUE
(1,'Jova','Jovanovic','Dobar lik sve pohvale','1988/06/02'),
(2,'Pera','Peric','Nije neki pisac bio','1899/02/23'),
(3,'Damir','Kujundzic','Prosecn pisac','1787/02/28');

INSERT INTO `knjiga_has_pisac`
VALUE
(1,1),
(2,1),
(3,2),
(4,3),
(5,1),
(6,3);

INSERT INTO `clanovi`
VALUE
(1,'Darko','Rundek','Ulcinjska','0641234'),
(2,'Janko','Jankovic','Zetska',''),
(3,'Branka','Cickic','Visnjicka','04323432'),
(4,'Peter','Savaz','Bulevar','06765636');

INSERT INTO `zaduzenje`
VALUE
(1,'2023/01/01',0,1,3),
(2,'2023/06/06',1,1,2);