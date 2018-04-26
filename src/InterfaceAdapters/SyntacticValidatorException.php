<?php

namespace PhpCleanArchitecture\InterfaceAdapters;

/**
 * Class SyntacticValidatorException
 * @package PhpCleanArchitecture\InterfaceAdapters;
 */
class SyntacticValidatorException extends \Exception
{

    /**
     * SyntacticValidatorException constructor.
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($code = 0, Throwable $previous = null)
    {
        parent::__construct('Invalid Syntax', $code, $previous);
    }
}
