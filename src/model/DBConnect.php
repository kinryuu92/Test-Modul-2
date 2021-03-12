<?php
namespace App\model;
use PDO;

class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=superMarket';
        $this->username = 'root';
        $this->password = 'YES';
    }

    public function connect()
    {
        try {
            return new PDO($this->dsn, $this->username, $this->password);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}
