<?php 

    class DAO {


    //Função para Preencher os Select

    function Select_Options($procedure, $fields = array(), $parametros = array()){

        $resultset = $this->Select($procedure, $parametros);

        echo '<option value = "">Selecionar</option>';

        foreach ($resultset as $row) {

            echo '<option value = "'.$row[''.$fields[0].''].'">'.$row[''.$fields[1].''].'</option>';

        }
    }
    // ///////////////////////////////////////////////////////////////////////////////////////////////////////

    // Função para Preencher os DataLists

    function DataList($procedure, $fields = array(), $parametros = array()){
        $resultset = $this->Select($procedure, $parametros);
        foreach ($resultset as $row) {
            echo '<option value = "'.$row[''.$fields[0].''].'">'.$row[''.$fields[0].''].'<span> '.$row[''.$fields[1].''].'</span></option>';
        }
    }

    public function Login($procedure, $parametros = array(), $senha, $url) {

        $SENHAMD5 = md5($senha);

        try {

            $resultado = $this->setConnect($procedure, $parametros);

            if($resultado->rowCount() === 0)

            {

                echo 'O seu numero esta errado ou não estas registado, contactar a Chancelaria!';

            }

            else

            {

                $linha = $resultado->fetchAll(PDO::FETCH_ASSOC);

                foreach ($linha as $value) 

                {

                    // para senha

                    if($value[2] != $SENHAMD5)

                    {

                        echo 'A senha está incorreto';

                    }

                    else

                    {

                        $_SESSION['USER'] = $value[1];

                        $datas = $_SESSION['ULTIMA_DATA'] = $value[4];

                        $_SESSION['ID_BOL'] = $value[3];

                        $acesso = $_SESSION['SENHA'] = md5($value[2]);

                        echo "<script>document.location='$url?id=$acesso?data=$datas'</script>";

                    }

                }

            }

            

        } catch (Exception $exc) {

            echo $exc->getMessage(); echo $exc->getCode(); echo $exc->getLine();

        }	

        }


    }
?>