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

	//Lấy category_id từ URL
	$category_id = $_GET['category_id'];

	//Xóa
	delete_category($category_id);

	//Quay về trang danh sách danh mục sản phẩm
	header('location:list.php');
?>
