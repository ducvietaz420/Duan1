<?php

$id = $_REQUEST['id'];
// Lấy dữ liệu cũ
$q = "select * from lichtrinh where id=$id";
$rows = $db->query($q);
$r = $rows->fetch();


if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    //Validate du lieu
    $error = array(); //Khoi tao mang loi rong
    if (empty($_POST['malichtrinh'])) {
        $error[] = 'malichtrinh';
    } else {
        $malichtrinh = $_POST['malichtrinh'];
    }
    if (empty($_POST['gadi_id'])) {
        $error[] = 'gadi_id';
    } else {
        $gadi_id = $_POST['gadi_id'];
    }
    if (empty($_POST['gaden_id'])) {
        $error[] = 'gaden_id';
    } else {
        $gaden_id = $_POST['gaden_id'];
    }
    if (empty($_POST['ngaydi'])) {
        $error[] = 'ngaydi';
    } else {
        $ngaydi = $_POST['ngaydi'];
    }
    if (empty($_POST['ngayve'])) {
        $error[] = 'ngayve';
    } else {
        $ngayve = $_POST['ngayve'];
    }
    if (empty($_POST['matau'])) {
        $error[] = 'matau';
    } else {
        $matau = $_POST['matau'];
    }

    if (empty($_POST['chieudi'])) {
        $error[] = 'chieudi';
    } else {
        $chieudi = $_POST['chieudi'];
    }
    if (empty($_POST['khoihanh'])) {
        $error[] = 'khoihanh';
    } else {
        $khoihanh = $_POST['khoihanh'];
    }


    if (empty($error)) {
        //Lay du lieu tu form
        $query = "update lichtrinh"
            . " set malichtrinh='$malichtrinh', gadi_id='$gadi_id', gaden_id='$gaden_id', ngaydi='$ngaydi', ngayve='$ngayve',khoihanh='$khoihanh', matau='$matau', chieudi='$chieudi' where id=$id";

        //Thuc thi cau truy van
        $count = $db->exec($query);
        if ($count > 0) {
            header("location:index.php?page=dslt");
        }
    }
}
?>
<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3> Cập nhật Lịch Trình</h3>
            </div>
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal row-fluid">

                <div class="control-group">
                    <label class="control-label">Mã Lịch Trình</label>
                    <div class="controls">
                        <input type="text" name="malichtrinh" class="span6" value="<?php if (isset($r)) echo $r['malichtrinh']; ?>" />
                        <span class="errors">
                            <?php
                            if (!empty($error) && in_array('malichtrinh', $error)) {
                                echo "Mời nhập thông tin !";
                            }
                            ?>
                        </span>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Ga Đi</label>
                    <div class="controls">
                        <input type="text" name="gadi_id" class="span6" value="<?php if (isset($r)) echo $r['gadi_id']; ?>" />
                        <span class="errors">
                            <?php
                            if (!empty($error) && in_array('gadi_id', $error)) {
                                echo "Mời nhập thông tin !";
                            }
                            ?>
                        </span>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Ga Đến</label>
                    <div class="controls">
                        <input type="text" name="gaden_id" class="span6" value="<?php if (isset($r)) echo $r['gaden_id']; ?>" />
                        <span class="errors">
                            <?php
                            if (!empty($error) && in_array('gaden_id', $error)) {
                                echo "Mời nhập thông tin !";
                            }
                            ?>
                        </span>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Ngày Đi</label>
                    <div class="controls">
                        <input type="text" name="ngaydi" class="span6" value="<?php if (isset($r)) echo $r['ngaydi']; ?>" />
                        <span class="errors">
                            <?php
                            if (!empty($error) && in_array('ngaydi', $error)) {
                                echo "Mời nhập thông tin !";
                            }
                            ?>
                        </span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Ngày Về</label>
                    <div class="controls">
                        <input type="text" name="ngayve" class="span6" value="<?php if (isset($r)) echo $r['ngayve']; ?>" />
                        <span class="errors">
                            <?php
                            if (!empty($error) && in_array('ngayve', $error)) {
                                echo "Mời nhập thông tin !";
                            }
                            ?>
                        </span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Khởi Hành</label>
                    <div class="controls">
                        <input type="text" name="khoihanh" class="span6" value="<?php if (isset($r)) echo $r['khoihanh']; ?>" />
                        <span class="errors">
                            <?php
                            if (!empty($error) && in_array('khoihanh', $error)) {
                                echo "Mời nhập thông tin !";
                            }
                            ?>
                        </span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Mã Tàu</label>
                    <div class="controls">
                        <input type="text" name="matau" class="span6" value="<?php if (isset($r)) echo $r['matau']; ?>" />
                        <span class="errors">
                            <?php
                            if (!empty($error) && in_array('matau', $error)) {
                                echo "Mời nhập thông tin !";
                            }
                            ?>
                        </span>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Chiều đi</label>
                    <div class="controls">
                        <input type="text" name="chieudi" class="span6" value="<?php if (isset($r)) echo $r['chieudi']; ?>" />
                        <span class="errors">
                            <?php
                            if (!empty($error) && in_array('chieudi', $error)) {
                                echo "Mời nhập thông tin !";
                            }
                            ?>
                        </span>
                    </div>
                </div>




                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn-inverse">Cập nhật</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>