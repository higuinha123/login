<?php
class Usuario{
    private $conexao;
    private $table = "usuario";

    public $id;
    public $nome;
    public $dataNasc;
    public $email;
    public $senha;
    public $endereco;

    public function construct($bd)
    {
        $this->conexao = $bd;
    }

    public function getIdUsuario($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id = {$this->$id}";
        $resultado = $this->conexao->query($query);
        return $resultado->fetch_all(MSQLI_ASSOC);
    }

    public function cadastrar()
    {
        $query = "INSERT INTO {$this->table} (nome, dataNasc, email, senha, endereco ) values ('{$this->nome}','{$this->dataNasc}', '{$this->email}','{$this->senha}','{$this->endereco}');";
        return $this->conexao->query($query);
    }


    public function logar()
    {
        $query = "SELECT * FROM {$this->table} WHERE email = ? LIMIT 1";
        $stmt = $this->conexao->prepare($query);
        $stmt->bind_param("s", $this->email);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0)
        {
            $usuario = $resultado->fetch_assoc();
            if (password_verify($this->senha, $usuario['senha'])) {
                return true;
            }
        }
        return false;
    }

    public function destruct() {
        if ($this->conexao) {
            $this->conexao->close();
        }
    }
}