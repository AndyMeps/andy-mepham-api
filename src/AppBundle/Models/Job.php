<?php

namespace AppBundle\Models;


use Symfony\Component\Validator\Constraints\Date;

class Job
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $company;

    /**
     * @var string
     */
    public $location;

    /**
     * @var Date
     */
    public $startDate;

    /**
     * @var Date
     */
    public $endDate;

    /**
     * @var string
     */
    public $description;

    /**
     * Job constructor.
     * @param $title
     * @param $company
     * @param $location
     * @param $startDate
     * @param $endDate
     * @param $description
     */
    function __construct($title, $company, $location, $startDate, $endDate, $description)
    {
        $this->title = $title;
        $this->company = $company;
        $this->location = $location;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->description = $description;
    }

}