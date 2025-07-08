<?php
// Only process the form if submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Step 1: Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password= $_POST['password'];

    // Step 2: Connect to MySQL
    $servername = "localhost";
    $username = "root";
    $db_password = "";  // Default for XAMPP
    $dbname = "ecommerce";

    $conn = new mysqli($servername, $username, $db_password, $dbname);

    // Step 3: Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Step 4: Insert the login data
    $sql = "INSERT INTO  register ( name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Welcome!');</script>";
    } else {
        echo "Error: " . $conn->error;
    }

    // Step 5: Close connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joshna Boutique</title>
    <link rel="icon" href="https://th.bing.com/th/id/OIP.IRbjVfGxwDBJjOyCB14OQwHaHa?rs=1&pid=ImgDetMain">
   
   <style>
    body{
    margin: 0px;
    padding: 0px;
}

.main1{
    position: relative;
    background-color:darkgoldenrod;
    width: 100vw;
    height: 10vh;
}
header{
    position: absolute;
    color: azure;
    font-size: 50px;
    left: 650px;
}
.main11{
    position: relative;
    background-color: black;
    width: 100vw;
    height: 5vh;
}
.main11 table{
    position: absolute;
    margin-left: 1080px;
    font-size: 25px;
    color: azure;
}
td{
    padding-right: 40px;
}


.main2{
    position: relative;
    width: 100vw;
    height: 150vh;
}
.main2 img{
    top: 0px;
    width: 100%;
    height: 300%;
    position:absolute;
}

h2{
    position: absolute;
    left: 55px;
    border: 2px solid black;
    border-radius: 3px;
}

#h1{
    position: absolute;
    top: 110px;
    left: 700px;
    font-size:xx-large;
    font-style: oblique;
}
.t1{
    display: flex;
    flex-direction: row;
}
.a{
    position: absolute;
    top: 200px;
    left: 2%;
    font-size: small;
}

.aa{
  position: absolute;
    top: 250px;
    left: -235%;
    color: white;
    text-decoration: none;
    border-radius: 2px;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}

.b{
    position: absolute;
    top: 200px;
    left: 22%;
    font-size: small;
}
.bb{
  position: absolute;
    top: 250px;
    left: -233%;
    color: white;
    text-decoration: none;
    border-radius: 2px;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}

.c{
    position: absolute;
    top: 200px;
    left: 42%;
    font-size: small;
}
.cc{
  position: absolute;
    top: 250px;
    left: -231%;
    color: white;
    text-decoration: none;
    border-radius: 2px;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}
.d{
    position: absolute;
    top: 200px;
    left: 62%;
    font-size: small;
}
.dd{
  position: absolute;
    top: 250px;
    left: -229%;
    color: white;
    text-decoration: none;
    border-radius: 2px;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}
.e{
    position: absolute;
    top: 200px;
    left: 82%;
    font-size: small;
}
.ee{
  position: absolute;
    top: 250px;
    left: -227%;
    color: white;
    text-decoration: none;
    border-radius: 2px;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}


#h11{
    position: absolute;
    top: 580px; 
    left: 700px;
    font-size:xx-large;
    font-style: oblique;
}
.t2 {
    display: flex;
    flex-direction: row;
}
.a1{
position: absolute;
top: 670px;
left: 2%;
font-size: small;
}
.aa1{
  position: absolute;
    top: 250px;
    left: -235%;
    color: white;
    text-decoration: none;
    border-radius: 2px;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}

.b1{
position: absolute;
top: 670px;
left: 22%;
font-size: small;
}
.bb1{
  position: absolute;
    top: 250px;
    left: -233%;
    color: white;
    text-decoration: none;
    border-radius: 2px;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}

.c1{
position: absolute;
top: 670px;
left: 42%;
font-size: small;
}
.cc1{
  position: absolute;
    top: 250px;
    left: -231%;
    color: white;
    text-decoration: none;
    border-radius: 2px;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}

.d1{
position: absolute;
top: 670px;
left: 62%;
font-size: small;
}
.dd1{
  position: absolute;
    top: 250px;
    left: -229%;
    color: white;
    text-decoration: none;
    border-radius: 2px;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}

.e1{
position: absolute;
top: 670px;
left: 82%;
font-size: small;
}
.ee1{
  position: absolute;
    top: 250px;
    left: -227%;
    color: white;
    text-decoration: none;
    border-radius: 2px;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}


#h12{
    position: absolute;
    top: 1050px;
    left: 700px;
    font-size:xx-large;
    font-style: oblique;
}
.t3{
    display: flex;
    flex-direction: row;
    top: 3400px;
}
.a2{
position: absolute;
top: 1150px;
left: 2%;
font-size: small;
}
.aa2{
  position: absolute;
    top: 250px;
    left: -235%;
    color: white;
    text-decoration: none;
    border-radius: 2px;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}
.b2{
position: absolute;
top: 1150px;
left: 22%;
font-size: small;
}
.bb2{
  position: absolute;
    top: 250px;
    left: -233%;
    color: white;
    text-decoration: none;
    border-radius: 2px;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}
.c2{
position: absolute;
top: 1150px;
left: 42%;
font-size: small;
}
.cc2{
  position: absolute;
    top: 250px;
    left: -231%;
    color: white;
    text-decoration: none;
    border-radius: 2px;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}
.d2{
position: absolute;
top: 1150px;
left: 62%;
font-size: small;
}
.dd2{
  position: absolute;
    top: 250px;
    left: -229%;
    color: white;
    text-decoration: none;
    border-radius: 2px;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}
.e2{
position: absolute;
top: 1150px;
left: 82%;
font-size: small;
}
.ee2{
  position: absolute;
    top: 250px;
    left: -227%;
    color: white;
    text-decoration: none;
    border-radius: 2px;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}

#h33 {
    position: absolute;
    top: 1550px; 
    left: 660px;
    font-size: xx-large;
    font-style: oblique;
}
.t6 {
    display: flex;
    flex-direction: row;
    top: 3700px;
}
.aaa3 {
    position: absolute;
    top: 1650px;
    left: 2%;
    font-size: small;
}
.aaaa3 {
    position: absolute;
    top: 250px;
    left: -235%;
    color: white;
    text-decoration: none;
    border-radius: 2px;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}
.bbb3 {
    position: absolute;
    top: 1650px;
    left: 22%;
    font-size: small;
}
.bbbb3 {
    position: absolute;
    top: 250px;
    left: -233%;
    color: white;
    text-decoration: none;
    border-radius: 2px;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}
.ccc3 {
    position: absolute;
    top: 1650px;
    left: 42%;
    font-size: small;
}
.cccc3 {
    position: absolute;
    top: 250px;
    left: -231%;
    color: white;
    text-decoration: none;
    border-radius: 2px;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}
.ddd3 {
    position: absolute;
    top: 1650px;
    left: 62%;
    font-size: small;
}
.dddd3 {
    position: absolute;
    top: 250px;
    left: -229%;
    color: white;
    text-decoration: none;
    border-radius: 2px;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}
.eee3 {
    position: absolute;
    top: 1650px;
    left: 82%;
    font-size: small;
}
.eeee3 {
    position: absolute;
    top: 250px;
    left: -227%;
    color: white;
    text-decoration: none;
    border-radius: 2px;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}

#h44 {
    position: absolute;
    top: 2050px; 
    left: 670px;
    font-size: xx-large;
    font-style: oblique;
}
.t7 {
    display: flex;
    flex-direction: row;
    top: 5400px;
}
.aa33 {
    position: absolute;
    top: 2150px;
    left: 2%;
    font-size: small;
}
.aaa33 {
    position: absolute;
    top: 250px;
    left: -235%;
    color: white;
    text-decoration: none;
    border-radius: 2px;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}
.bb33 {
    position: absolute;
    top: 2150px;
    left: 22%;
    font-size: small;
}
.bbb33 {
    position: absolute;
    top: 250px;
    left: -233%;
    color: white;
    text-decoration: none;
    border-radius: 2px;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}
.cc33 {
    position: absolute;
    top: 2150px;
    left: 42%;
    font-size: small;
}
.ccc33 {
    position: absolute;
    top: 250px;
    left: -231%;
    color: white;
    text-decoration: none;
    border-radius: 2px;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}
.dd33 {
    position: absolute;
    top: 2150px;
    left: 62%;
    font-size: small;
}
.ddd33 {
    position: absolute;
    top: 250px;
    left: -229%;
    color: white;
    text-decoration: none;
    border-radius: 2px;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}
.ee33 {
    position: absolute;
    top: 2150px;
    left: 82%;
    font-size: small;
}
.eee33 {
    position: absolute;
    top: 250px;
    left: -227%;
    color: white;
    text-decoration: none;
    border-radius: 2px;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}


#h13{
    position: absolute;
    top: 2600px;
    left: 175px;
    font-size:xx-large;
    font-style: oblique;   
}
.ab{
    position: absolute;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    margin: 0px;
    left: 8%;
    top: 2700px;
}
.cd{
    position: absolute;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    margin: 0px;
    left: 8%;
    top: 2850px;
}
#p1{
    position: absolute;
    top: 3030px;
    left: 170px;
    font-size:x-large;
}
.b1b{
    position: absolute;
    top: 3100px;
    left: 190px;
    font-size:large;
    background-color: aquamarine;
}


#h14{
    position: absolute;
    top: 2600px;
    left: 655px;
    font-size:xx-large;
    font-style: oblique;   
}
.ab1{
    position: absolute;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    margin: 0px;
    left: 40%;
    top: 2700px;
}
.cd1{
    position: absolute;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    margin: 0px;
    left: 40%;
    top: 2850px;
}
#p2{
    position: absolute;
    top: 3030px;
    left: 670px;
    font-size:x-large;
}
.b2b {
    position: absolute;
    top: 3100px;
    left: 690px;
    font-size:large;
    background-color: aquamarine;
}


#h15{
    position: absolute;
    top: 2600px;
    left: 1150px;
    font-size:xx-large;
    font-style: oblique;   
}
.ab2{
    position: absolute;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    margin: 0px;
    left: 72%;
    top: 2700px;
}
.cd2{
    position: absolute;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    margin: 0px;
    left: 72%;
    top: 2850px;
}
#p3{
    position: absolute;
    top: 3030px;
    left: 1170px;
    font-size:x-large;
}
.b3b{
    position: absolute;
    top: 3100px;
    left: 1190px;
    font-size:large;
    background-color: aquamarine;
}


.mark{
    top: 3160px;
    position: absolute;
    color: rgb(250, 4, 4);
    font-size: x-large;
    width: 100%;
    text-shadow: 2px 2px 5px solid black;
}
a{
    position: absolute;
    top: 75px;
    color: rgb(5, 1, 13);
    background-color: yellow;
    font-size: x-large;
    left: 700px;
    border: 2px solid black;
    border-radius: 5px;
}


.main3{
    position: relative;
    background-color: rgba(12, 2, 2, 0.927);
    top: 2000px;
    width: 100vw;
    height: 40Vh;
}

.h3{
    position: absolute;
    color:white;
    top: 0px;
    left: 50px;
    text-decoration: underline;
    font-size: large;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
}
.t4{
    position: absolute;
    color: white;
    top: 20%;
    left: 50px;
    font-size: large;
}

h4{
    position: absolute;
    top: 55%;
    left: 50px;
    color: white; 
    font-size: large;
}

.social-widget{
    position: absolute;
    display: flex;
    flex-direction: row;
    font-size: xx-small;
    top: 61%;
    left: 170px;
    color: azure;
}
.social-widget img{
    padding: 5px;
    width: 25px;
    height: 25px;
}

.h31{
    position: absolute;
    color: white;
    top: 0px;
    left: 470px;
    text-decoration: underline;
    font-size: large;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
}
.ul1{
    position: absolute;
    display: flex;
    flex-direction: column;
    font-size: x-large;
    color: white;
    top:12%;
    left: 470px;

}

.h32{
    position: absolute;
    color: white;
    top: 0px;
    left: 720px;
    text-decoration: underline;
    font-size: large;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
}
.ul2{
    position: absolute;
    display: flex;
    flex-direction: column;
    font-size: x-large;
    color: white;
    top: 12%;
    left: 719px;

}

.h33{
    position: absolute;
    color: white;
    top: 0px;
    left: 1020px;
    text-decoration: underline;
    font-size: large;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
}
.p1{
    position: absolute;
    font-size: medium;
    color: white;
    top: 12%;
    left: 1000px;
 }
.p2{
    position: absolute;
    font-size: large;
    color: white;
    top: 35%;
    left: 1140px;
}
.p3{
    position: absolute;
    font-size: large;
    color: white;
    top: 45%;
    left: 1160px;   
}


footer{
    position: absolute;
    background-color: darkgoldenrod;
    color: azure;
    font-size: 30px;
    top: 3450px;
    width: 99%;
    height: 7Vh;
    left: 0px;
    text-align: center;
    padding: 1%;
    
}
</style>
</head>
<body>
     <div class="main1">
        <header>E-Commerce</header>
    </div>
    <div class="main11">
        <table>
            <tr>
                <td>About</td>
                <td>Info</td>
                <td>Contact</td>
                <td>Help</td>
            </tr>
        </table>
    </div>

    <div class="main2">
        <img src="https://template.canva.com/EAFCJwAA-pQ/1/0/1600w-HDiSU9e_67s.jpg" alt="">
    </div>

    <h1 id="h1">KURTIS</h1>
    <table class="t1">
        <tr>
            <td>
                <div class="a">
                    <img src="https://i.etsystatic.com/18280828/r/il/e862de/2879009882/il_1140xN.2879009882_o9l8.jpg" alt="" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                        <div class="aa">
                            <a href="PaymentDress.html" onclick="showForm()">BUY</a>
                        </div>
                    <h2>Price: Rs.500</h2>
                </div>
                </td>
            
                <td>
                <div class="b">
                    <img src="https://www.aishwaryadesignstudio.com/content/images/thumbs/0098869_partywear-designer-foil-print-pink-kurti.jpeg" alt="" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                    <div class="bb">
                            <a href="PaymentDress.html" onclick="showForm()">BUY</a>
                        </div>
                    <h2>Price: Rs.800</h2>
                </div>
            </td>
            <td>
                <div class="c">
                    <img src="https://th.bing.com/th/id/OIP.oaLfI2hAmIu_XAr57x5vwAHaLH?w=204&h=306&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                     <div class="cc">
                            <a href="PaymentDress.html" onclick="showForm()">BUY</a>
                        </div>
                    <h2>Price: Rs.600</h2>
                </div>
            </td>
            <td>
                <div class="d">
                    <img src="https://i.pinimg.com/originals/20/03/53/2003539dce547b377db63484cc257cf0.jpg" alt=""style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                    <div class="dd">
                            <a href="PaymentDress.html" onclick="showForm()">BUY</a>
                        </div>
                    <h2>Price: Rs.1600</h2>
                </div>
            </td>
            <td>
                <div class="e">
                    <img src="https://cdn.rajwadi.com/image/cache/data/charming-multi-colour-designer-gown-43855-800x1100.jpg" alt="" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                    <div class="ee">
                            <a href="PaymentDress.html" onclick="showForm()">BUY</a>
                        </div>
                    <h2>Price: Rs.1500</h2>
                </div>
            </td>
        </tr>
    </table>


    <h1 id="h11">SAREES</h1>
    <table class="t2">
        <tr>
            <td>
                <div class="a1">
                    <img src="https://th.bing.com/th/id/OIP.gtn169HKXaOu9hoKB17MmQHaJ4?rs=1&pid=ImgDetMain" alt="" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                     <div class="aa1">
                            <a href="PaymentDress.html" onclick="showForm()" style="background-color: violet; color: black;">BUY</a>
                        </div>
                    <h2>Price: Rs.2500</h2>
                </div>
                </td>
                <td>
                <div class="b1">
                    <img src="https://cdn.sareeka.com/image/data2020/embroidered-silk-saree-141031.jpg" alt="" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                    <div class="bb1">
                            <a href="PaymentDress.html" onclick="showForm()" style="background-color: violet; color: black;">BUY</a>
                        </div>
                    <h2>Price: Rs.2200</h2>
                </div>
            </td>
            <td>
                <div class="c1">
                    <img src="https://image.wedmegood.com/resized-nw/1300X/wp-content/uploads/2019/07/1568396426_A_R_Wed32.jpg" alt="" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                    <div class="cc1">
                            <a href="PaymentDress.html" onclick="showForm()"style="background-color: violet; color: black;">BUY</a>
                        </div>
                    <h2>Price: Rs.3000</h2>
                </div>
            </td>
            <td>
                <div class="d1">
                    <img src="https://th.bing.com/th/id/R.561c38b08effd1dd858e280fe96d8a8d?rik=KZz3UdLtSyDXnQ&riu=http%3a%2f%2ftamarindweddings.com%2fblog%2fwp-content%2fuploads%2f2016%2f02%2f5-112.jpg&ehk=VZRryA1DEqH3%2fX8DJdubv2VXcs739gxrMaWsWjoJ6Nw%3d&risl=&pid=ImgRaw&r=0" alt="" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                    <div class="dd1">
                            <a href="PaymentDress.html" onclick="showForm()" style="background-color: violet; color: black;">BUY</a>
                        </div>
                    <h2>Price: Rs.1000</h2>
                </div>
            </td>
            <td>
                <div class="e1">
                    <img src="https://stylesatlife.com/wp-content/uploads/2019/05/Rakul-Preet-Singh-in-a-Kanchipuram-Saree.jpg" alt="" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                    <div class="ee1">
                            <a href="PaymentDress.html" onclick="showForm()"style="background-color: violet; color: black;">BUY</a>
                        </div>
                    <h2>Price: Rs.3500</h2>
                </div>
            </td>
        </tr>
    </table>


    <h1 id="h12">LEHANGAS</h1>
    <table class="t3">
        <tr>
            <td>
                <div class="a2">
                    <img src="https://www.omsara.co.uk/wp-content/uploads/4804.-1-1-scaled.jpeg" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                    <div class="aa2">
                            <a href="PaymentDress.html" onclick="showForm()"style="background-color: orange; color: black;">BUY</a>
                        </div>
                    <h2>Price: Rs.2000 </h2>
                   </div>
            </td>
            <td>
                <div class="b2">
                    <img src="https://www.omsara.co.uk/wp-content/uploads/4705.--scaled.jpg" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                    <div class="bb2">
                            <a href="PaymentDress.html" onclick="showForm()"style="background-color: orange; color: black;">BUY</a>
                        </div>
                    <h2>Price: Rs.3500 </h2>
                   </div>
            </td>
            <td>
                <div class="c2">
                    <img src="https://www.omsara.co.uk/wp-content/uploads/A3F5E799-1086-4409-9A18-CCF045C9D924.jpeg" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 250px;height: 250px;">
                    <div class="cc2">
                            <a href="PaymentDress.html" onclick="showForm()"style="background-color: orange; color: black;">BUY</a>
                        </div>
                    <h2>Price: Rs.5000 </h2>
                   </div>
            </td>
            <td>
                <div class="d2">
                    <img src="https://akm-img-a-in.tosshub.com/sites/gloss99/resources/201912/photo_gallery/anushree-reddy-_122419042358.jpg" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 250px;height: 250px;">
                    <div class="dd2">
                            <a href="PaymentDress.html" onclick="showForm()"style="background-color: orange; color: black;">BUY</a>
                        </div>
                    <h2>Price: Rs.5500 </h2>
                   </div>
            </td>
            <td>
                <div class="e2">
                    <img src="https://i.pinimg.com/originals/c6/80/d5/c680d568868d92894fc1b908a0abb46b.jpg" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 250px;height: 250px;">
                    <div class="ee2">
                            <a href="PaymentDress.html" onclick="showForm()"style="background-color: orange; color: black;">BUY</a>
                        </div>
                    <h2>Price: Rs.4000 </h2>
                   </div>
            </td>
        </tr>
       </table>

       <h1 id="h33">CASUAL WEARS</h1>
<table class="t6">
    <tr>
        <td>
            <div class="aaa3">
                <img src="https://i5.walmartimages.com/seo/RYDCOT-Business-Casual-Tops-Women-Long-Sleeve-Solid-Color-Button-Down-Shirt-Turndown-Collar-office-Work-Elegant-Ladies-Blouses-Clearance_eb4705d3-d381-4e19-9e33-72a4dfafdddb.423e8fe75cb766b7e311c30e7aa3ebff.jpeg" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                <div class="aaaa3">
                    <a href="PaymentDress.html" onclick="showForm()" style="background-color: rgb(131, 232, 224); color: black;">BUY</a>
                </div>
                <h2>Price: Rs.700 </h2>
            </div>
        </td>
        <td>
            <div class="bbb3">
                <img src="https://i.pinimg.com/originals/c6/43/1f/c6431fbd460e4339142bb8e83f5fd278.jpg" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                <div class="bbbb3">
                    <a href="PaymentDress.html" onclick="showForm()" style="background-color: rgb(131, 232, 224); color: black;">BUY</a>
                </div>
                <h2>Price: Rs.500 </h2>
            </div>
        </td>
        <td>
            <div class="ccc3">
                <img src="https://i.pinimg.com/originals/a4/00/4a/a4004a52d5350ec3e510bc286b501862.jpg" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                <div class="cccc3">
                    <a href="PaymentDress.html" onclick="showForm()" style="background-color: rgb(131, 232, 224); color: black;">BUY</a>
                </div>
                <h2>Price: Rs.750 </h2>
            </div>
        </td>
        <td>
            <div class="ddd3">
                <img src="https://rukminim2.flixcart.com/image/828/855/xif0q/top/s/l/y/xl-colds1-neoen-original-imagxvtv7twqbktc.jpeg?q=60" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                <div class="dddd3">
                    <a href="PaymentDress.html" onclick="showForm()" style="background-color: rgb(131, 232, 224); color: black;">BUY</a>
                </div>
                <h2>Price: Rs.600 </h2>
            </div>
        </td>
        <td>
            <div class="eee3">
                <img src="https://www.cinchjeans.com/store/pc/catalog/msw9164033_252_detail.jpg" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                <div class="eeee3">
                    <a href="PaymentDress.html" onclick="showForm()" style="background-color: rgb(131, 232, 224); color: black;">BUY</a>
                </div>
                <h2>Price: Rs.780 </h2>
            </div>
        </td>
    </tr>
</table>

<h1 id="h44">PARTY WEARS</h1>
<table class="t7">
    <tr>
        <td>
            <div class="aa33">
                <img src="https://www.rajwadi.com/image/cache/data/pink-party-designer-gown-40858-800x1100.jpg" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                <div class="aaa33">
                    <a href="PaymentDress.html" onclick="showForm()" style="background-color: rgb(147, 237, 140); color: black;">BUY</a>
                </div>
                <h2>Price: Rs.1800 </h2>
            </div>
        </td>
        <td>
            <div class="bb33">
                <img src="https://i.pinimg.com/originals/de/b9/d5/deb9d550519445b0ac7ee24e109a6510.jpg" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                <div class="bbb33">
                    <a href="PaymentDress.html" onclick="showForm()" style="background-color: rgb(147, 237, 140); color: black;">BUY</a>
                </div>
                <h2>Price: Rs.3500 </h2>
            </div>
        </td>
        <td>
            <div class="cc33">
                <img src="https://i.pinimg.com/originals/a4/e8/2b/a4e82bfa18f55c85a062fec1c00753b3.jpg" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                <div class="ccc33">
                    <a href="PaymentDress.html" onclick="showForm()" style="background-color: rgb(147, 237, 140); color: black;">BUY</a>
                </div>
                <h2>Price: Rs.2500 </h2>
            </div>
        </td>
        <td>
            <div class="dd33">
                <img src="https://i.pinimg.com/originals/3e/51/4a/3e514ae7fb8aae9b0f5d5b025e829564.jpg" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                <div class="ddd33">
                    <a href="PaymentDress.html" onclick="showForm()" style="background-color: rgb(147, 237, 140); color: black;">BUY</a>
                </div>
                <h2>Price: Rs.1500 </h2>
            </div>
        </td>
        <td>
            <div class="ee33">
                <img src="https://i.pinimg.com/736x/37/18/a5/3718a5c681f85ab244bf1d6ae630947e.jpg" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                <div class="eee33">
                    <a href="PaymentDress.html" onclick="showForm()" style="background-color: rgb(147, 237, 140)    ; color: black;">BUY</a>
                </div>
                <h2>Price: Rs.2800 </h2>
            </div>
        </td>
    </tr>
</table>



    <h1 id="h13">FOOTWEARS</h1>
       <div class="ab">
        <div class="a3">
            <img src="https://tse4.mm.bing.net/th/id/OIP.f1h_gXn-wzmCRCRfh38YiQHaFJ?pid=Api&P=0&h=180" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 150px; height:150px;">
           </div>
           <div class="b3">
            <img src="https://images-na.ssl-images-amazon.com/images/I/71l46PtMqcL.jpg" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 150px; height: 150px;">
           </div>
       </div>
       
       <div class="cd">
        <div class="c3">
            <img src="https://tse3.mm.bing.net/th/id/OIP.WhfjpAPiXVZ65FVeA01MxQHaIY?pid=Api&P=0&h=180" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 150px;height: 150px;">
           </div>
           <div class="d3">
            <img src="https://i.pinimg.com/originals/a2/78/b6/a278b639d764a830c2c060e5af5cfbcd.jpg" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 150px;height: 150px;">
           </div> 
       </div>
       <p id="p1">Starting @ Rs.500</p>
     <a href="Fotwr.html" class="b1b" onclick="showForm()">VIEW PRODUCT</a>


       <h1 id="h14">ACCESSORIES</h1>
       <div class="ab1">
        <div class="a4">
            <img src="https://www.dhanalakshmijewellers.com/wp-content/uploads/2020/05/AntiqueGoldNecklace44-scaled.jpg" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 150px; height:150px;">
           </div>
           <div class="b4">
            <img src="https://th.bing.com/th/id/R.ac4fa1ed35da4b59a309e64b1a588dff?rik=y6Cve91bijrlGg&riu=http%3a%2f%2f4.bp.blogspot.com%2f_Q5JWnk9IbJo%2fTOL6uDouKPI%2fAAAAAAAABRE%2fwp7hIpV7B80%2fs1600%2f00525%2bNK%2b103.60%2bCarat%2bDiamond%2bNecklace.jpg&ehk=Z2%2b7PQoDgG%2fjM4cnMfqaCGvyCzdZkuAJtRumhcI33z0%3d&risl=&pid=ImgRaw&r=0" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 150px; height: 150px;">
           </div>
       </div>

       <div class="cd1">
        <div class="c4">
            <img src="https://tse4.mm.bing.net/th/id/OIP.STUF3nEf4i4tvmvLK7lpxgHaHa?pid=Api&P=0&h=180" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 150px;height: 150px;">
           </div>
           <div class="d4">
            <img src="https://tse1.mm.bing.net/th/id/OIF.y0PagN4DQOUpwB8WACxclw?pid=Api&P=0&h=180" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 150px;height: 150px;">
           </div> 
       </div>
       <p id="p2">Starting @ Rs.1500</p>
       <a href="Asscr.html" class="b2b" onclick="showForm()">VIEW PRODUCT</a>

       <h1 id="h15">COSEMETICS</h1>
       <div class="ab2">
        <div class="a5">
            <img src="https://shopcherrie.com/cdn/shop/collections/cosmetics_1024x1024.jpg?v=1679089945" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 150px; height:150px;">
           </div>
           <div class="b5">
            <img src="https://th.bing.com/th/id/OIP.3eDTjS_8YMXVS5kE_gqrqQHaFj?w=600&h=450&rs=1&pid=ImgDetMain" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 150px; height: 150px;">
           </div>
       </div>

       <div class="cd2">
        <div class="c5">
            <img src="https://i.pinimg.com/originals/ef/31/49/ef3149ce7e3cb5e578dead584edd9f5b.jpg" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 150px;height: 150px;">
           </div>
           <div class="d5">
            <img src="https://as2.ftcdn.net/v2/jpg/03/15/28/09/1000_F_315280907_mvCTwREnq1YVJRaMvPtvR0k7ENRHxCNZ.jpg" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 150px;height: 150px;">
           </div> 
       </div>
       <p id="p3">Starting @ Rs.1200</p>
       <a href="Cosmts.html" class="b3b" onclick="showForm()">VIEW PRODUCT</a>


       <div class="mark">
        <marquee scrollment="10" behavior="slide" direction="right" height="100%"
        width="100%" loop="10">💥20% DISCOUNT ON FOOTWEARS, ACCESSORIES, COSEMETICS💥</marquee>
       </div>


       <div class="main3">
        <h3 class="h3">REACH US</h3>
       <table class="t4">
        <tr>
            <td>📍No:xyz, 4th Street, Anna Salai</td>
        </tr>
        <tr>
            <td>OMR,Chennai-6000XX, TamilNadu, India.</td> 
        </tr>
        <tr>
            <td>📞+919940xxxxxx</td>
        </tr>
        <tr>
            <td>📧josh785@gmail.com</td>
        </tr>
           
    </table>

    <h4>Follow us on:</h4>
    <div class="social-widget">
        <img src="insta icon.png" alt="">
        <img src="linkedin icon.png" alt="">
        <img src="youtube icon.png" alt="">
        <img src="twitter icon.png" alt="">
    </div>
    <h3 class="h31">CATEGORIES</h3>
    <ul class="ul1">
        <li>kurtis</li>
        <li>Sarees</li>
        <li>Lehangas</li>
        <li>Footwears</li>
        <li>Accessories</li>
        <li>Cosmetics</li>
    </ul>
    <h3 class="h32">INFORMATION</h3>
    <ul class="ul2">
        <li>About Us</li>
        <li>Contact US</li>
        <li>Term & Condition</li>
        <li>Return and Exchange</li>
        <li>Shopping and Delivery</li>
    </ul>
    <h3 class="h33">ABOUT</h3>
    <P class="p1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum quaerat illum ipsam odit repellat earum consequuntur recusandae excepturi iusto blanditiis nihil vero voluptas quasi repudiandae et tenetur, magni ipsa omnis.</P>
    <p class="p2">🔒Secure Online Payment</p>
    <p class="p3">Rating ⭐⭐⭐⭐⭐</p>
</div>

    <div>
        <footer >
            Shop at your own style!|Design made with❤️by JOSHNA S
        </footer>
    </div>
</body>
</html>
