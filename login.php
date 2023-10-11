<?php
require './src/php/functions.php';

$is_input_empty = empty($_POST['user_log_name']) && empty($_POST['user_log_password']);
$file_path = __DIR__ . DIRECTORY_SEPARATOR . 'src'. DIRECTORY_SEPARATOR . 'data'. DIRECTORY_SEPARATOR .'user_info';
$file = file_get_contents($file_path);

if (!$is_input_empty){
    $name = $_POST['user_log_name'];
    $password = $_POST['user_log_password'];
    $user_info = load_user_info();
    if (!empty($file)){
        if ($user_info[1] === $name && $user_info[2] == $password){
            header('Location: /index.php');
            exit();
        }else{
            echo dump('wrong identifications');
        }
    }else{
        echo dump("This account is not registred yet");
    }


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
            <h1 class="h2-text text-center text-light" >Welcome</h1>
            <i class="bi bi-airplane text-light text-center" style="font-size: 24px;"></i>
        </div>

        <form action="" method="post" class="text-light secondary-bg">
            <div class="form-floating mb-4 ">
                <input type="text" name="user_log_name" class="form-control border-0 rounded-0 secondary-bg border-bottom text-light" name="" id="floatingInput" placeholder="Name" >
                <label for="floatingInput" class="text-light ">Name</label>
            </div>
            <div class="form-floating mb-4 ">
                <input type="password" name="user_log_password" class="form-control border-0 rounded-0 secondary-bg text-light border-bottom position-relative" name="" id="floatingInput" placeholder="Password" >
                <i class="bi bi-eye position-absolute top-50 end-0" type="button"></i>
                <label for="floatingInput" class="text-light ">Password</label>
            </div>
            <a href="" class="link">Forgot password ?</a>
            <div class="d-grid gap-3 mt-4">
                <button type="submit" class="btn btn-primary rounded-4">Login</button>
                <a class="btn btn-outline-primary rounded-4" href="./signup.php">Signup</a>
            </div>
        </form>
    </div>
</body>
</html>