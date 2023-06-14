


-- PRAVLJENJE VEZE 1:1


--radimo promenu engina
ALTER TABLE `profili` ENGINE = INNODB;
ALTER TABLE `korisnici` ENGINE = INNODB;
-- kad se ovo odradi poveze se i u strukturi se iznad tabele pojavi kartica relation view


-- dodavanje stranog kljuca
ALTER TABLE `profili` 
add FOREIGN KEY (`korisnik_id`) -- polje iz tabele profili
REFERENCES `korisnici`(`id`); -- polje sa kojim se povezuje strani kljuc
-- Kad se ovo izvrsilo nije izbacio gresku ali se polja nisu povezala

-- obe tabele moraju da imaju engine imdb da bi bilo povezano pa onda to treba da se promeni

-- nakon ovog ENGINE ubacuje se ovo za foreign key

ALTER TABLE `profili` ADD UNIQUE (`korisnik_id`); 
-- mora da se doda ovo unique i onda se pojavi kljucic kod polja korinik_id

-- u polju relation view kad se udje u strukturu tabele vidi se ta veza izmedju dva polja 

INSERT INTO `korisnici`
(
    `id` , `korisnicko_ime` , `lozinka`
)
VALUES
( 1, 'Jovan' , '1234' ),
( 2, 'Zoran' , '2222' ),
( 3, 'Peran' , '4321' ),
( 4, 'Nikola' , '4444' );

INSERT INTO `profili`
(
    `id` , `korisnik_id` , `adresa` 
)
VALUES
( 1, 4, 'Adresa korisnika id=5' ),
( 10, 2, 'Adresa korisnika id=2'  ),
( 2, 3 , 'kuca od ivova pruca' );


--- PRAVLJENJE 1:N VEZE

CREATE TABLE `objave` 
(
    `id` INT,
    `naslov_objave` varchar(45) NOT NULL
) ENGINE=INNODB;

CREATE TABLE `komentari`
(
    `id` INT,
    `tekst_komentara` varchar(225) not null,
    `objave_id` int not null
) engine= innodb;

ALTER TABLE `komentari` 
ADD CONSTRAINT `komenatri_objava_fk`
FOREIGN KEY  (`objave_id`)
REFERENCES `objave`(`id`)
ON DELETE CASCADE ON UPDATE CASCADE;

-- MORA DA SE STAVI PRIMARY KEY ZA VEZU NA KOJU VE VEZUJE FOREIGN KEY

CREATE TABLE `kategorija`
(
    `id` int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `naziv` VARCHAR(45) NOT NULL
)ENGINE = INNODB;

INSERT INTO `kategorija` (`id`,`naziv`) VALUES
(1, 'Ekonomija'),
(null , 'Crna brlja');

INSERT INTO `kategorija` (`naziv`) VALUES
( 'Ljubav navika panika'),
( 'Policajac sa petlovog');

CREATE TABLE `kategorije_has_objave` 
(
    `kategorija_id` int(10) UNSIGNED not null, -- OVO INT(10 MORA DA SE POKLAPA SA POLJEM SA KOM SE VEZUJE)
    `objave` int not null
);

ALTER TABLE `kategorije_has_objave`
ADD CONSTRAINT `kat_obj_kategorija_id`
FOREIGN KEY (`kategorija_id`)
references `kategorija` (`id`)
ON DELETE CASCADE ON UPDATE CASCADE,
ADD constraint `kat_obj_kategorija_fk`
FOREIGN KEY (`objave`) -- JA SAM STAVIO (`objave`) posto ja nema mobjava_id
REFERENCES `objave`(`id`)
ON DELETE CASCADE ON UPDATE CASCADE;


ALTER TABLE `kategorije_has_objave` (`kategorija_id` , `objave`)
VALUES
(1,1),
(5,1),
(2,2);  --- ovo mora da se poglapa sa drugim tabelama 