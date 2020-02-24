<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Ingelogd</title>
</head>
<body>
    <?php 

        session_start();
        if(!isset($_SESSION['login'])) {
            $_SESSION['login'] = false;
        }

        if($_SESSION['login'] == true) { ?>

            <h1>Je bent ingelogd, <?php echo $_SESSION['name']; ?></h1>
            <a href="logout.php">Uitloggen</a>

        <?php } else {
            header("Location: inloggen.php");
        }
    ?>
</body>
</html>