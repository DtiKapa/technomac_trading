<?php 

require '/var/www/technomac_trading/AutoLoader.php';
require '/var/www/technomac_trading/ClassesPhp/Model/Category.php';

class CategoryController extends CRUD
{
    public function List(){
        // Assuming $this->Read() method is defined somewhere else and executes the SQL query
        $list = $this->Read('SELECT * FROM categories');

        // Initialize an empty array to hold category data
        $categories = array();

        // Loop through each row in the result set
        foreach ($list as $row) {
            // Append each category's data to the $categories array
            $categories[] = array(
                'id' => $row['id'],
                'name' => $row['name'],
                'description' => $row['description'],
                'image' => $row['image']
                // You can add more fields here if needed
            );
        }

        // Encode the $categories array as JSON and echo the result
        echo json_encode($categories);
    }

    public function NewCategory(Category $category) {
        // Assuming $this->Create() method is defined somewhere else and executes the SQL query
        $insert = $this->Create('INSERT INTO categories(name, description, image, created_at, updated_at) VALUES (?,?,?,?,?)', 
            [
                $category->getName(),
                $category->getDescription(),
                $category->getImage(),
                $category->getCreatedAt(),
                $category->getUpdatedAt()
            ]);
        
        // Check if the insertion was successful
        if ($insert) {
            // Return success message as JSON
            echo json_encode(array('success' => 'Category inserted successfully'));
        } else {
            // Return error message as JSON if insertion fails
            echo json_encode(array('error' => 'Failed to insert category'));
        }
    }
}

$categoryController = new CategoryController();
$categoryController->List();

?>