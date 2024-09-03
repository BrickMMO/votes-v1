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

    <p>Welcome to the official Web Dev Art Comp 2024. Make your vote below:</p>

    <?php

    $query = 'SELECT * FROM groups';
    $result = mysqli_query($connect, $query);

    while($record = mysqli_fetch_assoc($result))
    {
      echo '<a href="vote.php?id='.$record['id'].'">'.$record['name'].'</a>';
      echo '<br>';
    }
    

    ?>

    <hr>

    Copyright Web Dev Comp 2024 | Adam Thomas
  </body>
</html>
