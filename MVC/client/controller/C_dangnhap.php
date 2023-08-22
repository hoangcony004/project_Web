<?php

// kiem tra nguoi dung da dan nhap chua
if (!isset($_SESSION['ss_client'])) {

    // kiem tra nguoi dung cos click vao nut login khoong
    if (isset($_POST['btn_dangnhap'])) {
        // lay du lieu ve
        $username = $_POST['username'];
        $password = $_POST['password'];

        // b1 tao 1 mang luu tru cac loi
        $loi = array();
        if ($username == '') {
            $loi['username'] = 'Tên đăng nhập không được để trống!';
        }
        if ($password == '') {
            $loi['password'] = 'Mật khẩu không được để trống!';
        }
        
        if (!$loi) {
            $user = $db->get('khachhang', array('tendangnhap' => $username));
            if (empty($user)) {
                $loi['username'] = 'Tên đăng nhập không tồn tại!';
            }
            // neu ton tai user name thi kiem tra mat khau
            else {
                // var_dump(md5($password));
                // var_dump($user[0]['matkhau']);
                // die;
                if ($password != $user[0]['matkhau']) {
                    $loi['password'] = 'Sai mật khẩu!';
                }
            }
        }
        // neu thoa man taat ca dieu kien ttren (khong con loi nao say ra)
        if (!$loi) {
            // gan id nguoi dung vao session
            $_SESSION['ss_client'] = $user[0]['id'];
            $_SESSION['ss_client1'] = $user[0]['hovaten'];
            header('location: ?controller=trangchu');
        }
        require './view/V_dangnhap_dangky.php';
    }else {
        if (isset($_POST['btn_dangky'])) {
            // lay du lieu ve
            $tendk = $_POST['tendk'];
            $sdtdk = $_POST['sdtdk'];
            $mkdk = $_POST['mkdk'];
            $rmkdk = $_POST['rmkdk'];
            // kiem tra tai khoan
            //echo 'ten dang nhap la : '.$tendk;
            //b1 tao 1 mang luu tru cac loi
            $loi1 = array();
            if ($tendk == '') {
                $loi['tendk'] = 'Tên đăng ký không được để trống!';
            }
            if ($sdtdk == '') {
                $loi['sdtdk'] = 'Số điện thoại không được để trống!';
            }
            if ($mkdk == '') {
                $loi['mkdk'] = 'Mật khẩu không được để trống!';
            }
            // if ($mkdk >= 8) {
            //     $loi['mkdk'] = 'gjrgyk';
            // }else {
            //     $loi['mkdk'] = 'Mật khẩu phải lớn hơn hoặc bằng 8 ký tự!';
            // }
            md5($mkdk);
            if ($rmkdk != $mkdk) {
                $loi['rmkdk'] = 'Mật khẩu không khớp!';
            }
    
            if (!$loi) {
                $db->insert('khachhang', array(
                    'tendangnhap' => $tendk,
                    'matkhau' => md5($mkdk),
                    'sodienthoai' => $sdtdk
                    
                ));
                header('location: ?controller=dangnhap');
            }
            
        }
        require './view/V_dangnhap_dangky.php';
    }
    

    
}
// neu da dang nhap thi chuyen nguoi dung den trang chu
header('location: ?controller=trangchu');
