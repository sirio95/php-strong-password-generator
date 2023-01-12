<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password generata</title>
    <?php
    session_start();
    $pass = $_SESSION["pass"];
    ?>
</head>

<body>
    <?php
    echo "<h1>La tua password &egrave;: " . $pass . "</h1>";
    ?>

</body>

</html>