/* BDD sitecv */
CREATE DATABASE sitecv;

/* table administrateur */
CREATE TABLE administrateur
(
    username VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL,
    CONSTRAINT administrateur_pk PRIMARY KEY (username)
)ENGINE = INNODB;

/* table formations */
CREATE TABLE formations
(
    id_formation INT NOT NULL AUTO_INCREMENT,
    annee VARCHAR(8),
    description text,
    CONSTRAINT formations_pk PRIMARY KEY (id_formation)
)ENGINE = INNODB;

/* diplomes */
CREATE TABLE diplomes
(
    id_diplome INT NOT NULL AUTO_INCREMENT,
    description text,
    CONSTRAINT diplomes_pk PRIMARY KEY (id_diplome)
)ENGINE = INNODB;

/* table experiences */
CREATE TABLE experiences
(
    id_exp INT NOT NULL AUTO_INCREMENT,
    lieu text,
    dateExp datetime,
    dateAffichage VARCHAR(11),
    description text,
    ressenti text,
    CONSTRAINT experiences_pk PRIMARY KEY (id_exp)
)ENGINE = INNODB;

/* table compétences */
CREATE TABLE competences
(
    id_comp INT NOT NULL AUTO_INCREMENT,
    nom text,
    niveau ENUM ('1', '2', '3', '4', '5'),
    lien_visu text,
    CONSTRAINT competences_pk PRIMARY KEY (id_comp)
    
)ENGINE = INNODB;

/* 5 tables au total */