<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị - Thành viên - Chỉnh sửa</title>
</head>
	<body>
	<form name="edit" method="POST" action="">
		<?php if(isset($_SESSION['success'])): ?>
		<p style="color:green;">Thành viên đã được chỉnh sửa thành công!</p>
		<?php unset($_SESSION['success']); ?>
		<?php endif; ?>

		<p>
		<label>Tài khoản:</label>
		<input type="text" name="username" value="<?php echo $user['username']; ?>" />
		</p>
		<p>
		<label>Mật khẩu:</label>
		<input type="password" name="password" value="" />
		</p>
		<p>
		<label>Họ tên:</label>
		<input type="text" name="fullname" value="<?php echo $user['fullname']; ?>" />
		</p>
		<p>
		<label>Email:</label>
		<input type="text" name="email" value="<?php echo $user['email']; ?>" />
		</p>
		<p>
		<label>Trạng thái:</label>
		<input type="checkbox" name="status" value="1" <?php echo ($user['status'] == 1) ? 'checked="checked"' : ''; ?> />
		</p>
		<p>
		<input type="submit" value="Chỉnh sửa" />
		</p>
	</form>
	</body>
</html>