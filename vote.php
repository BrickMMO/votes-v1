<?php

include('connect.php');

$query = 'INSERT INTO votes (
        name,
        `group`
    ) VALUES (
        "'.$_POST['name'].'",
        "'.$_POST['group'].'"
    )';

mysqli_query($connect, $query);

header('location: thankyou.html');