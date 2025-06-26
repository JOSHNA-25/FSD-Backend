<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Step 2: Connect to MySQL
    $servername = "localhost";
    $username = "root";
    $db_password = "";  // Default for XAMPP
    $dbname = "login";

    $conn = new mysqli($servername, $username, $db_password, $dbname);

    // Step 3: Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Step 4: Insert the login data
    $sql = "INSERT INTO  loginf ( email, password ) VALUES ('$email', '$password')";
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);


    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Welcome Back!');</script>";
    } 
    else {
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
    height: 100vh;
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


#h13{
    position: absolute;
    top: 1550px;
    left: 160px;
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
    top: 1650px;
}
.cd{
    position: absolute;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    margin: 0px;
    left: 8%;
    top: 1800px;
}
#p1{
    position: absolute;
    top: 1990px;
    left: 170px;
    font-size:x-large;
}
.b1b{
    position: absolute;
    top: 1980px;
    left: 190px;
    font-size:large;
    background-color: aquamarine;
}


#h14{
    position: absolute;
    top: 1550px;
    left: 660px;
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
    top: 1650px;
}
.cd1{
    position: absolute;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    margin: 0px;
    left: 40%;
    top: 1800px;
}
#p2{
    position: absolute;
    top: 1990px;
    left: 670px;
    font-size:x-large;
}
.b2b {
    position: absolute;
    top: 1980px;
    left: 690px;
    font-size:large;
    background-color: aquamarine;
}


#h15{
    position: absolute;
    top: 1550px;
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
    top: 1650px;
}
.cd2{
    position: absolute;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    margin: 0px;
    left: 72%;
    top: 1800px;
}
#p3{
    position: absolute;
    top: 1990px;
    left: 1170px;
    font-size:x-large;
}
.b3b{
    position: absolute;
    top: 1980px;
    left: 1190px;
    font-size:large;
    background-color: aquamarine;
}


.mark{
    top: 2050px;
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
    top: 1250px;
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
    top: 327%;
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
        <img src="https://img.freepik.com/premium-photo/clothes-hanging-rack-pastel-beige-white-colors-3d-rendering-studio-store_576429-1530.jpg?w=740" alt="">
    </div>

    <h1 id="h1">KURTIS</h1>
    <table class="t1">
        <tr>
            <td>
                <div class="a">
                    <img src="https://th.bing.com/th/id/OIP.Sl-1ZVnwq0HcFgjz4bpRpgHaLH?w=204&h=306&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                        <div class="aa">
                            <a href="payment1.html" onclick="showForm()">BUY</a>
                        </div>
                    <h2>Price: Rs.500</h2>
                </div>
                </td>
            
                <td>
                <div class="b">
                    <img src="https://th.bing.com/th/id/OIP.nlgkcItaU-QcNYP61ZLJ9AHaLH?w=204&h=306&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                    <div class="bb">
                            <a href="payment1.html" onclick="showForm()">BUY</a>
                        </div>
                    <h2>Price: Rs.800</h2>
                </div>
            </td>
            <td>
                <div class="c">
                    <img src="https://th.bing.com/th/id/OIP.oaLfI2hAmIu_XAr57x5vwAHaLH?w=204&h=306&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                     <div class="cc">
                            <a href="payment1.html" onclick="showForm()">BUY</a>
                        </div>
                    <h2>Price: Rs.600</h2>
                </div>
            </td>
            <td>
                <div class="d">
                    <img src="https://i.etsystatic.com/18280828/r/il/e862de/2879009882/il_1140xN.2879009882_o9l8.jpg" alt=""style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                    <div class="dd">
                            <a href="payment1.html" onclick="showForm()">BUY</a>
                        </div>
                    <h2>Price: Rs.1600</h2>
                </div>
            </td>
            <td>
                <div class="e">
                    <img src="https://www.parivarceremony.com/media/catalog/product/cache/62408a38a401bb86dbe3ed2f017b539f/p/r/prc2387.jpg" alt="" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                    <div class="ee">
                            <a href="payment1.html" onclick="showForm()">BUY</a>
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
                            <a href="payment1.html" onclick="showForm()" style="background-color: violet; color: black;">BUY</a>
                        </div>
                    <h2>Price: Rs.2500</h2>
                </div>
                </td>
                <td>
                <div class="b1">
                    <img src="https://cdn.sareeka.com/image/data2020/embroidered-silk-saree-141031.jpg" alt="" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                    <div class="bb1">
                            <a href="payment1.html" onclick="showForm()" style="background-color: violet; color: black;">BUY</a>
                        </div>
                    <h2>Price: Rs.2200</h2>
                </div>
            </td>
            <td>
                <div class="c1">
                    <img src="https://image.wedmegood.com/resized-nw/1300X/wp-content/uploads/2019/07/1568396426_A_R_Wed32.jpg" alt="" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                    <div class="cc1">
                            <a href="payment1.html" onclick="showForm()"style="background-color: violet; color: black;">BUY</a>
                        </div>
                    <h2>Price: Rs.3000</h2>
                </div>
            </td>
            <td>
                <div class="d1">
                    <img src="https://th.bing.com/th/id/R.561c38b08effd1dd858e280fe96d8a8d?rik=KZz3UdLtSyDXnQ&riu=http%3a%2f%2ftamarindweddings.com%2fblog%2fwp-content%2fuploads%2f2016%2f02%2f5-112.jpg&ehk=VZRryA1DEqH3%2fX8DJdubv2VXcs739gxrMaWsWjoJ6Nw%3d&risl=&pid=ImgRaw&r=0" alt="" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                    <div class="dd1">
                            <a href="payment1.html" onclick="showForm()" style="background-color: violet; color: black;">BUY</a>
                        </div>
                    <h2>Price: Rs.1000</h2>
                </div>
            </td>
            <td>
                <div class="e1">
                    <img src="https://stylesatlife.com/wp-content/uploads/2019/05/Rakul-Preet-Singh-in-a-Kanchipuram-Saree.jpg" alt="" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                    <div class="ee1">
                            <a href="payment1.html" onclick="showForm()"style="background-color: violet; color: black;">BUY</a>
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
                            <a href="payment1.html" onclick="showForm()"style="background-color: orange; color: black;">BUY</a>
                        </div>
                    <h2>Price: Rs.2000 </h2>
                   </div>
            </td>
            <td>
                <div class="b2">
                    <img src="https://www.omsara.co.uk/wp-content/uploads/4705.--scaled.jpg" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 250px; height: 250px;">
                    <div class="bb2">
                            <a href="payment1.html" onclick="showForm()"style="background-color: orange; color: black;">BUY</a>
                        </div>
                    <h2>Price: Rs.3500 </h2>
                   </div>
            </td>
            <td>
                <div class="c2">
                    <img src="https://www.omsara.co.uk/wp-content/uploads/A3F5E799-1086-4409-9A18-CCF045C9D924.jpeg" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 250px;height: 250px;">
                    <div class="cc2">
                            <a href="payment1.html" onclick="showForm()"style="background-color: orange; color: black;">BUY</a>
                        </div>
                    <h2>Price: Rs.5000 </h2>
                   </div>
            </td>
            <td>
                <div class="d2">
                    <img src="https://akm-img-a-in.tosshub.com/sites/gloss99/resources/201912/photo_gallery/anushree-reddy-_122419042358.jpg" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 250px;height: 250px;">
                    <div class="dd2">
                            <a href="payment1.html" onclick="showForm()"style="background-color: orange; color: black;">BUY</a>
                        </div>
                    <h2>Price: Rs.5500 </h2>
                   </div>
            </td>
            <td>
                <div class="e2">
                    <img src="https://i.pinimg.com/originals/c6/80/d5/c680d568868d92894fc1b908a0abb46b.jpg" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 250px;height: 250px;">
                    <div class="ee2">
                            <a href="payment1.html" onclick="showForm()"style="background-color: orange; color: black;">BUY</a>
                        </div>
                    <h2>Price: Rs.4000 </h2>
                   </div>
            </td>
        </tr>
       </table>

       <h1 id="h13">FOOTWEARS</h1>
       <div class="ab">
        <div class="a3">
            <img src="https://i.pinimg.com/originals/87/5c/6e/875c6ecfe9638c55311ce6aba124b85e.jpg" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 150px; height:150px;">
           </div>
           <div class="b3">
            <img src="https://images-na.ssl-images-amazon.com/images/I/71l46PtMqcL.jpg" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 150px; height: 150px;">
           </div>
       </div>

       <div class="cd">
        <div class="c3">
            <img src="https://i5.walmartimages.com/asr/f65fae5b-793a-484c-acaa-d8c1a497c7b2_1.f7b585611417fa96745732f4018cd50f.jpeg?odnWidth=1000&odnHeight=1000&odnBg=ffffff" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 150px;height: 150px;">
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
            <img src="https://th.bing.com/th/id/R.fdaa34208157cd895fa510d26b962a62?rik=KvXmcL77E%2bsMdg&riu=http%3a%2f%2fsauvarnajewelry.files.wordpress.com%2f2012%2f04%2fdiamond-choker-set-zoom.jpg&ehk=qIn3MaRHj3uH6meg99RIW5HW5KqNvWoCuq3ABTxIgag%3d&risl=&pid=ImgRaw&r=0" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 150px;height: 150px;">
           </div>
           <div class="d4">
            <img src="https://www.southjewellery.com/wp-content/uploads/2020/04/diamond-emerald-bangles-scaled-e1585932575233.jpg" alt="no image" style="border: 7px solid rgb(27, 5, 39); width: 150px;height: 150px;">
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
            <td>📍No:6, 4th Street, Anna Salai</td>
        </tr>
        <tr>
            <td>OMR,Chennai-600057, TamilNadu, India.</td> 
        </tr>
        <tr>
            <td>📞+919940075895</td>
        </tr>
        <tr>
            <td>📧joshnajivi2515@gmail.com</td>
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