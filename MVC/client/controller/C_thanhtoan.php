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
    $donhang_id = 1;
    $khachhang_id = 1;



    $donhang = $db->get('donhang', array());
    foreach ($donhang as $key => $value) {
        $donhang_id = $value['id'];
    }

    // var_dump($_SESSION['ss_client']);
    // die;

    $tongtien = 0;
    foreach ($_SESSION['cart'] as $key => $value) {
        $tongtien += $value['soluong'] * $value['giamoi'];
        $db->insert('chitietdonhang', array(
            'donhang_id' => $donhang_id,
            'sanpham_id' => $value['id'],
            'soluong' => $value['soluong'],
            'tongtien' => $tongtien,
            'ghichu' => $ghichu

        ));
       
    }

    // $data_oder_detail = $db->get('chitietdonhang',array('donhang_id'=>$donhang_id));
    $khachhang = $db->get('khachhang', array('id'=>$_SESSION['ss_client']));
    foreach ($khachhang as $key => $value) {
        $khachhang_id = $value['id'];
    }
    $db->insert(
        'donhang',
        array(
            'khachhang_id' =>$khachhang_id,
            'sodienthoai' => $sodienthoai,
            'tinh_thanh' => $tinh,
            'quan_huyen' => $huyen,
            'xa_phuong' => $xa,
            'thon_xom' => $thon,
            'tongtien' => $tongtien,
            'trangthai' => 0,

        )
    );
    unset($_SESSION['cart']);
    header('location: ?controller=thanhtoanthanhcong');
}
require 'view/V_thanhtoan.php';
