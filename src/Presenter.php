<?php

namespace CleanArchitecture;

use CleanArchitecture\UseCase\ResponseModel\ContentResponseModel;
use CleanArchitecture\UseCase\ResponseModel\QueryResponseModel;

interface Presenter
{

    /**
     * Present response model
     * @param ContentResponseModel|QueryResponseModel $resp
     * @return mixed
     */
    public function present(ContentResponseModel | QueryResponseModel $resp): mixed;
}
