<?php

namespace CleanArchitecture\UseCase;

use CleanArchitecture\EntityGateway\AlterEntityGateway;
use CleanArchitecture\UseCase\RequestModel\ContentRequestModel;
use CleanArchitecture\UseCase\ResponseModel\QueryResponseModel;

final class CreateUseCase implements UseCase
{
    public function __construct(
        private AlterEntityGateway $entityGateway
    )
    {
    }

    /**
     * @param ContentRequestModel $req
     * @return QueryResponseModel
     */
    public function execute($req): QueryResponseModel
    {
        $query = $this->entityGateway->alter($req->content, null);
        return new QueryResponseModel($query);
    }
}
