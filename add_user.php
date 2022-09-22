<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="front/style/css.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" >
</head>
<body>
    <div class="sign">
    <form action="register.php" method="post">
        <!-- <input type="text" name="name" placeholder="write your name her"> -->

        <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">@</span>
  </div>
  <input type="text" class="form-control" name="name" placeholder="User Name" aria-label="Username" aria-describedby="basic-addon1">
</div><br>

        <div class="input-group mb-3">
        <input type="text" class="form-control" name="email" placeholder="write your email" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2">@example.com</span>
        </div>
        </div><br>

        <div class="input-group mb-3">
        <input type="password" class="form-control" name="email" placeholder="write your password" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2">Password</span>
        </div>
        </div><br>
        <select name="role" class="form-control">
            <option value="manger">Manger</option>
            <option value="watcher">Watcher</option>
        </select><br>
        <button  type="submit" class="btn btn-primary butt" name ="submit">Submit</button>


    </form>
    </div>


</body>
</html>

