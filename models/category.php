<?php

	function get_category_list(){
		//SQL
		$sql = "SELECT * FROM tbl_category ORDER BY category_id DESC";

		//Query và return
		return mysql_query($sql);
	}

	function add_category($data){
		//SQL
		$sql = "INSERT INTO tbl_category(name, status, created, modified) VALUES('{$data['name']}', {$data['status']}, '{$data['created']}', '{$data['modified']}')";

		//Query và return
		return mysql_query($sql);
	}
	
	function get_category_by_id($category_id){
		//SQL
		$sql = "SELECT * FROM tbl_category WHERE category_id = $category_id";

		//Query
		$query = mysql_query($sql);

		//Fetch và return
		return mysql_fetch_assoc($query);
	}

	function edit_category($data, $category_id){
		//SQL
		$sql = "UPDATE tbl_category SET name = '{$data['name']}', status = {$data['status']}, modified = '{$data['modified']}' WHERE category_id = $category_id";

		//Query và return
		return mysql_query($sql);
	}
?>