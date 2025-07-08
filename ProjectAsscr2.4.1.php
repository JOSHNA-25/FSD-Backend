<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $brand = $_GET['brand'];
    $color = $_GET['color'];
    $name = $_GET['name'];
    $address = $_GET['address'];
    $phone = $_GET['phone'];
    $pincode = $_GET['pincode'];
    $paymentmode = $_GET['paymentmode'];

    $servername = "localhost";
    $username = "root";
    $db_password = "";
    $dbname = "ecommerce";

    $conn = new mysqli($servername, $username, $db_password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO  handbag_color_44 (brand, color, name, address, phone, pincode, paymentmode)
            VALUES ('$brand', '$color', '$name', '$address', '$phone', '$pincode', '$paymentmode')";

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
