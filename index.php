<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pogodi!</title>
</head>
<body>
    <h1>Igra: Pogodi broj</h1>
    <form method="post" action="">
        <label for="guess">Upiši broj od 1 do 9:</label>
        <input type="number" id="guess" name="guess" min="1" max="9" required>
        <button type="submit">Pogodi!</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // rand 1-9
        $randomNumber = rand(1, 9);
        
        $userGuess = (int) $_POST['guess'];
        
        // Provjera rezultata
        if ($userGuess === $randomNumber) {
            echo "<p style='color: green;'>Pogodak! Zamišljeni broj je $randomNumber.</p>";
        } else {
            echo "<p style='color: red;'>Krivo, probaj ponovo! Zamišljeni broj je $randomNumber.</p>";
        }
    }
    ?>
</body>
</html>
