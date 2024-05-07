<?php 

require_once 'AutoLoader.php';

$conn = new CRUD();

$num = $_POST['numero'];
// $num = 9; /*Parametro para Teste*/

if( $num == 1 ){
	
	$prov = $_POST['prov'];
	
	$parametros = array(1=> $prov);
	
	$procedure = 'SELECT id, municipio FROM municipio WHERE fk_provincia = ?';
	
	$resultset = $conn->Selecionar($procedure, $parametros);
	
	foreach ($resultset as $row)
    {
		echo '<option value = "'.$row['id'].'">'.$row['municipio'].'</option>';
	}
}

if( $num == 2 ){
	
	$municip = $_POST['municipio'];
	
	$parametros = array(1=> $municip); 
	
	$procedure = 'SELECT id, destrito FROM destrito WHERE fk_municipio = ?';
	
	$resultset = $conn->Selecionar($procedure, $parametros);
	
	foreach ($resultset as $row)
    {
		echo '<option>'.$row['destrito'].'</option>';
	}
}


if( $num == 3 ){

	$parametros = array(1=> 
	$_POST['nip'], $_POST['posto'], $_POST['nome'], $_POST['bi'], $_POST['usuario'],
	$_POST['genero'], $_POST['nascimento'], $_POST['estado'], $_POST['altura'], $_POST['sangue'],
	$_POST['rh'], $_POST['municipio'], $_POST['destrito'], $_POST['morada'], $_POST['unitel'],
	$_POST['movicel'], $_POST['email'], $_POST['fps'], $_POST['ordem'], $_POST['ordem_data'],
	$_POST['funcao'], $_POST['unidade'], $_POST['especialidade'], $_POST['recenciamento'], $_POST['incorp'],
	$_POST['sec'], $_POST['pai'], $_POST['mae'], $_POST['validade_bi']
	);
	
	$procedure = 'CALL efectivo_actualizar(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';

	$resultset = $conn->Selecionar($procedure, $parametros);
	
	foreach ($resultset as $row)
    {
		echo $row['mensagem'];
	}
}

if( $num == 4 ){

	$parametros = array(1=> $_POST['nome']);

	$procedure = 'Select nip from tb_efectivo where nome = ?';

	$resultset = $conn->Selecionar($procedure, $parametros);

	foreach ($resultset as $row)
    {
		echo $row['nip'];
	}
}

if( $num == 5 ){

	$parametros = array(1=> 
		$_POST['nip'], $_POST['posto'], 
		$_POST['nome'], $_POST['bi'], 
		$_POST['usuario']
	);

	$procedure = 'CALL efectivo_inserir(?,?,?,?,?)';

	$resultset = $conn->Selecionar($procedure, $parametros);
	
	foreach ($resultset as $row)
    {
		echo $row['mensagem'];
	}
}

if( $num == 6 ){

	$procedure = 'Select nip, nome from tb_efectivo';

	$resultset = $conn->Selecionar($procedure);

	foreach ($resultset as $row)
    {
		echo '<option value = "'.$row['nome'].'">'.$row['nome'].'</option>';
	}
}

if( $num == 7 ){

	$procedure = 'SELECT dominio FROM empresa where id_empresa = 1';

	$resultset = $conn->Selecionar($procedure);

	foreach ($resultset as $row)
    {
		echo $row['dominio'];
	}
}

if( $num == 8 ){
	$parametros = array(1=> 
		$_POST['usuario'], $_POST['dominio'], $_POST['senha']
	);

	$procedure = 'CALL usuario_inserir(?,?,?)';

	$resultset = $conn->Selecionar($procedure, $parametros);
	
	foreach ($resultset as $row)
    {
		echo $row['mensagem'];
	}
}

if( $num == 9 ){

	$parametros = array(1=>
		$_POST['nome'],
		$_POST['tipo'],
		$_POST['data_mrt'],
		$_POST['data_efec'],
		$_POST['dias'],
		$_POST['guia']
	);

	$procedure = 'CALL ferias_inserir(?,?,?,?,?,?)';

	$resultset = $conn->Selecionar($procedure, $parametros);

	foreach ($resultset as $row)
    {
		echo $row['mensagem'];
	}
}

if( $num == 10 ){

	$procedure = 'SELECT * FROM listar_dispensas_tipo';

	$resultset = $conn->Selecionar($procedure);

	foreach ($resultset as $row)
    {
		echo'<tr data-widget="expandable-table" aria-expanded="false">'.
				'<td>'.
					'<i class="expandable-table-caret fas fa-caret-right fa-fw"></i>'.
					$row['Tipo'].
				'</td>'.
			'</tr>';

		$procedure_efec_dispensas = 'SELECT * FROM Listar_Efectivo_Dispensas WHERE Dispensa = ?';
		$parametross = array(1=>$row['Tipo']);
		$resultsetss = $conn->Selecionar($procedure_efec_dispensas, $parametross);
		echo '<tr class="expandable-body">'.
				'<td>'.
					'<div class="p-0">'.
						'<table class="table table-hover">'.
							'<thead>
								<th>NIP</th>
								<th>Nome</th>
								<th>Início de Férias</th>
								<th>Fim das Férias</th>
								<th>Data de Apresentação</th>
								<th>Dias Restantes</th>
							</thead>';
		foreach ($resultsetss as $rows)
		{
			echo
							'<tbody>';
							if($rows['Dias_Restam'] < 0){
								echo '<tr class = "td_atrasado">';
							}
								echo
									'<td>'.$rows['Nip'].'</td>'.
									'<td>'.$rows['Nome'].'</td>'.
									'<td>'.$rows['Inicio'].'</td>'.
									'<td>'.$rows['Fim'].'</td>'.
									'<td>'.$rows['Apresentacao'].'</td>';
									if($rows['Dias_Restam'] < 0){
										echo '<td>'.$rows['Dias_Restam']*(-1).' dias trasado</td>'.
										'<td><p class = "btn btn-default" onclick="myFunction('.$rows['Nip'].')">Terminar</p></td>';
									}else{
										echo '<td> Faltam '.$rows['Dias_Restam'].' dias </td>'.
										'<td><p class = "btn btn-default" onclick="myFunction('.$rows['Nip'].')">Interromper</p></td>';
									}
									
								echo '</tr>'.
							'</tbody>';
		}
		echo 			'</table>'.
					'</div>'.
				'</td>'.
			'</tr>';
	}
}

if( $num == 11 ){

	$parametros = array( 1=> $_POST['nip'], $_POST['estado']);

	$procedure = 'call activar_presenca_diaria(?,?)';

	$resultset = $conn->Selecionar($procedure, $parametros);

	foreach ($resultset as $row)
    {
		echo $row['mensagem'];
	}
}

if( $num == 12 ){

	$procedure = 'SELECT * FROM tb_presenca_diaria';

	$resultset = $conn->Selecionar($procedure);

	foreach ($resultset as $value) {

		echo "<tr>"."<td>".$value['nip']."</td>".
			"<td>".$value['nome']."</td>".
			'<td>
				<p class = "btn btn-default btnSelectP" > <span style = "color: darkcyan"> <b>Presença</b> </span> </p>
				<p class = "btn btn-default btnSelectD" > <span style = "color: yellow"> <b>Dispença</b> </span> </p>
				<p class = "btn btn-default btnSelectF" > <span style = "color: red"> <b>Falta</b> </span> </p>
			 </td>'.
			"</tr>";
	}

}

if( $num == 13 ){

	$procedure_exec = 'CALL Listar_Diarios_Presenca()';
	$conn->Selecionar($procedure_exec);

	$procedure = 'SELECT * FROM mrt_ge.tb_presenca_diaria';

	$resultset = $conn->Selecionar($procedure);

	foreach ($resultset as $value) {

		echo "<tr>"."<td>".$value['nip']."</td>".
			"<td>".$value['nome']."</td>".
			'<td>
				<p class = "btn btn-default btnSelectP" > <span style = "color: darkcyan"> <b>Presença</b> </span> </p>
				<p class = "btn btn-default btnSelectD" > <span style = "color: yellow"> <b>Dispença</b> </span> </p>
				<p class = "btn btn-default btnSelectF" > <span style = "color: red"> <b>Falta</b> </span> </p>
			 </td>'.
			"</tr>";
	}

}

if( $num == 14 ){

	$procedure = 'SELECT id_bases, descricao FROM bases';

	$field = array('id_bases', 'descricao');

	$conn->Select_Options($procedure, $field);
}

if( $num == 15 ){

	$procedure = 'Select provincia, cod from provincia';

	$field = array('cod', 'provincia');

	$conn->Select_Options($procedure, $field);
}

if( $num == 16 ){

	$procedure = 'INSERT INTO tb_unidade(abrev, descricao, tipo) VALUES(ltrim(rtrim(upper(?))), ?, ?)';

	$parametros = array(1=> $_POST['abrev_unidade'], $_POST['desc_unidade'], $_POST['tipo_unidade']);

	$conn->Insert_Update($procedure, $parametros, 'Unidade Inserida');
}

?>