<?php

require __DIR__ . './Models/production.php';
require __DIR__ . './Models/movie.php';
require __DIR__ . './Models/genre.php';
require __DIR__ . './Models/tvserie.php';

$production_test = new Production(
  'horror',
  'matrix',
  'film ambientato nel 2.....',
);

$tv_series_test = new TvSerie(
  'commedia',
  'natale bla bla',
  'film ambientato nel 2.....',
  1990,
  2003,
  1268,
  18,
);

$movie_test = new Movie(
  'commedia',
  'natale bla bla',
  'film ambientato nel 2.....',
  1990,
  120,
);

$productions_list = [
  $production_test,
  $tv_series_test,
  $movie_test
];