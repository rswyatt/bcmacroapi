<?php

namespace bcmacrofunctions\bc; 

 
/* class for bigcommerce data retrieval and storage */ 
class bcapi 
{ 
    
    private $bc;   
      
    public function __construct(){ 
        
        $this->bc = new Bigcommerce; 
        
    }

    public static function getOrders(){ 

        $bc = self::bc; 
        
        $orders = $bc::getOrders(); 

        print_r($orders); 
    }

}



