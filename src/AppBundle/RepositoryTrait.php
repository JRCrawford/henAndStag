<?php
namespace AppBundle;

use AppBundle\Entity\Activity;
use AppBundle\Entity\Category;
use AppBundle\Entity\Location;
use Doctrine\ORM\EntityManager;

/**
 * Class RepositoryTrait
 * @package AppBundle
 * @method EntityManager getEntityManager
 */
trait RepositoryTrait
{
    /**
     * @return Repository\ActivityRepository
     */
    public function getActivityRepository()
    {
        return $this->getEntityManager()->getRepository(Activity::class);
    }

    /**
     * @return Repository\CategoryRepository
     */
    public function getCategoryRepository()
    {
        return $this->getEntityManager()->getRepository(Category::class);
    }

    /**
     * @return Repository\LocationRepository
     */
    public function getLocationRepository()
    {
        return $this->getEntityManager()->getRepository(Location::class);
    }
} 