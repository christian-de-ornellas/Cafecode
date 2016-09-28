<?php

require_once'DB.php';

abstract class Crud extends DB {

    protected $table;
    //Atributos da paginação
    private $inicio = 0;
    private $limite = 10 ;

    abstract public function insert();

    abstract public function update($id);

    public function find($id) {
        $sql = "SELECT * FROM $this->table WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function findAll() {
        $sql = "SELECT * FROM $this->table";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function delete($id) {
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function Count() {
        $sql = "SELECT count(id) as total from $this->table";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':total', $this->total);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function pegarExtensao($nomearquivo) {
        $arquivo = explode(".", $nomearquivo);
        $arquivo = array_reverse($arquivo);
        return strtolower($arquivo[0]);
    }

    public function gerarNome($ext, $prefix = "") {
        //$prefix201402041955305841.jpg
        $nomearquivo = $prefix . date('YmdHis') . rand(1000, 9999) . '.' . $ext;
        return $nomearquivo;
    }

    public function resumo($texto) {
        //Buscar os primeiros 350 caracteres
        $ptexto = substr($texto, 0, 350);
        //Criar um vetor para cara palavra
        $palavras = explode(" ", $ptexto);
        //Criar um vetor com todas as posições do vetor acima menos a ultima
        $resumo = array_slice($palavras, 0, count($palavras) - 1);
        return implode(" ", $resumo) . "...";
    }

    public function Paginacao() {
        $sql = "SELECT * from $this->table LIMIT $this->inicio,$this->limite";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}
