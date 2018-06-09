<?php
    
    header("Content-Type:application/json");
    include 'get_most_active.php';
    
    $quotesToJson = [] ;
    
    if(!empty($_GET['requestType'])){
        $requestType = $_GET['requestType'];
        
        if(!strcmp($requestType,"getMostActive"))
        {
            responseMostActiveStocks(200,"Api Found",$quotes);

        }else if(!strcmp($requestType,"getTops")){
            
        }else if(!strcmp($requestType,"getGainers")){
            
        }else if(!strcmp($requestType,"getLOssers")){
            
        }
        
    }
    

    function responseMostActiveStocks($status,$status_message,$quotes){
        header("HTTP/1.1 ".$status);
        
        
        for ($x = 0; $x <= count($quotes)-1 ; $x++) {
            
             $quoteToJson = new Quote();
            
             $quoteToJson->symbol = $quotes[$x]->symbol;
             $quoteToJson->companyName = $quotes[$x]->companyName;
             $quoteToJson->primaryExchange = $quotes[$x]->primaryExchange;
             $quoteToJson->sector = $quotes[$x]->sector;
             $quoteToJson->calculationPrice = $quotes[$x]->calculationPrice;
             $quoteToJson->open = $quotes[$x]->open;
             $quoteToJson->openTime = $quotes[$x]->openTime;
             $quoteToJson->close = $quotes[$x]->close;
             $quoteToJson->closeTime = $quotes[$x]->closeTime;
             $quoteToJson->high = $quotes[$x]->high;
             $quoteToJson->low = $quotes[$x]->low;
             $quoteToJson->latestPrice = $quotes[$x]->latestPrice;
             $quoteToJson->latestSource = $quotes[$x]->latestSource;
             $quoteToJson->latestTime = $quotes[$x]->latestTime;
             $quoteToJson->latestUpdate = $quotes[$x]->latestUpdate;
             $quoteToJson->latestVolume = $quotes[$x]->latestVolume;
             $quoteToJson->iexRealtimePrice = $quotes[$x]->iexRealtimePrice;
             $quoteToJson->iexRealtimeSize = $quotes[$x]->iexRealtimeSize;
             $quoteToJson->iexLastUpdated = $quotes[$x]->iexLastUpdated;
             $quoteToJson->delayedPrice = $quotes[$x]->delayedPrice;
             $quoteToJson->delayedPriceTime = $quotes[$x]->delayedPriceTime;
             $quoteToJson->extendedPrice = $quotes[$x]->extendedPrice;
             $quoteToJson->extendedChange = $quotes[$x]->extendedChange;
             $quoteToJson->extendedChangePercent = $quotes[$x]->extendedChangePercent;
             $quoteToJson->extendedPriceTime = $quotes[$x]->extendedPriceTime;
             $quoteToJson->previousClose = $quotes[$x]->previousClose;
             $quoteToJson->changePercent = $quotes[$x]->changePercent;
             $quoteToJson->iexMarketPercent = $quotes[$x]->iexMarketPercent;
             $quoteToJson->iexVolume = $quotes[$x]->iexVolume;
             $quoteToJson->avgTotalVolume = $quotes[$x]->avgTotalVolume;
             $quoteToJson->iexBidPrice = $quotes[$x]->iexBidPrice;
             $quoteToJson->iexBidSize = $quotes[$x]->iexBidSize;
             $quoteToJson->iexAskPrice = $quotes[$x]->iexAskPrice;
             $quoteToJson->iexAskSize = $quotes[$x]->iexAskSize;
             $quoteToJson->marketCap = $quotes[$x]->marketCap;
             $quoteToJson->peRatio = $quotes[$x]->peRatio;
             $quoteToJson->week52High = $quotes[$x]->week52High;
             $quoteToJson->week52Low = $quotes[$x]->week52Low;
             $quoteToJson->ytdChange = $quotes[$x]->ytdChange;
            
             $quotesToJson[] = $quoteToJson;
            
             $json_response = json_encode($quotesToJson);
            
            
            //echo $quotes[$x]->symbol;
        
        
        }
        echo $json_response;
        
        
        //echo $json_response;

//        class Car
//        {
//            public $color;
//            public $type;
//        }
//
//        $myCar = new Car();
//        $myCar->color = 'red';
//        $myCar->type = 'sedan';
//
//        $yourCar = new Car();
//        $yourCar->color = 'blue';
//        $yourCar->type = 'suv';
//
//
//        $cars = array($myCar, $yourCar);
//
//        $json_response = json_encode($cars);
//        echo $json_response;
        
    }




?>
