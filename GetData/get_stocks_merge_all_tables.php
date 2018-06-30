<?php

include '/storage/ssd4/893/6018893/public_html/QoutesList/stocks_list_cron_job.php';
include '/storage/ssd4/893/6018893/public_html/ConnectToDataBase/connect_to_data_base.php';
include '/storage/ssd4/893/6018893/public_html/DatModels/quotes_data_model.php';



	$sql = "INSERT INTO quotes_data_all SELECT * FROM quotes_data";
	$sql_1 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_1";
	$sql_2 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_2";
	$sql_3 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_3";
	$sql_4 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_4";
	$sql_5 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_5";
	$sql_6 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_6";
	$sql_7 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_7";
	$sql_8 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_8";
	$sql_9 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_9";
	$sql_10 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_10";
	$sql_11 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_11";
	$sql_12 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_12";
	$sql_13 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_13";
	$sql_14 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_14";
	$sql_15 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_15";
	$sql_16 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_16";
	$sql_17 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_17";
	$sql_18 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_18";
	$sql_19 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_19";
	$sql_20 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_20";
	$sql_21 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_21";
	$sql_22 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_22";
	$sql_23 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_23";
	$sql_24 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_24";
	$sql_25 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_25";
	$sql_26 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_26";
	$sql_27 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_27";
	$sql_28 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_28";
	$sql_29 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_29";
	$sql_30 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_30";
	$sql_31 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_31";
	$sql_32 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_32";
	$sql_33 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_33";
	$sql_34 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_34";
	$sql_35 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_35";
	$sql_36 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_36";
	$sql_37 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_37";
	$sql_38 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_38";
	$sql_39 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_39";
	$sql_40 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_40";
	$sql_41 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_41";
	$sql_42 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_42";
	$sql_43 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_43";
	$sql_44 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_44";
	$sql_45 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_45";
	$sql_46 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_46";
	$sql_47 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_47";
	$sql_48 = "INSERT INTO quotes_data_all SELECT * FROM quotes_data_48";

    if (mysqli_query($link, $sql)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_2)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_3)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_4)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_5)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_6)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_7)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_8)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_9)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_10)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_11)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_12)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_13)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_14)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_15)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_16)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_17)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_18)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_19)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_20)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_21)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	
    if (mysqli_query($link, $sql_22)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	
	    if (mysqli_query($link, $sql_23)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_24)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_25)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_26)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_27)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_28)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_29)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_30)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_31)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_32)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_33)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_34)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_35)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_36)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_37)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_38)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_39)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_40)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_41)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_42)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_43)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	
    if (mysqli_query($link, $sql_44)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_45)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_46)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_47)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	if (mysqli_query($link, $sql_48)) {
        $last_id = mysqli_insert_id( $link);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error( $link);
    }
	
	mysqli_close($link);


?>
