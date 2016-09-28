<?php

require_once ('Crud.php');

/**
 * Description of Publicidade
 *
 * @author christian
 */
class Publicidade extends Crud {

    protected $table = "publicidade";
    protected $fk = "categorias";
    private $lateral;
    private $feed;
    private $produto;
    private $categoria_id;
    private $link;
    private $data_criada;

    function getData_criada() {
        return $this->data_criada;
    }

    function getLateral() {
        return $this->lateral;
    }

    function getFeed() {
        return $this->feed;
    }

    function getProduto() {
        return $this->produto;
    }

    function getCategoria_id() {
        return $this->categoria_id;
    }

    function getLink() {
        return $this->link;
    }

    function setLateral($lateral) {
        $this->lateral = $lateral;
    }

    function setFeed($feed) {
        $this->feed = $feed;
    }

    function setProduto($produto) {
        $this->produto = $produto;
    }

    function setCategoria_id($categoria_id) {
        $this->categoria_id = $categoria_id;
    }

    function setLink($link) {
        $this->link = $link;
    }

    function setData_criada($data_criada) {
        $this->data_criada = $data_criada;
    }

    public function insert() {
        $sql = "INSERT INTO $this->table (lateral, feed, produto, categoria_id, link, data_criada) values (:lateral, :feed, :produto, :categoria_id, :link, :data_criada)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':lateral', $this->lateral);
        $stmt->bindParam(':feed', $this->feed);
        $stmt->bindParam(':produto', $this->produto);
        $stmt->bindParam(':categoria_id', $this->categoria_id);
        $stmt->bindParam(':link', $this->link);
        $stmt->bindParam(':data_criada', $this->data_criada);
        return $stmt->execute();
    }

    public function update($id) {
        
    }

    // Aqui é listado todos registros entre publicidade e Categorias
    public function CategoriasPublicidade() {
        $sql = "SELECT a.id,a.lateral,a.feed,a.produto, b.categoria,a.link, a.data_criada FROM $this->table a left outer join $this->fk b on b.id = a.categoria_id ORDER BY a.id DESC";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}
