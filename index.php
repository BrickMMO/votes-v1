<?php

$connect = mysqli_connect(
    'sql208.infinityfree.com',
    '',
    '');
mysqli_select_db($connect, 'if0_39847005_votes');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote</title>
</head>
<body>

    <h1>Vote</h1>

    <?php

    $query = 'SELECT *
        FROM projects';
    $result = mysqli_query($connect, $query);

    while ($record = mysqli_fetch_assoc($result)) 
    {
        
        echo '<h2>'.$record['name'].'</h2>';
        echo '<img src="'.$record['image'].'" width="200">';
        echo '<br>';
        echo '<a href="vote.php?id='.$record['id'].'">Vote for this project</a>';
        echo '<hr>';

    }

    ?>

</body>
</html>