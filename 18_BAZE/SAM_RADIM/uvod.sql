CREATE DATABASE `skola2` CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

CREATE TABLE `student`
(
    `ime` VARCHAR(50),
    `prezime` VARCHAR(50)
);

INSERT INTO `student` (`ime`, `prezime`)
VALUE
( 'Zoran', 'Stanković'),
( 'Pera', 'Perić'),
( 'Žika', 'Živković');

CREATE TABLE `customers`
(
    `id` int not null primary key,
    `name` varchar(20) not null,
    `age` int not null,
    `address` varchar(45) ,
    `salary` decimal(18,2) default 500
    );

ALTER TABLE `customers` 
ADD `active` BOOLEAN;

ALTER TABLE `customers`
ADD `state` VARCHAR(90);

ALTER TABLE `customers` 
ADD `number_of_visits` TINYINT;

ALTER TABLE `customers`
MODIFY COLUMN `state` VARCHAR(92);

ALTER TABLE `customers`
DROP COLUMN `number_of_visits1`;

INSERT INTO `customers` (id,name,age,address,salary,active,state,number_of_visits)
VALUE
(1,'Pera',21,'Cara Nikolaja',250,1,'Srbija',12),
(2,'Predrag',33,'Cara Velimira',550,0,'Crna Gora',10),
(3,'Velimir',55,'Francuska',500,0,'Srbija',0),
(4,'Dragan',18,'Dunavska',200,1,'Crna Gora',1);

SELECT * FROM `customers`;

SELECT `name`, `age` FROM `customers`;

SELECT `salary` FROM `customers`;

SELECT CONCAT(`name`, ' ( ', `salary`,' ) ')  AS 'Plate radnika' FROM `customers`;

SELECT DISTINCT `state` FROM `customers`;

SELECT DISTINCT `salary` FROM `customers`;

SELECT `name` , `salary`, `state`
FROM `customers`
WHERE `state` = 'Srbija';

SELECT * 
FROM `customers`
WHERE `salary` = 500;

SELECT * 
FROM `customers`
WHERE `salary` > 500;

SELECT * 
FROM `customers`
WHERE `salary` < 500;

SELECT *
FROM `customers`
WHERE `salary` BETWEEN 300 and 11000;

SELECT *
FROM `customers`
WHERE `state` IN ('Srbija', 'Crna Gora');

SELECT *
FROM `customers` 
WHERE `state` LIKE ('S%');

SELECT * 
FROM `customers`
WHERE `id` IN (2,4,10,20);

SELECT *
FROM `customers`
WHERE `active` != 0;

SELECT *
FROM `customers`
WHERE `state` = 'Srbija' 
AND `salary` = 500;

SELECT * 
FROM `customers`
WHERE `name` LIKE ('V%')
OR `age` < 30;

SELECT *
FROM `customers`
WHERE `active` !=0
AND `salary` >= 500;

CREATE DATABASE `videoteka2` CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

CREATE TABLE `filmovi`
(
    `id` INT PRIMARY KEY,
    `naslov` VARCHAR(255) not null,
    `reziser` varchar(255) not null,
    `god_izdanja` YEAR NOT NULL,
    `zanr` TEXT NOT NULL,
    `ocena` decimal(4,2)
);

ALTER TABLE `filmovi` MODIFY `id` INT AUTO_INCREMENT;

INSERT INTO `filmovi` (naslov,reziser,god_izdanja,zanr,ocena)
VALUES
('Vukovi', 'Jovica Dobrica',1998,'horor',6.7),
('Pecurko', 'Doder',2001,'komedija',4.4),
('Crvenkapa', 'Malden',2023,'akcija',4.4),
('Tri praseta', 'Drobnjak',1888,'akcija',10),
('Okean', 'Svilar',1988,'komedija',6.7),
('Vetrenjace', 'Bajaga',2000,'horor',10),
('Laguna', 'Cola',2020,'ljubavni',7.8);

ALTER TABLE `filmovi` MODIFY `god_izdanja` int not null;

SELECT *
FROM `filmovi`
WHERE `zanr` IN ('horor', 'akcija', 'ljubavni');

SELECT * 
FROM `filmovi`
WHERE `ocena` BETWEEN 5 AND 10;

SELECT DISTINCT `reziser` , `god_izdanja`
FROM `filmovi`
WHERE `god_izdanja` > 1997 
ORDER BY `reziser` ASC;

SELECT *
FROM `filmovi`
WHERE `zanr` NOT LIKE 'komedija';

SELECT * 
FROM `filmovi`
WHERE `ocena` = (SELECT MAX(`ocena`) FROM `filmovi`)
LIMIT 1;


--Prikazati sve informacije o najbolje rangiranoj akciji.
SELECT *
FROM `filmovi`
WHERE `zanr`='akcija'
AND `ocena` = (SELECT MAX(`ocena`) FROM `filmovi` WHERE `zanr`='akcija');

SELECT DISTINCT CONCAT(`reziser`, " ( ", `ocena`," ) ") AS 'Reziser/ocena'
FROM `filmovi`
WHERE `ocena` = (SELECT MAX(`ocena`) FROM `filmovi`)
LIMIT 3;

SELECT DISTINCT `zanr`
FROM `filmovi`;

SELECT CONCAT(`naslov`, " ( ",`reziser`," ) ") AS 'Naslov/reziser'
FROM `filmovi`;

SELECT COUNT(DISTINCT`naslov`) 
FROM `filmovi`;

SELECT CONCAT(`naslov`,' ( ', `reziser`,") ","-",`god_izdanja`) AS 'Filmovi'
FROM `filmovi`
ORDER BY `god_izdanja` ASC;

SELECT COUNT(`id`)
FROM `filmovi`;

SELECT MIN(`ocena`)
FROM `filmovi`;

SELECT MAX(`ocena`)
FROM `filmovi`;

SELECT SUM(`ocena`)
FROM `filmovi`;

SELECT AVG(`ocena`)
FROM `filmovi`;