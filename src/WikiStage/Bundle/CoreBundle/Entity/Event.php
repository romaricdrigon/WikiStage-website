<?php

namespace WikiStage\Bundle\CoreBundle\Entity;

/**
 * Event
 */
class Event
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $place;

    /**
     * @var string
     */
    private $description;

    /**
     * @var array
     */
    private $links;

    /**
     * @var string
     */
    private $gallery_url;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $videos;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $speakers;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->videos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->speakers = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Event
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
     * Set date
     *
     * @param \DateTime $date
     * @return Event
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set place
     *
     * @param string $place
     * @return Event
     */
    public function setPlace($place)
    {
        $this->place = $place;
    
        return $this;
    }

    /**
     * Get place
     *
     * @return string 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Event
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
     * Set links
     *
     * @param array $links
     * @return Event
     */
    public function setLinks($links)
    {
        $this->links = $links;
    
        return $this;
    }

    /**
     * Get links
     *
     * @return array 
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Set gallery_url
     *
     * @param string $galleryUrl
     * @return Event
     */
    public function setGalleryUrl($galleryUrl)
    {
        $this->gallery_url = $galleryUrl;
    
        return $this;
    }

    /**
     * Get gallery_url
     *
     * @return string 
     */
    public function getGalleryUrl()
    {
        return $this->gallery_url;
    }

    /**
     * Add videos
     *
     * @param \WikiStage\Bundle\CoreBundle\Entity\Video $videos
     * @return Event
     */
    public function addVideo(\WikiStage\Bundle\CoreBundle\Entity\Video $videos)
    {
        $this->videos[] = $videos;
    
        return $this;
    }

    /**
     * Remove videos
     *
     * @param \WikiStage\Bundle\CoreBundle\Entity\Video $videos
     */
    public function removeVideo(\WikiStage\Bundle\CoreBundle\Entity\Video $videos)
    {
        $this->videos->removeElement($videos);
    }

    /**
     * Get videos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVideos()
    {
        return $this->videos;
    }

    /**
     * Add speakers
     *
     * @param \WikiStage\Bundle\CoreBundle\Entity\Speaker $speakers
     * @return Event
     */
    public function addSpeaker(\WikiStage\Bundle\CoreBundle\Entity\Speaker $speakers)
    {
        $this->speakers[] = $speakers;
    
        return $this;
    }

    /**
     * Remove speakers
     *
     * @param \WikiStage\Bundle\CoreBundle\Entity\Speaker $speakers
     */
    public function removeSpeaker(\WikiStage\Bundle\CoreBundle\Entity\Speaker $speakers)
    {
        $this->speakers->removeElement($speakers);
    }

    /**
     * Get speakers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSpeakers()
    {
        return $this->speakers;
    }
}
