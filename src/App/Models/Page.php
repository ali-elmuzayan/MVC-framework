<?php
namespace App\Models;

use App\Database;
use PDO;

class Page
{
    public function __construct(private Database $db) {}
    public function getData()
    {
        $pdo = $this->db->getConnection();

        $query = $pdo->prepare("SELECT * FROM `pages`");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}