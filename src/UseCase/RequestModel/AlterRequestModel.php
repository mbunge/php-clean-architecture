<?php

namespace CleanArchitecture\UseCase\RequestModel;

final class AlterRequestModel
{
    public function __construct(
        public $query,
        public $content
    )
    {
    }
}
