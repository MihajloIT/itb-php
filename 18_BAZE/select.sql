
INSERT INTO tasks
(task_id, title, start_date, due_date, status, description, priority)
VALUES
(1,"Čas iy ITBootcamp-a", "2023/03/03", "2023/06/20", 1 , "Cas iz baze podataka", 1),
(2, "Setnja", "2023/06/01","2023/06/01",1,"Lagana setnjaa",0),
(3, "Uradi domacij","2023/06/02", NULL, 1,"Domaci zadatak iz baze podataka",1);


-- radimo SELECT , oznacavanje u bazi - ne idu navodnici nego ovo dugme na tildi sto je
SELECT * FROM `tasks`;  

SELECT `title`, `start_date`, `due_date` FROM `tasks`;

SELECT `name`,`age`,`address` FROM `customers`;

-- Dohvati sva razlicita imena koja imaju nasi potrosaci
SELECT DISTINCT `name` FROM `customers`;

SELECT DISTINCT `name`,`age`,`address` FROM `customers`;

SELECT DISTINCT `id`,`name` FROM `customers`;

SELECT DISTINCT `salary` FROM `customers`;

-- filtriranje podataka


-- razlika izmedju navodnika ' i cudni navodnici `
SELECT *
FROM `customers`
WHERE `state` = 'Srbija';

SELECT *
FROM `customers`
WHERE `salary` = 500;

SELECT *
FROM `customers`
WHERE `salary` > 500;

-- ciji je prioritet nizak (0)
SELECT `task_id`,`title`,`description`
FROM `tasks`
WHERE `status` = 1;

SELECT `task_id`,`title`,`description`
FROM `tasks`
WHERE `priority` = 1;

-- iz tabele tasks, procitati sve zadatake koj su prioritetni, a koji su zavrseni (dupli uslov sa AND)
SELECT `task_id`,`title`,`description`
FROM `tasks`
WHERE `priority` = 1
AND `due_date` IS NOT NULL;



-- proveracanje izmedju dve vrednosti ali ukljucuje i to vrednost 300 i 800
SELECT * FROM `customers`
WHERE
`salary` BETWEEN 300 and 800;


-- nadci ljude cija je plata jednaka 500, 600 ili 700
-- izbegava se da se vise puta poziva kolona (salary) to se radi smo kad mora
SELECT * FROM `customers`
WHERE `salary` = 500
OR `salary` = 600
OR `salary` = 85000;

-- ovo je pravilniji nacin kad su vise vrednosti u pitanju
SELECT * FROM `customers`
WHERE `salary` IN (800,600,85000);


-- Korisnici cije je ime Ana Bojana ili Vuk npr
SELECT * 
FROM `customers`
WHERE `name` IN ('Ana', 'Dejan','Zoran');
-- nije uhvatio Dejana Cukica jer nisam upisao prezime samo ime 

-- Cije ime pocinje na sovovo b
SELECT * 
FROM `customers`
WHERE `name` LIKE 'B%'; --% znaci bilo sta , jedak karakter ili nijedan ili bilo koji

-- customere cije ime sadrzi slovo j
SELECT * 
FROM `customers`
WHERE `name` LIKE '%j%'; -- LIKE '%J%K%'; VISE SLOVA moze i '%CRNA%'

-- customeri cije ime zemlje krece na s
SELECT * 
FROM `customers`
WHERE `state` LIKE '%S%';

-- Limitiranj -- 
SELECT * 
FROM `customers`
LIMIT 2; -- pregledace prva dva customera (moze i jos uslova da se stavi pre limitiranja)

SELECT * 
FROM `customers`
WHERE `name` LIKE 'A%'
LIMIT 1; -- prikazace samo prvog korisnika cije ime krece na a

-- Prikazi prva dva korisnika koji imaju dvocifen broj poseta
SELECT * 
FROM `customers`
WHERE `number_of_visits` BETWEEN 10 AND 99
LIMIT 2;



-- ZADACI SA SLAJDOVA 
SELECT *
FROM `customers`
WHERE `salary` BETWEEN 300 and 800;

SELECT * 
FROM `customers`
WHERE `state` IN ('Srbija', 'Rumunija','Crna Gora');

SELECT * 
FROM `customers`
WHERE `state` LIKE 'S%';


SELECT * 
FROM `tasks`
WHERE `task_id` IN (1,4,8,12);

SELECT * 
FROM `tasks`
WHERE `start_date` > '2019-01-01';

SELECT * 
FROM `tasks`
WHERE `status` != 0;



-- sortiranje ORDER BY ASC - RASTUCI DESC OPADAJUCI POREDAK
SELECT * 
FROM `customers`
ORDER BY `name`;

SELECT * 
FROM `customers`
ORDER BY `age` DESC;

--Svi korisnici od starijih ka mladjim pa onda po posetama (ako ima dva sa istim brojem godina onda ce se primeniti ovo drugo)
SELECT * 
FROM `customers`
ORDER BY `age` ASC, `number_of_visits` DESC;

-- Prikazi prva dva korisnika sa najvecim brojem poseta , a ciji je broj poseta dvocifren
SELECT * 
FROM `customers`
WHERE `number_of_visits` BETWEEN 10 AND 99
ORDER BY `number_of_visits` DESC
LIMIT 2;


-- Prikazi korisnika koji ima najmanju platu koja je u osegu izmedju 300 i 500
SELECT * 
FROM `customers`
WHERE `salary` BETWEEN 500 AND 800
ORDER BY `salary` ASC, `name` ASC
LIMIT 1;



-- Slajd 36

SELECT * 
FROM `customers`
WHERE `state` = "Srbija" AND `salary` = 600;

SELECT * 
FROM `customers`
WHERE `name` LIKE 'S%'
OR `age` < 30; 



SELECT * 
FROM `tasks`
WHERE `status` != '1' AND `priority` > 0;

SELECT * 
FROM `tasks`
WHERE NOT `start_date` > '2019-08-01'; -- uslov da datum nije veci od nekog datuma

SELECT * 
FROM `tasks`
WHERE `start_date` >= '2019-08-01'; -- drugi nacin


-- Koriscenje funkcije u sklopu funkcije SELECT
--SELECT MIN(`ime_kolone`)
--FROM `naziv baze`
--WHERE ...

-- Prebrojati koliko ima kupaca izmedju 20 i 40 god
SELECT COUNT(`age`) -- MOZE I COUNT(*)
FROM `customers`
WHERE `age` BETWEEN 20 AND 40;


SELECT COUNT(`age`) AS `broj_kupaca` --preimenovanje tabele(rezultat ce biti u broju_kupaca)
FROM `customers`
WHERE `age` BETWEEN 20 AND 40;


-- odrediti prosecan broj poseta kupaca
SELECT AVG(`number_of_visits`)
FROM `customers`
WHERE `number_of_visits`;

-- Odrediti prosecnu platu kupaca iz srbije
SELECT AVG(`salary`) AS 'Prosecna plata u Srbiji'
FROM `customers`
WHERE `sate` = 'Srbija'

-- Odrediti broj razlicitih imena kupaca
SELECT COUNT(DISTINCT `name`) AS 'Razlicit broj imena'
FROM `customers`;

-- Odrediti ralziciti broj drzava
SELECT COUNT(DISTINCT `state`) AS 'Broj razlicitih drzava'
FROM `customers`;

--Odrediti ime osobe koja ima najmanju platu, ako ima vise takvih ispisati bilo koju
SELECT `name` , MIN(`salary`) AS 'Min plata'  -- ovo je greska nece izbaciti prvo ime
FROM `customers`;

SELECT `name` AS 'Min plata'  
FROM `customers`
WHERE `salary` = (SELECT MIN(`salary`) AS 'Min plata' FROM `customers`);

-- ispisati imena svih nadprosecno starih osoba
SELECT `name`
FROM `customers`
WHERE `age` > (SELECT AVG(`age`) FROM `customers`)
ORDER BY `name`;

-- Ispisati imena svih osoba iz srbije sa natprosecnom platom
SELECT `name`
FROM `customers`
WHERE `salary` > (SELECT AVG(`salary`) FROM `customers` WHERE `state` = 'Srbija')
AND `state` = "Srbija";