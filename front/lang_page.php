<?php
include_once '../models/series.php';
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
    <body class="p-3 mb-2 bg-black text-dark">
        <div class="container text-center p-3 mb-2 bg-info text-dark">
            <div class="row">
                <div class="col-lg">
                <h1>عيش حياتك واستمتع</h1>
                </div> 
            </div>
        </div>
        <br><br>
        <div class="row">
          <nav class="navbar bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="home.php" >HOME</a>
              <form class="d-flex" role="search" action="../search.php" method="post">
                <input  name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-blue" type="submit">Search</button>
              </form>
            </div>
          </nav>
        <main><div class="container" style="padding-top:20px">
                <div class="row" style="padding-top:20px">
                <?php
                include_once '../models/series.php';
                // include_once '../models/languege.php';
                // $series_lang=new languege();
                // $connec=$series_lang->connect();
                // $result2=$series_lang->get($connec);
                $series=new series();
                $conn=$series->connect();
                $result=$series->show_All($conn);
                while($row=mysqli_fetch_array($result)){
                    $name=$row['Name'];
                    $rate=$row['Rate'];
                    $image_source=$row['image'];
                    if ($row['languege_id']==$_GET['lang']) {
                    ?>


          <div class="card col-lg-3 bg-dark ">
          <img src="<?php echo $image_source;?>" class="card-img-top" alt="...">
          <div class="card-body ">
            <h5 class="card-title" style="color:white" ><?php echo $name;?></h5>
            <p class="card-text" style="color:white">Rate : <?php echo $rate;?> /10</p>
            <a href="page.php?id=<?php echo $row['ID'] ?>" class="card-link stretched-link"><button class="btn btn-primary me-md" type="button">View More Details</button></a>
            
          </div>
        </div>


                <?php
                }
                }
                ?>
                </div>
              </div>
        </main>
</body>
</html>