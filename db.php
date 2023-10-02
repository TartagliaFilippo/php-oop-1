<?php

require __DIR__ . './Models/movie.php';
require __DIR__ . './Models/genre.php';
require __DIR__ . './Models/production.php';

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

$production_test = new Production(
  'horror',
  'matrix',
  'film ambientato nel 2.....',
);

$movies = [$movie_1, $movie_2];