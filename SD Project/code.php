<?php
if(isset($_POST['Add Package']))
{
    $place = $_POST['place'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $image=$_FILES['image'] ['name'] ;
    $path=" ";
    $path="images";
    $image_ext = pathinfo($image,PATHINFO_EXTENSION);
    $filename = time().'.' .$image_ext;
}
?>