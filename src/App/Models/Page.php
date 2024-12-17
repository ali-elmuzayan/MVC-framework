<?php
namespace App\Models;

use PDO;

class Page
{
    public function getData()
    {
        $dns = 'mysql:host=localhost;dbname=cms';
        $pdo = new PDO($dns, 'root', '');
        $query = $pdo->prepare("SELECT * FROM `pages`");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}