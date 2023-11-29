<?php

require_once __DIR__  . '/Production.php';

class Movie extends Production {
    public $profit;
    public $duration;

    function __construct($title, $language, $rating, $profit, $duration) {
        parent::__construct($title, $language, $rating);
        $this->profit = $profit;
        $this->duration = $duration;
    }

    function getProfit() {
        return $this->profit;
    }

    function getDuration() {
        return $this->duration;
    }
}