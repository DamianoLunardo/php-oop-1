<?php

class Production {
    public $title;
    public $language;
    public $rating;

    function __construct($title, $language, $rating) {
        $this->title = $title;
        $this->language = $language;
        $this->rating = $rating;
    }

    function getTitle() {
        return $this->title;
    }

    function getLanguage() {
        return $this->language;
    }

    function getRating() {
        return $this->rating;
    }
}

