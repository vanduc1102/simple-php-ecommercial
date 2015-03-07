<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị - Danh mục sản phẩm - Danh sách</title>
</head>
<body>

<table width="100%" cellpadding="10">
<tr>
<th>ID</th>
<th>Tên danh mục</th>
<th>Trạng thái</th>
<th>Ngày tạo</th>
<th>Ngày chỉnh sửa</th>
<th>Tác vụ</th>
</tr>
<?php while($category = mysql_fetch_assoc($category_list)): ?>
<tr>
<td><?php echo $category['category_id']; ?></td>
<td><a href="<?php echo SITE_URL . 'admin/category/edit.php?category_id=' . $category['category_id']; ?>"><?php echo $category['name']; ?></a></td>
<td><?php echo ($category['status'] == 1) ? 'Kích hoạt' : 'Không kích hoạt'; ?></td>
<td><?php echo date('d-m-Y H:i:s', $category['created']); ?></td>
<td><?php echo date('d-m-Y H:i:s', $category['modified']); ?></td>
<td><a href="<?php echo SITE_URL . 'admin/category/delete.php?category_id=' . $category['category_id']; ?>">Xóa</a></td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>