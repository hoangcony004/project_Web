<?php
if (isset($_POST['btn_thanhtoan'])) {
    $hoten = $_POST['hoten'];
    $gioitinh = $_POST['fav_language'];
    $sodienthoai = $_POST['sodienthoai'];
    $email = $_POST['email'];
    $tinh = $_POST['tinh'];
    $huyen = $_POST['huyen'];
    $xa = $_POST['xa'];
    $thon = $_POST['thon'];
    $ghichu = $_POST['ghichu'];
    $id_donhang = 1;
    $id_khachhang = 1;

    //echo 'hotenla: '.$hoten;
    //echo 'gioi tinh la : '.$gioitinh;
    // $id_donhang = 1;


    $donhang = $db->get('donhang', array());
    foreach ($donhang as $key => $value) {
        $id_donhang += $value['id'];
    }
    $khachhang = $db->get('khachhang', array());
    foreach ($khachhang as $key => $value) {
        $id_donhang += $value['id'];
    }
    // var_dump($id_donhang);
    // die;

    $tongtien = 0;
    foreach ($_SESSION['cart'] as $key => $value) {
        $tongtien += $value['soluong'] * $value['giamoi'];
        $db->insert('chitietdonhang', array(
            'id_donhang' => $id_donhang,
            'id_sanpham' => $value['id'],
            'soluong' => $value['soluong'],
            'tongtien' => $tongtien,
            'ghichu' => $ghichu

        ));
       
    }
    $db->insert(
        'donhang',
        array(
            //'id_khachhang' => $id_khachhang,
            'sodienthoai' => $sodienthoai,
            'tinh_thanh' => $tinh,
            'quan_huyen' => $huyen,
            'xa_phuong' => $xa,
            'thon_xom' => $thon,
            'tongtien' => $tongtien,
            'trangthai' => 0,

        )
    );
    //unset($id_donhang);
    unset($_SESSION['cart']);
    header('location: ?controller=thanhtoanthanhcong');
}
require 'view/V_thanhtoan.php';
