CREATE DATABASE footballers;

USE footballers;

CREATE TABLE players (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  naam VARCHAR(255),
  achternaam VARCHAR(255),
  leeftijd INT
);

SELECT * FROM players;
