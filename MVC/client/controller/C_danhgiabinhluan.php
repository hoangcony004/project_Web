<?php


if (isset($_SESSION['ss_client'])) {
    $user = $db->get('admin', array('id' => $_SESSION['ss_client']));

    if (isset($_POST['btn_danhgia'])) {
        $danhgia = $_POST['stars'];
        $binhluan = $_POST['binhluan'];
        $id = $_GET['id'];
        $khachhang_id = 1;
        // echo 'danh gia la '.$danhgia;
        // die;
        $khachhang = $db->get('khachhang', array('id' => $_SESSION['ss_client']));
        foreach ($khachhang as $key => $value) {
            $khachhang_id = $value['id'];
        }

        $db->insert('binhluan_danhgia', array(
            'khachhang_id' => $khachhang_id,
            'sanpham_id' => $id,
            'danhgia' => $danhgia,
            'noidungbinhluan' => $binhluan,
        ));
        header('location: ?controller=chitietsanpham&id='.$id);
    }
} else {
    header('location: ?controller=dangnhap');
}
