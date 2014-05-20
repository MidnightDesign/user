<?php

namespace Midnight\User\Service;

interface CryptoServiceInterface
{
    /**
     * @param string $credential
     *
     * @return string Hashed credential
     */
    public function create($credential);

    /**
     * @param string $credential
     * @param string $hash
     *
     * @return boolean
     */
    public function verify($credential, $hash);
}
