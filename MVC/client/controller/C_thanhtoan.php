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


    //echo 'hotenla: '.$hoten;
    //echo 'gioi tinh la : '.$gioitinh;
    // $id_donhang = 1;


    $donhang = $db->get('donhang', array());
    foreach ($donhang as $key => $value) {
        $id_donhang = $value['id_donhang']+1;
    }
    // var_dump($id_donhang);
    // die;

    $tongtien = 0;
    foreach ($_SESSION['cart'] as $key => $value) {
        $tongtien += $value['soluong'] * $value['giasanpham'];
        $db->insert('chitietdonhang', array(
            'donhang_id' => $id_donhang,
            'sanpham_id' => $value['id_sanpham'],
            'soluong' => $value['soluong'],
            'tongtien' => $tongtien,
            'mota' => $ghichu

        ));
       
    }
    $db->insert(
        'donhang',
        array(
            //'id_donhang' => $id_donhang,
            'hovaten' => $hoten,
            'gioitinh' => $gioitinh,
            'email' => $email,
            'sodienthoai' => $sodienthoai,
            'tinhthanh' => $tinh,
            'quan_huyen' => $huyen,
            'xa_phuong' => $xa,
            'thon_xom' => $thon,
            'ghichu' => $ghichu,
            'tongtien' => $tongtien,
            'trangthai' => 0,

        )
    );
    //unset($id_donhang);
    unset($_SESSION['cart']);
    header('location: ?controller=thanhtoanthanhcong');
}
require 'view/V_thanhtoan.php';
