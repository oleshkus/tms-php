<?php
//
//class Session {
//    public function start(): void
//    {
//        session_start();
//    }
//
//    public function set(string $key, string $value): void
//    {
//        $_SESSION[$key] = $value;
//    }
//
//    public function get(string $key): ?array
//    {
//        return !empty($_SESSION[$key]) ? $_SESSION : null;
//    }
//
//    public function save(): void
//    {
//        session_write_close();
//    }
//
//    public function unset(string $key): void
//    {
//        unset($_SESSION[$key]);
//    }
//
//    public function flush(string $key): ?array
//    {
//        $value = $this->get($key);
//        $this->unset($key);
//
//        return $value;
//    }
//
//    public function setExpire(int $minutes): void
//    {
//        $this->start();
//        $_SESSION['expire'] = time() + ($minutes * 60);
//    }
//
//    public function checkExpire(): bool
//    {
//        $this->start();
//        if (isset($_SESSION['expire']) && time() > $_SESSION['expire']) {
//            return true;
//        } else {
//            return false;
//        }
//    }
//
//    public function redirect(string $url): void
//    {
//        header("Location: $url");
//        exit();
//    }
//}