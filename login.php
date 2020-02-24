<link rel="stylesheet" href="main.css">
<?php
    session_start();

    if(isset($_POST['name']) && $_POST['name'] !== "") {
        $username = $_POST['name'];
        $pass = $_POST['pswd'];

        if($pass === "test123") {
            echo "<p>Inloggegevens correct</p>";
            $_SESSION['login'] = true;
            $_SESSION['name'] = $username;
            header("Location: account.php");
        } else {
            echo "<p>Inloggevens incorrect</p><p><a href='inloggen.php'>Probeer opnieuw</a>";
        }
    } else {
        echo "<p>Vul je inloggegevens in!</p>
        <p><a href='inloggen.php'>Probeer opnieuw</a>";
    }
?>