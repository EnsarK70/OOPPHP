<?php

class Database {
    public $pdo;

    public function __construct($database = "football", $user = "root", $pwd="Ensark7070!", $host="localhost:3306") {
        try{
            $this->pdo = new PDO("mysql:host=$host;dbname=$database", $user, $pwd);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected to database $database";
    } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function insertPlayers($a, $b, $c) {
        $sql = "INSERT INTO players VALUES (null, :naam, :achternaam, :leeftijd)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['naam' => $a, 'achternaam' => $b, 'leeftijd' => $c]);
    }
}
?>