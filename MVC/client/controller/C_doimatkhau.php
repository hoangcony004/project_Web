<?php



    // kiem tra nguoi dung cos click vao nut login khoong
    if (isset($_POST['btn_doimatkhau'])) {
        // lay du lieu ve
        $id = $_GET['id'];
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
            $pass = $db->get('khachhang', array('matkhau' => $matkhaucu));
                // var_dump(md5($password));
                // var_dump($user[0]['matkhau']);
                // die;
                if (empty($pass)) {
                    $loi['makhaucu'] = 'Sai mật khẩu!';
                }
                // neu ton tai user name thi kiem tra mat khau
                else {
                    // var_dump(md5($password));
                    // var_dump($user[0]['matkhau']);
                    // die;
                    $db->update(
                        'khachhang',
                        array(
                            'matkhau' => $matkhaumoi,
                            
                        ),
                        array('id' => $id)
                    );
                    header('location: ?controller=dangxuat');
                }
           
        }

    }
    require './view/V_doimatkhau.php';
