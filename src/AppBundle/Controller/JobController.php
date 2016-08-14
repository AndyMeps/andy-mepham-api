<?php

namespace AppBundle\Controller;

use AppBundle\Models\Job;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class JobController extends Controller
{
    /**
     * @var array
     */
    public $jobs;

    /**
     * @Route("/jobs", name="jobs_get_all")
     * @Method("GET")
     * @return JsonResponse
     */
    public function getAll()
    {
        return new JsonResponse($this->jobs);
    }

    /**
     * JobController constructor.
     */
    public function __construct()
    {
        $this->jobs = [
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
    }
}