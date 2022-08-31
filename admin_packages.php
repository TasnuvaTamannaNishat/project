<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="css/admin.css">

</head>

<body>
  <div class="container">


    <p class="login-text" style="font-size:40px; font-style:bold ;text-align:center"> Add package</p>


    <form action="code.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Place</label>
      <input type="text" name="place" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Price</label>
      <input type="text" name="price" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Description</label>
      <input type="text" name="description" class="form-control" id="exampleFormControlInput1" placeholder="">
    </div>
    
    <div class="mb-3">
      <label for="formFile" class="form-label">Choose pic</label>
      <input class="form-control" type="file" name="image" id="formFile">
    </div>
    <div class="mb-3">
    <button type="submit"class= "btn btn-primary" name="Add Package">Save</button>
    </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>