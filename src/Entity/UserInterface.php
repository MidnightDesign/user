<?php

namespace Midnight\User\Entity;

interface UserInterface
{
    /**
     * @param string $identity
     *
     * @return void
     */
    public function setIdentity($identity);

    /**
     * @param string $credential
     *
     * @return void
     */
    public function setCredential($credential);

    /**
     * @return string
     */
    public function getCredential();
}
