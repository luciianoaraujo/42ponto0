<?php
namespace Models;
use App\config\Database;
use PDO;
use PDOException;


class DashboardModel
{
    private $conn;

    public function __construct()
    {
        $database = Database::getInstance();
        $this->conn = $database->getConnection();
    }

    public function getDashboardByEstabelecimento($estabelecimentoId)
    {

    }

    public function cadastrarItem($nomeItem, $acompanhamento, $preco, $tipoSelecionado)
    {
        $idRestaurante = $_SESSION['user']['pk_id_register'];

        try {
            $stmt = $this->conn->prepare("INSERT INTO tb_menu_restaurant (fk_id_register_restaurant_menu,type_product_menu, name_product_menu, accompaniments_product_menu, preco_product_menu) VALUES (?, ?, ?, ?, ?)");

            $stmt->execute([$idRestaurante, $tipoSelecionado, $nomeItem, $acompanhamento, $preco]);
        } catch (\PDOException $e) {
            die('Erro ao cadastrar o item: ' . $e->getMessage());
        }
    }

    public function editarItem($novoNome, $novoAcompanhamento, $novoPreco, $idMenu)
    {
        try {
            $stmt = $this->conn->prepare("UPDATE tb_menu_restaurant SET name_product_menu = ?, accompaniments_product_menu = ?, preco_product_menu = ? WHERE pk_id_menu = ?");
            $stmt->execute([$novoNome, $novoAcompanhamento, $novoPreco, $idMenu]);
        } catch (\PDOException $e) {
            die('Erro ao editar o item: ' . $e->getMessage());
        }
    }
    public function getCardapioRestaurante($idRestaurante)
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