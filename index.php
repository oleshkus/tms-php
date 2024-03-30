<?php

use App\Database;

require_once "App/Database.php";

class Index
{
    private PDO $pdo;

    public function __construct()
    {
        $this->$pdo = Database::Connect();
    }

    public function initialize(): void
    {
        // Используйте $this->pdo для выполнения SQL-запросов
        // $result = $this->pdo->query("SELECT * FROM news");
    }
}

$index = new Index();
$index->initialize();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Новости</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="d-flex justify-content-center">
    <div class="container m-4 text-center">
        <nav class="navbar border rounded bg-primary">
            <a href="#" class="navbar-brand ms-4 text-white">Новости</a>
            <div class="dropdown">
                <button type="button" class="btn btn-outline-light me-2" data-bs-toggle="dropdown">
                    Профиль
                </button>

                <!-- Модальное окно регистрации -->
                <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="registerModalLabel">Регистрация</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                            </div>
                            <div class="modal-body">
                                <form id="registration_form" method="post">
                                    <div class="mb-3 form-floating">
                                        <input name="regUsername" type="text" class="form-control" id="username_reg_input" placeholder="Ваше имя пользователя" required>
                                        <label for="username_reg_input" class="form-label">Имя пользователя</label>
                                    </div>
                                    <div class="mb-3 form-floating">
                                        <input name="regEmail" type="email" class="form-control" id="email_reg_input" placeholder="Ваш email" required>
                                        <label for="email_reg_input" class="form-label">Email</label>
                                    </div>
                                    <div class="mb-3 form-floating">
                                        <input name="regPassword" type="password" class="form-control" id="password_reg_input" placeholder="Ваш пароль" required>
                                        <label for="password_reg_input" class="form-label">Пароль</label>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#loginModal">У меня есть аккаунт</button>
                                <button type="submit" form="registration_form" class="btn btn-primary">Зарегистрироваться</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Модальное окно входа -->
                <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="loginModalLabel">Вход</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                            </div>
                            <div class="modal-body">
                                <form id="login_form" method="post">
                                    <div class="mb-3 form-floating">
                                        <input name="loginUsername" type="text" class="form-control" id="username_login_input" placeholder="Ваше имя пользователя" required>
                                        <label for="username_login_input" class="form-label">Имя пользователя</label>
                                    </div>
                                    <div class="mb-3 form-floating">
                                        <input name="loginPassword" type="password" class="form-control" id="password_login_input" placeholder="Ваш пароль" required>
                                        <label for="password_login_input" class="form-label">Пароль</label>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#registerModal">У меня нет аккаунта</button>
                                <button type="button" class="btn btn-primary">Войти</button>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="dropdown-menu">
                    <li class="dropdown-item">
                        <span class="d-flex justify-content-center">Информация</span>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex justify-content-center" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">
                            Регистрация
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex justify-content-center" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
                            Вход
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li class="dropdown-item d-flex justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                        </svg>
                        <span class="ms-2">Выйти</span>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<div class="container">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Новость</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Автор</h6>
            <p class="card-text">Краткое описание новости.</p>
            <div class="container-fluid d-flex justify-content-between p-0">
                <div class="btn-group">
                    <button class="btn btn-sm btn-outline-primary">Просмотреть</button>
                </div>
                <div class="btn-group">
                    <button class="btn btn-sm btn-outline-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                        </svg>
                    </button>
                    <button class="btn btn-sm btn-outline-primary">Текст</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>