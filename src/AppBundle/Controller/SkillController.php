<?php

namespace AppBundle\Controller;

use AppBundle\Models\Skill;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class SkillController extends Controller
{
    /**
     * @var array
     */
    public $skills;

    /**
     * @Route("/skills", name="skills_get_all")
     * @Method("GET")
     * @return JsonResponse
     */
    public function getAll()
    {
        return new JsonResponse($this->skills);
    }

    /**
     * SkillController constructor.
     */
    public function __construct()
    {
        $this->skills = [new Skill('Symfony', 0)];

        /*
        let skills = [...this.getTopSkills(),
            new Skill('HTML5', 1),
            new Skill('CSS3', 1),
            new Skill('ES6', 0),
            new Skill('.NET Core', 0),
            new Skill('ASP.NET 5', 1),
            new Skill('NoSQL', 0),
            new Skill('MongoDB', 0),
            new Skill('NodeJS', 1),
            new Skill('Ruby', 0),
            new Skill('Grunt', 1),
            new Skill('Gulp', 0),
            new Skill('Bower', 1),
            new Skill('NPM', 1),
            new Skill('OS X', 1),
            new Skill('Windows', 2),
            new Skill('Office', 2),
            new Skill('Word', 2),
            new Skill('Excel', 2),
            new Skill('Access', 2),
            new Skill('PowerPoint', 2),
            new Skill('Photoshop', 0),
            new Skill('Zendesk Development', 1),
            new Skill('Ruby on Rails', 0),
            new Skill('Express', 0)
        ];

        return skills;
        */
    }
}