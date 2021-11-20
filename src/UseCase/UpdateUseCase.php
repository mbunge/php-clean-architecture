<?php

namespace CleanArchitecture\UseCase;

use CleanArchitecture\EntityGateway\AlterEntityGateway;
use CleanArchitecture\UseCase\RequestModel\AlterRequestModel;
use CleanArchitecture\UseCase\ResponseModel\QueryResponseModel;

final class UpdateUseCase implements UseCase
{
    public function __construct(
        private AlterEntityGateway $entityGateway
    )
    {
    }

    /**
     * @param AlterRequestModel $req
     * @return QueryResponseModel
     */
    public function execute($req): QueryResponseModel
    {
        $query = $this->entityGateway->alter($req->content, $req->query);
        return new QueryResponseModel($query);
    }
}
