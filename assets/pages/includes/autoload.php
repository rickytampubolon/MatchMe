<?php
  include "../../config/koneksi.php";
  include_once '../../config/functions.php';
  session_start();
    if(empty($_SESSION['username'])) {
        redirect('login.php');     
    }
?>