<?php

ini_set('display_errors', 'On');

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

require_once 'AutoLoader.php';

$conn = new CRUD();

$procedure = 'Select * from efectivo_estado';

$resultset = $conn->Selecionar($procedure);

$month = 10;
$year = 2021;

$dia_semana = array(

    'Mon' => 'Seg',
    'Tue' => 'Ter',
    'Wed' => 'Qua',
    'Thu' => 'Qui',
    'Fri' => 'Sex', 
    'Sat' => 'Sab',
    'Sun' => 'Dom'
)

?>

<table style = 'border: 1px solid black; border-collapse: collapse;'>
    <thead>
        <th>Nome</th>
        <?php 
            for ($i=1; $i <= cal_days_in_month(CAL_GREGORIAN, $month, $year); $i++) { 

                $jds=gregoriantojd($month,$i,$year);

                echo 
                '<th>'.$i.
                    '<table>
                        <thead>
                            <th>'.$dia_semana[jddayofweek($jds,2)].'</th>
                        </thead>
                    </table>
                </th>';
            } 
        ?>
        <th>Obs</th>

    </thead>
    <tbody>
        <?php
            foreach($resultset as $value){
                echo '<tr style = "border: 1px solid black;">'.
                '<td>'.$value['nome'].'</td>';
                for ($j=1; $j <= cal_days_in_month(CAL_GREGORIAN, $month, $year); $j++) { 
                    $proced = 'Select fk_tipo_falta from tb_presenca where fk_efectivo = ? and dia = ? and mes = ?';
                    $parametros = array(1=> $value['nip'], $j, $month);
                    $resultset = $conn->SelectDatas($proced, $parametros);
                    
                    if (is_array($resultset) || is_object($resultset))
                    {
                        foreach ($resultset as $row) 
                        {
                            echo '<td>'.$row['fk_tipo_falta'].'</td>';
                            
                        }
                    }else{

                        echo '<td>0</td>';
                    }
                    
                    
                } 
                echo '</tr>';
                $jds=gregoriantojd(10,13,2021);
                echo jddayofweek($jds,2);
                
            }
        ?>
    </tbody>
</table>
