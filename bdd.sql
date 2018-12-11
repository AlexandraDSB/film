/*
person : id (autoincrement), lastname, firstname, birthDate, biography
movie : id (autoincrement), title, releaseDate, synopsis, rating
picture : id (autoincrement), path, legend
movieHasPerson : idMovie, idPerson, role (director / actor)
personHasPicture : idPerson, idPicture
movieHasPicture : idMovie, idPicture, type (poster, gallery)

 */

CREATE TABLE  PERSON (
  ID int(10) autoincrement PRIMARY KEY,,
  LASTNAME VARCHAR(25),
  FIRSTNAME  VARCHAR(25),
  BIRTHDATE DATE,
  BIOGRAPHY TEXT
);


CREATE TABLE  MOVIE (
  ID int(10) autoincrement PRIMARY KEY,,
  TITLE VARCHAR (25),
  RELEASEDATE DATE,
  SYNOPSIS TEXT,
  RATING INT(5)
);

CREATE TABLE  PICTURE (
  ID int(10) autoincrement PRIMARY KEY,,
  PATH VARCHAR (255),
  LEGEND VARCHAR (5)
);

/*
movieHasPerson : idMovie, idPerson, role (director / actor)
personHasPicture : idPerson, idPicture
movieHasPicture : idMovie, idPicture, type (poster, gallery)
*/

CREATE TABLE  movieHasPERSON (
  IDMOVIE int(10) autoincrement PRIMARY KEY,
  IDPERSON int(10),
  ROLE VARCHAR (1O)
);


CREATE TABLE  personHasPICTURE (
  IDPERSON int(10) autoincrement PRIMARY KEY,,
  IDPICTURE int(10),
);

CREATE TABLE  movieHasPICTURE (
  IDMOVIE int(10) autoincrement PRIMARY KEY,,
  IDPPICTURE int(10),
  TYPE VARCHAR (1O)
);