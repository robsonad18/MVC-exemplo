<?php

namespace App\Model\Entity;

use PDO;

use App\Utils\ConfigGlobal;
use Exception;

class Database
{
    static function get()
    {
        $config = new ConfigGlobal();
        try {
            return new \PDO('mysql:host=' . $config->getHost() . ';dbname=' . $config->getDb(), $config->getUser(), $config->getPass(), [
                PDO::MYSQL_ATTR_INIT_COMMAND  => "SET NAMES 'utf8mb4'",
                PDO::ATTR_ERRMODE             => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC
            ]);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
}
