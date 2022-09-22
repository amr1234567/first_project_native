<?php
include_once 'models/series.php';

$series=new series();
$conn=$series->connect();
$ok=0;
$result=$series->show_All($conn);
while ($row=mysqli_fetch_array($result)) {
    if (strtolower($row['Name'])==strtolower($_POST['search'])) {
        header("location:front/page.php?id=".$row['ID']);
        $ok=1;
}
}
if ($ok==0) {
    echo "sorry it is not a series valid";
}




?>