<?php
    $host            = "localhost";
    $user            = "root";
    $pass           = "";
    $database     = "tambah_event";
    $koneksi      =mysql_connect($host,$user,$pass) or die ("gagal");
    mysql_select_db($database) or die ("database tidak di temukan");
?>