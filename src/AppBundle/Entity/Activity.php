<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Intl\Locale\Locale;

/**
 * Activity
 *
 * @ORM\Table(name="activity")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ActivityRepository")
 */
class Activity
{
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
     * @ORM\Column(name="summary", type="string", length=255)
     */
    private $summary;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=5000)
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_male_activity", type="boolean")
     */
    private $isMaleActivity;

    /**
     * @var string
     *
     * @ORM\Column(name="thumbnailImage", type="string", length=255)
     */
    private $thumbnailImage;

    /**
     * @var string
     *
     * @ORM\Column(name="mainImage", type="string", length=255)
     */
    private $mainImage;

    /**
     * @var string
     *
     * @ORM\Column(name="pricePerPerson", type="decimal", precision=10, scale=2)
     */
    private $pricePerPerson;

    /**
     * @var int
     *
     * @ORM\Column(name="minPersonCapacity", type="integer")
     */
    private $minPersonCapacity;

    /**
     * @var int
     *
     * @ORM\Column(name="maxPersonCapacity", type="integer")
     */
    private $maxPersonCapacity;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @var Category
     * @ORM\ManyToOne(targetEntity="Category")
     */
    private $category;

    /**
     * @var Location
     * @ORM\ManyToOne(targetEntity="Location")
     */
    private $location;


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
     * @return Activity
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
     * Set summary
     *
     * @param string $summary
     *
     * @return Activity
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Activity
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set isMaleActivity
     *
     * @param boolean $isMaleActivity
     *
     * @return Activity
     */
    public function setIsMaleActivity($isMaleActivity)
    {
        $this->isMaleActivity = $isMaleActivity;

        return $this;
    }

    /**
     * Get isMaleActivity
     *
     * @return bool
     */
    public function getIsMaleActivity()
    {
        return $this->isMaleActivity;
    }

    /**
     * Set thumbnailImage
     *
     * @param string $thumbnailImage
     *
     * @return Activity
     */
    public function setThumbnailImage($thumbnailImage)
    {
        $this->thumbnailImage = $thumbnailImage;

        return $this;
    }

    /**
     * Get thumbnailImage
     *
     * @return string
     */
    public function getThumbnailImage()
    {
        return $this->thumbnailImage;
    }

    /**
     * Set mainImage
     *
     * @param string $mainImage
     *
     * @return Activity
     */
    public function setMainImage($mainImage)
    {
        $this->mainImage = $mainImage;

        return $this;
    }

    /**
     * Get mainImage
     *
     * @return string
     */
    public function getMainImage()
    {
        return $this->mainImage;
    }

    /**
     * Set pricePerPerson
     *
     * @param string $pricePerPerson
     *
     * @return Activity
     */
    public function setPricePerPerson($pricePerPerson)
    {
        $this->pricePerPerson = $pricePerPerson;

        return $this;
    }

    /**
     * Get pricePerPerson
     *
     * @return string
     */
    public function getPricePerPerson()
    {
        return $this->pricePerPerson;
    }

    /**
     * Set minPersonCapacity
     *
     * @param integer $minPersonCapacity
     *
     * @return Activity
     */
    public function setMinPersonCapacity($minPersonCapacity)
    {
        $this->minPersonCapacity = $minPersonCapacity;

        return $this;
    }

    /**
     * Get minPersonCapacity
     *
     * @return int
     */
    public function getMinPersonCapacity()
    {
        return $this->minPersonCapacity;
    }

    /**
     * Set maxPersonCapacity
     *
     * @param integer $maxPersonCapacity
     *
     * @return Activity
     */
    public function setMaxPersonCapacity($maxPersonCapacity)
    {
        $this->maxPersonCapacity = $maxPersonCapacity;

        return $this;
    }

    /**
     * Get maxPersonCapacity
     *
     * @return int
     */
    public function getMaxPersonCapacity()
    {
        return $this->maxPersonCapacity;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Activity
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param Location $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }
}

