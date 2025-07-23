<?php
// Allows external connection
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

// Database connection
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'world';

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the selected continent
$continent = $_GET['continent'];

// Query to fetch data
$query = "SELECT Name, SurfaceArea FROM Country WHERE Continent = ? ORDER BY SurfaceArea DESC LIMIT 20";
$select = $conn->prepare($query);
$select->bind_param("s",$continent);
$select->execute();
$result = $select->get_result();

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Close the connection
$conn->close();

// Output JSON
echo json_encode($data);
?>
