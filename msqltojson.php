<?php
    //Create Database connection
    $db = mysql_connect("localhost","edlevinj_elj","xmen13");
    if (!$db) {
        die('Could not connect to db: ' . mysql_error());
    }
 
    //Select the Database
    mysql_select_db("edlevinj_elj",$db);
    
    //Replace * in the query with the column names.
    $result = mysql_query("select * from eljstorelocator", $db);  
    
    //Create an array
    $json_response = array();
    
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
        $row_array['storelocator_id'] = $row['storelocator_id'];
		$row_array['name'] = $row['name'];
		$row_array['address'] = $row['address'];
		$row_array['city'] = $row['city'];
		$row_array['country'] = $row['country'];
		$row_array['zipcode'] = $row['zipcode'];
		$row_array['state'] = $row['state'];
		$row_array['state_id'] = $row['state_id'];
		$row_array['email'] = $row['email'];
		$row_array['phone'] = $row['phone'];
		$row_array['fax'] = $row['fax'];
		$row_array['description'] = $row['description'];
		$row_array['status'] = $row['status'];
		$row_array['sort'] = $row['sort'];
		$row_array['link'] = $row['link'];
		$row_array['lat'] = $row['latitude'];
		$row_array['lng'] = $row['longtitude'];
		$row_array['zoom_level'] = $row['zoom_level'];
		$row_array['image_icon'] = $row['image_icon'];
        
        //push the values in the array
        array_push($json_response,$row_array);
    }
    echo json_encode($json_response);
    
    //Close the database connection
	mysql_close($db);
?>