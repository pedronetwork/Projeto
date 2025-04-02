<? php

    $db_host = 'localhost';
    $db_username = 'amdin';
    $db_password = 'admin@123';
    $db_name = 'agendamento';

    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
    }

    else
    {
        echo "Connected successfully";
    }

?>