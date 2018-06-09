<?php
    include '/storage/ssd4/893/6018893/public_html/ConnectToDataBase/connect_to_data_base.php';
    include '/storage/ssd4/893/6018893/public_html/DatModels/quotes_data_model.php';



    $sql = "SELECT * FROM quotes_data";
    $result = $link->query($sql);
    
$data = array(
    (object)array(
        'oV' => 'myfirstvalue',
        'oT' => 'myfirsttext',
    ),
    (object)array(
        'oV' => 'mysecondvalue',
        'oT' => 'mysecondtext',
    ),
);
$json = json_encode($data);
echo $json;
   
    // if ($result->num_rows > 0) {
    //     // output data of each row
    //     while($row = $result->fetch_assoc()) {
    //         echo $row["symbol"];echo "<br>";
    //         echo $row["companyName"];echo "<br>";
    //         echo $row["primaryExchange"];echo "<br>";
    //         echo $row["sector"];echo "<br>";
    //         echo $row["calculationPrice"];echo "<br>";
    //         echo $row["openValue"];echo "<br>";
    //         echo $row["openTime"];echo "<br>";
    //         echo $row["closeValue"];echo "<br>";
    //         echo $row["closeTime"];echo "<br>";
    //         echo $row["highValue"];echo "<br>";
    //         echo $row["lowValue"];echo "<br>";
    //         echo $row["latestPrice"];echo "<br>";
    //         echo $row["latestSource"];echo "<br>";
    //         echo $row["latestTime"];echo "<br>";
    //         echo $row["latestUpdate"];echo "<br>";
    //         echo $row["latestVolume"];echo "<br>";
    //         echo $row["iexRealtimePrice"];echo "<br>";
    //         echo $row["iexRealtimeSize"];echo "<br>";
    //         echo $row["iexLastUpdated"];echo "<br>";
    //         echo $row["delayedPrice"];echo "<br>";
    //         echo $row["delayedPriceTime"];echo "<br>";
    //         echo $row["extendedPrice"];echo "<br>";
    //         echo $row["extendedChange"];echo "<br>";
    //         echo $row["extendedChangePercent"];echo "<br>";
    //         echo $row["extendedPriceTime"];echo "<br>";
    //         echo $row["previousClose"];echo "<br>";
    //         echo $row["changeValue"];echo "<br>";
    //         echo $row["changePercent"];echo "<br>";
    //         echo $row["iexMarketPercent"];echo "<br>";
    //         echo $row["iexVolume"];echo "<br>";
    //         echo $row["avgTotalVolume"];echo "<br>";
    //         echo $row["iexBidPrice"];echo "<br>";
    //         echo $row["iexBidSize"];echo "<br>";
    //         echo $row["iexAskPrice"];echo "<br>";
    //         echo $row["iexAskSize"];echo "<br>";
    //         echo $row["marketCap"];echo "<br>";
    //         echo $row["peRatio"];echo "<br>";
    //         echo $row["week52High"];echo "<br>";
    //         echo $row["week52Low"];echo "<br>";
    //         echo $row["ytdChange"];echo "<br>";
    //         echo "<br>";
    //         echo "============================================";
          
            
    //     }
    // } else {
    //     echo "0 results";
    // }
    $link->close();

?>