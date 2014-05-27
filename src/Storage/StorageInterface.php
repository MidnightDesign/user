<?php

namespace Midnight\User\Storage;

use Midnight\User\Entity\UserInterface;

interface StorageInterface
{
    /**
     * @param UserInterface $user
     *
     * @return void
     */
    public function save(UserInterface $user);

    /**
     * @param string $identity
     *
     * @return UserInterface
     */
    public function loadByIdentity($identity);

    /**
     * @return UserInterface[]
     */
    public function getAll();
}
