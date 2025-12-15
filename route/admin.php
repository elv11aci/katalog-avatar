<?php
// baca value dari $_GET[‘page’] dan masukkan ke var $page
$page = $_GET ['page'] ?? 'dashboard';
// routing untuk panel admin
// lihat apakah nilai dari $page sesuai dengan salah stu case
//dibawah
switch ($page){
    case 'dashboard' : include "page/dashboard.php"; break;
    case 'genre' : include "page/input_genre.php"; break;
default: echo “Halaman tidak ditemukan”;
}