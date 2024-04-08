<?php
class Database
{

    public $pdo;
    public function __construct()
    {

        try {
            $this->pdo = new PDO("pgsql:host=localhost;dbname=news_portal", "postgres", "1234");
        } catch (PDOException $exception) {
            die("<pre>$exception</pre>");
        }
    }
}