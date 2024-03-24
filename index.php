<?php
require_once("app/Database.php");


class Index
{
    public function Initialize(): void
    {
        $pdo = Database::Connect();
//        var_dump($this->$pdo->query("SELECT * FROM news"));
    }
}
$index = new Index();
$index->Initialize()
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="d-flex justify-content-center">
    <div class="container m-4 text-center">
        <nav class="navbar border rounded bg-primary">
            <a href="#" class="navbar-brand ms-4 text-white">News</a>
            <div class="dropdown">
                <button type="button" class="btn btn-outline-light me-2" data-bs-toggle="dropdown">
                    Profile
                </button>
                <ul class="dropdown-menu ">
                    <li class="dropdown-item">
                        <span class="d-flex justify-content-center">Information</span>
                    </li>

                    <li><hr class="dropdown-divider"></li>

                    <li class="dropdown-item d-flex justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                        </svg>
                        <span class="ms-2">Log out</span>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>


</body>
</html>
