<?php


class DatabaseService {
  private $db; //propriedade // atributo
  
  public function __construct() {
    ///home/runner/CRUD2-Orientacao-a-objetos-1/
   // echo __DIR__;die();
     $this->db = new PDO('sqlite:'.__DIR__.'/../database.sqlite');
     $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //pesquisei sobre o sql injection, mas tive muita dificuldade em implementar o código

  }

  public function query($sql) {
    return $this->db->query($sql);
  }

  public function exec($sql) {
    return $this->db->exec($sql);
  }
  
}