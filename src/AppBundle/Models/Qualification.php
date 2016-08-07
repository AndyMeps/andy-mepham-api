<?php

namespace AppBundle\Models;


class Qualification
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $establishment;

    /**
     * @var int
     */
    public $yearFrom;

    /**
     * @var int
     */
    public $yearTo;

    /**
     * Qualification constructor.
     * @param $title
     * @param $establishment
     * @param $yearFrom
     * @param $yearTo
     */
    function __construct($title, $establishment, $yearFrom, $yearTo)
    {
        $this->title = $title;
        $this->establishment = $establishment;
        $this->yearFrom = $yearFrom;
        $this->yearTo = $yearTo;
    }
}