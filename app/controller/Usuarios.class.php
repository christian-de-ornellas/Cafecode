<?php
// Aqui extende a classe pai 
require_once('Crud.php');
/*
  A classe que comanda os usuários
 */

/**
 * Description of Usuarios
 *
 * @author christian
 */
class Usuarios extends Crud {

    protected $table = 'usuarios';
    private $nome;
    private $email;
    private $senha;
    private $perfil;
    private $data_criado;

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function getPerfil() {
        return $this->perfil;
    }

    function getData_criada($data_criada) {
        return $this->data_criada;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

    function setData_criada($data_criada) {
        $this->data_criada = $data_criada;
    }

    public function insert() {
        $sql = "INSERT INTO $this->table (nome,email,senha,perfil,data_criada)values(:nome,:email,:senha,:perfil,:data_criada)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->bindParam(':perfil', $this->perfil);
        $stmt->bindParam(':data_criada', $this->data_criada);
        return $stmt->execute();
    }

    public function Logar() {
        $sql = "SELECT * FROM $this->table WHERE email = :email AND senha = :senha";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function Sessao($email, $senha) {
        $sql = "SELECT * FROM $this->table WHERE email = :email AND senha = :senha";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update($id) {
        $sql = "UPDATE $this->table SET nome = :nome, email = :email, perfil = :perfil, senha = :senha, data_criada = :data_criada WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->bindParam(':perfil', $this->perfil);
        $stmt->bindParam(':data_criada', $this->data_criada);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

}
