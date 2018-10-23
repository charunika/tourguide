<?php
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="guides";

// Create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, fname, lname,age,gender,phone,email,password FROM register";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["fname"]. " " . $row["lname"]."age: " . $row["age"]."gender: " . $row["gender"]. "phone no: " . $row["phone"]."email: " . $row["email"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>