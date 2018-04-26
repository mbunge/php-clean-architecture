<?php

namespace PhpCleanArchitecture\InterfaceAdapters;

/**
 * The entity gateway is responsible for data transfer between use cases
 * and data sources, e.g. files, DB, API.
 *
 * The entity gateway is able produce and consume entities and provide them to the use case.
 *
 * @package PhpCleanArchitecture\InterfaceAdapters
 */
interface EntityGateway
{

    /**
     * @return Entity
     */
    public function createEntity(): Entity;

}
