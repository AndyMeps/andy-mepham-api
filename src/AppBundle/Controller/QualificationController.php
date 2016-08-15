<?php

namespace AppBundle\Controller;

use AppBundle\Models\Qualification;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class QualificationController extends Controller
{
    /**
     * @var array
     */
    public $qualifications;

    /**
     * @Route("/qualifications", name="qualifications_get_all")
     * @Method("GET")
     * @return JsonResponse
     */
    public function getAll()
    {
        return new JsonResponse($this->qualifications);
    }

    /**
     * QualificationController constructor.
     */
    public function __construct()
    {
        $this->qualifications = [
            new Qualification(
                "BSc (Hons) Database Administration and Management",
                "Staffordshire University",
                2009,
                2013
            ),
            new Qualification(
                "BTEC National Diploma for IT Practitioners",
                "Canterbury College",
                2007,
                2009
            )
        ];
    }
}