<?php 

include 'db.php';
$database = new Database();

if($_SERVER['REQUEST_METHOD'] == 'POST')
  try {
    $database->editUser($_POST['naam'], $_POST['achternaam'], $_POST['leeftijd'], $_GET['id']);
    header('Location: home.php?=Success');
  }
  catch (PDOException $e) {
    echo "Error inserting: " . $e->getMessage();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Edit</title>
</head>
<body class="bg-success">
<div class="d-flex justify-content-center align-items-center">
    <form method="POST">
        <input type="text" class="form-control" name="naam" placeholder="Naam"><br><br>
        <input type="text" class="form-control" name="achternaam" placeholder="Achternaam"><br><br>
        <input type="number" class="form-control" name="leeftijd" placeholder="Leeftijd"><br><br>
        <input type="submit" class="btn btn-primary" value="Change">
    </form>
</div>
</body>
</html>