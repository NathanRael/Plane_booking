<?php
require './src/php/header.php';
require_once './src/php/flight_list.php';
$name = $_COOKIE['subscriber_email'] ?? '';
$user_info = load_user_info();
?>

<div class="container-fluid text-center text-light mb-5 mb-sm-0" style="padding-top: 176px;">
    <?php if (!empty($name)): ?>
        <div class="container-lg">
            <div class="row gy-4">
                <div class="col-md-4">
                    <img src="./src/images/user.jfif" alt="" class="card-img-thumbnail rounded-circle" style="width:128px">
                    <h1 class="h2-text text-light mt-3"><?= ucwords($user_info[1]) ?></h1>     
                    <div class="container">
                        <p>Email : <?= $user_info[0] ?></p>
                        <p>Password : <?= $user_info[2] ?></p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <div class="h2-text text-light">Booking informations</div>
                        </div>
                            <?php if (!empty($booked_list)): ?>
                                <div class="card-body d-inline-flex justify-content-evenly">
                                    <?php foreach ($booked_list as $k => $element): ?>
                                        <div class="text-light"><?=$element?></div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="card-footer">
                                    <a class="btn btn-danger" href='?canceled=true'>Cancel</a>
                                </div>
                            <?php else: ?>
                                <div class="card-body d-inline-flex justify-content-evenly">
                                    <div class="text-danger">You don't have any reservations yet</div>
                                </div>
                                <div class="card-footer">
                                    <a class="btn btn-success" href="./index.php">Book now</a>
                                </div>
                            <?php endif; ?>

                    </div>

                </div>
            </div>
        </div>
    <?php else: ?>
        <?php require './src/php/subscriber.php';?>
    <?php endif; ?>
</div>