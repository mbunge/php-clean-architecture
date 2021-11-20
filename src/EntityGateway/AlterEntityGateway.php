<?php

namespace CleanArchitecture\EntityGateway;

interface AlterEntityGateway
{
    /**
     * Update entity optional by query and return update query
     * @param $entity
     * @param $query
     * @return mixed
     */
    public function alter($entity, $query): mixed;
}
