<?php

echo "<p>Attempting connection to database ...</p>";

// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:discover202409221345.database.windows.net,1433; Database = discoverDbase", "azureuser", "B0rderl1ne_au");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

echo "<p>...Connection established!</p>"

echo "<p>Hello World!</p>";
