<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';

$route['sign-up']            = 'welcome/sign_up';
$route['regist']             = 'welcome/user_add';
$route['home']               = 'aplication';
$route['universitas']        = 'aplication/universitas';
$route['information-center'] = 'aplication/help_center';
$route['upload-data']        = 'upload/uploadData';
$route['upload-mahasiswa']   = 'upload/uploadMahasiswa';
$route['data-testing']       = 'aplication/data_testing';
$route['delete-dtest']    = 'aplication/delete_data_testing_where';
$route['tambah-dtest']    = 'aplication/tambah_data_testing';
$route['where-dtest']    = 'aplication/where_data_testing';
$route['edit-dtest']    = 'aplication/edit_data_testing';
$route['data-training']      = 'aplication/data_training';
$route['delete-training-all']      = 'aplication/delete_training';
$route['delete-dtrain']    = 'aplication/delete_data_training_where';
$route['tambah-dtrain']    = 'aplication/tambah_data_training';
$route['where-dtrain']    = 'aplication/where_data_training';
$route['edit-dtrain']    = 'aplication/edit_data_training';
$route['pengujian']     = 'aplication/pengujian';
$route['mahasiswa']     = 'aplication/mahasiswa';
$route['dosen']         = 'aplication/dosen';
$route['fakultas']         = 'aplication/fakultas';
$route['security']      = 'aplication/user_security';
$route['add-user']      = 'aplication/user_add';
$route['change-k']          = 'aplication/default_k';
$route['delete-testing']  = 'aplication/delete_testing';
$route['delete-mahasiswa']  = 'aplication/delete_mahasiswa';
$route['delete-mhs']    = 'aplication/delete_mahasiswa_where';
$route['tambah-mhs']    = 'aplication/tambah_mahasiswa';
$route['edit-mhs']    = 'aplication/edit_mahasiswa';
$route['where-mhs']    = 'aplication/where_mahasiswa';
$route['delete-dosen']  = 'aplication/delete_dosen';
$route['delete-dsn']    = 'aplication/delete_dosen_where';
$route['tambah-dsn']    = 'aplication/tambah_dosen';
$route['where-dsn']    = 'aplication/where_dosen';
$route['edit-dsn']    = 'aplication/edit_dosen';
$route['delete-fakultas']  = 'aplication/delete_fakultas';
$route['delete-fts']    = 'aplication/delete_fakultas_where';
$route['tambah-fts']    = 'aplication/tambah_fakultas';
$route['where-fts']    = 'aplication/where_fakultas';
$route['edit-fts']    = 'aplication/edit_fakultas';
$route['jurusan']      = 'aplication/jurusan';
$route['delete-jurusan']  = 'aplication/delete_jurusan';
$route['delete-jsn']    = 'aplication/delete_jurusan_where';
$route['tambah-jsn']    = 'aplication/tambah_jurusan';
$route['where-jsn']    = 'aplication/where_jurusan';
$route['edit-jsn']    = 'aplication/edit_jurusan';
$route['matkul']  = 'aplication/matkul';
$route['delete-matkul']  = 'aplication/delete_matkul';
$route['delete-mk']    = 'aplication/delete_matkul_where';
$route['tambah-mk']    = 'aplication/tambah_matkul';
$route['where-mk']    = 'aplication/where_matkul';
$route['edit-mk']    = 'aplication/edit_matkul';
$route['nilai']  = 'aplication/nilai';
$route['delete-nilai']  = 'aplication/delete_nilai';
$route['delete-nl']    = 'aplication/delete_nilai_where';
$route['tambah-nl']    = 'aplication/tambah_nilai';
$route['where-nl']    = 'aplication/where_nilai';
$route['edit-nl']    = 'aplication/edit_nilai';
$route['delete-user']   = 'aplication/delete_user_where';
$route['logout']        = 'aplication/logout';
$route['sign-in']       = 'welcome/sign_in';
// report
$route['report']        = 'aplication/report_list';

//pengujian
$route['report-pengujian'] = 'aplication/report_pengujian';
$route['report-preview']   = 'aplication/report_pengujian_display';
$route['report-pdf']    = 'report';
//mhs
$route['report-mhs']    = 'aplication/report_mhs';
$route['mhs-preview']   = 'aplication/report_mhs_display';
$route['mhs-pdf']       = 'report/mhs';
//dosen
$route['report-dosen']  = 'aplication/report_dosen';
$route['dosen-preview'] = 'aplication/report_dosen_display';
$route['dosen-pdf']     = 'report/dosen';

//dosen
$route['report-data']  = 'aplication/report_data';
$route['data-preview'] = 'aplication/report_data_display';
$route['data-pdf']     = 'report/data';
// report
$route['404_override']  = '';
$route['translate_uri_dashes'] = FALSE;