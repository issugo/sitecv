/* BDD sitecv */
CREATE DATABASE sitecv;

/* table administrateur */
CREATE TABLE administrateur
(
    username VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL,
    CONSTRAINT administrateur_pk PRIMARY KEY (username)
)ENGINE = INNODB;

/* diplomes */
CREATE TABLE diplomes
(
    id_diplome INT NOT NULL AUTO_INCREMENT,
    description text,
    annee VARCHAR(4),
    CONSTRAINT diplomes_pk PRIMARY KEY (id_diplome)
)ENGINE = INNODB;

/* table experiences */
CREATE TABLE experiences
(
    id_exp INT NOT NULL AUTO_INCREMENT,
    lieu text,
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

/* table projets */
CREATE TABLE projets
(
    id_projet INT NOT NULL AUTO_INCREMENT,
    nom text,
    ressenti text,
    description text,
    dateAffiche VARCHAR(6),
    CONSTRAINT projets_pk PRIMARY KEY (id_projet)
);

/* table articles */
CREATE TABLE articles
(
    id_article INT NOT NULL AUTO_INCREMENT,
    titre text,
    texte text,
    lanceur text,
    CONSTRAINT articles_pk PRIMARY KEY (id_article)
);

/* 6 tables au total */