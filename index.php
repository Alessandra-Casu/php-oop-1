<?php
include __DIR__ . '/classes/Movie.php';

$film1 = new Movie('La vita è bella', 'Benigni');
// var_dump($film1);
echo $film1 -> getFullName();

echo '<br>';

$film2 = new Movie('E\' stata la mano di Dio', 'Sorrentino');
// var_dump($film1);
echo $film2 -> getFullName();


echo '<br>';
echo '<br>';
echo 'Numero di oggetti tipo Movie creati: ' . Movie::$counter;
echo '<br>';
