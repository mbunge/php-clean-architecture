<?php

namespace PhpCleanArchitecture\InterfaceAdapters;

/**
 * The syntactic validator approves the correct form .
 *
 * The semanic validator usually approves the correct form and structure of payload e.g. JSON, XML or other input data
 *
 * @package PhpCleanArchitecture\InterfaceAdapters;
 */
interface SyntacticValidator
{
    /**
     * Validates payload for correct form and structure
     *
     * @param $payload
     * @return bool
     */
    public function validate($payload): bool;

}
