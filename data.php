 <?php

 require 'map.php';
    $map = new map; 
 if(isset($_POST['address'])) 
  { 
     $address = explode(',',$_POST['address']);
     $search_url = "https://nominatim.openstreetmap.org/search?q=".$address[0]."&format=json"; 
       $latLong = $map->getOSMLatLong($search_url);
       echo json_encode($latLong);
  } 

  if(isset($_POST['map_address'])) 
  { 
     $address = explode(',',$_POST['map_address']);
        $latLong = $map->getMapLatLong($address);
       echo json_encode($latLong);
  }
  ?> 
