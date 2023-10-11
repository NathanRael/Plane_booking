<?php
require  "./src/php/header.php";
require './src/php/flight_list.php';
$subscriber_email = get_email();

?>

        <div class="container-fluid text-center text-light mb-5 mb-sm-0" style="padding-top: 176px;">
            <h1 class="h1-text">LET'S TRAVEL <span class="deco-1">ABROAD</span></h1>
        </div>
        <div class="text-light">
        </div>

        <form action="" method="post" class="container-fluid secondary-bg rounded-4 p-3 mb-4" style="margin-top: 270px;">
            <div class="row gy-5 justify-content-center text-light">
                <div class="col-lg-5 text-center text-lg-start">
                    <div class="row  gy-3 text-light">
                        <div class="col-lg-5" >
                            <div class="input-group mx-auto" >
                                <div class="input-group-text ">From</div>
                                <input class="form-control text-light" type="text" name="departureName" id="" placeholder="" >
                            </div>
                        </div>
                        <div class="col-lg-2 d-none d-lg-block  bg-primary rounded-5 p-2  d-flex justify-content-center aling-item-center" style="width:45px;">
                            <div class="text-center">
                                <i class="bi bi-arrow-left-right text-light" style="transform: scale(1.2);"></i>
                            </div>

                        </div>
                        <div class="col-lg-5" >
                            <div class="input-group mx-auto">
                                <div class="input-group-text ">To</div>
                                <input class="form-control text-light" type="text" name="departureName" id="" placeholder="" >
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 text-center text-lg-start">
                    <div class="row gy-3 justify-content-center">
                        <div class="col-lg-8">
                            <div class="input-group"  >
                                <div class="input-group-text text-dark"><i class="bi bi-calendar " style="transform:scale(1.4);"></i></div>
                                <input class="form-control text-light" type="date" name="departureName" id="" placeholder="">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group outline-0">
                                <div class="input-group-text text-dark"><i class="bi bi-person " style="transform:scale(1.4);"></i></div>
                                <select name="" id="" class="form-select text-light">
                                    <option value="1">1</option>
                                    <option value="1">2</option>
                                    <option value="1">3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 text-center text-lg-start">
                    <a href="#" class="btn btn-primary rounded-4">Search flight</a>
                </div>
            </div>
        </form> 
    </header>
    <section class="flight-list container-fluid text-light">
        <h1 class="h1-text my-5 py-5 text-center">Flight Lists</h1>
        <div class="container-fluid mb-5">
            <table class="table table-striped table-hover " data-bs-theme="dark">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Name</th>
                        <th scope="col">Departure/Destination</th>
                        <th scope="col">Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($flight_lists as $k => $flight): ?>
                        <tr class="text-center aling-item-center">
                            <td> <i class="bi bi-airplane"></i> <?= $flight['name'] ?></td>
                            <td>
                                <?= $flight['departure'] ?>
                                Icon
                                <?= $flight['destination']?>
                            </td>
                            <td><?= $flight['date'] ?></td>
                            <td>
                                <?php if (!$flight['booked']): ?>
                                    <a class="btn btn-sm btn-primary rounded-3" href="?index=<?= htmlentities($k)+1 ?>"><i class="bi bi-bookmark"></i> Book</a>
                                <?php else: ?>
                                    <a class="btn btn-sm btn-success rounded-3" href="?index=<?= htmlentities($k)+1 ?>"><i class="bi bi-bookmark-check"></i> Booked</a>
                                <?php endif; ?>
                                
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
    <?php require './src/php/subscriber.php';?>
    
</body>
</html>