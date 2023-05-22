<?php

class Movie {
  public $poster;
  public $title;
  public $genre;
  public $duration;

  function __construct($_poster, $_title, $_genre, $_duration)
  {
    $this->poster = $_poster;
    $this->title = $_title;
    $this->genre = $_genre;
    $this->duration = $_duration;
  }

  public function getDuration() {
    return $this->duration . " min";
  }
}