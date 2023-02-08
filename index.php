<?php

require $_SERVER['DOCUMENT_ROOT'] . '/Fibonacci/includes/fibonacci.php';

$fibonacci = new Fibonacci();
$fibonacci->fibonacci_suite(40);
$fibonacci->show_array();
