CREATE TABLE my_movies.films(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(40),
    description_courte VARCHAR(200),
    description_longue VARCHAR(1000),
    realisateur VARCHAR(60),
    annee_sortie VARCHAR(4),
    image VARCHAR(60)
);
