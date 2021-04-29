<?php

$left = 'tle>';
$right = '</tit';
$url = 'https://www.trtdinle.com/';

$data = $this->get_contents($left, $right, $url);

$this->print_pre($data);

?>