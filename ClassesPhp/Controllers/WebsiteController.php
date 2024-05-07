
<?php 

require '/var/www/technomac_trading/AutoLoader.php';
require '/var/www/technomac_trading/ClassesPhp/Model/Website.php';

class WebsiteController extends CRUD
{
    public function List(){
        // Assuming $this->Read() method is defined somewhere else and executes the SQL query
        $list = $this->Read('SELECT * FROM website_config where id = 1');

        // Initialize an empty array to hold category data
        $categories = array();

        // Loop through each row in the result set
        foreach ($list as $row) {
            // Append each category's data to the $categories array
            $categories[] = array(
                'id' => $row['id'],
                'contact' => $row['contact'],
                'address' => $row['address'],
                'latitude' => $row['lat'],
                'longitude' => $row['longi'],
                'facebook' => $row['facebook'],
                'linkdin' => $row['linkdin'],
                'twitter' => $row['twitter'],
                'youtube' => $row['youtube']
                // You can add more fields here if needed
            );
        }

        // Encode the $categories array as JSON and echo the result
        return json_encode($categories);
    }

    public function Insert_Update_datas(Website $website) {
        // Assuming $this->Create() method is defined somewhere else and executes the SQL query

        $procedure = "INSERT INTO website_config(contact, address, facebook, linkdin, twitter, youtube, lat, longi) VALUES (?,?,?,?,?,?,?,?)";
        $parametros = array(1=>$website->getContact(),
        $website->getAddress(),
        $website->getFacebook(),
        $website->getLinkedin(),
        $website->getTwitter(),
        $website->getYoutube(),
        $website->getLat(),
        $website->getLong()
    );

        $insert = $this->Create($procedure, $parametros);
        
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

?>