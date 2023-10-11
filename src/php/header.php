<?php 
require "functions.php";
// $_GET['index'] =  ;
if (!empty($_GET['logout'])){
    if ($_GET['logout'] === 'true'){
        // delete_user_info();  
        // set_index(0);//supprimer la dans "book"
        $_GET['canceled'] === 'true';//supprimer la reservation afficher dans le profil
        header('Location:/login.php');
        exit();
    }
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
    <!-- <script src="./src/js/main.js" defer></script> -->

    <title>Book</title>
</head>
<body >
    <header class="<?= is_header() ? 'header' : '' ?> px-md-5 vh-100">
        <nav class="navbar navbar-expand-md secondary-bg navbar-dark rounded-4  mx-md-5 mx-2 px-2 fixed-top mt-3" >
            <div class="container-fluid w-100">
                <a href="" class="navbar-brand text-light">AirBook</a>
                <button class="navbar-toggler" data-bs-target = "#navbar" data-bs-toggle="collapse" type="button">  <i class="bi bi-list"></i> </button>
                <div class="collapse navbar-collapse" id="navbar" >
                    <ul class="navbar-nav text-center justify-content-around mx-auto"  >
                        <?=  nav_item('/index.php', 'Book', is_nav_active('/index.php'))?>;
                        <?=  nav_item('/admin.php', 'Administrator', is_nav_active('/admin.php'))?>;
                        <?=  nav_item('/profil.php', 'Profil', is_nav_active('/profil.php'))?>;
                    </ul>
                    <div class="text-center">
                        <?php if (empty(load_user_info())): ?>
                            <a class="btn btn-primary rounded-4 px-4" href="./login.php">Login</a>
                        <?php else: ?>
                            <a class="btn btn-primary rounded-4 px-4" href="?logout=true">Logout</a>
                        <?php endif; ?>
                    </div>


                </div>                
            </div>

        </nav>