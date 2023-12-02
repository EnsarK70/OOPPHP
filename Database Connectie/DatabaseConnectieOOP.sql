CREATE DATABASE football;

USE football;

CREATE TABLE players (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  naam VARCHAR(255),
  achternaam VARCHAR(255),
  leeftijd INT
);

SELECT * FROM players;

