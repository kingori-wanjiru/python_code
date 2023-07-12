<!DOCTYPE html>
<html>
<head>
    <title>Form </title>
</head>
<body>
    <form action="assignment4.php" method="post" >
       fname <input type="text" name="fname"><br><br>
       lname <input type="text" name="lname"><br><br>
       email <input type="email" name="email"><br><br>
       phone <input type="tel" name="phone"><br><br>
       ID<input type="text" name="ID"><br><br>
        <input type="submit" value="Submit">
    </form>
<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sms";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
{
if("conn->connection_error");
die("connection error:" . $connect->connect_error());
}

// Create the table
$create_table_sql = "CREATE TABLE IF NOT EXISTS messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(50) NOT NULL,
    lname VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    ID VARCHAR(20) NOT NULL
)";

if ($conn->query($create_table_sql) === false) {
    echo "Error creating table: " . $conn->error;
}

if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['ID'])) {
    // Retrieve form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $ID = $_POST['ID'];

    // Insert data into table
    $insert_sql = "INSERT INTO messages (fname, lname, email, phone, ID) VALUES ('$fname', '$lname', '$email', '$phone', '$ID')";

    if ($conn->query($insert_sql) === false) {
        echo "Error inserting data: " . $conn->error;
    } else {
        echo "Data inserted successfully!";
    }
}

// Get data from table
$select_sql = "SELECT * FROM messages";
$result = $conn->query($select_sql);

// Output data from database table to an HTML table in a PHP file
if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>fname</th>
                <th>lname</th>
                <th>Email</th>
                <th>Phone</th>
                <th>ID</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["fname"]."</td>
                <td>".$row["lname"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["phone"]."</td>
                <td>".$row["ID"]."</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
?>

</body>
</html>
