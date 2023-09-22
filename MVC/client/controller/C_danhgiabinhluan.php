<?php

// kiem tra dang nhap
if (isset($_SESSION['ss_client'])) {
    // su dung function da co de su dung 
    $user = $db->get('admin', array('id' => $_SESSION['ss_client']));

    // lay du lieu tu o input luu vao bien
    if (isset($_POST['btn_danhgia'])) {
        $danhgia = $_POST['stars'];
        $binhluan = $_POST['binhluan'];
        $id = $_GET['id'];
        $khachhang_id = 1;

        // su dung function da co de su dung 
        $khachhang = $db->get('khachhang', array('id' => $_SESSION['ss_client']));
        // lap lay id luu vao bien
        foreach ($khachhang as $key => $value) {
            $khachhang_id = $value['id'];
        }
        // su dung function da co de su dung 
        $db->insert('binhluan_danhgia', array(
            'khachhang_id' => $khachhang_id,
            'sanpham_id' => $id,
            'danhgia' => $danhgia,
            'noidungbinhluan' => $binhluan,
        ));
        // chuyen huong nguoi dung
        header('location: ?controller=chitietsanpham&id=' . $id);
    }
} else {
    // chuyen huong nguoi dung
    header('location: ?controller=dangnhap');
}
