<?php

namespace CleanArchitecture\UseCase;

use CleanArchitecture\EntityGateway\DeleteEntityGateway;
use CleanArchitecture\UseCase\RequestModel\QueryRequestModel;
use CleanArchitecture\UseCase\ResponseModel\QueryResponseModel;

final class DeleteUseCase implements UseCase
{
    public function __construct(
        private DeleteEntityGateway $entityGateway
    )
    {
    }

    /**
     * @param QueryRequestModel $req
     * @return QueryResponseModel
     */
    public function execute($req): QueryResponseModel
    {
        return $this->entityGateway->delete($req->query);
    }
}
