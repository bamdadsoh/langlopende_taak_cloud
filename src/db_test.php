<?php
$servername = "db";  // Containernaam van de MySQL container
$username = "webuser";  // Gebruikersnaam zoals ingesteld in MySQL
$password = "jouw_veilig_wachtwoord";  // Wachtwoord zoals ingesteld in MySQL
$dbname = "website";  // Naam van de database

// Maak verbinding met de database
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully<br>";

// Voeg een bezoekdatum toe
$sql = "INSERT INTO visits (visitor_name) VALUES ('Test Visitor')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Toon alle bezoekdatums
$result = $conn->query("SELECT * FROM visits");
while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Visit: " . $row["visit_date"]. "<br>";
}

$conn->close();
?>
