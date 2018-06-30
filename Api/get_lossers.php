<?php
    
    include '/storage/ssd4/893/6018893/public_html/ConnectToDataBase/connect_to_data_base.php';
    include '/storage/ssd4/893/6018893/public_html/DatModels/quotes_data_model.php';
    
    
    
    $sql = "SELECT * FROM quotes_data UNION ALL
SELECT * FROM quotes_data_2 UNION ALL
SELECT * FROM quotes_data_3 UNION ALL
SELECT * FROM quotes_data_4 UNION ALL
SELECT * FROM quotes_data_5 UNION ALL
SELECT * FROM quotes_data_6 UNION ALL
SELECT * FROM quotes_data_7 UNION ALL
SELECT * FROM quotes_data_8 UNION ALL
SELECT * FROM quotes_data_9 UNION ALL
SELECT * FROM quotes_data_10 UNION ALL
SELECT * FROM quotes_data_11 UNION ALL
SELECT * FROM quotes_data_12 UNION ALL
SELECT * FROM quotes_data_13 UNION ALL
SELECT * FROM quotes_data_14 UNION ALL
SELECT * FROM quotes_data_15 UNION ALL
SELECT * FROM quotes_data_16 UNION ALL
SELECT * FROM quotes_data_17 UNION ALL
SELECT * FROM quotes_data_18 UNION ALL
SELECT * FROM quotes_data_19 UNION ALL
SELECT * FROM quotes_data_20 UNION ALL
SELECT * FROM quotes_data_21 UNION ALL
SELECT * FROM quotes_data_22 UNION ALL
SELECT * FROM quotes_data_23 UNION ALL
SELECT * FROM quotes_data_24 UNION ALL
SELECT * FROM quotes_data_25 UNION ALL
SELECT * FROM quotes_data_26 UNION ALL
SELECT * FROM quotes_data_27 UNION ALL
SELECT * FROM quotes_data_28 UNION ALL
SELECT * FROM quotes_data_29 UNION ALL
SELECT * FROM quotes_data_30 UNION ALL
SELECT * FROM quotes_data_31 UNION ALL
SELECT * FROM quotes_data_32 UNION ALL
SELECT * FROM quotes_data_33 UNION ALL
SELECT * FROM quotes_data_34 UNION ALL
SELECT * FROM quotes_data_35 UNION ALL
SELECT * FROM quotes_data_36 UNION ALL
SELECT * FROM quotes_data_37 UNION ALL
SELECT * FROM quotes_data_38 UNION ALL
SELECT * FROM quotes_data_39 UNION ALL
SELECT * FROM quotes_data_40 UNION ALL
SELECT * FROM quotes_data_41 UNION ALL
SELECT * FROM quotes_data_42 UNION ALL
SELECT * FROM quotes_data_43 UNION ALL
SELECT * FROM quotes_data_44 UNION ALL
SELECT * FROM quotes_data_45 UNION ALL
SELECT * FROM quotes_data_46 UNION ALL
SELECT * FROM quotes_data_47 UNION ALL
SELECT * FROM quotes_data_48
ORDER BY extendedChangePercent ASC";


    $result = $link->query($sql);
    
    $quotesLosers = [] ;
    $stopLoop = 0;
    
    if ($result->num_rows > 0) {
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
            
            if($stopLoop == 50){
                break;
            }
            
            if($row["extendedChangePercent"] != ''){
                $quotesLosers[] = $quote;
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

