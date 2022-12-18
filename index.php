

<?php
require 'connection.php';

if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $latitude=$_POST["latitude"];
    $longitude=$_POST["longitude"];
$query="INSERT INTO tb_data VALUES('','$name','$email','$latitude','$longitude')";
mysqli_query($conn,$query);
echo
"
<script>
alert('your bus location added succesfully');
document.location.href='data.php';
</script>
"
;
}

//this a code written by 3wb

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>current bus location</title>
    <link rel="stylesheet" href="design.css" />
</head>
<body onload ="getLocation();">
    <h1>Why to sign in</h1>
    <p>By signing in, your bus location will be available for the public. This can help people easily board your bus on time
    </p>
    <form class="myForm" action="" method ="post" autocomplete="off">
        <label for="">Name</label>
        <input type="text" name="name" required placeholder="enter your name"><br>
        <br>
        <label for="">Email</label>
        <input type="email" name="email" required placeholder="enter your email id"><br>
        <br>
        <input type="hidden" name="latitude" name="latitude" value="">
        <input type="hidden" name="longitude" name="longitude" value="">
        <button type=submit name="submit">Share your bus location</button>
    </form>
    <script type="text/javascript">
        function getLocation(){
            if(navigator.geolocation){
                navigator.geolocation.getCurrentPosition(showPosition,showError); 
            }

        }
        function showPosition(position){
            document.querySelector('.myForm input[name="latitude"]').value=position.coords.latitude;
            document.querySelector('.myForm input[name="longitude"]').value=position.coords.longitude;
        }
        function showError(error){
            switch(error.code){
                case error.PERMISSION_DENIED:
                    alert("You must Allow the Request for getting the bus live location T_T")
                    location.reload();
                    break;
            }
        }
        </script>
        <br>
        <button onclick="window.open('http://localhost/3wb/data.php')" class="otherbus">Find timing of other buses</button>
        
        
</body>
</html>