<?php
/**
 * *Class Movie
 * Define a movie
 * @author Filippo Tartaglia
 */
class movie
{
  public $genre;

  public $length;

  public $title;



  public function __construct(

    string $genre,
    string $length,
    string $title,

  ) {
    $this->genre = $genre;
    $this->length = $length;
    $this->title = $title;
  }
}