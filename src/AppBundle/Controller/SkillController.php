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
    }
}