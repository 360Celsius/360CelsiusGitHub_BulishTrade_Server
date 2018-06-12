<?php

    include '/storage/ssd4/893/6018893/public_html/ConnectToDataBase/connect_to_data_base.php';
    include '/storage/ssd4/893/6018893/public_html/DatModels/quotes_data_model.php';
    
    
    
    $sql = "SELECT * FROM quotes_data ORDER BY iexBidPrice DESC";
    $result = $link->query($sql);
    
    $quotesTops = [] ;
    $stopLoop = 0;
    
    if($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        
            
            $quote = new Quote();
            
            $quote->symbol = $row["symbol"];
            $quote->companyName =  $row["companyName"];
            $quote->primaryExchange =  $row["primaryExchange"];
            $quote->sector =  $row["sector"];
            $quote->calculationPrice =  $row["calculationPrice"];
            $quote->open =  $row["openValue"];
            $quote->openTime =  $row["openTime"];
            $quote->close =  $row["closeValue"];
            $quote->closeTime =  $row["closeTime"];
            $quote->high =  $row["highValue"];
            $quote->low =  $row["lowValue"];
            $quote->latestPrice =  $row["latestPrice"];
            $quote->latestSource =  $row["latestSource"];
            $quote->latestTime =  $row["latestTime"];
            $quote->latestUpdate =  $row["latestUpdate"];
            $quote->latestVolume =  $row["latestVolume"];
            $quote->iexRealtimePrice =  $row["iexRealtimePrice"];
            $quote->iexRealtimeSize =  $row["iexRealtimeSize"];
            $quote->iexLastUpdated =  $row["iexLastUpdated"];
            $quote->delayedPrice =  $row["delayedPrice"];
            $quote->delayedPriceTime =  $row["delayedPriceTime"];
            $quote->extendedPrice =  $row["extendedPrice"];
            $quote->extendedChange =  $row["extendedChange"];
            $quote->extendedChangePercent =  $row["extendedChangePercent"];
            $quote->extendedPriceTime =  $row["extendedPriceTime"];
            $quote->previousClose =  $row["previousClose"];
            $quote->change =  $row["changeValue"];
            $quote->changePercent =  $row["changePercent"];
            $quote->iexMarketPercent =  $row["iexMarketPercent"];
            $quote->iexVolume =  $row["iexVolume"];
            $quote->avgTotalVolume =  $row["avgTotalVolume"];
            $quote->iexBidPrice =  $row["iexBidPrice"];
            $quote->iexBidSize =  $row["iexBidSize"];
            $quote->iexAskPrice =  $row["iexAskPrice"];
            $quote->iexAskSize =  $row["iexAskSize"];
            $quote->marketCap =  $row["marketCap"];
            $quote->peRatio =  $row["peRatio"];
            $quote->week52High =  $row["week52High"];
            $quote->week52Low =  $row["week52Low"];
            $quote->ytdChange =  $row["ytdChange"];
            
            if($stopLoop == 16){
                break;
            }
            
            if($row["iexBidPrice"] != ''){
                $quotesTops[] = $quote;
                $stopLoop++;
            }else if($stopLoop > 0){
                $stopLoop--;
            }
            
            
            
        }
        
    } else {
       echo "0 results";
    }
    $link->close();
    
?>
