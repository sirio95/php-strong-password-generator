<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5dc396147b.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Strong Password Generator</title>
    <style>

    </style>

    <?php
    session_start();
    require_once '/helper.php';
    $pwd_len = $_GET['length'] ?? -1;
    $letters_on = $_GET['letters'] ?? false;
    $numbers_on = $_GET['numbers'] ?? false;
    $symbols_on = $_GET['symbols'] ?? false;
    $repeat_on = $_GET['repeat'] ?? false;

    $_SESSION['pass'] = $pass;


    ?>
</head>

<body>
    <h1>Genera una password super sicura</h1>

    <form>
        <label for="length">Lunghezza della Password</label>
        <input type="length" name="length">
        <label for="chars">Scegli che tipo di caratteri utilizzare</label>
        <input type="checkbox" name="letters">Lettere
        <input type="checkbox" name="numbers">Numeri
        <input type="checkbox" name="symbols">Simboli

        <label for="repeat">Ripetere caratteri?</label>
        <input type="radio" name="repeat" value="true">SI
        <input type="radio" name="repeat" value="false">NO


        <input type="submit" value="GENERA PASSWORD">

    </form>

    <?php
    if ($pwd_len > 0) {
        header('Location: ./password_generata.php');
    } else {
        echo "<h2>Per generare la password, setta una lunghezza!</h2>";
    }

    ?>
</body>

</html>