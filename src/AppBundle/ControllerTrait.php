<?php

namespace AppBundle;

trait ControllerTrait
{
    /**
     * @return \Doctrine\ORM\EntityManager|object
     */
    public function getEntityManager()
    {
        return $this->get('doctrine.orm.entity_manager');
    }
}
