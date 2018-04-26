<?php

namespace PhpCleanArchitecture\BusinessRules;

/**
 * Creates all necassary parts for
 * @package PhpCleanArchitecture
 */
interface UseCaseFactory
{

    /**
     * Create request model
     *
     * @param null $payload
     * @return RequestModel
     */
    public function createRequestModel($payload = null): RequestModel;

    /**
     * Create semantic validator
     *
     * @return SemanticValidator
     */
    public function createSemanticValidator(): SemanticValidator;

    /**
     * Create use case
     *
     * @return UseCase
     */
    public function createUseCase(): UseCase;

}
