<?php
include_once 'database.php';

class series extends database{
    public function add($c,$name,$rate,$year_pro,$category_id,$lang_id,$image){
        $sql="insert into series (Name, Rate, year_production, category_id,languege_id,image) values('".$name."','".$rate."','".$year_pro."','".$category_id."','".$lang_id."','".$image."')";
        return mysqli_query($c,$sql);
    }
    public function show_All($c){
    $sql="select * from  series";
    return  mysqli_query($c,$sql);

}

public function show_once($c,$id){
    $sql="select * from  series where ID=".$id;
    return  mysqli_query($c,$sql);
}

}
?>