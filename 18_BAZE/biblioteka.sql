CREATE DATABASE `biblioteka`;

CREATE TABLE `clanovi`
(
    `id` int not null,
    `ime` varchar(50) not null,
    `prezime` varchar(50) not null,
    `adresa` varchar (50),
    `telefon` varchar NOT NULL -- TREBA JOS USLOVA
)ENGINE = INNODB;

CREATE TABLE `knjige`
(
    `id` int not null,
    `naziv` varchar(50) not null,
    `pisac` varchar (225) not null
)ENGINE = INNODB;

CREATE TABLE `zanr`
(
    `id` int not null,
    `naziv` varchar(50) not null
)ENGINE = INNODB;

CREATE TABLE `zaduzenje`
(
    `id` int not null,
    `datum` date not null,
    `vratio` BOOLEAN DEFAULT 0 NOT NULL 
)ENGINE = INNODB;

CREATE TABLE `pisac`
(
    `id` int not null,
    `ime` varchar(50) not null,
    `prezime` varchar (50) not null,
    `bio` TEXT,
    `god_rodj` YEAR
)ENGINE = INNODB;

ALTER TABLE `knjige` 
MODIFY COLUMN `id` int  not null PRIMARY KEY;

ALTER TABLE `knjige` ENGINE = INNODB;

ALTER TABLE `zanr` 
MODIFY COLUMN `id` int  not null PRIMARY KEY;

ALTER TABLE `zanr` ENGINE = INNODB;


CREATE TABLE `knjige_has_zanr`
(
    `knjige_id` int not null,
    `zanr_id` int not null,
    constraint `ok_veza_knjiga_fk` FOREIGN KEY
    (`knjige_id`) REFERENCES `knjige`(`id`),
    CONSTRAINT `ok_veza_zanr_fk` FOREIGN KEY 
    (`zanr_id`) REFERENCES `zanr`(`id`)
);


ALTER TABLE `zaduzenje` 
ADD 
(
    `id_knjiga` INT NOT NULL,
    `id_zaduzenje` INT NOT NULL
);

ALTER TABLE `zaduzenje` 
ADD CONSTRAINT `ok_veza_knjiga_zaduzenje_fk` 
FOREIGN KEY (`id_knjiga`) 
references `knjige`(`id`),
ADD CONSTRAINT `ok_veza_zaduzenje_knjiga_fk` 
FOREIGN KEY (`id_zaduzenje`) 
REFERENCES `clanovi`(`id`);


CREATE TABLE `zaduzenje`
(
    `id` int not null,
    `datum` date not null,
    `vratio` date 
);