<?php
include_once 'database.php';
class category extends database{
    public function add($c,$name){
        $sql="insert into category (name,image) values('".$name."','".$image."')";
        return  mysqli_query($c,$sql);
    }


    public function get_all($c){
        $sql="select * from  category";
        return  mysqli_query($c,$sql);
    }

     public function get_once($c,$id){
        $sql="select * from  category where id=".$id;
        return  mysqli_query($c,$sql);
    }

    public function remove($c,$id){
        $sql="delete from  categories where id=".$id;
        return  mysqli_query($c,$sql);
    }

    public function update($c,$name,$id,$image=null){
        if ($image!=null) {
            $sql="update  categories  set name='".$name."' , image='".$image."' where id=".$id;
        }else{
        $sql="update  categories  set name='".$name."' where id=".$id;
        }
        return  mysqli_query($c,$sql);
    }
}

?>