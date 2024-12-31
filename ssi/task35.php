<?php
$username = "root";
$password = "";
$servername = "localhost";
$dbname = "users";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection error!");
}

$id = 2;
$query = "DELETE FROM usersinfo WHERE id = ?";
$stmt = mysqli_prepare($conn, $query);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "i", $id);

    if (mysqli_stmt_execute($stmt)) {
        echo "Data silindi.";
    } else {
        echo "Data silinmədi.";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Sorğu hazırlamaq mümkün olmadı.";
}

mysqli_close($conn);