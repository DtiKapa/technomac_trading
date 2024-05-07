<?php

    require '/var/www/technomac_trading/AutoLoader.php';

    class EquipmentController extends CRUD {

        public function getListEquipment(){
            // Realize a consulta SQL para obter os equipamentos
            $select = $this->Read('SELECT * FROM equipments');
        
            // Inicialize um array vazio para armazenar os dados dos equipamentos
            $equipment = array();
        
            // Loop através dos resultados da consulta
            foreach($select as $row){
                // Adicione os dados de cada equipamento ao array de equipamentos
                $equipment[] = array(
                    'id' => $row['id'],
                    'name' => $row['name'],
                    'brand' => $row['brand'],
                    'model' => $row['model'],
                    'year' => $row['years'],
                    'price' => $row['price'],
                    'weight' => $row['weights'],
                    'rated_power' => $row['rated_power'],
                    'standard_bucket_capacity' => $row['standard_bucket_capacity'],
                    'standard_bucket_width' => $row['standard_bucket_width'],
                    'operation_hydraulic_pressure' => $row['operation_hydraulic_pressure'],
                    'maximum_digging_force' => $row['maximum_digging_force'],
                    'gradeadility' => $row['gradeadility'],
                    'pressure_to_the_ground' => $row['pressure_to_the_ground'],
                    'walking_speed' => $row['walking_speed'],
                    'maximum_hauling_force' => $row['maximum_hauling_force'],
                    'swing_speed_of_platform' => $row['swing_speed_of_platform'],
                    'description' => $row['descriptions'],
                    'image' => $row['images']
                    // Adicione mais campos conforme necessário
                );
            }
        
            // Retorna o array de equipamentos como JSON
            return json_encode($equipment);
        }
        

        public function Inserts(Equipment $equipment){

            $procedure = "INSERT INTO equipments (name, brand, model, years, price, weights, rated_power, standard_bucket_capacity, standard_bucket_width, operation_hydraulic_pressure, maximum_digging_force, gradeadility, pressure_to_the_ground, walking_speed, maximum_hauling_force, swing_speed_of_platform, descriptions, images) 
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);
            ";

            $parametre = array(
                1 => $equipment->getName(),
                $equipment->getBrand(),
                $equipment->getModel(),
                $equipment->getYear(),
                $equipment->getPrice(),
                $equipment->getWeight(),
                $equipment->getRatedPower(),
                $equipment->getStandardBucketCapacity(),
                $equipment->getStandardBucketWidth(),
                $equipment->getOperationHydraulicPressure(),
                $equipment->getMaximumDiggingForce(),
                $equipment->getGradeadility(),
                $equipment->getPressureToTheGround(),
                $equipment->getWalkingSpeed(),
                $equipment->getMaximumHaulingForce(),
                $equipment->getSwingSpeedOfPlatform(),
                $equipment->getDescription(),
                $equipment->getImage()
                // Adicione os demais campos aqui conforme necessário
            );
            

            $create = $this->Create($procedure, $parametre);

            // Check if the insertion was successful
            if ($create) {
                // Return success message as JSON
                echo json_encode(array('success' => 'Equipment inserted successfully'));
            } else {
                // Return error message as JSON if insertion fails
                echo json_encode(array('error' => 'Failed to insert equipment'));
            }
        }

        /*public function Updates(){
            $update = $this->Update();
        }

        public function Deletes(){
            $delete = $this->Delete();
        }*/
    }

?>