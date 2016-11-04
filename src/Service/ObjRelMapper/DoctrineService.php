<?php

namespace Service\ObjRelMapper;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class DoctrineService
{
    public function __construct(array $dbParams, $env)
    {
        $this->entityManager = EntityManager::create(
            $dbParams,
            Setup::createAnnotationMetadataConfiguration([], $env === "dev")
        );
    }
}
