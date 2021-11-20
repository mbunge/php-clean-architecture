<?php

namespace CleanArchitecture\EntityGateway;

interface DeleteEntityGateway
{
    /**
     * Delete by query
     * @param $query
     * @return mixed
     */
    public function delete($query): mixed;
}
