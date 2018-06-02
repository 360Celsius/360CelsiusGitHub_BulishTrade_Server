<?php

include '/storage/ssd4/893/6018893/public_html/ConnectToDataBase/connect_to_data_base.php';
include '/storage/ssd4/893/6018893/public_html/DatModels/symbol_data_model.php';
    
    
    
    $url = 'https://api.iextrading.com/1.0/ref-data/symbols';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    
    $result = json_decode($data,true);
    
    curl_close($ch);

    echo $result[0]['symbol'];

    for ($x = 5000; $x <= count($result)-1 ; $x++) {
        
        
        $symbol = $result[$x]['symbol'];
        $name = $result[$x]['name'];
        $isEnabled = $result[$x]['isEnabled'];
        
        echo $result[$x]['name'];

        $sql = "REPLACE INTO quotes_symbols (id,symbol,name,isEnabled)
                                 VALUES ('$x','$symbol','$name','$isEnabled')";

        if (mysqli_query($link, $sql)) {
            $last_id = mysqli_insert_id( $link);
            echo "New record created successfully. Last inserted ID is: " . $last_id;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error( $link);
        }



    }

    mysqli_close($link);

?>
