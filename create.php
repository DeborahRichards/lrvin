<?php

include('connect.php');

if(isset($_POST['submit'])){
    
 $name = $_POST["name"];
 $mobile = $_POST["mobile"];
 $date = $_POST["date"]; 
 $address = $_POST["address"];
 $gender = $_POST["gender"];
 $dropdown = $_POST["dropdown"];
 $note = $_POST["note"];
 
 $query = "INSERT INTO bookings (name,mobile,date,address,gender,dropdown,note) VALUES
 ('$name','$mobile','$date','$address,'$gender','$dropdown','$note')";

 $result = mysqli_query($connection, $query);

if($result){
    echo "product added to database";
}else{
    echo "something has gone wrong";
}


}



?>