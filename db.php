<?php

require __DIR__ . './Models/movie.php';
require __DIR__ . './Models/genre.php';

$genreList = ['Commedia', 'Horror'];

$movie_1 = new Movie(
  $genreList,
  120,
  'Non aprite quella porta',
);

$movie_2 = new Movie(
  $genreList,
  112,
  'A Natale con i tuoi',
);

$movies = [$movie_1, $movie_2];