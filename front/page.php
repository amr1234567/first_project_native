<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body style="color:white" class="p-3 mb-2 bg-warning  bg-dark">
<div class="row">
          <nav class="navbar bg-light">
            <div class="container-fluid">
              <a href="home.php" class="navbar-brand" >HOME</a>
              <form class="d-flex" role="search" action="../search.php" method="post">
                <input  name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-blue" type="submit">Search</button>
              </form>
            </div>
          </nav>
        </div><br><br><br>
    <?php
include_once '../models/series.php';
$series=new series();
$conn=$series->connect();

include_once '../models/category.php';
$category=new category();
$connection=$category->connect();

$result=$series->show_once($conn,$_GET['id']);

while($row=mysqli_fetch_array($result)){
    $id=$row['ID'];
    $name=$row['Name'];
    $rate=$row['Rate'];
    $category_id=$row['category_id'];
    $languege_id=$row['languege_id'];
    $year_of_pro=$row['year_production'];
    $image_source=$row['image'];
}
$result2=$category->get_once($connection,$category_id);
while($row2=mysqli_fetch_array($result2)){
    $name_cat=$row2['Name'];}
?>
<div class="container">
  <div class="row">
    <div class="col">
      <img src="<?php echo $image_source; ?>" class="rounded float-right" alt="...">
    </div>
    <div class="col-lg -8">
      <h1><?php echo $name;?></h1><hr>
      <h3>Rate : <?php echo $rate;?> /10</h3><hr>
      <h4>Categories : <?php echo $name_cat;?> </h4><hr>
      <h4>Year Of Production : <?php echo $year_of_pro;?> </h4><hr>
    </div>
  </div>
</div>



</body>
</html>