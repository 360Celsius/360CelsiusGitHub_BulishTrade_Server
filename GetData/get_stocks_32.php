<?php

include '/storage/ssd4/893/6018893/public_html/QoutesList/stocks_list_cron_job.php';
include '/storage/ssd4/893/6018893/public_html/ConnectToDataBase/connect_to_data_base.php';
include '/storage/ssd4/893/6018893/public_html/DatModels/quotes_data_model.php';

for ($x = 0; $x <= count($arrayFiltered_32)-1 ; $x++) {
    echo "$arrayFiltered";
    $url = 'https://api.iextrading.com/1.0/stock/'. trim($arrayFiltered_32[$x]) .'/quote';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);

    $result = json_decode($data,true);

    curl_close($ch);

    $symbol = (string) $result['symbol'];
    if($symbol === NULL)
        $symbol = ' ';

    $companyName = (string) $result['companyName'];
    if($companyName === NULL)
        $companyName = ' ';

    $primaryExchange = (string)  $result['primaryExchange'];
    if($primaryExchange === NULL)
        $primaryExchange = ' ';

    $sector = (string)  $result['sector'];
    if($sector === NULL)
        $sector = ' ';

    $calculationPrice = (string) $result['calculationPrice'];
    if($calculationPrice === NULL)
        $calculationPrice = ' ';

    $open = (string) $result['open'];
    if($open === NULL)
        $open = ' ';

    $openTime = (string) $result['openTime'];
    if($openTime === NULL)
        $openTime = ' ';

    $close = (string) $result['close'];
    if($close === NULL)
        $close = ' ';

    $closeTime = (string) $result['closeTime'];
    if($closeTime === NULL)
        $closeTime = ' ';

    $high = (string) $result['high'];
    if($high === NULL)
        $high = ' ';

    $low = (string) $result['low'];
    if($low === NULL)
        $low = ' ';

    $latestPrice = (string) $result['latestPrice'];
    if($latestPrice === NULL)
        $latestPrice = ' ';

    $latestSource = (string) $result['latestSource'];
    if($latestSource === NULL)
        $latestSource = ' ';

    $latestTime = (string) $result['latestTime'];
    if($latestTime === NULL)
        $latestTime = ' ';

    $latestUpdate = (string) $result['latestUpdate'];
    if($latestUpdate === NULL)
        $latestUpdate = ' ';

    $latestVolume = (string) $result['latestVolume'];
    if($latestVolume === NULL)
        $latestVolume = ' ';

    $iexRealtimePrice = (string) $result['iexRealtimePrice'];
    if($iexRealtimePrice === NULL)
        $iexRealtimePrice = ' ';

    $iexRealtimeSize = (string) $result['iexRealtimeSize'];
    if($iexRealtimeSize === NULL)
        $iexRealtimeSize = ' ';

    $iexLastUpdated = (string) $result['iexLastUpdated'];
    if($iexLastUpdated === NULL)
        $iexLastUpdated = ' ';

    $delayedPrice = (string) $result['delayedPrice'];
    if($delayedPrice === NULL)
        $delayedPrice = ' ';

    $delayedPriceTime = (string) $result['delayedPriceTime'];
    if($delayedPriceTime === NULL)
        $delayedPriceTime = ' ';

    $extendedPrice = (string) $result['extendedPrice'];
    if($extendedPrice === NULL)
        $extendedPrice = ' ';

    $extendedChange = (string) $result['extendedChange'];
    if($extendedChange === NULL)
        $extendedChange = ' ';

    $extendedChangePercent = (string) $result['extendedChangePercent'];
    if($extendedChangePercent === NULL)
        $extendedChangePercent = ' ';

    $extendedPriceTime = (string) $result['extendedPriceTime'];
    if($extendedPriceTime === NULL)
        $extendedPriceTime = ' ';

    $previousClose = (string) $result['previousClose'];
    if($previousClose === NULL)
        $previousClose = ' ';

    $change = (string) $result['change'];
    if($change === NULL)
        $change = ' ';

    $changePercent = (string) $result['changePercent'];
    if($changePercent === NULL)
        $changePercent = ' ';

    $iexMarketPercent = (string) $result['iexMarketPercent'];
    if($iexMarketPercent === NULL)
        $iexMarketPercent = ' ';

    $iexVolume = (string) $result['iexVolume'];
    if($iexVolume === NULL)
        $iexVolume = ' ';

    $avgTotalVolume = (string) $result['avgTotalVolume'];
    if($avgTotalVolume === NULL)
        $avgTotalVolume = ' ';

    $iexBidSize = (string) $result['iexBidSize'];
    if($iexBidSize === NULL)
        $iexBidSize = ' ';

    $iexBidPrice = (string) $result['iexBidPrice'];
    if($iexBidPrice === NULL)
        $iexBidPrice = ' ';

    $iexAskSize = (string) $result['iexAskSize'];
    if($iexAskSize === NULL)
        $iexAskSize = ' ';

    $iexAskPrice = (string) $result['iexAskPrice'];
    if($iexAskPrice === NULL)
        $iexAskPrice = ' ';


    $marketCap = (string) $result['marketCap'];
    if($marketCap === NULL)
        $marketCap = ' ';

    $peRatio = (string) $result['peRatio'];
    if($peRatio === NULL)
        $peRatio = ' ';

    $week52High = (string) $result['week52High'];
    if($week52High === NULL)
        $week52High = ' ';

    $week52Low = (string) $result['week52Low'];
    if($week52Low === NULL)
        $week52Low = ' ';

    $ytdChange = (string) $result['ytdChange'];
    if($ytdChange === NULL)
        $ytdChange = ' ';


    $sql = "REPLACE INTO quotes_data_32 (id,symbol,companyName,primaryExchange,sector,calculationPrice,openValue,openTime,closeValue,closeTime,highValue,lowValue,latestPrice,latestSource,latestTime,latestUpdate,latestVolume,iexRealtimePrice,iexRealtimeSize,iexLastUpdated,delayedPrice,delayedPriceTime,extendedPrice,extendedChange,extendedChangePercent,extendedPriceTime,previousClose,changeValue,changePercent,iexMarketPercent,iexVolume,avgTotalVolume,iexBidSize,iexBidPrice,iexAskSize,iexAskPrice,marketCap,peRatio,week52High,week52Low,ytdChange)
       VALUES ('$x','$symbol','$companyName','$primaryExchange','$sector','$calculationPrice','$open','$openTime','$close','$closeTime','$high','$low','$latestPrice','$latestSource','$latestTime','$latestUpdate','$latestVolume','$iexRealtimePrice','$iexRealtimeSize','$iexLastUpdated','$delayedPrice','$delayedPriceTime','$extendedPrice','$extendedChange','$extendedChangePercent','$extendedPriceTime','$previousClose','$change','$changePercent','$iexMarketPercent','$iexVolume','$avgTotalVolume','$iexBidSize','$iexBidPrice','$iexAskSize','$iexAskPrice','$marketCap','$peRatio','$week52High','$week52Low','$ytdChange')";

    if (mysqli_query($link, $sql)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }



}

mysqli_close($link);

?>
