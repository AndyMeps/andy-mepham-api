<?php

namespace AppBundle\Models;


class Skill
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $level;

    /**
     * Skill constructor.
     * @param $title
     * @param $level
     */
    function __construct($title, $level)
    {
        $this->title = $title;
        $this->level = $level;
    }
}