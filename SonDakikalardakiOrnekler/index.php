<?php

require './Mind.php';

$conf = array(
    'host'      =>  'localhost',
    'dbname'    =>  'mydb',
    'username'  =>  'root',
    'password'  =>  ''
);

$Mind = new Mind($conf);

$Mind->route('/', 'app/views/welcome');
$Mind->route('get_contents', 'app/methods/get_contents');
$Mind->route('coordinatesMaker', 'app/methods/coordinatesMaker');
$Mind->route('is_distance', 'app/methods/is_distance');
$Mind->route('is_blood', 'app/methods/is_blood');
