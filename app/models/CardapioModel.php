<?php
namespace Models;
use App\config\Database;
use PDO;
use PDOException;


class CardapioModel
{

    private $conn;

    public function __construct()
    {
        $database = Database::getInstance();
        $this->conn = $database->getConnection();
    }



    public function getCardapioByEstabelecimento($idRestaurante)
    {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM tb_menu_restaurant WHERE fk_id_register_restaurant_menu = ?");
            $stmt->execute([$idRestaurante]);
            $cardapio = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $cardapio;
        } catch (\PDOException $e) {
            die('Erro ao obter o cardápio do restaurante: ' . $e->getMessage());
        }
    }
}