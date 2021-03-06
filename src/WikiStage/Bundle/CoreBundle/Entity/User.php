<?php

namespace WikiStage\Bundle\CoreBundle\Entity;

use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;

class User implements UserInterface, \Serializable, AdvancedUserInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string username
     */
    private $username;

    /**
     * @var string e-mail address
     */
    private $email;

    /**
     * @var string salt
     */
    private $salt;

    /**
     * @var string hashed password
     */
    private $password;

    /**
     * @var bool if is active or not
     */
    private $isActive;

    /**
     * @param null $username
     * @param null $email
     */
    public function __construct($username = null, $email = null)
    {
        $this->isActive = true;
        $this->email = $email;
        $this->username = $username;
    }

    /**
     * @return int id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param $password string The encoded password
     * @param PasswordEncoderInterface
     */
    public function setPassword($password, PasswordEncoderInterface $encoder)
    {
        $this->salt = md5(uniqid(null, true));

        $this->password = $encoder->encodePassword($password, $this->salt);

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @return array|\Symfony\Component\Security\Core\User\Role[]
     */
    public function getRoles()
    {
        return array('ROLE_ADMIN');
    }

    /**
     * @inheritdoc
     */
    public function eraseCredentials()
    {
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
                $this->id,
            ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            ) = unserialize($serialized);
    }

    /**
     * @inheritdoc
     */
    public function isAccountNonExpired()
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function isAccountNonLocked()
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function isCredentialsNonExpired()
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function isEnabled()
    {
        return $this->isActive;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->username ?: '';
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    
        return $this;
    }
}
