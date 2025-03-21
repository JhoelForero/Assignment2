<?php
require_once __DIR__ . '/../Domain/domain.php';
class application extends domain{ 
    /**this is the general class for the application, this will be extended to authentication service and catalog service. 
     * Ex: $myApp = new authentication(); //this contains both parent and child functionalities.
    */
    private $myApp;

    public function __construct() {
        // Instantiate the authentication object in the constructor
        $this->myApp = new authentication();
    }
    
}
?>