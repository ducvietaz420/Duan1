<?php
include './includes/connect.php';
$id = $_REQUEST['id'];
$q = "delete from lichtrinh where id=$id";
$d = $db->query($q);

if ($d->rowCount() > 0) {
    // Hiển thị thông báo xóa thành công
    echo "<script>alert('Xóa lịch trình thành công!');</script>";
    // Chuyển hướng đến trang danh sách lịch trình
    header("location:index.php?page=dslt");
} else {
    // Hiển thị thông báo xóa không thành công
    echo "<script>alert('Xóa lịch trình không thành công!');</script>";
}
