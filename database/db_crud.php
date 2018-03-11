<?php
//    we going to create a generic function with Crud stand for
//here is where the connection of the database happening
    class  CRUD extends DBConnect {
        protected $pdo;

        public function __construct(){
            parent::__construct();
            $this->pdo = $this->GetPDO();
        }
//        allow to pass that query to populate
        function Create($_query, array $_parameters){
            $statement = $this->pdo->prepare($_query);
//            the result variable execute the above variable statement
            $result =$statement->execute($_parameters);
            if($result){
                return $this->pdo->lastInsertId();
            }else{
                return false;
            }
        }
        function Read ($_query, $_class, array  $_parameters = null){
            $statement = $this->pdo->prepare($_query);
            $statement ->execute($_parameters);
            return $statement->fetchAll(PDO::FETCH_CLASS, $_class);
        }

        function Update($_query, array $_parameters){
            $statement = $this->pdo->prepare($_query);
            return $statement->execute($_parameters);
        }

        function Delete($_query, array  $_parameters){
            $statement = $this->pdo->prepare($_query);
            $statement->execute($_parameters);
            if($statement->rowCount() > 0){
                return true;
            }else{
                return false;
            }
        }
    }

?>