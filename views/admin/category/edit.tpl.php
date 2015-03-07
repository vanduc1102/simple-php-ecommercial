<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị - Danh mục sản phẩm - Chỉnh sửa</title>
</head>
<body>

<form name="edit" method="POST" action="">
<?php if(isset($_SESSION['success'])): ?>
<p style="color:green;">Danh mục sản phẩm đã được chỉnh sửa thành công!</p>
<?php unset($_SESSION['success']); ?>
<?php endif; ?>

<p>
<label>Tên danh mục:</label>
<input type="text" name="name" value="<?php echo $category['name']; ?>" />
</p>
<p>
<label>Trạng thái:</label>
<input type="checkbox" name="status" value="1" <?php echo ($category['status'] == 1) ? 'checked="checked"' : ''; ?> />
</p>
<p>
<input type="submit" value="Chỉnh sửa" />
</p>
</form>

</body>
</html>