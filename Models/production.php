<?php

/**
 * *Class Production
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
}