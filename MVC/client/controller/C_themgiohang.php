<?php 
/// lay id tu url
$id = $_GET['id'];
//lay id tu bang product
$product = $db->get('sanpham', array('id_sanpham'=>$id));
// su dung session de tao gio hang
// kiem tra sessio cart da co chua
if (isset($_SESSION['cart'])) {
    // kiem tra san pham da ton tai chua
    if(isset($_SESSION['cart'][$id])) {
        // neu da co san pham do rooi thi cong 1
        $_SESSION['cart'][$id]['soluong']+=1;
    }else{
        // san pham do chua themm vao lan nao
        $_SESSION['cart'][$id]['id_sanpham'] = $product[0]['id_sanpham'];
        $_SESSION['cart'][$id]['anhsanpham'] = $product[0]['anhsanpham'];
        $_SESSION['cart'][$id]['tensanpham'] = $product[0]['tensanpham'];
        $_SESSION['cart'][$id]['soluong'] = 1;
        $_SESSION['cart'][$id]['giasanpham'] = $product[0]['giasanpham'];
    }
}else{
    // chua co gio hang
    $_SESSION['cart'][$id]['id_sanpham'] = $product[0]['id_sanpham'];
    $_SESSION['cart'][$id]['anhsanpham'] = $product[0]['anhsanpham'];
    $_SESSION['cart'][$id]['tensanpham'] = $product[0]['tensanpham'];
    $_SESSION['cart'][$id]['soluong'] = 1;
    $_SESSION['cart'][$id]['giasanpham'] = $product[0]['giasanpham'];
}
header ('location: ?controller=trangchu');