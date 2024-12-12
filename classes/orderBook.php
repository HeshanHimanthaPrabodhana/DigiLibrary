<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace classes;
require './classes/DBConnector.php';
use classes\DBConnector;
use PDO;
/**
 * Description of orderBook
 *
 * @author HP
 */
class orderBook {
    private $id;
    public function setId($id){
        $this->id=$id;
        
    }
    public function getId(){
        return $id;
    }

    public function getOrderBook(){
        $query = "SELECT * from book";
        try {
            $dbcon=new DBConnector();
              $con=$dbcon->getConnection();
              $pstmt=$con->prepare($query);
              $pstmt->execute();
              $rs=$pstmt->fetchAll(PDO::FETCH_ASSOC);
              return $rs;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
      
    }
    public function getPrice(){
        
    }
}
