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
    include_once 'data.php';
    include_once 'helper.php';

    $password_characters = [];
    $password_index_codes = [];

    $numero_caratteri = $_GET["numero_caratteri"] ?? 0;
    $lettere = $_GET["lettere"] ?? false;
    $numeri = $_GET["numeri"] ?? false;
    $caratteri_speciali = $_GET["caratteri_speciali"] ?? false;
    $ripetizione = $_GET["ripetizione"] ?? true;

    $parametri = [$lettere, $numeri, $caratteri_speciali];
    $password;
    $_SESSION[$password] = $password;


    foreach ($parametri as $indice => $parametro) {
        if ($parametro) {
            $password_characters = array_merge($all_characters[$indice]);
        }
    }
    ;






    ?>
</head>

<body>
    <h1>Genera una password sicura</h1>

    <form>
        <label for="numero_caratteri">Seleziona il numero di caratteri della password</label>
        <input type="number" name="numero_caratteri">
        <label for="tipo_caratteri">Scegli la tipologia di caratteri da inserire</label>
        <input type="checkbox" name="lettere">Lettere
        <input type="checkbox" name="numeri">Numeri
        <input type="checkbox" name="caratteri_speciali">Caratteri Speciali
        <label for="ripetizione">Vuoi che la password contenga caratteri ripetuti?</label>
        <input type="radio" name="ripetizione" value="true">Si
        <input type="radio" name="ripetizione" value="false">No

        <input type="submit" value="GENERA PASSWORD">
    </form>

    <?php
    if ($numero_caratteri > 0) {
        $password_index_codes = random_num_arr($password_index_codes, count($password_characters), $numero_caratteri, $ripetizione);
        $passowrd = pass_charact_selector($password_characters, $password_index_codes, $password);
        var_dump($password);
        header('Location ./password.php');
    } else {
        die();
    }

    ?>
</body>

</html>