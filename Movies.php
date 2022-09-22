<?php

class Movie {
    public $title;
    public $author;
    public $year;

    public function __construct($title, $author, $year = null)
    {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }
    public function getMovie() {
       return $this->title . $this->author . $this->year . "<br>";

    }
}

