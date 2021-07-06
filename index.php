<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <img class="bg" src="kgec.jpg" alt="KGEC">
    <div class="container">
    <h1>Welcome to KGEC US Travel Form</h1>
    <p>Enter your deatils and submit this form to confirm your participation in this trip</p>
    <p class="submitMsg">Thanks for submitting your form. We are happy to see you joining us for the US trip</p>
    <form action="index.php" method="POST">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="gender" id="gender" placeholder="Enter your gender">
        <input type="text" name="age" id="age" placeholder="Enter your age">
        <input type="email" name="email" id="email" placeholder="Enter your email">
        <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="write any other information here"></textarea>
        <button class="btn" name="submit">submit</button>
    </form>
    </div>
   
    <script src="index.js"></script>
    <!-- INSERT INTO `trip_form` (`S.no.`, `name`, `Gender`, `age`, `email`, `phone`, `other`, `dt`) VALUES (NULL, 'Amit Kumar Modi', 'male', '22', 'amitmodi@gmail.com', '6295903456', 'i am happy to go for this trip', current_timestamp()); -->
</body>
</html>

<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "us_trip";

$con = mysqli_connect($server,$username,$password,$db);

if($con){
    // echo "connection successful";
    ?> 
  
    <script>
        alert('connection successful');
    </script>
    <?php
}else{
    // echo "NO connection";
    die("No connection" . mysqli_connect_error());
}

 if(isset($_POST['submit'])){
     $name = $_POST['name'];
     $gender = $_POST['gender'];
     $age = $_POST['age'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $desc = $_POST['desc'];

     $insert_query = " insert into trip_form(name, gender, age, email, phone, desc) values ('$name','$gender','$age','$email','$phone','$desc')";

     $res = mysqli_query($con, $insert_query);


     if($res){
         ?>

         <script>
          alert("data inserted properly");
         </script>
         <?php
     }else{
        ?>

        <script>
         alert("data not inserted");
        </script>
        <?php
     }

 }
 
 
 ?>