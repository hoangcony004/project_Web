<?php



    // kiem tra nguoi dung cos click vao nut login khoong
    if (isset($_POST['btn_doimatkhau'])) {
        // lay du lieu ve
        $matkhaucu = $_POST['matkhaucu'];
        $matkhaumoi = $_POST['matkhaumoi'];

        // b1 tao 1 mang luu tru cac loi
        $loi = array();
        if ($matkhaucu == '') {
            $loi['matkhaucu'] = 'Mật khẩu không được để trống!';
        }
        if ($matkhaucu == '') {
            $loi['matkhaumoi'] = 'Mật khẩu không được để trống!';
        }
        //echo 'matkhaucu'.$matkhaumoi;
        if (!$loi) {
            $user = $db->get('khachhang', array('matkhau' => $matkhaucu));
                // var_dump(md5($password));
                // var_dump($user[0]['matkhau']);
                // die;
                if ($matkhaucu != $user[0]['matkhau']) {
                    $loi['matkhaucu'] = 'Sai mật khẩu!';
                }

                // if ($matkhaucu != $matkhaumoi) {
                //     $loi['matkhaumoi'] = 'Mật khẩu không khớp!';
                // }
           
        }
        // // neu thoa man taat ca dieu kien ttren (khong con loi nao say ra)
        // if (!$loi) {
        //     // gan id nguoi dung vao session
        //     $_SESSION['ss_client'] = $user[0]['id'];
        //     $_SESSION['ss_client1'] = $user[0]['hovaten'];
        //     header('location: ?controller=trangchu');
        // }

    }
    require './view/V_doimatkhau.php';
