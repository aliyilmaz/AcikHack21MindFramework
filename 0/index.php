<?php

require './Mind.php';

$conf = array(
    'host'      =>  'localhost',
    'dbname'    =>  'mydb',
    'username'  =>  'root',
    'password'  =>  ''
);

$Mind = new Mind($conf);

/* -------------------------------------------------------------------------- */
/*                                  ANASAYFA                                  */
/* -------------------------------------------------------------------------- */
$Mind->route('/', 'app/views/welcome');

/* -------------------------------------------------------------------------- */
/*                                   ROTALAR                                  */
/* -------------------------------------------------------------------------- */
// $Mind->route('test', 'app/views/rotalar/test0');
// $Mind->route('test', ['app/views/rotalar/test0', 'app/views/rotalar/test1']);
// $Mind->route('test', 'app/views/rotalar/test0', 'app/views/rotalar/test1');
// $Mind->route('test', 'app/views/rotalar/test0', ['app/views/rotalar/test1', 'app/views/rotalar/test2']);
// $Mind->route('test', ['app/views/rotalar/test0', 'app/views/rotalar/test1'], ['app/views/rotalar/test2', 'app/views/rotalar/test3']);
// $Mind->route('test', 'app/views/rotalar/test0', 'app/controller/rotalar/Test0Controller:listele');
// $Mind->route('test', 'app/views/rotalar/test0', 'app/controller/rotalar/Test0Controller:listele@ekle');
// $Mind->route('test', 'app/views/rotalar/test0', ['app/controller/rotalar/Test0Controller:listele@ekle', 'app/controller/rotalar/Test1Controller:listele@ekle']);

// ön bellek (app/controller/rotalar/Test2Controller:ekle) parametrelerinde sadece post edilenler yorumlanabilir
// $Mind->route('test', 'app/views/rotalar/test2', 'app/controller/rotalar/Test2Controller:ekle');


// gruplanmış rotalar
// $Mind->route('test', 'app/views/rotalar/group0');

