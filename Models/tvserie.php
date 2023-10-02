<?php

/**
 * *Class TvSerie
 */

class TvSerie extends Production
{

  public $aired_from_year;

  public $aired_to_year;

  public $number_of_episodes;

  public $number_of_seasons;

  public function __construct(
    string $genre,
    string $title,
    string $description,
    int $aired_from_year,
    int $aired_to_year,
    int $number_of_episodes,
    int $number_of_seasons
  ) {
    parent::__construct($genre, $title, $description);
    $this->aired_from_year = $aired_from_year;
    $this->aired_to_year = $aired_to_year;
    $this->number_of_episodes = $number_of_episodes;
    $this->number_of_seasons = $number_of_seasons;
  }

  public function getDetails()
  {
    return "
    <strong>Genere:</strong> $this->genre, 
    <strong>Titolo:</strong> $this->title, 
    <strong>Descrizione:</strong> $this->description, 
    <strong>Prima messa in onda:</strong> $this->aired_from_year, 
    <strong>Trasmesso fino al:</strong> $this->aired_to_year, 
    <strong>Numero di episodi:</strong> $this->number_of_episodes, 
    <strong>Numero di stagioni:</strong> $this->number_of_seasons";
  }
}