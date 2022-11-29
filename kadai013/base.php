<?php
class Base{
 protected $pdo;
 function __construct(){
  $this->pdo = new PDO ( 'mysql:host=localhost;dbname=kadaidb;charset=utf8', 'root', '' );
 }
}