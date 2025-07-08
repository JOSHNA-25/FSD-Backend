<?php
// Only process if GET request
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Step 1: Get form data using $_GET
    $category = $_GET['category'];
    $color = $_GET['color'];
    $size = $_GET['size'];
    $name = $_GET['name'];
    $address = $_GET['address'];
    $phone = $_GET['phone'];
    $pincode = $_GET['pincode'];
    $paymentmode = $_GET['paymentmode'];

    // Step 2: Connect to MySQL
    $servername = "localhost";
    $username = "root";
    $db_password = "";
    $dbname = "ecommerce";  // Make sure this DB exists

    $conn = new mysqli($servername, $username, $db_password, $dbname);

    // Step 3: Check DB connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Step 4: Insert the data into a table (assume 'payment_details')
    $sql = "INSERT INTO clothes (category, color, name, size, address, phone, pincode, paymentmode)
            VALUES ('$category', '$color', '$size', '$name', '$address', '$phone', '$pincode', '$paymentmode')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
        alert('Thank you for Shopping!');
        window.location.href = 'Project1.html';
    </script>";
    exit();
}


$conn->close();
}
?>
