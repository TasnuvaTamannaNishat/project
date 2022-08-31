<?php
$host ="localhost";
$username="root";
$password="";
$database="user_db";

$con = mysqli_connect($host,$username,$password,$database);
include('new.php');
if(!$con)
{
    die("Connection failed".mysqli_connect_error());
}
else 
{
    echo"Connected Successfully";
    if(isset($_POST['ap']))
{
    $place = $_POST['place'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $image=$_FILES['image'] ['name'] ;
    $path="../images";
    $image_ext = pathinfo($image,PATHINFO_EXTENSION);
    $filename = time().'.' .$image_ext;

    $pack_query="INSERT INTO packages 
    (place,price,description,image)  Values('$place','$price','$description','$filename')";

    $pack_query_run = mysqli_query($con,$pack_query);
   if($pack_query_run) {
    move_uploaded_file($_FILES['image']['tmp_name'],$path.'/'.$filename);
    redirect("admin_packages.php","Added Successfully");
   }

}
else 
{
redirect("admin_packages.php","Something went wrong");
}
}

?>