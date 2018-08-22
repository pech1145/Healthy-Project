<?php
require_once 'db.php';
class addDB
{
    function __construct()
    {
        $database = new DataBase();
        $con = $database->getDB();
        $this->db = $con;
    }

    /* Login User */
    public function userLogin($username,$password)
    {
        try{
            $db = getDB();
            $hash_password= hash('sha256', $password); //Password encryption
            $stmt = $db->prepare("SELECT user_id FROM users WHERE (user_name=:username AND password=:hash_password");
            $stmt->bindParam("username", $username,PDO::PARAM_STR) ;
            $stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;
            $stmt->execute();
            $count=$stmt->rowCount();
            $data=$stmt->fetch(PDO::FETCH_OBJ);
            $db = null;
            if($count)
            {
                $_SESSION['user_id']=$data->user_id; // Storing user session value
                return true;
            }
            else
            {
                return false;
            }
        }
        catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }

    /* User Details */
    public function userDetails($uid)
    {
        try{
            $db = getDB();
            $stmt = $db->prepare("SELECT user_email ,user_name,name FROM users WHERE user_id=:user_id");
            $stmt->bindParam("user_id", $uid,PDO::PARAM_INT);
            $stmt->execute();
            $data = $stmt->fetch(PDO::FETCH_OBJ); //User data
            return $data;
        }
        catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }





}