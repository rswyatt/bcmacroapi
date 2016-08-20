<?php

namespace bcmacrofunctions\macro; 

 
/* class for bigcommerce data retrieval and storage */ 
class macroapi 
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



