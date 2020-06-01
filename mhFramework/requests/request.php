<?php

namespace mhFramework\requests;

class Request {

    public $url;

    public function __construct() {
        $this->url = $_SERVER["REQUEST_URI"];
    }

    // function to check if data is valid
    public function validateData($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function validateRequestData($data){
        // Iterate over user input request data
        foreach($data as $key => $value){
            $data[$key] = $this->validateData($value);
        }
        return $data;
    }
    
}

?>