<?php

require_once 'AutoLoader.php';

$conn = new CRUD();

$num = $_GET['valor'];

function list_dados($Result){

    foreach ($Result as $row) {
        echo json_encode(array(1=>$row['nome'], 
        $row['num_bi'], $row['cod_posto'], $row['genero'], $row['datanasc'], 
        $row['estado_civil'], $row['altura'], $row['grupo_sangue'], $row['factor_rh'],
        $row['fk_municipio'], $row['fk_destrito'], $row['morada_completa'], $row['unitel'],
        $row['movicel'], $row['email'], 
        $row['recenseamento'], $row['incorporacao'], $row['sec'], $row['unidade'], $row['funcao'], 
        $row['fps'], $row['ordem_num'], $row['ordem_data'], $row['especialidade'], $row['nip'],
        $row['pai'], $row['mae'],$row['cod'], $row['data_validade']));
    }
}

if( $num == 1 ){

    $cod = $_GET['id'];

    $parametros = array(1=> $cod);

    try {
        $procedure = 'CALL efectivos_Listar(?)';
        $resultset = $conn->Selecionar($procedure, $parametros);
    } catch (PDOException $th) {
        echo $th->getMessage();
    }
	
    list_dados($resultset);
    
}

if( $num == 2 )
{
    $cod = $_GET['nip'];

    $parametros = array(1=> $cod);

    $procedure = 'SELECT fk_posto, ordem_num, ordem_data, especialidade FROM tb_militar 
    where fk_efectivo = ? and ordem_desc = "Promoção"';

    $resultset = $conn->Selecionar($procedure, $parametros);

    foreach ($resultset as $value) {
        echo 
        '<tr>'.
            '<td>'.$value['fk_posto'].'</td>'.
            '<td>'.$value['ordem_num'].'</td>'.
            '<td>'.$value['ordem_data'].'</td>'.
            '<td>'.$value['especialidade'].'</td>'.
            '<td>MGA</td>'.
        '</tr>';
    }
}