<?php

include 'db.php';
$database = new Database();

try {
    $database->insertPlayers("Ensar", "Korkmaz", 19);
    echo " Success";
} catch (PDOException $e) {
    echo " Error insering" . $e->getMessage();
}

?>
