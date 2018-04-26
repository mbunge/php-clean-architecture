<?php

namespace PhpCleanArchitecture\BusinessRules;

/**
 * The semantic validator approves the correct meaning of request model data of any complexity.
 *
 * The semanic validator usually checks the correct transformation from payload to request model
 *
 * e. g. check that all dates are date objects
 *
 * @package PhpCleanArchitecture\InterfaceAdapters;
 */
interface SemanticValidator
{

    /**
     * Validates correct creation of request model input
     *
     * @param RequestModel $requestModel
     * @return bool
     */
    public function validate(RequestModel $requestModel): bool;

}
