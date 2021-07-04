<?php

class Movie
{
    public $title;
    public $image;
    public $language;
    public $year;
    public $description;

    public function __construct(string $title /* string $image */, string $language, string $year, string $description)
    {
        $this->title = $title;
        /* $this->image = $image; */
        $this->language = $language;
        $this->year = $year;
        $this->description = $description;
    }

    /**
     * getLanguage
     * get the language of the movie
     *
     * @return void
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * setLanguage
     * set the language of the movie
     * @param string $language
     * @return void
     */
    public function setLanguage(string $language)
    {
        return $this->language = $language;
    }
}
