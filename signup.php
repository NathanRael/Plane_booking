<?php
require './src/php/functions.php';
$is_input_empty = empty($_POST['user_email']) && empty($_POST['user_name']) && empty($_POST['user_password']);
if ($is_input_empty === false){
    $email = $_POST['user_email'];
    $name = $_POST['user_name'];
    $password = $_POST['user_password'];
    save_user_info($email, $name, $password);
    header('Location:/login.php');
    exit();
}else{
    echo dump("Empty");
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./src/framework/bootstrap.min.css">
        <link rel="stylesheet" href="./src/framework/bootstrap-icons.css">
        <link rel="stylesheet" href="./src/css/style.css">
        <script src="./src/framework/bootstrap.bundle.min.js"></script>
    
        <title>Login</title>
    </head>
<body>
    <div class="container m-auto secondary-bg rounded-4 p-5 position-absolute top-50 start-50 translate-middle" style="width: 400px;">
        <div class=" mx-auto mb-4 d-flex flex-column aling-item-center justify-content-center" style="width: max-content;">
            <h1 class="h2-text text-center text-light" >Signup</h1>
        </div>

        <form action="" method="post" class="text-light secondary-bg">
            <div class="form-floating mb-4 ">
                <input type="email" name="user_email" class="text-light form-control border-0 rounded-0 secondary-bg border-bottom" name="" id="floatingInput" placeholder="Email" require >
                <label for="floatingInput" class="text-light ">Email</label>
            </div>
            <div class="form-floating mb-4 ">
                <input type="text" name="user_name" class="text-light form-control border-0 rounded-0 secondary-bg border-bottom" name="" id="floatingInput" placeholder="Name" require >
                <label for="floatingInput" class="text-light ">Name</label>
            </div>
            <div class="form-floating mb-4 ">
                <input type="password" name="user_password" class="text-light form-control border-0 rounded-0 secondary-bg border-bottom position-relative" name="" id="floatingInput" placeholder="Password" require >
                <i class="bi bi-eye position-absolute top-50 end-0" type="button"></i>
                <label for="floatingInput" class="text-light ">Password</label>
            </div>
            <div class="d-grid gap-3 mt-5">
                <button type="submit" class="btn btn-primary rounded-4 ">Signup</button>
                <a class="btn btn-outline-primary rounded-4" href="./login.php">Login</a>
            </div>
        </form>
    </div>
</body>
</html>