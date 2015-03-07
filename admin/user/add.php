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

	//Nếu có POST dữ liệu lên thì xử lý
	if($_POST){
		//Nhận dữ liệu từ form và gán vào một mãng
		$data = array(
			'username' => $_POST['username'],
			'password' => md5($_POST['password']),
			'fullname' => $_POST['fullname'],
			'email' => $_POST['email'],
			'status' => isset($_POST['status']) ? 1 : 0,
			'created' => date('Y-m-d H:i:s'),
			'modified' => date('Y-m-d H:i:s')
		);

		//Thêm mới
		if(add_user($data)){
			//Tạo session để lưu cờ thông báo thành công
			$_SESSION['success'] = true;

			//Tải lại trang (Mục đích là để reset form)
			header('location:add.php');
		}
	}

	//Require file giao diện (View)
	require '../../views/admin/user/add.tpl.php';
?>