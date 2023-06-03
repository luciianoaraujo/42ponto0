<?php

namespace Models;

use App\config\Database;
use PDO;
use PDOException;

class EstabelecimentosModel
{
    private $conn;

    public function __construct()
    {
        $database = Database::getInstance();
        $this->conn = $database->getConnection();
    }

    public function getAllEstabelecimentos()
    {
        try {
            $query = "SELECT name_register, image, pk_id_register FROM TB_REGISTER_RESTAURANT";
                      

            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            $estabelecimentos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $estabelecimentos;
        } catch (PDOException $e) {
            echo 'Query Error: ' . $e->getMessage();
            return [];
        }
    }

    




}               
