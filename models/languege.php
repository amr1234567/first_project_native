<?php
include_once 'database.php';

class languege extends database{
    public function show($c){
        $sql ="select *from languege";
        return mysqli_query($c,$sql);
    }
    public function get($c,$id){
        $sql ="select *from languege where id=".$id;
        return mysqli_query($c,$sql);
    }
}


?>