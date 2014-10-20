<?php

namespace Proxies\__CG__\Ei\einstitutBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Messages extends \Ei\einstitutBundle\Entity\Messages implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getMessagesUser()
    {
        $this->__load();
        return parent::getMessagesUser();
    }

    public function setMessagesUser($u2)
    {
        $this->__load();
        return parent::setMessagesUser($u2);
    }

    public function setUsers(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        $this->__load();
        return parent::setUsers($values);
    }

    public function getUsers()
    {
        $this->__load();
        return parent::getUsers();
    }

    public function addUsers($value)
    {
        $this->__load();
        return parent::addUsers($value);
    }

    public function removeUsers($value)
    {
        $this->__load();
        return parent::removeUsers($value);
    }

    public function setCercle(\Doctrine\Common\Collections\ArrayCollection $values)
    {
        $this->__load();
        return parent::setCercle($values);
    }

    public function getCercle()
    {
        $this->__load();
        return parent::getCercle();
    }

    public function addCercle($value)
    {
        $this->__load();
        return parent::addCercle($value);
    }

    public function removeCercle($value)
    {
        $this->__load();
        return parent::removeCercle($value);
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setObjet($objet)
    {
        $this->__load();
        return parent::setObjet($objet);
    }

    public function getObjet()
    {
        $this->__load();
        return parent::getObjet();
    }

    public function setMessage($message)
    {
        $this->__load();
        return parent::setMessage($message);
    }

    public function getMessage()
    {
        $this->__load();
        return parent::getMessage();
    }

    public function setDateMessage($dateMessage)
    {
        $this->__load();
        return parent::setDateMessage($dateMessage);
    }

    public function getDateMessage()
    {
        $this->__load();
        return parent::getDateMessage();
    }

    public function setEtat($etat)
    {
        $this->__load();
        return parent::setEtat($etat);
    }

    public function getEtat()
    {
        $this->__load();
        return parent::getEtat();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'objet', 'message', 'dateMessage', 'etat', 'messages_user', 'users', 'cercle');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}