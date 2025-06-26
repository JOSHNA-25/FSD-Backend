<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $product = $_GET['product'];
    $name = $_GET['name'];
    $address = $_GET['address'];
    $phone = $_GET['phone'];
    $pincode = $_GET['pincode'];
    $paymentmode = $_GET['paymentmode'];

    $servername = "localhost";
    $username = "root";
    $db_password = "";
    $dbname = "login";

    $conn = new mysqli($servername, $username, $db_password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO accessories (product,name, address, phone, pincode, paymentmode)
            VALUES ('$product','$name', '$address', '$phone', '$pincode', '$paymentmode')";

   if ($conn->query($sql) === TRUE) {
    echo "<script>
        alert('✅ Submitted Successful!');
        window.location.href = 'Project1.html';
    </script>";
    exit();
}


    $conn->close();
}
?>
