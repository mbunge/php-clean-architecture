<?php

namespace PhpCleanArchitecture\InterfaceAdapters;

/**
 * Class NullSyntacticValidator
 * @package PhpCleanArchitecture\InterfaceAdapters;
 */
class NullSyntacticValidator implements SyntacticValidator
{

    /**
     * Validates payload for correct form and structure
     *
     * @param $payload
     * @return bool
     */
    public function validate($payload): bool
    {
        return true;
    }
}
