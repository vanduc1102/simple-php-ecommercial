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
?>