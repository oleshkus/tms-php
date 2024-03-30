<?php

namespace App;
use PDO;

class Database
{
    static $dsn = 'pgsql:host=localhost;port=5432;dbname=news_portal;user=postgres;password=1234';
    static function Connect(): PDO
    {
        return new PDO(Database::$dsn);
    }
}