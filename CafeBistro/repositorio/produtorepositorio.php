<?php
class produtorepositorio
{
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

/*     public function listarProdutos() {
        $sql = "SELECT * FROM cafe";
        $result = $this->conn->query($sql);
        
        $produtos = array();
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $produtos[] = $row;
            }
        }
        
        return $produtos;
    } */

    public function cadastrar(Produto $produto)
    {
        $sql = "INSERT INTO produtos (tipo, nome, descricao, imagem, preco) VALUES (?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssd",
            $produto->getTipo(),
            $produto->getNome(),
            $produto->getDescricao(),
            $produto->getImagem(),
            $produto->getPreco(),
    );
    $stmt->execute();
    $stmt->close();
    }
}
?>