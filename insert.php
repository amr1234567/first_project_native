<?php
include_once 'models/series.php';

$series=new series();
$conn=$series->connect();
if (!$conn) {
    die("connection failed : ".mysqli_connect_error());
}

$result=$series->add($conn,$_POST['name'],$_POST['rate'],$_POST['year_of_production'],$_POST['category_id'],$_POST['lang_id'],$_POST['image']);

if($result){
    header('location:front/home.php?reg=1');
}else{
    echo "Error: ". $sql ."<br>" . mysqli_error($ccon);
}

?>