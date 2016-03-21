<?php
/**
 * Created by PhpStorm.
 * User: PHAN
 * Date: 21/03/2016
 * Time: 21:27
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="MovieRepository")
 * @ORM\Table(name="movie")
 */
class Movie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @ORM\Column(type="string",length=100)
     */
    private $samsCharacterName;

    /**
     * @ORM\Column(type="integer")
     */
    private $rating;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isMainCharacter =false;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $releaseAt;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getReleaseAt()
    {
        return $this->releaseAt;
    }

    /**
     * @param mixed $releaseAt
     */
    public function setReleaseAt($releaseAt)
    {
        $this->releaseAt = $releaseAt;
    }

    /**
     * @return mixed
     */
    public function getSamsCharacterName()
    {
        return $this->samsCharacterName;
    }

    /**
     * @param mixed $samsCharacterName
     */
    public function setSamsCharacterName($samsCharacterName)
    {
        $this->samsCharacterName = $samsCharacterName;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param mixed $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return mixed
     */
    public function getIsMainCharacter()
    {
        return $this->isMainCharacter;
    }

    /**
     * @param mixed $isMainCharacter
     */
    public function setIsMainCharacter($isMainCharacter)
    {
        $this->isMainCharacter = $isMainCharacter;
    }

    
}