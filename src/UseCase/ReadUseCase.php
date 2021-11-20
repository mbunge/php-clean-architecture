<?php

namespace CleanArchitecture\UseCase;

use CleanArchitecture\EntityGateway\ReadEntityGateway;
use CleanArchitecture\UseCase\RequestModel\QueryRequestModel;
use CleanArchitecture\UseCase\ResponseModel\ContentResponseModel;
use CleanArchitecture\UseCase\ResponseModel\QueryResponseModel;

final class ReadUseCase implements UseCase
{
    public function __construct(
        private ReadEntityGateway $entityGateway
    )
    {
    }

    /**
     * @param QueryRequestModel $req
     * @return ContentResponseModel
     */
    public function execute($req): ContentResponseModel
    {
        $entity = $this->entityGateway->read($req->query);
        return new ContentResponseModel($entity);
    }
}
