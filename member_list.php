<h1><center>Package Buyer Customer List</center></h1>
<?php
$servername = "localhost";
$username = "root";  // Your DB username
$password = "";  // Your DB password
$dbname = "library_management_system";  // Your DB name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id,name,contact_no,index_no,payment_slip_url FROM members ";  // Replace with your table and column names
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data in an HTML table
    echo "<center><table border='1'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>contact_no</th>";
    echo "<th>index_no</th>";
    echo "<th>payment_slip_url</th>";
    echo "</tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["contact_no"] . "</td>";
        echo "<td>" . $row["index_no"] . "</td>";
        echo "<td>" . $row["payment_slip_url"] . "</td>";
        echo "</tr>";
    }
    
    echo "</table></center>";
} else {
    echo "No results found!";
}

$conn->close();
?>
