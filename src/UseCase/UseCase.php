<?php

namespace CleanArchitecture\UseCase;

interface UseCase
{
    /**
     * Process request and return response
     * @param $req
     * @return mixed
     */
    public function execute($req): mixed;
}
