<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<?php
class database{
    public $server_Name = "localhost";
    public $user_name ="root";
    public $password ="";
    public $database_name ="database";
    public function connect(){
        $connect=mysqli_connect($this->server_Name,$this->user_name,$this->password,$this->database_name);
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connected successfully";
    return $connect;
    }
}

?>