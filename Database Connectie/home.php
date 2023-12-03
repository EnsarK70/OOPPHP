<?php

include 'db.php';
$database = new Database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $naam = $_POST['naam'];
    $achternaam = $_POST['achternaam'];
    $leeftijd = $_POST['leeftijd'];

    try {
        $database->insertPlayers($naam, $achternaam, $leeftijd);
        echo " Success";
    } catch (PDOException $e) {
        echo "Error inserting: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Spelers Voegen</title>
</head>
<body class="bg-success">
    <table class="table table-dark">
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Achternaam</th>
            <th>Leeftijd</th>
            <th colspan="2">Actions</th>
        </tr>

        <tr>
            <?php $players = $database->selectPlayers();
            foreach($players as $player){ ?>
            <td><?php echo $player['id']?></td>
            <td><?php echo $player['naam']?></td>
            <td><?php echo $player['achternaam']?></td>
            <td><?php echo $player['leeftijd']?></td>
            <td><a class="btn btn-primary" href="edit.php?id=<?php echo $player['id']; ?>">Edit</a></td>
            <td><a class="btn btn-danger" href="delete.php?id=<?php echo $player['id']; ?>">Delete</a></td>
        </tr> <?php } ?>
    </table>

    <div class="d-flex justify-content-center align-items-center">
        <form method="POST">
            <input type="text" class="form-control" name="naam" placeholder="Naam"><br><br>
            <input type="text" class="form-control" name="achternaam" placeholder="Achternaam"><br><br>
            <input type="number" class="form-control" name="leeftijd" placeholder="Leeftijd"><br><br>
            <input type="submit" class="btn btn-primary" value="Toevoegen">
        </form>
    </div>
</body>
</html>