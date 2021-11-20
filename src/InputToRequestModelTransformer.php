<?php

namespace CleanArchitecture;

use CleanArchitecture\UseCase\RequestModel\AlterRequestModel;
use CleanArchitecture\UseCase\RequestModel\ContentRequestModel;
use CleanArchitecture\UseCase\RequestModel\QueryRequestModel;

interface InputToRequestModelTransformer
{
    /**
     * Transform Input to request model
     * @param $input
     * @return QueryRequestModel|ContentRequestModel|AlterRequestModel
     */
    public function transform($input): QueryRequestModel | ContentRequestModel | AlterRequestModel;
}
