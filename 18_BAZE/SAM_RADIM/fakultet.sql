CREATE DATABASE `fakultet2`;

CREATE TABLE `predmeti`
(
    id int primary key not null,
    naziv varchar(45),
    smer varchar(45)
)ENGINE = INNODB;

create table `studenti`
(
    indeks varchar(25),
    ime varchar(45),
    prezime varchar(45)
);

CREATE TABLE `ispiti`
(
    id int primary key not null,
    datum date,
    ocena int(10)
);

CREATE TABLE `nastavnici`
(
    id int primary key not null,
    ime varchar(45),
    prezime varchar(45)
)ENGINE = INNODB;

ALTER TABLE `studenti` ENGINE = INNODB;
ALTER TABLE `ispiti` ENGINE = INNODB;

ALTER TABLE `ispiti`
ADD COLUMN `id_student` int not null,
ADD COLUMN `id_predmeti` int not null;


ALTER TABLE `ispiti`
-- ADD CONSTRAINT `student_has_predmeti_fk`
-- FOREIGN KEY (`id_student`)
-- REFERENCES `predmeti`(`id`)
--ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `predmeti_has_student_fk`
FOREIGN KEY (`id_predmeti`)
REFERENCES `predmeti`(`id`)
ON DELETE NO ACTION ON UPDATE CASCADE;

ALTER TABLE `ispiti` MODIFY `id_student` VARCHAR(25);

ALTER TABLE `studenti` MODIFY `indeks` VARCHAR(25) PRIMARY KEY;

ALTER TABLE `ispiti`
ADD CONSTRAINT `student_has_predmeti_fk`
FOREIGN KEY (`id_student`)
REFERENCES `studenti`(`indeks`)
ON DELETE NO ACTION ON UPDATE NO ACTION;




-- ALTER TABLE `ispiti` MODIFY `id` INT UNIQUE; 

ALTER TABLE `ispiti` ADD `id_nastavnici` INT ;

ALTER TABLE `ispiti`
ADD CONSTRAINT `nastavnici_to_ispiti`
FOREIGN KEY (`id_nastavnici`)
REFERENCES `nastavnici`(`id`)
ON DELETE NO ACTION ON UPDATE CASCADE;


---- LEFT JOIN
SELECT * FROM `ispiti` 
LEFT JOIN `studenti` ON `ispiti`.`id_student` = `studenti`.`indeks`;


SELECT
`studenti`.`ime`, `studenti`.`prezime`,
`nastavnici`.`ime`,`nastavnici`.`prezime`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`id_student` = `studenti`.`indeks`
LEFT JOIN `nastavnici` ON `ispiti`.`id_nastavnici` = `nastavnici`.`id`;

SELECT
`ispiti`.`id`,
`studenti`.`ime`,`studenti`.`prezime`,
`predmeti`.`naziv` AS 'Naziv predmeta',
`nastavnici`.`ime`,`nastavnici`.`prezime`,
`ispiti`.`datum`,`ispiti`.`ocena`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`id_student` = `studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`id_predmeti` = `predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`id_nastavnici` = `nastavnici`.`id`;


SELECT
`ispiti`.`id`,
`studenti`.`ime`,`studenti`.`prezime`,
`predmeti`.`naziv` AS 'Naziv predmeta',
`nastavnici`.`ime`,`nastavnici`.`prezime`,
`ispiti`.`datum`,`ispiti`.`ocena`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`id_student` = `studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`id_predmeti` = `predmeti`.`id`
LEFT JOIN `nastavnici` ON `ispiti`.`id_nastavnici` = `nastavnici`.`id`
WHERE `ispiti`.`datum` = '2023/05/15';

SELECT 
`studenti`.`ime`,`studenti`.`prezime`,
`predmeti`.`naziv`,
`ispiti`.`ocena`,`ispiti`.`datum`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`id_student` = `studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`id_predmeti` = `predmeti`.`id`
WHERE `studenti`.`ime` LIKE 'Nikola';


SELECT 
`studenti`.`ime`,`studenti`.`prezime`,
`predmeti`.`naziv`, 
`ispiti`.`ocena`, `ispiti`.`datum`
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`id_student` = `studenti`.`indeks`
LEFT JOIN `predmeti` ON `ispiti`.`id_predmeti` = `predmeti`.`id`
WHERE `studenti`.`ime` LIKE 'Nikola' AND `ispiti`.`ocena` > 8;

SELECT AVG(`ispiti`.`ocena`) AS 'Prosecna Ocena '
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`id_student` = `studenti`.`indeks`
WHERE `studenti`.`ime` = 'Nikola'
AND `ispiti`.`ocena`>5;