<?php

require '/var/www/technomac_trading/AutoLoader.php';

class BrandController extends CRUD
{
    // Método para criar uma nova marca
    public function createBrand(Brand $brand)
    {
        // Lógica para inserir a nova marca no banco de dados

        $procedure = 'INSERT INTO brands(name, image, link) VALUES(?,?,?)';

        $parametros = array(1=> $brand->getName(), $brand->getImage(), $brand->getLink());

        try {
            $this->Create($procedure, $parametros);
            echo json_encode(array('success' => 'Brand inserted successfully'));
        } catch (\Throwable $th) {
            //throw $th;
            echo json_encode(array('error' => 'Failed to insert Brand'));
        }
    }

    // Método para listar todas as marcas
    public function getListBrands()
    {
        // Lógica para obter todas as marcas do banco de dados
        $list = $this->Read('SELECT * FROM brands');

        // Initialize an empty array to hold category data
        $brands = array();

        // Loop through each row in the result set
        foreach ($list as $row) {
            // Append each category's data to the $categories array
            $brands[] = array(
                'id' => $row['id'],
                'name' => $row['name'],
                'image' => $row['image'],
                'links' => $row['link']
                // You can add more fields here if needed
            );
        }

        // Encode the $categories array as JSON and echo the result
        return json_encode($brands);
    }
}

?>
