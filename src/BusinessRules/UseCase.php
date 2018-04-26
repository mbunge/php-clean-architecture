<?php

namespace PhpCleanArchitecture\BusinessRules;

/**
 * The use case is responsible for executing application business rules.
 */
interface UseCase
{

    /**
     * Receive input from request model and
     * Deliver produced result to response model.
     *
     * @param RequestModel $request
     * @return ResponseModel
     */
    public function execute(RequestModel $request): ResponseModel;

}
