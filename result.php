<?php
$servername = "localhost";
$username = "awet";
$password = "awet4007";
$dbname = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$conn->query($sql);

// Handle form submission
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $firstname, $lastname, $email);
    $stmt->execute();
    $stmt->close();

    echo "<p style='color:green;'>New guest added successfully!</p>";
}
?>

<!-- HTML form outside PHP block -->
<h2>Guestbook</h2>
<form method="POST" action="">
  Firstname: <input type="text" name="firstname" required><br>
  Lastname: <input type="text" name="lastname" required><br>
  Email: <input type="email" name="email"><br>
  <input type="submit" name="submit" value="Submit">
</form>

<?php
// Display all guests
$result = $conn->query("SELECT * FROM MyGuests ORDER BY reg_date DESC");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>" . htmlspecialchars($row['firstname']) . " " . htmlspecialchars($row['lastname']) .
             " - " . htmlspecialchars($row['email']) . " (Registered: " . $row['reg_date'] . ")</p>";
    }
} else {
    echo "<p>No entries yet.</p>";
}

// Close connection
$conn->close();
?>