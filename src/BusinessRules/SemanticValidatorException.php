<?php

namespace PhpCleanArchitecture\BusinessRules;

/**
 * Class SyntacticValidatorException
 * @package PhpCleanArchitecture\InterfaceAdapters;
 */
class SemanticValidatorException extends \Exception
{

    /**
     * SyntacticValidatorException constructor.
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($code = 0, Throwable $previous = null)
    {
        parent::__construct('Invalid Semantic', $code, $previous);
    }
}
