 <?php
 class map {

public  function getOSMLatLong($search_url){
   $httpOptions = [
      "http" => [
          "method" => "GET",
          "header" => "User-Agent: Nominatim-Test"
      ]
   ];

    $streamContext = stream_context_create($httpOptions);
    $json = file_get_contents($search_url, false, $streamContext); 
    $decoded = json_decode($json, true);
     
    $data['latitude'] = $decoded[0]["lat"];
    $data['longitude'] = $decoded[0]["lon"];
    if(!empty($data)){
      return $data;
    }else{
      return false;
    }
     
}

public function getMapLatLong($address){
    if(!empty($address)){
       //Formatted address
        $formattedAddr = str_replace(' ','+',$address);
        //Send request and receive json data by address
        $geocodeFromAddr = file_get_contents('https://maps.googleapis.com/maps/api/js?address='.$formattedAddr.'&sensor=false&region=India&callback=myMap');
        $output = json_decode($geocodeFromAddr);
        //Get latitude and longitute from json data
        $data['latitude'] = $output->results[0]->geometry->location->lat;
        $data['longitude'] = $output->results[0]->geometry->location->lng;
        //Return latitude and longitude of the given address
        if(!empty($data)){
          return $data;
        }else{
          return false;
        }
    }else{
        return false;
    }
} 
}