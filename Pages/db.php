<?php
$host = "DESKTOP-NKNKVEQ\\SQLEXPRESS";
$user = "";
$password = "";
$dbname = "DZ_6";

// Создание объекта базы данных
$db = new Database($host, $user, $password, $dbname);
$pdo = $db->getConnection();
class Database
{
    private $connection;

    public function __construct($host, $user, $password, $dbname)
    {
        try {
            $dsn = "sqlsrv:Server=$host;Database=$dbname";
            $this->connection = new PDO($dsn, $user, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::SQLSRV_ATTR_ENCODING => PDO::SQLSRV_ENCODING_UTF8
            ]);
        } catch (PDOException $e) {
            die("Ошибка подключения: " . $e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
?>
