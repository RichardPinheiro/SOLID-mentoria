<?php

namespace Database;

use PDO;
use Database\Config;

class Connection
{
    static public function pdo(String $query)
    {
        $databaseConfig = Config::connections();

        $pdo = new PDO('mysql:host=' . $databaseConfig['mysql']['host'] . ';dbname=' . $databaseConfig['mysql']['database'], $databaseConfig['mysql']['username'], $databaseConfig['mysql']['password']);

        return $pdo->prepare($query);
    }
}