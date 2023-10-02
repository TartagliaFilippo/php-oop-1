<?php
/**
 * *Class Movie
 * Define a movie
 */
class Movie extends Production
{
  public $published_year;

  public $running_time;

  public function __construct(
    string $genre,
    string $title,
    string $description,
    int $published_year,
    int $running_time,

  ) {
    parent::__construct($genre, $title, $description);
    $this->published_year = $published_year;
    $this->running_time = $running_time;
  }
  public function getDetails()
  {
    return "
    <strong>Genere:</strong> $this->genre, 
    <strong>Titolo:</strong> $this->title, 
    <strong>Descrizione:</strong> $this->description, 
    <strong>Anno di pubblicazione:</strong> $this->published_year,
    <strong>Anno di pubblicazione:</strong> $this->running_time";
  }
}