<?php

/**
 * Description of CRUD
 * Criar as classes necessarias para interagir com o banco de dados CRUD-> Create, Read, Update and Delete.
 * @package		ConfigSystem
 * @subpackage	classes
 * @category	Libraries
 * @author      Apolinário Ferreira Ernesto
 * @date        21-04-2024
 */
ini_set('display_errors', 'On');

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

class CRUD extends PDO{

    private $conectar;

    private $Data_Base;

    private $whereConditions = array(); // Array para armazenar as condições WHERE
    
    private $otherClauses = array();

    public function __construct() {

        require_once 'logDB.php';

        try {
            $this->Data_Base = new logDB;

            $this->conectar = new PDO('mysql:host='.$this->Data_Base->getHost().'; dbname='.$this->Data_Base->getDB().'',$this->Data_Base->getUser(),$this->Data_Base->getSenhaDB(),array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')); // Inserir a classe conexão no parametro conectar
        
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    
    }

    // Para efeitos de Teste
    /*public function getPdo() {
        return $this->conectar;
    }*/

    private function setParams($statment, $parameters = array()){

        foreach ($parameters as $key => $value){ // foreach serve o caso de houver mais de um parametro a inserir ou atualizar

            $this->setParam($statment,$key, $value);

        }

    }

    private function setParam($statment,$key,$value){

        $statment->bindParam($key,$value);// fazer a leitura dos parametros todos

    }

    private function setConnect($procedure, $parametros = array()){

        $statment = $this->conectar->prepare($procedure); // Prepara o procedimento da base de dados

        $this->setParams($statment, $parametros);

        $statment->execute(); // Executar o procedimento todo

        return $statment;

    }
    //Função para Inserir e atualizar os dados ///////////////////////////////////////////////////////////////////////////////////

    public function Create($procedure, $parametros = array(), $sms = null)
    {
        // Try and catch para tratar os erros e validar a informação 
        try {
            
            $this->setConnect($procedure, $parametros);
            return true;
            
        } catch (PDOException $exc) {
            
            echo $exc->getMessage(); echo $exc->getCode(); echo $exc->getLine();} // Caso aja uma erro, vai emitir uma sms com a categoria de erros
    }

    // /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Função para Pesquisar os dados

    public function Read($procedure, $parametros = array()) {
    
        try {
            $resultado = $this->setConnect($procedure, $parametros);
    
            if ($resultado->rowCount() == 0) {
                return false; // Return null for empty results
            }
    
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
    
        } catch (PDOException $exc) {
            // Log the exception and handle error appropriately
            return false; // Indicate failure (can be customized)
        } finally {
            // Reset where and other clauses for future queries (optional)
            $this->resetWhere();
            $this->resetOtherClauses();
        }
    }
    
    // ////////////////////////////////////////////////////////////////////////////////////////////////////////////        

    // Função Para Actualizar  

    public function Update($procedure, $parametros = array(), $sms = null) {
        try {
            // Construir a cláusula WHERE
            $whereClause = $this->buildWhereClause();
    
            // Adicionar a cláusula WHERE ao procedimento de atualização
            $procedure .= " WHERE $whereClause";
    
            // Executar a atualização
            $this->setConnect($procedure, $parametros);
            echo $sms;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            echo $exc->getCode();
            echo $exc->getLine();
        }
    }
    
    // //////////////////////////////////////////////////////////////////////////////////////////////////////////

    // Função Para Delete  

    public function Delete($procedure, $parametros = array(), $sms = null) {
        try {
            // Construir a cláusula WHERE
            $whereClause = $this->buildWhereClause();
    
            // Adicionar a cláusula WHERE ao procedimento de remoção
            $procedure .= " WHERE $whereClause";
    
            // Executar a remoção
            $this->setConnect($procedure, $parametros);
            echo $sms;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            echo $exc->getCode();
            echo $exc->getLine();
        }
    }
    
    public function where($column, $value) {
        $this->whereConditions[$column] = $value;
    }

    public function orderBy($column, $direction = 'ASC') {
        $this->otherClauses['order_by'] = "ORDER BY $column $direction";
    }

    public function groupBy($column) {
        $this->otherClauses['group_by'] = "GROUP BY $column";
    }

    public function limit($limit) {
        $this->otherClauses['limit'] = "LIMIT $limit";
    }

    private function buildWhereClause() {
        $whereClause = '';
        foreach ($this->whereConditions as $column => $condition) {
            if (is_array($condition)) {
                $value = $condition[0];
                $operator = $condition[1] ?? '='; // Use default operator if not provided
            } else {
                $value = $condition;
                $operator = '=';
            }
            $whereClause .= "$column $operator :$column AND ";
        }
        $whereClause = rtrim($whereClause, 'AND ');
        return $whereClause ?: '';  // Return empty string if no conditions
    }
    

    private function buildOtherClauses() {
        return implode(' ', $this->otherClauses);
    }

    public function resetWhere() {
        $this->whereConditions = array();
    }

    public function resetOtherClauses() {
        $this->otherClauses = array();
    }

}