<?php

if (isset($_SESSION['ss_client'])) {
    unset($_SESSION['ss_client']);
}
if (isset($_SESSION['cart'])) {
    unset($_SESSION['cart']);
}
header('location: ?controller=dangnhap');