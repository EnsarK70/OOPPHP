CREATE DATABASE football;

USE football;

CREATE TABLE players (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  naam VARCHAR(255),
  achternaam VARCHAR(255),
  leeftijd INT
);

SELECT * FROM players;

CREATE TABLE accounts (
  account_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255),
  email VARCHAR(255), 
  password VARCHAR(255)
);

SELECT * FROM accounts;



