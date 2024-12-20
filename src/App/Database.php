<?php

namespace App;
use PDO;
class Database
{

    public function getConnection() :PDO
    {
        $dns = 'mysql:host=localhost;dbname=cms';
       return  new PDO($dns, 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }

}