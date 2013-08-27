<?php

namespace WikiStage\Bundle\CoreBundle\Entity;

/**
 * Video
 */
class Video
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $subtitle;

    /**
     * @var string
     */
    private $excerpt;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $media_url;

    /**
     * @var string
     */
    private $embed_code;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \WikiStage\Bundle\CoreBundle\Entity\Language
     */
    private $language;

    /**
     * @var \WikiStage\Bundle\CoreBundle\Entity\Event
     */
    private $event;

    /**
     * @var \WikiStage\Bundle\CoreBundle\Entity\Speaker
     */
    private $speaker;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tags;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set title
     *
     * @param string $title
     * @return Video
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set subtitle
     *
     * @param string $subtitle
     * @return Video
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    
        return $this;
    }

    /**
     * Get subtitle
     *
     * @return string 
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set excerpt
     *
     * @param string $excerpt
     * @return Video
     */
    public function setExcerpt($excerpt)
    {
        $this->excerpt = $excerpt;
    
        return $this;
    }

    /**
     * Get excerpt
     *
     * @return string 
     */
    public function getExcerpt()
    {
        return $this->excerpt;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Video
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
     * Set media_url
     *
     * @param string $mediaUrl
     * @return Video
     */
    public function setMediaUrl($mediaUrl)
    {
        $this->media_url = $mediaUrl;
    
        return $this;
    }

    /**
     * Get media_url
     *
     * @return string 
     */
    public function getMediaUrl()
    {
        return $this->media_url;
    }

    /**
     * Set embed_code
     *
     * @param string $embedCode
     * @return Video
     */
    public function setEmbedCode($embedCode)
    {
        $this->embed_code = $embedCode;
    
        return $this;
    }

    /**
     * Get embed_code
     *
     * @return string 
     */
    public function getEmbedCode()
    {
        return $this->embed_code;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Video
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    
        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set language
     *
     * @param \WikiStage\Bundle\CoreBundle\Entity\Language $language
     * @return Video
     */
    public function setLanguage(\WikiStage\Bundle\CoreBundle\Entity\Language $language = null)
    {
        $this->language = $language;
    
        return $this;
    }

    /**
     * Get language
     *
     * @return \WikiStage\Bundle\CoreBundle\Entity\Language 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set event
     *
     * @param \WikiStage\Bundle\CoreBundle\Entity\Event $event
     * @return Video
     */
    public function setEvent(\WikiStage\Bundle\CoreBundle\Entity\Event $event = null)
    {
        $this->event = $event;
    
        return $this;
    }

    /**
     * Get event
     *
     * @return \WikiStage\Bundle\CoreBundle\Entity\Event 
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set speaker
     *
     * @param \WikiStage\Bundle\CoreBundle\Entity\Speaker $speaker
     * @return Video
     */
    public function setSpeaker(\WikiStage\Bundle\CoreBundle\Entity\Speaker $speaker = null)
    {
        $this->speaker = $speaker;
    
        return $this;
    }

    /**
     * Get speaker
     *
     * @return \WikiStage\Bundle\CoreBundle\Entity\Speaker 
     */
    public function getSpeaker()
    {
        return $this->speaker;
    }

    /**
     * Add tags
     *
     * @param \WikiStage\Bundle\CoreBundle\Entity\Tag $tags
     * @return Video
     */
    public function addTag(\WikiStage\Bundle\CoreBundle\Entity\Tag $tags)
    {
        $this->tags[] = $tags;
    
        return $this;
    }

    /**
     * Remove tags
     *
     * @param \WikiStage\Bundle\CoreBundle\Entity\Tag $tags
     */
    public function removeTag(\WikiStage\Bundle\CoreBundle\Entity\Tag $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->title === null ? '' : $this->title;
    }
}
