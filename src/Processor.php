<?php

namespace PhpCleanArchitecture;

use PhpCleanArchitecture\BusinessRules\SemanticValidatorException;
use PhpCleanArchitecture\BusinessRules\UseCaseFactory;
use PhpCleanArchitecture\InterfaceAdapters\ErrorPresenter;
use PhpCleanArchitecture\InterfaceAdapters\NullSyntacticValidator;
use PhpCleanArchitecture\InterfaceAdapters\Presenter;
use PhpCleanArchitecture\InterfaceAdapters\SyntacticValidator;
use PhpCleanArchitecture\InterfaceAdapters\SyntacticValidatorException;
use PhpCleanArchitecture\InterfaceAdapters\ViewModel;

/**
 * Process input and ouput based an application and enterprise business rules.
 *
 * - receive payload
 * - syntactic validation payload
 * - create request model from payload
 * - semantic validation of request model
 * - create use case
 * - execute use case with request model
 * - present resulting response model as view model
 *
 * The use case processor applies the use case and uses raw payload as input and may converts it based on business rules
 * to output.
 *
 * @package PhpCleanArchitecture\BusinessRules;
 */
class Processor
{

    /**
     * @var UseCaseFactory
     */
    private $useCaseFactory;
    /**
     * @var Presenter
     */
    private $presenter;
    /**
     * @var null|SyntacticValidator
     */
    private $syntacticValidator;

    /**
     * UseCaseProcessor constructor.
     * @param UseCaseFactory $useCaseFactory
     * @param Presenter $presenter
     * @param SyntacticValidator|null $syntacticValidator
     */
    public function __construct(UseCaseFactory $useCaseFactory, Presenter $presenter, SyntacticValidator $syntacticValidator = null)
    {
        $this->useCaseFactory = $useCaseFactory;
        $this->presenter = $presenter;
        $this->syntacticValidator = $syntacticValidator ?: new NullSyntacticValidator();
    }

    /**
     * @return UseCaseFactory
     */
    public function getUseCaseFactory(): UseCaseFactory
    {
        return $this->useCaseFactory;
    }

    /**
     * @return Presenter
     */
    public function getPresenter(): Presenter
    {
        return $this->presenter;
    }

    /**
     * @return SyntacticValidator
     */
    public function getSyntacticValidator(): SyntacticValidator
    {
        return $this->syntacticValidator;
    }

    /**
     * @param $payload
     * @return ViewModel
     * @throws \Throwable
     */
    public function process($payload): ViewModel
    {

        $presenter = $this->getPresenter();

        try {
            $useCaseFactory = $this->getUseCaseFactory();

            if (!$this->getSyntacticValidator()->validate($payload)) {
                throw new SyntacticValidatorException();
            }

            $requestModel = $useCaseFactory->createRequestModel($payload);

            if (!$useCaseFactory->createSemanticValidator()->validate($requestModel)) {
                throw new SemanticValidatorException();
            }

            $responseModel = $useCaseFactory->createUseCase()->execute($requestModel);

            return $this->getPresenter()->present($responseModel);

        } catch (\Throwable $throwable) {
            if ($presenter instanceof ErrorPresenter) {
                return $presenter->presentError($throwable);
            }

            throw $throwable;
        }

    }

}
