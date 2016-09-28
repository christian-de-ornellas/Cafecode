<?php

require_once ('Crud.php');

/**
 * Description of Configuracao
 *
 * @author christian
 */
class Configuracao extends Crud {

    protected $table = "setings";
    private $logo;
    private $site;
    private $descricao;
    private $keyword;
    private $corprimaria;
    private $corsecundaria;
    private $corfonte;
    private $pixelfb;
    private $canal;
    private $youtube;
    private $facebook;
    private $instagram;
    private $plus;
    private $twitter;

    function getLogo() {
        return $this->logo;
    }

    function getSite() {
        return $this->site;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getKeyword() {
        return $this->keyword;
    }

    function getCorprimaria() {
        return $this->corprimaria;
    }

    function getCorsecundaria() {
        return $this->corsecundaria;
    }

    function getCorfonte() {
        return $this->corfonte;
    }

    function getPixelfb() {
        return $this->pixelfb;
    }

    function getCanal() {
        return $this->canal;
    }

    function getYoutube() {
        return $this->youtube;
    }

    function getFacebook() {
        return $this->facebook;
    }

    function getInstagram() {
        return $this->instagram;
    }

    function getPlus() {
        return $this->plus;
    }

    function getTwitter() {
        return $this->twitter;
    }

    function setLogo($logo) {
        $this->logo = $logo;
    }

    function setSite($site) {
        $this->site = $site;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setKeyword($keyword) {
        $this->keyword = $keyword;
    }

    function setCorprimaria($corprimaria) {
        $this->corprimaria = $corprimaria;
    }

    function setCorsecundaria($corsecundaria) {
        $this->corsecundaria = $corsecundaria;
    }

    function setCorfonte($corfonte) {
        $this->corfonte = $corfonte;
    }

    function setPixelfb($pixelfb) {
        $this->pixelfb = $pixelfb;
    }

    function setCanal($canal) {
        $this->canal = $canal;
    }

    function setYoutube($youtube) {
        $this->youtube = $youtube;
    }

    function setFacebook($facebook) {
        $this->facebook = $facebook;
    }

    function setInstagram($instagram) {
        $this->instagram = $instagram;
    }

    function setPlus($plus) {
        $this->plus = $plus;
    }

    function setTwitter($twitter) {
        $this->twitter = $twitter;
    }

    public function insert() {
        $sql = "INSERT INTO $this->table (logo, site, descricao, keyword, corprimaria, corsecundaria,corfonte, pixelfb, canal, youtube, facebook, instagram, plus, twitter)values(:logo, :site, :descricao, :keyword, :corprimaria, :corsecundaria,:corfonte, :pixelfb, :canal, :youtube, :facebook, :instagram, :plus, :twitter)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':logo', $this->logo);
        $stmt->bindParam(':site', $this->site);
        $stmt->bindParam(':descricao', $this->descricao);
        $stmt->bindParam(':keyword', $this->keyword);
        $stmt->bindParam(':corprimaria', $this->corprimaria);
        $stmt->bindParam(':corsecundaria', $this->corsecundaria);
        $stmt->bindParam(':corfonte', $this->corfonte);
        $stmt->bindParam(':pixelfb', $this->pixelfb);
        $stmt->bindParam(':canal', $this->canal);
        $stmt->bindParam(':youtube', $this->youtube);
        $stmt->bindParam(':facebook', $this->facebook);
        $stmt->bindParam(':instagram', $this->instagram);
        $stmt->bindParam(':plus', $this->plus);
        $stmt->bindParam(':twitter', $this->twitter);
        return $stmt->execute();
    }

    public function update($id) {
        $sql = "UPDATE $this->table SET logo = :logo, site= :site, descricao = :descricao, keyword = :keyword, corprimaria = :corprimaria, corsecundaria = :corsecundaria, corfonte = :corfonte, pixelfb = :pixelfb, canal = :canal, youtube = :youtube, facebook = :facebook, instagram = :instagram, plus = :plus, twitter= :twitter WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':logo', $this->logo);
        $stmt->bindParam(':site', $this->site);
        $stmt->bindParam(':descricao', $this->descricao);
        $stmt->bindParam(':keyword', $this->keyword);
        $stmt->bindParam(':corprimaria', $this->corprimaria);
        $stmt->bindParam(':corsecundaria', $this->corsecundaria);
        $stmt->bindParam(':corfonte', $this->corfonte);
        $stmt->bindParam(':pixelfb', $this->pixelfb);
        $stmt->bindParam(':canal', $this->canal);
        $stmt->bindParam(':youtube', $this->youtube);
        $stmt->bindParam(':facebook', $this->facebook);
        $stmt->bindParam(':instagram', $this->instagram);
        $stmt->bindParam(':plus', $this->plus);
        $stmt->bindParam(':twitter', $this->twitter);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
    public function Contar() {
         $sql = "SELECT * FROM $this->table";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->rowCount();
    }
    public function Ultimo() {
         $sql = "SELECT * FROM $this->table LIMIT 1";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
        
    }
}
