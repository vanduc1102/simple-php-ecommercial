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

	//Nếu có POST dữ liệu lên thì xử lý cập nhật
	if($_POST){
	//Nhận dữ liệu từ form và gán vào một mãng
	$data = array(
	'name' => $_POST['name'],
	'status' => isset($_POST['status']) ? 1 : 0,
	'modified' => date('Y-m-d H:i:s')
	);

	//Cập nhật
	if(edit_category($data, $category_id)){
	//Tạo session để lưu cờ thông báo thành công
	$_SESSION['success'] = true;

	//Tải lại trang (Mục đích là để tải lại thông tin mới)
	header('location:edit.php?category_id=' . $category_id);
	}
	}

	//Lấy thông tin danh mục sản phẩm để trình bày trên form
	$category = get_category_by_id($category_id);

	//Require file giao diện (View)
	require '../../views/admin/category/edit.tpl.php';
?>