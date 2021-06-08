<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan DOWHILE</title>
</head>

<body bgcolor="black" text="red">
    <?php
    $nilai = 20;
    do {
        echo $nilai--;
        echo "<br>";
    } while ($nilai >= 1)
    ?>

</body>

</html>