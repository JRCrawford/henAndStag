<?php

namespace AppBundle\Controller;


use AppBundle\ControllerTrait;
use AppBundle\Entity\Activity;
use AppBundle\Entity\Category;
use AppBundle\RepositoryTrait;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HSController extends Controller
{
    use ControllerTrait;
    use RepositoryTrait;

    /**
     * @Route("/", name="app_home")
     * @Template("hs/home.html.twig")
     */
    public function showHome(Request $request)
    {
        return [];

    }

    /**
     * @Route("/hen-activity", name="app_hen_activity_list")
     * @Template("hs/hen_activity_list.html.twig")
     */
    public function henActivityAction()
    {
        /** @var Activity[] $activities */
        $activities = $this->getActivityRepository()->findBy(['isMaleActivity' => false]);
        /** @var Category $categories */
        $categories = $this->getCategoryRepository()->findAll();

        return [
            'activities' => $activities,
            'categories' => $categories,
        ];
    }

    /**
     * @Route("/stag-activity", name="app_stag_activity_list")
     * @Template("hs/stag_activity_list.html.twig")
     */
    public function stagActivityAction()
    {
        /** @var Activity[] $activities */
        $activities = $this->getActivityRepository()->findBy(['isMaleActivity' => true]);
        /** @var Category $categories */
        $categories = $this->getCategoryRepository()->findAll();

        return [
            'activities' => $activities,
            'categories' => $categories,
        ];
    }

    /**
     * @Route("/activity/{slug}", name="app_activity")
     * @Template("hs/activity.html.twig")
     */
    public function activitySingleAction(Request $request, Activity $activity){
        return [
            'activity' => $activity
        ];
    }
}
