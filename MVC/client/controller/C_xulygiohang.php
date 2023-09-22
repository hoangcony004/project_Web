<?php

// lay gia tri method va id tren url
$method = $_GET['method'];
$id = $_GET['id'];
// kiem tra method de xu ly 
switch ($method) {
    case 'giam':
        //  neu method bang giam thi so luong gio hang giam
        $_SESSION['cart'][$id]['soluong'] -= 1;
        // kiem tra xem gio hang co == 0 hay khong
        if ($_SESSION['cart'][$id]['soluong'] == 0) {
            // xoa san pham khi tru bang 0
            unset($_SESSION['cart'][$id]);
        }
        if (empty($_SESSION['cart'])) {
            unset($_SESSION['cart']);
        }
        // chuyen huong nguoi dung
        header('location: ?controller=giohang');
        break;
    case 'tang':
        $_SESSION['cart'][$id]['soluong'] += 1;
        if (empty($_SESSION['cart'])) {
            unset($_SESSION['cart']);
        }
        // chuyen huong nguoi dung
        header('location: ?controller=giohang');
        break;
    case 'xoa':
        unset($_SESSION['cart'][$id]);
        // kiem tra con san pham nao trong gio hang khong neu khong thi xoa gio hang di
        if (empty($_SESSION['cart'])) {
            unset($_SESSION['cart']);
        }
        // chuyen huong nguoi dung
        header('location: ?controller=giohang');
        break;
    default:
        // chuyen huong nguoi dung
        header('location: ?controller=trangchu');
        break;
}
