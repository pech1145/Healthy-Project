<?php
//----------- P BENZ -------//
//session_start();
define("BASE_URL", "http://localhost/Project_final/"); // Eg.
class DataBase
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $name = "exercise";
    public $con;

    public function getDB()
    {
        $this->con = null;
        try
        {
            $this->con = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->name, $this->user, $this->pass);
            $this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->con->exec("set names utf8");
        }
        catch (PDOException $e)
        {
            echo "Connection error: " . $e->getMessage();
        }
        return $this->con;
    }
}