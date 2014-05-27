<?php

namespace Midnight\User\Entity;

class User implements UserInterface
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $identity;
    /**
     * @var string
     */
    protected $credential;

    /**
     * @param string $identity
     *
     * @return void
     */
    public function setIdentity($identity)
    {
        $this->identity = $identity;
    }

    /**
     * @param string $credential
     *
     * @return void
     */
    public function setCredential($credential)
    {
        $this->credential = $credential;
    }

    /**
     * @return string
     */
    public function getCredential()
    {
        return $this->credential;
    }

    /**
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }
}
