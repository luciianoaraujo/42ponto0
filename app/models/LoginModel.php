<?php

namespace Models;

use App\config\Database;
use PDO;
use PDOException;

class UserModel
{
    private $conn;

    public function __construct()
    {
        $database = Database::getInstance();
        $this->conn = $database->getConnection();
    }

    public function getUserByEmail($email)
    {
        try {
            $query = "SELECT * FROM users WHERE email = :email LIMIT 1";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            return $user ? $user : null;
        } catch (PDOException $e) {
            echo "Erro ao buscar usuário: " . $e->getMessage();
            return null;
        }
    }

    public function createUser($nome, $cnpj, $email, $password, $telefone)
    {
        try {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO users (nome, cnpj, email, password, telefone) VALUES (:nome, :cnpj, :email, :password, :telefone)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':cnpj', $cnpj);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->bindParam(':telefone', $telefone);
            $stmt->execute();

            return $this->conn->lastInsertId();
        } catch (PDOException $e) {
            echo "Erro ao criar usuário: " . $e->getMessage();
            return null;
        }
    }

}
