<?php
	function get_user_by_username($username){
		//SQL
		$sql = "SELECT * FROM tbl_user WHERE username = '$username' AND status = 1";
		//Query
		$query = mysql_query($sql);
		//Fetch và return
		return mysql_fetch_assoc($query);
	}

	function get_user_list(){
		//SQL
		$sql = "SELECT * FROM tbl_user ORDER BY user_id DESC";

		//Query và return
		return mysql_query($sql);
	}
	
	function add_user($data){
		//SQL
		$sql = "INSERT INTO tbl_user(username, password, fullname, email, status, created, modified) VALUES('{$data['username']}', '{$data['password']}', '{$data['fullname']}', '{$data['email']}', {$data['status']}, '{$data['created']}', '{$data['modified']}')";

		//Query và return
		return mysql_query($sql);
	}

	function get_user_by_id($user_id){
		//SQL
		$sql = "SELECT * FROM tbl_user WHERE user_id = $user_id";

		//Query
		$query = mysql_query($sql);

		//Fetch và return
		return mysql_fetch_assoc($query);
	}

	function edit_user($data, $user_id){
		//SQL
		$sql = "UPDATE tbl_user SET username = '{$data['username']}', fullname = '{$data['fullname']}', email = '{$data['email']}', status = {$data['status']}, modified = '{$data['modified']}'";

		//Nếu có cập nhật mật khẩu
		if($data['password'] != null){
			$sql .= ", password = '{$data['password']}'";
		}

		//Điều kiện
		$sql .= " WHERE user_id = $user_id";
		echo($sql);
		//Query và return
		return mysql_query($sql);
	}
	function delete_user($user_id){
		//SQL
		$sql = "DELETE FROM tbl_user WHERE user_id = $user_id";

		//Query và return
		return mysql_query($sql);
	}
?>