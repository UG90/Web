<?php

// MySQL database credentials
$host = "localhost";
$username = "root";
$password = "ft5afvaf";
$dbname = "website";

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Execute SQL query
$sql = "SELECT * FROM your_table";
$result = mysqli_query($conn, $sql);

// Check if query returned results
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close connection
mysqli_close($conn);

?>
