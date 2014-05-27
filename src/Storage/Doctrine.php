<?php

namespace Midnight\User\Storage;

use Doctrine\Common\Persistence\ObjectManager;
use Midnight\User\Entity\UserInterface;

class Doctrine implements StorageInterface
{
    /**
     * @var ObjectManager
     */
    private $objectManager;
    /**
     * @var string
     */
    private $className = 'Midnight\User\Entity\User';

    /**
     * @param ObjectManager $objectManager
     */
    public function setObjectManager(ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
     * @param UserInterface $user
     *
     * @return void
     */
    public function save(UserInterface $user)
    {
        $objectManager = $this->objectManager;
        $objectManager->persist($user);
        $objectManager->flush();
    }

    /**
     * @param string $identity
     *
     * @return UserInterface
     */
    public function loadByIdentity($identity)
    {
        return $this->getRepository()->findOneBy(array('identity' => $identity));
    }

    private function getRepository()
    {
        return $this->objectManager->getRepository($this->className);
    }

    /**
     * @param $className
     */
    public function setClassName($className)
    {
        $this->className = $className;
    }

    /**
     * @return UserInterface[]
     */
    public function getAll()
    {
        return $this->getRepository()->findAll();
    }
}
