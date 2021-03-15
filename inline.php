<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>De krant</title>
</head>
<body>

    <?php
    $title = "Brandweer redt de kat uit de boom";
    $date = "1 feb 2021";
    $contents = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci assumenda atque corporis cupiditate esse explicabo in, incidunt ipsam iste libero mollitia natus numquam odit pariatur quasi quia quibusdam vel. Illum!";
    $author = "Nusret Kocyigit";
    ?>

    <h1><?php echo $title; ?></h1>
    <p><em>Datum: <?php echo $date; ?></em></p>
    <p><em>Auteur: <?php echo $author; ?></em></p>
    <p><em>Content: <?php echo $contents; ?></em></p>

</body>
</html>
