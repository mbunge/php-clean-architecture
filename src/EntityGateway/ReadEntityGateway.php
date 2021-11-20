<?php

namespace CleanArchitecture\EntityGateway;

interface ReadEntityGateway
{
    /**
     * Read by query and return Entity
     * @param $query
     * @return mixed
     */
    public function read($query): mixed;
}
