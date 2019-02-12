<?php
    date_default_timezone_set("Europe/Amsterdam");
    $time_min = date("H:i");
    $time = date("H");
    if ($time >= 06 && $time < 12) {
        $greetings = "Goedemorgen";
        $bg = "img/morning.png";
    } elseif ($time >= 12 && $time < 18) {
        $greetings = "Goedemiddag";
        $bg = "img/afternoon.png";
    } elseif ($time >= 18 && $time < 00) {
        $greetings = "Goedeavond";
        $bg = "img/evening.png";
    } elseif ($time >= 00 && $time < 06) {
        $greetings = "Goedenacht";
        $bg = "img/night.png";
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background-image: url(<?php echo $bg;?>);
            color: white;
            background-size: 100%;
            text-align: center;
            margin-top: 20%;
            font-family: "";
        }
    </style>
</head>
<body class="<?php echo $bg; ?>">
    <h1> <?=$greetings ?> </h1>
    <?php echo "<h2>De tijd is: ". $time_min ."</h2>";?>
</body>
</html>