<?php

namespace Models;

use App\config\Database;
use PDO;
use PDOException;

class LoginModel
{
    private $conn;

    public function __construct()
    {
        $database = Database::getInstance();
        $this->conn = $database->getConnection();
    }

    public function validateLogin($email, $password)
    {
        try {
            $query = "SELECT * FROM tb_register_restaurant WHERE email_register = :email LIMIT 1";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password_register'])) {
                return $user;

                

            } else {
                return null;
            }
        } catch (PDOException $e) {
            echo "Erro ao validar o login: " . $e->getMessage();
            return null;
        }


    }

}
