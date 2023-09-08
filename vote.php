<?php

include('connect.php');

$query = 'INSERT INTO votes (
        name,
        vote
    ) VALUES (
        "'.$_POST['name'].'",
        "'.$_POST['vote'].'"
    )';
mysqli_query($connect, $query);

header("Location: thankyou.html");
