<?php
	//Khởi động session
	session_start();

	//Kiểm tra nếu chưa đăng nhập thì quay về trang đăng nhập
	if(!isset($_SESSION['user'])){
		header('location:../user/login.php');
	}

	//Require các file cần thiết
	require '../../configs/config.php';
	require '../../libraries/connect.php';
	require '../../models/category.php';

	//Lấy danh sách danh mục sản phẩm
	$category_list = get_category_list();

	//Require file giao diện (View)
	require '../../views/admin/category/list.tpl.php';
?>