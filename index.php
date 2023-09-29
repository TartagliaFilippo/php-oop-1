<?php

require __DIR__ . './Models/movie.php';

$new_movie = new movie(
  'Horror',
  120,
  'Non aprite quella porta',
);

var_dump($new_movie);