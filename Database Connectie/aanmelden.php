<?php 
  include 'db.php';
  try {
    $database = new Database();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $hashedPassword = password_hash( $_POST['password'], PASSWORD_DEFAULT);
        $database->register($_POST['username'], $_POST['email'], $hashedPassword);
        header("Location:login.php?aangemaakt");
    }
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aanmelden.css">
    <title>Registreren</title>
</head>
<body>
<div class="container">
    <form method="POST">
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="email" name="email" placeholder="Email"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <input type="submit" value="Maak je eigen account!">
    </form>
</div>    
</body>
</html>