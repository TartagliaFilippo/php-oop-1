<?php
/**
 * *Class Movie
 * Define a movie
 * @author Filippo Tartaglia
 */
class Movie
{
  public $genre;

  public $length;

  public $title;



  public function __construct(

    array $genres = null,
    float $length,
    string $title,

  ) {
    $this->genre = $genres;
    $this->length = $length;
    $this->title = $title;
  }
  public function getFullElement()
  {
    $genre_text = $this->getStringText();

    return " $genre_text, $this->length, $this->title ";
  }

  public function getStringText()
  {
    $genres_text = '';
    foreach ($this->genre as $genres) {
      $genres_text .= $genres . ' ';
    }
    return $genres_text;
  }
}