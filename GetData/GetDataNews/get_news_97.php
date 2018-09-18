<?php

include '/storage/ssd4/893/6018893/public_html/QoutesList/stocks_list_cron_job.php';
include '/storage/ssd4/893/6018893/public_html/ConnectToDataBase/connect_to_data_base.php';
include '/storage/ssd4/893/6018893/public_html/DatModels/quotes_data_model.php';

for ($x = 0; $x <= (count($arrayFiltered_97)-1)/2 ; $x++) {
  
    $url = 'https://api.iextrading.com/1.0/stock/'. trim($arrayFiltered_97[$x]) .'/news/last/1';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);


    $result = (array) json_decode($data,true);

    curl_close($ch);

    for($y = 0; $y <= count($result)-1; $y++){
        $result_without_array = $result[$y];

        $news_datetime = (string) $result_without_array['datetime'];
        if($news_datetime === NULL)
            $news_datetime = ' ';

        $headline = (string) $result_without_array['headline'];
        if($headline === NULL)
            $headline = ' ';

        $news_source = (string)  $result_without_array['source'];
        if($news_source === NULL)
            $news_source = ' ';

        $url = (string)  $result_without_array['url'];
        if($url === NULL)
            $url = ' ';

        $summary = (string) $result_without_array['summary'];
        if($summary === NULL)
            $summary = ' ';

        $related = (string) $result_without_array['related'];
        if($related === NULL)
            $related = ' ';

        $image = (string) $result_without_array['image'];
        if($image === NULL)
            $image = ' ';

        echo $headline;
        echo "<br>";

        $sql = "REPLACE INTO news_data_97 (id,news_datetime,headline,news_source,url,summary,related,image)
        VALUES ('$x','$news_datetime','$headline','$news_source','$url','$summary','$related','$image')";

        if (mysqli_query($link, $sql)) {
            $last_id = mysqli_insert_id( $link);
            echo "New record created successfully. Last inserted ID is: " . $last_id;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error( $link);
        }


    }

}

mysqli_close($link);

?>
