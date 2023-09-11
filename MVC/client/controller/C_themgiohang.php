<?php 
/// lay id tu url
$id = $_GET['id'];
//lay id tu bang product
$product = $db->get('sanpham', array('id'=>$id));
// su dung session de tao gio hang
// kiem tra sessio cart da co chua
if (isset($_SESSION['cart'])) {
    // kiem tra san pham da ton tai chua
    if(isset($_SESSION['cart'][$id])) {
        // neu da co san pham do rooi thi cong 1
        $_SESSION['cart'][$id]['soluong']+=1;
    }else{
        // san pham do chua themm vao lan nao
        $_SESSION['cart'][$id]['id'] = $product[0]['id'];
        $_SESSION['cart'][$id]['anhsanpham'] = $product[0]['anhsanpham'];
        $_SESSION['cart'][$id]['tensanpham'] = $product[0]['tensanpham'];
        $_SESSION['cart'][$id]['soluong'] = 1;
        $_SESSION['cart'][$id]['giamoi'] = $product[0]['giamoi'];
    }
}else{
    // chua co gio hang
    $_SESSION['cart'][$id]['id'] = $product[0]['id'];
    $_SESSION['cart'][$id]['anhsanpham'] = $product[0]['anhsanpham'];
    $_SESSION['cart'][$id]['tensanpham'] = $product[0]['tensanpham'];
    $_SESSION['cart'][$id]['soluong'] = 1;
    $_SESSION['cart'][$id]['giamoi'] = $product[0]['giamoi'];
}
// header ('location: ?controller=giohang');
if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}