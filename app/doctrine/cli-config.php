<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

/**
 * Todo: very dirty, integrate that to sf command system
 */

return ConsoleRunner::createHelperSet(
    EntityManager::create(
        [
            "driver" => "pdo_pgsql",
            "host" => "localhost",
            "dbname" => "sf-microtemplate",
            "user" => "root",
            "password" => "password",
            "charset" => "UTF8"
        ],
        Setup::createAnnotationMetadataConfiguration(['src/AppBundle/Entity/'], "dev")
    )
);
