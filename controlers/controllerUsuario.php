<?php

require "../models/usuario.php";
require "../config/database.php";

class usuariocontroller {
    protected $tabela= "usuario";
    public $conexao;

    public function conectarBd(){
        $this->conexao = (new bd())->conectar();
        return $this->conexao;
    }

    public function cadastrar($nome, $data_nasc, $email, $senha, $endereco) {
        $usuario = new Usuario($this->conectarBd());
        $query = $usuario->cadastrar();

        $stmt = $this->conexao->prepare($query);
        $senhahash = password_hash($senha, PASSWORD_BCRYPT);
        $stmt->bind_param("sdasd", $nome, $data_nasc, $email, $senhahash, $endereco);
        $stmt->execute();

        $this->conexao->close();
    }
}
   

?>
