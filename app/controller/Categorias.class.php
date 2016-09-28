<?php

/*
  Controlador de categorias
 */
require_once ('Crud.php');

/**
 * Description of Categorias
 *
 * @autor Christian
 */
class Categorias extends Crud {

    protected $table = "categorias";
    private $capa;
    private $categoria;
    private $data_criada;

    function getCapa() {
        return $this->capa;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getData_criada() {
        return $this->data_criada;
    }

    function setCapa($capa) {
        $this->capa = $capa;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setData_criada($data_criada) {
        $this->data_criada = $data_criada;
    }

    public function insert() {
        $sql = "INSERT INTO $this->table(capa, categoria, data_criada)values(:capa, :categoria, :data_criada)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':capa', $this->capa);
        $stmt->bindParam(':categoria', $this->categoria);
        $stmt->bindParam(':data_criada', $this->data_criada);
        return $stmt->execute();
    }

    public function update($id) {
        $sql = "UPDATE $this->table SET capa = :capa, categoria = :categoria WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':capa', $this->capa);
        $stmt->bindParam(':categoria', $this->categoria);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

}
