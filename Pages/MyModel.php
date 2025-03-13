<?php
class MyModel {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAllRecordsModel() {
        $stmt = $this->pdo->query("SELECT * FROM Pictures");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
