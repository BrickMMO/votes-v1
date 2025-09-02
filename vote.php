<?php

$connect = mysqli_connect(
    'sql208.infinityfree.com',
    '',
    '');
mysqli_select_db($connect, 'if0_39847005_votes');

$query = 'INSERT into votes (
        project_id
    ) VALUES (
        "'.$_GET['id'].'"
    )';
mysqli_query($connect, $query);

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

    <h2>Thank You! Your vote has been added!</h2>

    <a href="results.php">See Results</a>

</body>
</html>