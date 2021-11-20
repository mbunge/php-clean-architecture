<?php

namespace CleanArchitecture\UseCase\RequestModel;

final class QueryRequestModel
{
    public function __construct(
        public $query
    )
    {
    }
}
