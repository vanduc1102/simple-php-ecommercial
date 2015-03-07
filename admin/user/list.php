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

	//Lấy danh sách thành viên
	$user_list = get_user_list();

	//Require file giao diện (View)
	require '../../views/admin/user/list.tpl.php';
?>