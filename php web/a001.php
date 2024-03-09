<?php
// Database credentials
$servername = "localhost";      // Change this to your database server name
$username = "root";   
$password = "dk@5096";   
$dbname = "a001";     // Change this to your database name

// Create a connection
$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If the connection is successful, you can perform database operations here.

// Close the connection when you are done with database operations
$conn->close();
?>



<?php
// Include the database connection file
require_once 'a001.php';

// Now you can use the $conn variable to perform your database operations

// For example, you can execute a query like this:
$sql = "SELECT * FROM worker";
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Process the query result here
    while ($row = $result->fetch_assoc()) {
        // Do something with the data
        echo "Name: " . $row["First Name"] . "<br>";
    }
} else {
    // If the query was not successful, handle the error
    echo "Error: " . $conn->error;
}

// Close the connection when you are done with database operations
$conn->close();
?>






<!-- 
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login Page</title>
</head>
<body>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Admin credentials
    $admin_username = "A001";
    $admin_password = "2025@dm1n";

    // Retrieve values from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the entered username and password match the admin credentials
    if ($username == $admin_username && $password == $admin_password) {
        echo "Login successful! Welcome, Admin!";
    } else {
        echo "Invalid username or password. Please try again.";
    }
}
?>

<h2>Admin Login</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <input type="submit" value="Login">
</form>

</body>
</html> -->