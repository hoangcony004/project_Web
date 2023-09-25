<?php
// kiem tra dang nhap
if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));

    // su dung mang 2 chieu kiem tra xem tai khoan co quyen khong
    if ($user[0]['cap'] == 1) {
        // lay method tu url
        $method = $_GET['method'];
        switch ($method) {
            case 'xoakh':
                // lay id tu url ve 
                $id = $_GET['id'];
                // su dung function da co de su dung 
                $db->delete('khachhang', array('id' => $id));
                // chuyen huong nguoi dung
                header('location: ?controller=khachhang');
                break;
            case 'suakh':
                // lay id tu url ve 
                $id = $_GET['id'];
                // su dung function da co de su dung 
                $data_khachhang = $db->get('khachhang', array('id' => $id));
                // lay du lieu tu o input nguoi dung nhap
                if (isset($_POST['btn_suakh'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $hoten = $_POST['hoten'];
                    $sodt = $_POST['sodt'];
                    $email = $_POST['email'];
                    $diachi = $_POST['diachi'];
        
                    // khai bao loi
                    $loi = array();
                    $password = md5($password);
                    if (!$loi) {
                        // su dung function da co de su dung 
                        $db->update('khachhang', array(
                            'tendangnhap' => $username,
                            'matkhau' => $password,
                            'hovaten' => $hoten,
                            'sodienthoai' => $sodt,
                            'email' => $email,
                            'diachi' => $diachi
                        ),array('id' => $id)
                        );
                        // chuyen huong nguoi dung
                        header('location: ?controller=khachhang');
                    }
                }
                break;
        }
    } else {
        // hien thi thong bao
        echo '<script>alert("Bạn không có quyền")</script>';
    }
}else {
    // chuyen huong nguoi dung
    header('location: ?controller=dangnhap');
}
require './view/V_xulykhachhang.php';