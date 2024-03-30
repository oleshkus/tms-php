<?php

namespace App;
require_once Database::class;
Database::Connect();
class Auth
{

    public function register($regUsername, $regPassword, $regEmail)
    {

    }
    private string $regQuery = "INSERT INTO users (username, password, rank, email) VALUES ('$regUsername', '$regPassword', 'user', '$regEmail')";
}
?>

