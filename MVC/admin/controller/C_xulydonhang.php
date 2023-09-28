<?php
if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));

    if ($user[0]['cap'] == 1) {
        $method = $_GET['method'];
        switch ($method) {
            case 'duyet':
                // lay id tu url ve 
                $id = $_GET['id'];
                // su dung function da co de su dung 
                $oder = $db->get('donhang', array('id' => $id));
                $chitietdonhang = $db->get('chitietdonhang', array('donhang_id' => $id));
                // lap lay donhang_id va san pham
                foreach ($chitietdonhang as $key => $value) {
                    $sanpham = $db->get('sanpham', array('id' => $value['sanpham_id']));
                    $soluongkho = $sanpham[0]['soluong'];
                    $donhang_id = $value['donhang_id'];
                    $soluongdamua = $value['soluong'];
                }
                // su dung function da co de su dung 
                $db->update('donhang', array('trangthai' => 1), array('id' => $id));

                // tru san pham trong database
                $tongsanpham  = $soluongkho - $soluongdamua;
                $db->update(
                    'sanpham',
                    array(
                        'soluong' => $tongsanpham
                    ),
                    array('id' => $sanpham[0]['id'])
                );

                // chuyen huong nguoi dung
                //header('location: ?controller=donhang');
                echo "<script>alert('Duyệt thành công!')</script>";
                echo "<script>window.location.href = '?controller=donhang';</script>";
                break;
            case 'xoa':
                // lay id tu url ve 
                $id = $_GET['id'];
                // su dung function da co de su dung 
                $db->delete('donhang', array('id' => $id));
                $db->delete('chitietdonhang', array('donhang_id' => $id));
                // chuyen huong nguoi dung
                // header('location: ?controller=donhang');
                echo "<script>alert('Hủy đơn hàng thành công!')</script>";
                echo "<script>window.location.href = '?controller=donhang';</script>";
                break;
            case 'sua':
                // lay id tu url ve 
                $id = $_GET['id'];
                // su dung function da co de su dung 
                $donhang = $db->get('donhang', array('id' => $id));
                // lay du lieu tu o input nguoi dung nhap 
                if (isset($_POST['btn_xulydonhang'])) {
                    $hovaten = $_POST['hovaten'];
                    $email = $_POST['email'];
                    $sodt = $_POST['sodt'];
                    $tinhthanh = $_POST['tinhthanh'];
                    $tongtien = $_POST['tongtien'];
                    $diachichitiet = $_POST['diachichitiet'];
                    $trangthai = 0;

                    // khai bao bien chua cac loi 
                    $loi = array();


                    if (!$loi) {
                        // su dung function da co de su dung 
                        $db->update(
                            'donhang',
                            array(
                                'hovaten' => $hovaten,
                                'sodienthoai' => $sodt,
                                'email' => $email,
                                'tinh_thanh' => $tinhthanh,
                                'diachichitiet' => $diachichitiet,
                                'tongtien' => $tongtien,
                            ),
                            array('id' => $id)
                        );
                        // chuyen huong nguoi dung 
                        // header('location: ?controller=donhang');
                        echo "<script>alert('Sửa đơn hàng thành công!')</script>";
                        echo "<script>window.location.href = '?controller=donhang';</script>";
                    }
                }
                require './view/V_xulydonhang.php';
                break;
        }
    } else {
        // hien thi thong bao 
        echo '<script>alert("Bạn không có quyền")</script>';
    }
}
