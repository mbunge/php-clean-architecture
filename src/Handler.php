<?php

namespace CleanArchitecture;

use CleanArchitecture\UseCase\CreateUseCase;
use CleanArchitecture\UseCase\DeleteUseCase;
use CleanArchitecture\UseCase\ReadUseCase;
use CleanArchitecture\UseCase\ResponseModel\ContentResponseModel;
use CleanArchitecture\UseCase\ResponseModel\QueryResponseModel;
use CleanArchitecture\UseCase\UpdateUseCase;
use CleanArchitecture\UseCase\UseCase;

class Handler
{

    public function __construct(
        private InputToRequestModelTransformer $transformer,
        private UseCase $useCase,
        private Presenter $presenter
    )
    {
    }

    /**
     * Handle input with use case and present response
     * @param $input
     * @return mixed
     */
    public function handle($input): mixed {
        $req = $this->transformer->transform($input);
        $resp = $this->useCase->execute($req);

        return $this->presenter->present($resp);
    }

}
