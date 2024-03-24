<?php

class Database
{
    static function Connect(): PDO
    {
        return new PDO('pgsql:host=localhost;port=5432;dbname=news_portal;user=postgres;password=1234');
    }

}