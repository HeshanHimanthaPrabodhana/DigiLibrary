<?php
namespace classes;
use PDO;
use PDOException;

class DBConnector {
    private $host="localhost";
    private $dbname="librarymanagementsystem";
    private $db_user="root";
    private $db_password="";
    
    public function getConnection(){
        $dsn="mysql:host=$this->host;dbname=$this->dbname";
        try{
            $con=new PDO($dsn, $this->db_user, $this->db_password);
            return $con;
        } catch (PDOException $ex) {
echo "Error".$ex->getMessage();
        }
    }
    
}
