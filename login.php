<?php
$host="localhost";
$user="root";
$pass="";
$db="user_db";
$conn = mysqli_connect($host,$user,$pass,$db);

if(isset($_POST['submit'])){
  
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    
    $pass=md5($_POST['password']);
    
   
   
    
    $select="SELECT * FROM user_form WHERE email='$email' && password='$pass' ";
    $result=mysqli_query($conn,$select);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_array($result);
        if($row['user_type']=='admin'){
            header('location:dashboard.php');
        }
        else if($row['user_type']=='user'){
            header('location:home.php');
        }
       
     
        
     
    }
    else{
        $SESSION['message']='incorrect email or password';
    }
           

};


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="css/design2.css">
</head>
<body>

    <div class="container">
        <form action="" method="post" class="login-email">
        <p>Login</p>
        <?php

             if(isset($error)){
                foreach( $error as  $error){
                    echo '<span class="error-msg">'.$error.'</span>';


                };

             };

             ?>
            <div class="input-group"> 
                <input type="email"   pattern=".+@gmail\.com"  placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="Password" placeholder="Password"   name="password"  required>
            </div>
            <div class="input-group">
                <input type ="submit" name="submit"  value="Login" class="btn">
           
            </div> 
            <p class="login-register-text">Don't have an account?<a href="register.php"> Register Here</a></p>

           
            
        
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>