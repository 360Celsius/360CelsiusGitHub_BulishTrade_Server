<?php
    
    header("Content-Type:application/json");
    error_reporting(0);
    
    $quotesToJson = [] ;
    
    if(!empty($_GET['requestType'])){
        $requestType = $_GET['requestType'];
        
        if(!strcmp($requestType,"getMostActive"))
        {
            include_once 'get_most_active.php';
            response(200,"Api Found",$quotesMostActive);

        }else if(!strcmp($requestType,"getTops")){
            
            include_once 'get_tops.php';
            response(200,"Api Found",$quotesTops);
            
        }else if(!strcmp($requestType,"getGainers")){
            
            include_once 'get_gainers.php';
            response(200,"Api Found",$quotesGainers);
            
        }else if(!strcmp($requestType,"getLossers")){
            
            include_once 'get_lossers.php';
            response(200,"Api Found",$quotesLosers);
            
        }
        
    }
    

    function response($status,$status_message,$quotes){
        
        header("HTTP/1.1 ".$status);
        
        if( count($quotes) > 0){
        
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
                
            
            }
            echo $json_response;
        }else{
            
            $quotesToJson[] = new ArrayObject();
            $json_response = json_encode($quotesToJson);
            echo $json_response;
        }
        
    }




?>
