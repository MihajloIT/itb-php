-- Domanda za kreiranje base podataka
-- CREATE DATABASE test_druga;

-- malo detaljnije , odnosi se na onaj deo gde se biraju latinicna slova itd
CREATE DATABASE test_druga CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

-- komanda za brsanje baze podataka:
DROP DATABASE test_druga;

-- odabir baze NEOPHODNO JE DA SE POKRENE PRE POVEZIVANJA
USE test_baza;

-- Kreiranje tabele studenti
CREATE TABLE studenti
(
    ime VARCHAR(50),
    prezime VARCHAR(50)
);


-- Kreiranje tabele customers
CREATE TABLE customers
(
    id INT NOT NULL,
    name VARCHAR(20) NOT NULL,
    age TINYINT NOT NULL,
    address CHAR(25),
    salary DECIMAL(18,2) DEFAULT 500
);

-- Kreiranje tabele customers - sa primarnim kljucem
CREATE TABLE customers
(
    id INT NOT NULL,
    name VARCHAR(20) NOT NULL,
    age TINYINT NOT NULL,
    address CHAR(25),
    salary DECIMAL(18,2) DEFAULT 500,
    PRIMARY KEY(id)
);

-- Naknadno pokretanje primarnog kljuca je 
ALTER TABLE customers ADD PRIMARY KEY(id);

-- Kreiranje tabele tasks

CREATE TABLE tasks
(
    task_id INT UNIQUE,
    title VARCHAR(255) NOT NULL,
    start_date DATE,
    due_date DATE,
    status TINYINT NOT NULL,
    description TEXT
);


-- ovako se dodaju tabele ali meni radio samo sa ADD COLUMN
ALTER TABLE customers ADD state BOOLEAN;



-- dodavanje redova u tabelu
INSERT INTO customers
VALUES (1, "Ana", 23,"Jove Jovanovica",85000, 1, "Srbija", 4);

INSERT INTO customers(name, id,age, active, state, number_of_visits)
VALUES
("Bojana", 2, 21, 0, "Srbija", 16),
("Dejan Cukic",3, 31,0,"Crna Gora", 21);
