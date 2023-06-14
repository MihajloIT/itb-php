CREATE DATABASE `fakultet`;

CREATE TABLE `predmeti`
(
    id int not null primary key,
    naziv varchar(50) not null,
    smer varchar(50) not null
);

CREATE TABLE `studenti`
(
    indeks varchar(20) not null primary key,
    ime varchar(25) not null,
    prezime varchar(25) not null
);

CREATE TABLE `ispiti`
(
    id int not null primary key,
    datum date not null,
    ocena int(10) not null
);

CREATE TABLE `nastavnici`
(
    id int not null primary key,
    ime varchar(50) not null,
    prezime varchar(50) not null
);


ALTER TABLE `ispiti`
ADD
(
    student_indeks int not null,
    predmet_id int not null,
    nastavnik_id int not null

);

ALTER TABLE `ispiti`
ADD CONSTRAINT `student_ispit_fk`
FOREIGN KEY (`student_indeks`)
REFERENCES `studenti`(`indeks`);

CREATE TABLE `student_ispit`
(
    `student_id` int not null,
    `ispit_id` int not null,
    CONSTRAINT `ok_veza_student_ispit`
    FOREIGN KEY (`student_id`)
    references `studenti`(`id_student`)
);

ALTER TABLE `studenti` add column `id_student` int not null primary key;



CREATE DATABASE `fakultet`CHARACTER SET utf16 COLLATE utf16_slovenian_ci;


CREATE TABLE `predmeti`(
    `id` INT PRIMARY KEY,
    `naziv` VARCHAR(30) NOT NULL,
    `smer` VARCHAR(30) NOT NULL
) ENGINE=INNODB;

CREATE TABLE `studenti`(
    `indeks` VARCHAR(20) PRIMARY KEY,
    `ime` VARCHAR(30) NOT NULL,
    `prezime` VARCHAR(30) NOT NULL
) ENGINE=INNODB;

CREATE TABLE `ispiti`(
    `id` INT PRIMARY KEY,
    `datum` DATE NOT NULL,
    `ocena` INT(2) NOT NULL
) ENGINE=INNODB;

CREATE TABLE `nastavnici`(
    `id` INT PRIMARY KEY,
    `ime` VARCHAR(30) NOT NULL,
    `prezime` VARCHAR(30) NOT NULL
) ENGINE=INNODB;

ALTER TABLE `ispiti`
    ADD `student_indeks` VARCHAR(20) NOT NULL,
    ADD `predmet_id` INT ,
    ADD `nastavnik_id` INT ,
    ADD FOREIGN KEY (`student_indeks`) REFERENCES `studenti`(`indeks`),
    ADD FOREIGN KEY (`predmet_id`) REFERENCES `predmeti`(`id`),
    ADD FOREIGN KEY (`nastavnik_id`) REFERENCES `nastavnici`(`id`);


SELECT * FROM  `ispiti` LIMIT 1; -- RED IZ TABELE 

select * from `ispiti`
left join `studenti` on `ispiti`.`student_indeks`=`studenti`.`indeks`
limit 1;

select * from `ispiti`
left join `studenti` on `ispiti`.`student_indeks`=`studenti`.`indeks`
left join `predmeti` on `ispiti`.`predmet_id`=`predmeti`.`id`;

select * from `ispiti`
left join `studenti` on `ispiti`.`student_indeks`=`studenti`.`indeks`
left join `predmeti` on `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` on `ispiti`.`nastavnik_id`=`nastavnici`.`id`;

--Napisati sve ispite koje su održani na fakultetu (ispisati ime i prezime studenta koji polaze ispit, naziv predmeta, ime i prezime profesora, datum polaganja, kao i ocenu koju je dobio).

select concat(`studenti`.`ime`, " ", `studenti`.`prezime`) as 'ime i prezime', 
`predmeti`. `naziv`, 
CONCAT(`nastavnici`.`ime` , " ", `nastavnici`.`prezime`) as `Nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena` 
from `ispiti`
left join `studenti` on `ispiti`.`student_indeks`=`studenti`.`indeks` -- moze i dodatak and student . ime like (M%); bilo sta
left join `predmeti` on `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` on `ispiti`.`nastavnik_id`=`nastavnici`.`id`;

--Uraditi prethodni zadatak, samo ispisati one ispite koji su se polagali u tekućoj godini(svi ispiti su u tekucoj godini pa smo ubacili neki specificni datum).

select concat(`studenti`.`ime`, " ", `studenti`.`prezime`) as 'ime i prezime', 
`predmeti`. `naziv`, 
CONCAT(`nastavnici`.`ime` , " ", `nastavnici`.`prezime`) as `Nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena` 
from `ispiti`
left join `studenti` on `ispiti`.`student_indeks`=`studenti`.`indeks`
left join `predmeti` on `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` on `ispiti`.`nastavnik_id`=`nastavnici`.`id`
WHERE `ispiti`.`datum`='2023-05-15';

--Za dato ime i prezime studenta, ispisati sve ispite koje je polagao dati student.
select concat(`studenti`.`ime`, " ", `studenti`.`prezime`) as 'ime i prezime', 
`predmeti`. `naziv`, 
CONCAT(`nastavnici`.`ime` , " ", `nastavnici`.`prezime`) as `Nastav  nik`,
`ispiti`.`datum`,
`ispiti`.`ocena` 
from `ispiti`
left join `studenti` on `ispiti`.`student_indeks`=`studenti`.`indeks`
left join `predmeti` on `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` on `ispiti`.`nastavnik_id`=`nastavnici`.`id`
WHERE `studenti`.`ime`='Mihajlo' and `studenti`.`prezime` = 'Stefanović';

--Uraditi zadatak 3) tako da se ispišu samo takvi ispiti na kojima je ocena veća od 8.
select concat(`studenti`.`ime`, " ", `studenti`.`prezime`) as 'ime i prezime', 
`predmeti`. `naziv`, 
CONCAT(`nastavnici`.`ime` , " ", `nastavnici`.`prezime`) as `Nastavnik`,
`ispiti`.`datum`,
`ispiti`.`ocena` 
from `ispiti`
left join `studenti` on `ispiti`.`student_indeks`=`studenti`.`indeks`
left join `predmeti` on `ispiti`.`predmet_id`=`predmeti`.`id`
LEFT JOIN `nastavnici` on `ispiti`.`nastavnik_id`=`nastavnici`.`id`
WHERE `studenti`.`ime`='Mihajlo' and `studenti`.`prezime` = 'Stefanović' 
AND `ispiti`.`ocena` >= 8;

SELECT AVG(`ispiti`.`ocena`) AS 'Prosecna Ocena '
FROM `ispiti`
LEFT JOIN `studenti` ON `ispiti`.`id_student` = `studenti`.`indeks`
WHERE `studenti`.`ime` = 'Nikola'
AND `ispiti`.`ocena`>5;

SELECT DISTINCT 
`predmeti`.`naziv`, `ispiti`.`ocena`
FROM `ispiti`
left join `predmeti` on `ispiti`.`predmet_id`=`predmeti`.`id`
left join `studenti` on `ispiti`.`student_indeks`=`studenti`.`indeks`
WHERE `studenti`.`ime` = 'Nikola' AND `studenti`.`prezime` = 'Devic';


-- koliko njegovih maksimalnih ocena je dobio

SELECT DISTINCT 
`predmeti`.`naziv`, `ispiti`.`ocena`
FROM `ispiti`
left join `predmeti` on `ispiti`.`predmet_id`=`predmeti`.`id`
left join `studenti` on `ispiti`.`student_indeks`=`studenti`.`indeks`
WHERE `studenti`.`ime` = 'Nikola' AND `studenti`.`prezime` = 'Devic'
AND `ispiti`.`ocena`= (SELECT MAX(`ispiti`.`ocena`) FROM `ispiti` WHERE `ispiti`.`student_indeks`= (SELECT `indeks` FROM `studenti` WHERE `studenti`.`ime` = 'Nikola'));  --- ne radi nesto

-- ZA dato ime i prezime studenta odrediti njegovu prosecnu ocenu

SELECT AVG(`ispiti`.`ocena`)
FROM `ispiti`
left join `studenti` on `ispiti`.`student_indeks`=`studenti`.`indeks`
WHERE `studenti`.`ime` = 'Nikola' AND `studenti`.`prezime` = 'Devic'
AND `ispiti`.`ocena` > 5;


--Za dat naziv predmeta odrediti maksimalnu ocenu na nekom ispitu iz tog predmeta.

SELECT MAX(`ispiti`.`ocena`) AS 'Max ocena'
FROM `ispiti`
left join `studenti` on `ispiti`.`student_indeks`=`studenti`.`indeks`
left join `predmeti` on `ispiti`.`predmet_id`=`predmeti`.`id`
WHERE `predmeti`.`naziv` = 'CSS'
AND `ispiti`.`datum` = '2023-04-17';

-- Za dat datum i nastavnika odrediti prosečnu ocenu svih ispita koji su se polagali tog dana a koje je ocenio taj nastavnik.


SELECT *
FROM `ispiti` AS `i`
LEFT JOIN `nastavnici` as 'n' on `i`.`nastavnik_id`=`n`.`id` -- drugi nacin gde se skracuju nazivi
SELECT AVG(`ispiti`.`ocena`) AS 'Prosecna ocena profesora'
FROM `ispiti`
LEFT JOIN `nastavnici` on `ispiti`.`nastavnik_id`=`nastavnici`.`id`
WHERE `ispiti`.`datum` = '2023/04/17'
AND `nastavnici`.`ime` = 'Stefan';




-- OVO JE ONI KOJI SU POLAGALI
SELECT CONCAT(`studenti`.`ime`, ' ', `studenti`.`prezime`) AS 'student'
FROM `ispiti`
left join `studenti` on `ispiti`.`student_indeks`=`studenti`.`indeks`
WHERE `ispiti`.`datum` = '2023/05/18';


--Za dati datum ispisati imena i prezimena studenata koji nisu polagali ispit tog dana
SELECT *
FROM `studenti`
WHERE `studenti`.`indeks` NOT IN (SELECT `ispiti`.`student_indeks` FROM `ispiti` WHERE `ispiti`.`datum`='2023/05/18');


SELECT *
FROM `studenti`
LEFT JOIN `ispiti` ON `ispiti`.`student_indeks` = `studenti`.`indeks` AND `ispiti`.`datum` = '2023/05/18'
WHERE `isptiti`.`id` is null;


-- SELECT CONCAT(`studenti`.`ime`, " ", `studenti`.`prezime`) AS `student` FROM `studenti`
-- LEFT JOIN `ispiti` ON `ispiti`.`student_indeks`=`studenti`.`indeks` AND `ispiti`.`datum`='2023-05-18'
-- WHERE `ispiti`.`id` IS NULL
----------------------------------------------------------