<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Inlogsysteem PHP voor YouTube</title>
</head>
<body>
    <header>
        <h1>Robin's Website</h1>
        <nav>
            <ul>
                <li><a href='index.php'>Home</a></li>
                <li><a href='over-mij.php'>Over mij</a></li>
            </ul>
        </nav>
    </header>
    <main>

        <h2>Inloggen</h2>
        <form action='login.php' method="post">
            <label>Gebruikersnaam:</label>
            <input type='text' name='name' placeholder='Gebruikersnaam...'>
            <label>Wachtwoord:</label>
            <input type='password' name='pswd' placeholder="Wachtwoord...">
            <input type='submit' value="Inloggen">
        </form>
</body>
</html>