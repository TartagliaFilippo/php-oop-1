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
  /**
   * Summary of getDetails
   * @return string
   */
  public function getDetails()
  {
    return "
    <p><strong>Genere:</strong> $this->genre</p> 
    <h5><strong>Titolo:</strong> $this->title</h5> 
    <p><strong>Descrizione:</strong> $this->description</p> 
    <p><strong>Anno di pubblicazione:</strong> $this->published_year</p>
    <p><strong>Anno di pubblicazione:</strong> $this->running_time</p>";
  }
}