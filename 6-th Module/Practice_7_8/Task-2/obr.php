<?php
	$descr = mysqli_connect("localhost", "root", "");
	mysqli_select_db($descr, "address");
	mysqli_set_charset($descr, "utf8");

	$choice_option = $_REQUEST['choice'];

	switch($choice_option) {
		case 'district':
			$result = mysqli_query($descr, "SELECT * FROM district");
			break;
		case 'area':
			$choice_district_id = $_REQUEST['id_district'];
			$result = mysqli_query($descr, "SELECT * FROM area WHERE id_district = $choice_district_id");
			break;
		case 'street':
			$choice_area_id = $_REQUEST['id_area'];
			$result = mysqli_query($descr, "SELECT * FROM street WHERE id_area = $choice_area_id");
			break;
	}

	$json_data = array();

	while($array = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		$json_data[] = $array;
	}
	
	echo json_encode($json_data);
?>
