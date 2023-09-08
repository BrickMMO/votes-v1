<?php

include('connect.php');

?>
<html>
  <head>
    <title>BrickMMO Votes</title>
  </head>
  <body>
    <h1>BrickMMO Votes</h1>

    <?php

    $query = 'SELECT COUNT(vote) AS total, vote
        FROM votes
        GROUP BY vote
        ORDER BY vote';
    $result = mysqli_query($connect, $query);

    ?>

    <?php while($record = mysqli_fetch_assoc($result)): ?>

        <?=$record['vote']?> <?=$record['total']?> 
        <br>

    <?php endwhile; ?>

  </body>
</html>
