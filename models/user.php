<?php
	function get_user_by_username($username){
		//SQL
		$sql = "SELECT * FROM tbl_user WHERE username = '$username' AND status = 1";
		//Query
		$query = mysql_query($sql);
		//Fetch và return
		return mysql_fetch_assoc($query);
	}
?>