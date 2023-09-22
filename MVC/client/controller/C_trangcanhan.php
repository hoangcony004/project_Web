<?php
// lay id tu url ve 
$id = $_GET['id'];
$khachhang = $db->get('khachhang', array('id' => $id));

// lay du lieu tu o input luu vao bien
if (isset($_POST['btn_capnhat'])) {
    $anhprofile = $_FILES['anhprofile'];
    $hoten = $_POST['hoten'];
    $email = $_POST['email'];
    $sodienthoai = $_POST['sodienthoai'];
    $gioitinh = $_POST['fav_language'];
    $diachi = $_POST['diachi'];

    // khai bao cac loi
    $loi = array();
    if ($anhprofile == '') {
        $loi['anhprofile'] = 'catalog_id k duoc de trong ';
    }
    if ($hoten == '') {
        $loi['hoten'] = 'name k duoc de trong ';
    }
    if ($email == '') {
        $loi['email'] = 'price k duoc de trong ';
    }
    if ($sodienthoai == '') {
        $loi['sodienthoai'] = 'amount k duoc de trong ';
    }
    if ($gioitinh == '') {
        $loi['gioitinh'] = 'content k duoc de trong ';
    }
    if ($diachi == '') {
        $loi['diachi'] = 'content k duoc de trong ';
    }
    // xu ly file anh
    $link = 'img/';
    $link_full = $link . basename($_FILES['anhprofile']['name']);
    $uploadOk = 1;
    move_uploaded_file($_FILES['anhprofile']['tmp_name'], $link_full);

    // su dung function da co de su dung 
    $db->update(
        'khachhang',
        array(
            'anh' => $link_full,
            'hovaten' => $hoten,
            'gioitinh' => $gioitinh,
            'diachi' => $diachi,
            'sodienthoai' => $sodienthoai,
            'email' => $email
        ),
        array('id' => $id)
    );
    // chuyen huong nguoi dung
    header('location: ?controller=trangchu');
};



require 'view/V_trangcanhan.php';
