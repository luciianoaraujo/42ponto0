<?php

namespace Models;

use App\config\Database;
use PDO;
use PDOException;

class RegisterModel
{
    private $conn;

    public function __construct()
    {
        $database = Database::getInstance();
        $this->conn = $database->getConnection();
    }

    public function getConnection()
    {
        return $this->conn;
    }

    public function createEstabelecimento($nome, $cnpj, $email, $password, $telefone, $imagem)
    {
        try {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO tb_register_restaurant (name_register, cnpj_register, email_register, password_register, phone_register, image) VALUES (:register_nome, :register_cnpj, :register_email, :register_password, :register_telefone, :register_imagem)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':register_nome', $nome);
            $stmt->bindParam(':register_cnpj', $cnpj);
            $stmt->bindParam(':register_email', $email);
            $stmt->bindParam(':register_password', $hashedPassword);
            $stmt->bindParam(':register_telefone', $telefone);
            $stmt->bindParam(':register_imagem', $imagem);
            $stmt->execute();

            return $this->conn->lastInsertId();
        } catch (PDOException $e) {
            echo "Erro ao criar usuário: " . $e->getMessage();
            return null;
        }
    }

}
