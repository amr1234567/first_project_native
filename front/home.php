<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
        <title>WATCH</title>

</head>
<body class="p-3 mb-2 bg-warning  bg-dark">
    <div class="container text-center p-3 mb-2 bg-info text-dark">
        <div class="row">
            <div class="col-lg">
             <h1> اتفرج ببلاش ي اخويا .... موقع اخوك</h1>
            </div> 
        </div>
    </div>
    <br><br>
    <div class="container ">
        <div class="row">
          <nav class="navbar bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" >HOME</a>
              <a class="navbar-brand" href="lang_page.php?lang=1">AR Series</a>
              <a class="navbar-brand" href="lang_page.php?lang=2">En Series</a>
              <a class="navbar-brand" href="../add_series.php">insert series</a>
              <form class="d-flex" role="search" action="../search.php" method="post">
                <input  name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-blue" type="submit">Search</button>
              </form>
            </div>
          </nav>
        </div>
                <div class="container" style="padding-top:20px">
                <div class="row" style="padding-top:20px">
                <?php
                include_once '../models/series.php';
                $series=new series();
                $conn=$series->connect();
                $result=$series->show_All($conn);
                while($row=mysqli_fetch_array($result)){
                  $name=$row['Name'];
                  $rate=$row['Rate'];
                  $image_source=$row['image'];
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

                ?>
                </div>
              </div>
      </div>
</body>

</html>
