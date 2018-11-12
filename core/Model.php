<?php

abstract class Model
{
    protected static function getConnection()
    {
        try {
            $pdo = new \PDO("mysql:host=localhost;dbname=uts_web_service", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (Exception $e) {
            error_log($e->getMessage());
            return null;
        }
    }
}