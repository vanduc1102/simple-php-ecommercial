<?php

	function get_category_list(){
		//SQL
		$sql = "SELECT * FROM tbl_category ORDER BY category_id DESC";

		//Query và return
		return mysql_query($sql);
	}
?>