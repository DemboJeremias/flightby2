<?php

    class DBconnect{
        public $HOST ="localhost";
        public $USER ="flight";
        public $PASS ="1234567";
        public $DBNAME ="flight";

        protected $dbConn;

        public function __construct(){
          try{
//             try to connect to the database
              $this->dbConn = new PDO("mysql:host=$this->HOST;dbname=$this->DBNAME",$this->USER,$this->PASS);
          } catch (PDOException $exceptionMessage){
//              if connection fail it will display an erro message
              echo 'CONNECTION ERROR: ' .$exceptionMessage->getMessage();
          }
        }
//        this function is just to return the connection once we going to use the connection elsewhere in another file



    /**
     * @return PDO
     */
    public function GetPDO(){
        return $this->dbConn;
    }



}
//   once crud extend DBConnection and dbfunction   extend the crud  the dbConnection to get linked to both has to use require once
    require_once ('db_crud.php');
    require_once ('db_functions.php');

    $DBQuery = new Query();

?>
