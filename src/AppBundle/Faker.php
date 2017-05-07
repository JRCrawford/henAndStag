<?php
namespace AppBundle;

use AppBundle\Entity\Activity;
use AppBundle\Entity\Category;
use AppBundle\Entity\Location;
use Doctrine\ORM\EntityManager;
use Faker\Factory;
use utilphp\util;

class Faker
{
    use RepositoryTrait;

    /** @var  EntityManager */
    private $entityManager;

    function __construct(EntityManager $entityManager, $kernelRoot)
    {
        $this->entityManager = $entityManager;
        $this->path = $kernelRoot . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'web' . DIRECTORY_SEPARATOR . 'faker';
    }


    public function createCategory($numberOfEntities = 10)
    {
        if (!is_dir($this->path)) {
            mkdir($this->path);
        }
        $faker = Factory::create();
        for ($i = 0; $i < $numberOfEntities; $i++) {
            $entity = new Category();
            $entity->setName($faker->word);
            $entity->setIcon('/faker/' . $faker->image($this->path, 450, 450, 'sports', false));
            $this->entityManager->persist($entity);
        }
        $this->entityManager->flush();
    }

    public function createLocation($numberOfEntities = 10)
    {
        $faker = Factory::create();
        for ($i = 0; $i < $numberOfEntities; $i++) {
            $entity = new Location();
            $entity->setName($faker->word);
            $entity->setProvince(Location::getAllProvinces()[$faker->numberBetween(0, count(Location::getAllProvinces()) - 1)]);
            $this->entityManager->persist($entity);
        }
        $this->entityManager->flush();
    }

    public function createActivity($numberOfEntities = 10)
    {
        $faker = Factory::create();
        for ($i = 0; $i < $numberOfEntities; $i++) {
            $entity = new Activity();
            $entity->setName($faker->sentence);
            $entity->setDescription($faker->paragraphs(7, true));
            $entity->setIsMaleActivity($faker->boolean);
            $entity->setMinPersonCapacity($faker->numberBetween());
            $entity->setMaxPersonCapacity($faker->numberBetween($entity->getMinPersonCapacity()));
            $entity->setPricePerPerson($faker->randomFloat());
            $entity->setSummary($faker->paragraph);
            $entity->setSlug(util::slugify($entity->getSlug()));
            $entity->setCategory($this->getCategoryRepository()->find($faker->numberBetween(0, 9)));
            $entity->setLocation($this->getLocationRepository()->find($faker->numberBetween(0, 9)));
            $entity->setThumbnailImage('/faker/' . $faker->image($this->path, 300, 300, 'people', false));
            $entity->setMainImage('/faker/' . $faker->image($this->path, 1200, 700, 'nightlife', false));
            $this->entityManager->persist($entity);
        }
        $this->entityManager->flush();

    }

    /**
     * @return EntityManager
     */
    public function getEntityManager()
    {
        return $this->entityManager;
    }
}