<?php
	//Khởi động session
	session_start();

	//Kiểm tra nếu chưa đăng nhập thì quay về trang đăng nhập
	if(!isset($_SESSION['user'])){
		header('location:login.php');
	}

	//Require các file cần thiết
	require '../../configs/config.php';
	require '../../libraries/connect.php';
	require '../../models/user.php';

	//Lấy user_id từ URL
	$user_id = $_GET['user_id'];

	//Nếu có POST dữ liệu lên thì xử lý cập nhật
	if($_POST){
		//Nhận dữ liệu từ form và gán vào một mãng
		$data = array(
			'username' => $_POST['username'],
			'password' => empty($_POST['password']) ? null : md5($_POST['password']),
			'fullname' => $_POST['fullname'],
			'email' => $_POST['email'],
			'status' => isset($_POST['status']) ? 1 : 0,
			'modified' => date('Y-m-d H:i:s')
		);

		//Cập nhật
		if(edit_user($data, $user_id)){
			//Tạo session để lưu cờ thông báo thành công
			$_SESSION['success'] = true;

			//Tải lại trang (Mục đích là để tải lại thông tin mới)
			header('location:edit.php?user_id=' . $user_id);
		}
	}

	//Lấy thông tin thành viên để trình bày trên form
	$user = get_user_by_id($user_id);

	//Require file giao diện (View)
	require '../../views/admin/user/edit.tpl.php';
?>