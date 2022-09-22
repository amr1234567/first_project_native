<?php
include_once 'models/category.php';
include_once 'models/languege.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post" enctype="multipart/form-data">

        <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">@</span>
  </div>
  <input type="text" class="form-control" name="name" placeholder="Series Name" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Rate</span>
  </div>
  <input type="text" name="rate" class="form-control" aria-label="Amount (to the nearest dollar)">
  <div class="input-group-append">
    <span class="input-group-text">/ 10</span>
  </div>
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">year</span>
  </div>
  <input type="text" class="form-control" name="year_of_production" placeholder="year_of_production" aria-label="Username" aria-describedby="basic-addon1">
</div>

<label for="basic-url">Image Name</label>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">image_name.jpg</span>
  </div>
  <input type="text" name="image" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div><br><br>


            <select class="form-control" id="inputGroupSelect01" name="category_id">
            <?php
            $category =new category();
            $conn=$category->connect();
            $result = $category->get_all($conn);
            while ($row=mysqli_fetch_array($result)) {
                echo "<option value=". $row['ID'].">". $row['Name']." </option>";
            }
            ?>
        </select><br><br><br>
        <select class="form-control" id="inputGroupSelect01" name="lang_id">
            
            <?php
            $lang =new languege();
            $conn=$lang->connect();
            $result = $lang->show($conn);
            while ($row=mysqli_fetch_array($result)) {
                echo "<option value=". $row['ID'].">". $row['Name']." </option>";
            }
            ?>
        </select><br><br>
        <button type="submit" class="btn btn-primary" name ="submit">Submit</button>
    </form>
</body>
</html>