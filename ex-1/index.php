<?php

    include_once("db.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php

        foreach ($dischi_db as $disco) {
            echo "<img src='" . $disco["poster"] . "'alt=''>";
            echo "<h2>" . $disco["title"] . "</h2>";
            echo "<p>" . $disco["author"] . "</p>";
            echo "<p>" . $disco["genre"] . "</p>";
            echo "<p>" . $disco["year"] . "</p>";
        }

    ?>

</body>

</html>