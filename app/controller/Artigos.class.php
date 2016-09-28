<?php

require_once ('Crud.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Artigos
 *
 * @author christian
 */
class Artigos extends Crud {

    protected $table = "artigos";
    protected $fk = "categorias";
    private $imagem;
    private $titulo;
    private $video;
    private $categoria_id;
    private $texto;
    private $data_criada;

    function getImagem() {
        return $this->imagem;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getVideo() {
        return $this->video;
    }

    function getCategoria_id() {
        return $this->categoria_id;
    }

    function getTexto() {
        return $this->texto;
    }

    function getData_criada() {
        return $this->data_criada;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setVideo($video) {
        $this->video = $video;
    }

    function setCategoria_id($categoria_id) {
        $this->categoria_id = $categoria_id;
    }

    function setTexto($texto) {
        $this->texto = $texto;
    }

    function setData_criada($data_criada) {
        $this->data_criada = $data_criada;
    }

    public function insert() {
        $sql = "INSERT INTO $this->table (imagem, titulo, video, categoria_id, texto, data_criada) values (:imagem, :titulo, :video, :categoria_id, :texto, :data_criada)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':imagem', $this->imagem);
        $stmt->bindParam(':titulo', $this->titulo);
        $stmt->bindParam(':video', $this->video);
        $stmt->bindParam(':categoria_id', $this->categoria_id);
        $stmt->bindParam(':texto', $this->texto);
        $stmt->bindParam(':data_criada', $this->data_criada);
        return $stmt->execute();
    }

    public function update($id) {
        $sql = "UPDATE $this->table SET imagem = :imagem, titulo = :titulo, video = :video, categoria_id = :categoria_id, texto = :texto, data_criada = :data_criada  WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':imagem', $this->imagem);
        $stmt->bindParam(':titulo', $this->titulo);
        $stmt->bindParam(':video', $this->video);
        $stmt->bindParam(':categoria_id', $this->categoria_id);
        $stmt->bindParam(':texto', $this->texto);
        $stmt->bindParam(':data_criada', $this->data_criada);
        return $stmt->execute();
    }

    public function Count() {
        $sql = "SELECT count(id) as total from $this->table";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':total', $this->total);
        $stmt->execute();
        return $stmt->fetchAll();
    }
// Aqui é listado todos registros entre Artigos e Categorias
    public function CategoriasArtigos() {
        $sql = "SELECT a.id,a.imagem,a.titulo, b.categoria, a.data_criada FROM $this->table a left outer join $this->fk b on b.id = a.categoria_id ORDER BY a.id DESC";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    // Última postagem
    public function PostPrincipal() {
        $sql = "SELECT a.id,a.imagem,a.titulo, b.categoria, a.data_criada FROM $this->table a left outer join $this->fk b on b.id = a.categoria_id ORDER BY a.id DESC LIMIT 0,1";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    // Penultima postagem
    public function PostSegundo() {
        $sql = "SELECT a.id,a.imagem,a.titulo, b.categoria, a.data_criada FROM $this->table a left outer join $this->fk b on b.id = a.categoria_id ORDER BY a.id DESC LIMIT 1,1";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    // Anti Penultima postagem
    public function PostTerceira() {
        $sql = "SELECT a.id,a.imagem,a.titulo, b.categoria, a.data_criada FROM $this->table a left outer join $this->fk b on b.id = a.categoria_id ORDER BY a.id DESC LIMIT 2,1";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    // Outros posts
    public function PostOutros() {
        $sql = "SELECT a.id,a.imagem,a.titulo, b.categoria, a.data_criada FROM $this->table a left outer join $this->fk b on b.id = a.categoria_id ORDER BY a.id DESC LIMIT 3,12";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}
