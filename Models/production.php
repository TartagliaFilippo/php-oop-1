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
    return "
    <p><strong>Genere:</strong> $this->genre</p> 
    <h5><strong>Titolo:</strong> $this->title</h5> 
    <p><strong>Descrizione:</strong> $this->description</p>";
  }
}