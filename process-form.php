<?php

$titel = $_POST["titel"];
$datum = $_POST["datum"];
$tijd = $_POST["tijd"];
$locatie = $_POST["locatie"];
$beschrijving = $_POST["beschrijving"];

$host = "ID375042_EVENEMENTEN.db.webhosting.be";
$dbname = "ID375042_EVENEMENTEN";
$username = "ID375042_EVENEMENTEN";
$password = "";

$conn = mysqli_connect (hostname: $host, 
                        username: $username, 
                        password: $password, 
                        database: $dbname);

if (mysqli_connect_error()){
    die("connection error: " . mysqli_connect_error());
}


$sql = "INSERT INTO evenementen (titel, datum, tijd, locatie, beschrijving)
VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sssss", 
                $titel, 
                $datum, 
                $tijd, 
                $locatie,
                $beschrijving);

mysqli_stmt_execute($stmt);

echo "record saved";

