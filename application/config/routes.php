<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';

$route['home'] = 'User/MainController/index';
$route['event'] = 'User/MainController/event';
$route['news'] = 'User/MainController/news';
$route['achievement'] = 'User/MainController/achievement';
$route['join'] = 'User/MainController/join';
$route['daftar'] = 'User/PendaftaranController/index';
$route['daftar/kirim'] = 'User/PendaftaranController/daftar';
$route['daftar/success'] = 'User/PendaftaranController/sukses';
$route['about'] = 'User/MainController/about';
$route['team'] = 'User/MainController/team';
$route['tartib'] = 'User/MainController/tartib';


$route['executive'] = 'Executive/DashboardController/index';
$route['executive/login'] = 'Executive/Login/login';
$route['executive/logout'] = 'Executive/Login/logout';
$route['executive/profile/(:any)'] = 'Executive/DashboardController/profile/$1';
$route['executive/edit/profile/(:any)'] = 'Executive/DashboardController/editProfile/$1';
$route['executive/anggota'] = 'Executive/AnggotaController/index';
$route['executive/anggota/(:any)'] = 'Executive/AnggotaController/detail/$1';
$route['executive/tambah/anggota'] = 'Executive/AnggotaController/input';

$route['executive/berita'] = 'Executive/BeritaController/index';
$route['executive/tambah/berita'] = 'Executive/BeritaController/input';
$route['executive/edit/berita/(:num)'] = 'Executive/BeritaController/edit/$1';
$route['executive/hapus/berita/(:num)'] = 'Executive/BeritaController/hapus/$1';

$route['executive/acara'] = 'Executive/AcaraController/index';
$route['executive/tambah/acara'] = 'Executive/AcaraController/input';
$route['executive/edit/acara/(:num)'] = 'Executive/AcaraController/edit/$1';
$route['executive/hapus/acara/(:num)'] = 'Executive/AcaraController/hapus/$1';

$route['executive/pencapaian'] = 'Executive/PencapaianController/index';
$route['executive/tambah/pencapaian'] = 'Executive/PencapaianController/input';
$route['executive/edit/pencapaian/(:num)'] = 'Executive/PencapaianController/edit/$1';
$route['executive/hapus/pencapaian/(:num)'] = 'Executive/PencapaianController/hapus/$1';

$route['executive/pendaftaran'] = 'Executive/PendaftaranController/index';
$route['executive/pendaftaran/(:any)'] = 'Executive/PendaftaranController/index';
$route['executive/pendaftaran/detail/(:any)'] = 'Executive/PendaftaranController/pendaftar/$1';
$route['executive/hapus/pendaftar/(:any)'] = 'Executive/PendaftaranController/hapus/$1';

$route['executive/jurusan'] = 'Executive/JurusanController/index';
$route['executive/tambah/jurusan'] = 'Executive/JurusanController/input';
$route['executive/edit/jurusan/(:num)'] = 'Executive/JurusanController/edit/$1';
$route['executive/hapus/jurusan/(:num)'] = 'Executive/JurusanController/hapus/$1';

$route['executive/divisi'] = 'Executive/DivisiController/index';
$route['executive/tambah/divisi'] = 'Executive/DivisiController/input';
$route['executive/edit/divisi/(:num)'] = 'Executive/DivisiController/edit/$1';
$route['executive/hapus/divisi/(:num)'] = 'Executive/DivisiController/hapus/$1';

$route['executive/pengurus/divisi'] = 'Executive/PengurusDivisiController/index';
$route['executive/tambah/pengurus/divisi'] = 'Executive/JabatanController/input';
$route['executive/edit/pengurus/divisi'] = 'Executive/JabatanController/edit';
$route['executive/hapus/pengurus/divisi'] = 'Executive/JabatanController/hapus';


$route['executive/jabatan'] = 'Executive/JabatanController/index';
$route['executive/tambah/jabatan'] = 'Executive/JabatanController/input';
$route['executive/edit/jabatan/(:num)'] = 'Executive/JabatanController/edit/$1';
$route['executive/hapus/jabatan/(:num)'] = 'Executive/JabatanController/hapus/$1';

$route['executive/tentang'] = 'Executive/TentangController/index';
$route['executive/tambah/tentang'] = 'Executive/TentangController/input';
$route['executive/edit/tentang/(:num)'] = 'Executive/TentangController/edit/$1';
$route['executive/hapus/tentang/(:num)'] = 'Executive/TentangController/hapus/$1';

$route['executive/partner'] = 'Executive/PartnerController/index';
$route['executive/partner/detail/(:num)'] = 'Executive/PartnerController/detail/$1';
$route['executive/tambah/partner'] = 'Executive/PartnerController/input';
$route['executive/edit/partner/(:num)'] = 'Executive/PartnerController/edit/$1';
$route['executive/hapus/partner/(:num)'] = 'Executive/PartnerController/hapus/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;