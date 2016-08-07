<?php

namespace AppBundle\Controller;

use AppBundle\Models\Job;
use AppBundle\Models\Skill;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Constraints\Date;

class CvController extends Controller
{
    /**
     * @Route("/cv/skills", name="cv_skills")
     * @Method("GET")
     * @return JsonResponse
     */
    public function getSkills()
    {
        $skills = [new Skill('Symfony', 0)];

        return new JsonResponse($skills);
    }

    /**
     * @Route("/cv/experience", name="cv_experience")
     * @Method("GET")
     * @return JsonResponse
     */
    public function getExperience()
    {
        $experience = [
            new Job(
                'Software Developer',
                'Parenta Group',
                'Maidstone, Kent',
                '2015-01-01T00:00:00.000',
                null,
                'Full stack development with .NET technologies and JavaScript frameworks, occasionally filling in as DBA.'),
            new Job(
                'Graduate Software Developer',
                'Synectics Solutions Ltd',
                'Stoke-on-Trent, Staffordshire',
                '2013-06-01T00:00:00.000',
                '2014-12-31T00:00:00.000',
                'Front end and data services development with .NET technologies, working with ASP.NET forms, Windows Services and SQL Server 2008 databases.'),
        ];

        return new JsonResponse($experience);
    }
}
