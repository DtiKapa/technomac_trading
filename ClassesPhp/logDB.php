<?php
/**
 * Description of logDB
 *
 * @author Apolinario Ernesto
 */

 class logDB {
      private $host = 'localhost';
      private $user = 'apolinario';
      private $db = 'tecnomac';
      private $senhaDB = 'Sql_Solar.21';
      private $URL = '';

      // Getters
    public function getHost() {
        return $this->host;
    }

    public function getUser() {
        return $this->user;
    }

    public function getDb() {
        return $this->db;
    }

    public function getSenhaDB() {
        return $this->senhaDB;
    }

    public function getURL() {
        return $this->URL;
    }
  
  }
 
        
