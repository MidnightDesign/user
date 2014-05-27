<?php

namespace Midnight\User\Service;

use Midnight\User\Entity\UserInterface;

interface UserServiceInterface
{
    /**
     * @param string $identity
     * @param string $credential
     *
     * @return UserInterface
     */
    public function register($identity, $credential);

    /**
     * @param UserInterface $user
     * @param string        $credential
     *
     * @return void
     */
    public function setCredential(UserInterface $user, $credential);
}
