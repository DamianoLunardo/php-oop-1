<?php

require_once __DIR__  . '/Production.php';

class Serie extends Production {
    public $season;

    function __construct($title, $language, $rating, $season) {
        parent::__construct($title, $language, $rating);
        $this->season = $season;
    }

    function getSeason() {
        return $this->season;
    }
}

