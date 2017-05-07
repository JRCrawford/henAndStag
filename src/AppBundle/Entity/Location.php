<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 *
 * @ORM\Table(name="location")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LocationRepository")
 */
class Location
{
    const PROVINCE_EASTERN_CAPE = "Eastern Cape";
    const PROVINCE_FREE_STATE = "Free State";
    const PROVINCE_GAUTENG = "Gauteng";
    const PROVINCE_KWAZULU_NATAL = "KwaZulu-Natal";
    const PROVINCE_LIMPOPO = "Limpopo";
    const PROVINCE_MPUMALANGA = "Mpumalanga";
    const PROVINCE_NORTH_WEST = "North West";
    const PROVINCE_NORTHERN_CAPE = "Northern Cape";
    const PROVINCE_WESTERN_CAPE = "Western Cape";

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="province", type="string", length=255)
     */
    private $province;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Location
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set province
     *
     * @param string $province
     *
     * @return Location
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @return array
     */
    public static function getAllProvinces()
    {
        return [
            Location::PROVINCE_EASTERN_CAPE,
            Location::PROVINCE_FREE_STATE,
            Location::PROVINCE_GAUTENG,
            Location::PROVINCE_KWAZULU_NATAL,
            Location::PROVINCE_LIMPOPO,
            Location::PROVINCE_MPUMALANGA,
            Location::PROVINCE_NORTH_WEST,
            Location::PROVINCE_NORTHERN_CAPE,
            Location::PROVINCE_WESTERN_CAPE
        ];
    }
}

