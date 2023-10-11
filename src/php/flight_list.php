<?php
require_once './src/php/functions.php';

$index = $_GET['index'] ??  load_last_index();
$flight_lists = [
    [
        'name' => 'Boeing 737',
        'departure' => 'Tananarive',
        'destination' => 'Europe',
        'date' => '12 October 2023',
        'booked' => false
    ],
    [
        'name' => 'Airbus 224',
        'departure' => 'Tananarive',
        'destination' => 'USA',
        'date' => '13 October 2023 ',
        'booked' => false
    ],
    [
        'name' => 'Boeing 737',
        'departure' => 'USA',
        'destination' => 'Angleterre',
        'date' => '16 October 2023 ',
        'booked' => false
    ],
    [
        'name' => 'Boeing 737',
        'departure' => 'Tananarive',
        'destination' => 'Europe',
        'date' => '21 October 2023',
        'booked' => false
    ],
];

$flight_lists = book_flight($flight_lists, $index);
$booked_list = render_booked_list($flight_lists);

if (!empty($_GET['canceled'])){
    if ($_GET['canceled'] === 'true'){
        unset($booked_list);
        set_index(0); //supprime l'index dans le fichier
    }
}
// echo dump($booked_list);