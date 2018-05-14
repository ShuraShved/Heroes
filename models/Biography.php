<?php



class Biography { 


      /**
     * Returns biogr item by id
     */
    public static function getBiographyById($id)
    {
        $id = intval($id);

        if ($id) {                      
            $db = Db::getConnection();
            
            $result = $db->query('SELECT * FROM biography WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            
            return $result->fetch();
        }
    }




      /**
     * Returns path to image
     * @return string <p>Путь к изображению</p>
     */
    public static function getImage($id)
    {
        // Name for undefined image
        $noImage = 'no-image.png';

        // path to folder with heroes
        $path = '/template/img/';

        // path to image of hero
        $pathToSoldierImage = $path . $id . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToSoldierImage)) {
            // If picture exist,
            // Then returns path to hero image
            return $pathToSoldierImage;
        }

        // Returns path for undefined image
        return $path . $noImage;
    }



public static function getRewardById($id)
    {
        $id = intval($id);

                             
            
            $db = Db::Connection();
            
            $result = $db->query('SELECT rewards FROM biography WHERE id=' . $id);
            

$data = mysqli_fetch_array($result, MYSQLI_NUM);    // put the result in array
 
if($data[0] != '' && $data[0] != ' '){
    $pictures = explode(";", $data[0]);  // pattern is ";"
 
    foreach ($pictures as $img) {
        echo '<img src="/template/img/rewards/'.($img).'" class="medal">';
    }
 
}
        
    }
     

}