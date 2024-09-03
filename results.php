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

    <h2>Comp Results</h2>

    <?php

    $query = 'SELECT *,(
            SELECT COUNT(*)
            FROM votes
            WHERE votes.group_id = groups.id
        ) AS votes
        FROM groups';
    $result = mysqli_query($connect, $query);

    while($record = mysqli_fetch_assoc($result))
    {
      echo $record['name'].' - '.$record['votes'];
      echo '<br>';
    }
    

    ?>

    <hr>

    Copyright Web Dev Comp 2024 | Adam Thomas
  </body>
</html>
