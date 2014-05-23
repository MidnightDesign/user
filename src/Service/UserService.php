<?php

namespace Midnight\User\Service;

use Midnight\User\Entity\UserInterface;
use Midnight\User\Storage\StorageInterface;
use Midnight\UserModule\Entity\User;

class UserService implements UserServiceInterface
{
    /**
     * @var CryptoServiceInterface
     */
    private $cryptoService;
    /**
     * @var StorageInterface
     */
    private $storage;

    /**
     * @param CryptoServiceInterface $cryptoService
     * @param StorageInterface       $storage
     */
    public function __construct(CryptoServiceInterface $cryptoService, StorageInterface $storage)
    {
        $this->cryptoService = $cryptoService;
        $this->storage = $storage;
    }

    /**
     * @param string $identity
     * @param string $credential
     *
     * @return UserInterface
     */
    public function register($identity, $credential)
    {
        /** @var $user UserInterface */
        $user = new User();
        $user->setIdentity($identity);
        $user->setCredential($this->cryptoService->create($credential));
        $this->storage->save($user);
        return $user;
    }
}
