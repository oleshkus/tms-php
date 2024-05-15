<?php
require_once ("Database.php");
require_once ("Session.php");
require_once ("../../index.php");
class Auth
{
    private $connection;
    private function login() {
        $this->connection = new Database();
        $errors = array();
        if (!empty($_POST['loginUsername']) && !empty($_POST['loginPassword'])) {
            $username = $_POST['loginUsername'];
            $password = $_POST['loginPassword'];
            $stmt = $this->connection->pdo->prepare("SELECT * FROM users WHERE username = :username");
            $stmt->bindParam(':username', $username);
            $stmt->execute();
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['id'] = $user['id_user'];
                $id = $_SESSION['id'];
            } else {
                $errors[] = "Invalid username or password";
            }
        } else {
            $errors[] = "All fields are required";
        }
        return $errors;
    }

    private string $default_rank = "user";
    private function register() {

        $this->connection = new Database();
        $errors = array();
        if (!empty($_POST['registerUsername']) && !empty($_POST['registerPassword'])) {
            $username = $_POST['regUsername'];
            $password = $_POST['regPassword'];
            $email = $_POST['regEmail'];
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->connection->pdo->prepare("INSERT INTO users (username, password, rank, email) VALUES (:username, :password, :rank, :email)");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $hash);
            $stmt->bindParam(':rank', $this->default_rank);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $user = $stmt->fetch();
            if ($user) {
                $_SESSION['id'] = $user['id'];
                $id = $_SESSION['id'];
            } else {
                $errors[] = "Failed to register user";
            }
        } else {
            $errors[] = "All fields are required";
        }
        return $errors;
    }

    private function getUserData() {
        $this->connection = new Database();
        $id = $_SESSION['id'];
        $stmt = $this->connection->pdo->prepare("SELECT * FROM users WHERE id_user = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    private function exit()
    {
        session_destroy();
    }

}



