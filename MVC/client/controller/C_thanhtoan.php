<?php
// kiem tra dang nhap
if (isset($_SESSION['ss_client'])) {
    // lay du lieu tu o input luu vao bien
    if (isset($_POST['btn_thanhtoan'])) {
        $hoten = $_POST['hoten'];
        $sodienthoai = $_POST['sodienthoai'];
        $email = $_POST['email'];
        $tinh = $_POST['tinh'];
        $diachichitiet = $_POST['diachichitiet'];
        $ghichu = $_POST['ghichu'];

        // lap lay id luu vao bien
        $donhang = $db->get('donhang', array());
        foreach ($donhang as $key => $value) {
            $donhang_id = $value['id'] += 1;
            // var_dump($donhang_id);
            // die;
        }
        // lap session cart cua gio hang de lay tong tien 
        $tongtien = 0;
        foreach ($_SESSION['cart'] as $key => $value) {
            $tongtien += $value['soluong'] * $value['giamoi'];


            $db->insert('chitietdonhang', array(
                'donhang_id' => $donhang_id,
                'khachhang_id' => $_SESSION['ss_client'],
                'sanpham_id' => $value['id'],
                'soluong' => $value['soluong'],
                'tongtien' => $value['soluong'] * $value['giamoi'],
                'ghichu' => $ghichu

            ));
        }
         // kiem tra xem da dang nhap chua
        $db->insert(
            'donhang',
            array(
                'khachhang_id' => $_SESSION['ss_client'],
                'hovaten' => $hoten,
                'sodienthoai' => $sodienthoai,
                'email' => $email,
                'tinh_thanh' => $tinh,
                'diachichitiet' => $diachichitiet,
                'tongtien' => $tongtien,
                'trangthai' => 0,

            )
        );
        unset($_SESSION['cart']);
        header('location: ?controller=thanhtoanthanhcong');
    }
    require 'view/V_thanhtoan.php';
} else {
    header('location: ?controller=dangnhap');
}
