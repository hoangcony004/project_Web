<?php

if (isset($_SESSION['ss_client'])) {
    unset($_SESSION['ss_client']);
}
header('location: ?controller=dangnhap');