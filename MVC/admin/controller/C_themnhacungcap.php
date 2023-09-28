<?php
// kiem tra dang nhap
if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));
    // su dung mang 2 chieu kiem tra xem tai khoan co quyen khong
    if ($user[0]['cap'] == 1) {
        // lay du lieu tu o input nguoi dung nhap
        if (isset($_POST['btn_themnhacungcap'])) {
            $nhacungcap = $_POST['nhacungcap'];

            // khai bao loi
            $loi = array();
            if ($nhacungcap == '') {
                $loi['nhacungcap'] = 'Nhà cung cấp không được để trống!';
            }
            if (!$loi) {
                // su dung function da co de su dung 
                $db->insert('nhacungcap', array(
                    'tennhacungcap' => $nhacungcap,

                ));
                // chuyen huong nguoi dung
                // header('location: ?controller=nhacungcap');
                echo "<script>alert('Thêm nhà cung cấp thành công!')</script>";
                echo "<script>window.location.href = '?controller=nhacungcacp';</script>";
            }
        } else {
            $method = $_GET['method'];
            switch ($method) {
                case 'xoa':
                    // lay id tu url ve 
                    $id = $_GET['id'];
                    // su dung function da co de su dung 
                    $db->delete('nhacungcap', array('id' => $id));
                    // chuyen huong nguoi dung
                    //header('location: ?controller=dangnhap');
                    echo "<script>alert('Xóa thành công!')</script>";
                    echo "<script>window.location.href = '?controller=nhacungcap';</script>";
                    break;
            }
        }
    } else {
        // hien thi thong bao
        echo '<script>alert("Bạn không có quyền")</script>';
    }
} else {
    // chuyen huong nguoi dung
    //header('location: ?controller=dangnhap');
    echo "<script>alert('Bạn chưa đăng nhập!')</script>";
    echo "<script>window.location.href = '?controller=dangnhap';</script>";
}

require './view/V_themnhacungcap.php';
