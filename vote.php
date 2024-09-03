<?php

$connect = mysqli_connect(
  "sql213.infinityfree.com",
  "if0_37236054",
  "pimn47tQHIKOzk2",
  "if0_37236054_votes");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Dev Art Comp 2024</title>
  </head>
  <body>
    <h1>Web Dev Art Comp 2024</h1>

    <p>Your vote has been recorded!</p>

    <?php

    $query = 'INSERT INTO votes (
            group_id
        ) VALUES (
            "'.$_GET['id'].'"
        )';
    $result = mysqli_query($connect, $query);

    ?>

    <p><a href="results.php">View Results</a></p>

    <hr>

    Copyright Web Dev Comp 2024 | Adam Thomas
  </body>
</html>
