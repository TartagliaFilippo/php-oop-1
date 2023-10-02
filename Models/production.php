<?php

/**
 * *Class Production
 * @author Filippo Tartaglia
 */
class Production
{

  public $genre;

  public $title;

  public $description;

  public function __construct(
    string $genre,
    string $title,
    string $description
  ) {
    $this->genre = $genre;
    $this->title = $title;
    $this->description = $description;
  }

  public function getDetails()
  {
    return "$this->genre,  $this->title, $this->description";
  }
}