<?php

function connect() {
	return mysqli_connect('localhost', 'root', '', 'weddings');
}

function get_recent_posts($db) {
	$res = $db->query('SELECT * FROM blog_posts LIMIT 3');
	return db_set_to_array($res);
}

function get_gallery_photos($db) {
	$res = $db->query('SELECT * FROM gallery_photos');
	return db_set_to_array($res);
}

function db_set_to_array($db_set) {
	if ($db_set === false) {
		return array();
	}
	
	$array = array();
	while ($row = $db_set->fetch_object()) {
		$array[] = $row;
	}
	return $array;
}