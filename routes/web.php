<?php

use App\Home;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//main
Route::get('/','PagesController@home');
Route::get('/video','PagesController@video');
Route::get('/spek','PagesController@speks');
Route::get('/tentang','PagesController@tentang');
Route::get('/berita','PagesController@isi_berita');
Route::get('/kategori','KategoriController@kategori');

//login
Route::get('/login','LogController@login')->name('login');
Route::post('/postlogin','LogController@postlogin'); 

//logout
Route::get('/logout','LogController@logout');

//videonya
Route::get('/videonya/{video}','VideonyaController@show');
Route::get('/videonya', 'VideonyaController@videonya');

//isi_spek
Route::get('/isi_spek/{isi_spek}','Isi_spekController@isi_spek');
Route::get('/isi_spek/{isi_spek}','PagesController@isi_spek');
Route::get('/isi_spek/{isi_spek}','Isi_spekController@show');
Route::get('/isi_spek', 'Isi_spekController@isi_spek');

// Berita
Route::get('/berita/{berita}','BeritaController@isi_berita');
Route::get('/berita/{berita}','PagesController@isi_berita');
Route::get('/berita/{berita}','BeritaController@show');
Route::get('/berita', 'BeritaController@isi_berita');

//kategori
Route::get('/kategori/smartphone','KategoriController@kategori_smartphone');
Route::get('/kategori/laptop','KategoriController@kategori_laptop');
Route::get('/kategori/Smartphone','KategoriController@kategori_smartphone');
Route::get('/kategori/Laptop','KategoriController@kategori_laptop');

//Trobosan
//Smartphone
Route::get('/trobosan/smartphone/{trob_smart}','SmartphoneController@trob_smart');
//Laptop
Route::get('/trobosan/laptop/{trob_lap}','LaptopController@trob_lap');

//admin
Route::get('/admin/A_dashboard','AdminController@A_dashboard')->middleware('auth');
Route::get('/admin/A_home','AdminController@A_home')->middleware('auth');
Route::get('/admin/A_spek_home','AdminController@A_spek_home')->middleware('auth');
Route::get('/admin/A_video','AdminController@A_video')->middleware('auth');
Route::get('/admin/A_isi_berita','AdminController@A_isi_berita')->middleware('auth');
Route::get('/admin/A_isi_spek','AdminController@A_isi_spek')->middleware('auth');
Route::get('/admin/A_T_smartphone','AdminController@A_T_smartphone')->middleware('auth');
Route::get('/admin/A_T_laptop','AdminController@A_T_laptop')->middleware('auth');

//add data
//home
Route::get('/admin/A_home/create_home','HomeController@create')->middleware('auth');
Route::post('/admin/A_home','HomeController@store')->middleware('auth');
//spek home
Route::get('/admin/A_spek_home/create_spek_home','SpekController@create')->middleware('auth');
Route::post('/admin/A_spek_home','SpekController@store')->middleware('auth');
//video
Route::get('/admin/A_video/create_video','VideoController@create')->middleware('auth');
Route::post('/admin/A_video','VideoController@store')->middleware('auth');
//isi berita
Route::get('/admin/A_isi_berita/create_isi_berita','BeritaController@create')->middleware('auth');
Route::post('/admin/A_isi_berita','BeritaController@store')->middleware('auth');
//isi spek
Route::get('/admin/A_isi_spek/create_isi_spek','Isi_spekController@create')->middleware('auth');
Route::post('/admin/A_isi_spek','Isi_spekController@store')->middleware('auth');
//daftar / konten
Route::get('/admin/A_dashboard/create_daftar','DaftarController@create')->middleware('auth');
Route::post('/admin/A_dashboard/daftar','DaftarController@store')->middleware('auth');
//Trobosan smartphone
Route::get('/admin/A_T_smartphone/create_T_smartphone','SmartphoneController@create')->middleware('auth');
Route::post('/admin/A_T_smartphone','SmartphoneController@store')->middleware('auth');
//Trobosan Laptop
Route::get('/admin/A_T_laptop/create_T_laptop','LaptopController@create')->middleware('auth');
Route::post('/admin/A_T_laptop','LaptopController@store')->middleware('auth');

//delete data
Route::delete('/admin/A_home/{home}','HomeController@destroy')->middleware('auth');
Route::delete('/admin/A_isi_berita/{isi_berita}','BeritaController@destroy')->middleware('auth');
Route::delete('/admin/A_spek_home/{spek_home}','SpekController@destroy')->middleware('auth');
Route::delete('/admin/A_video/{video}','VideoController@destroy')->middleware('auth');
Route::delete('/admin/A_isi_spek/{isi_spek}','Isi_spekController@destroy')->middleware('auth');
Route::delete('/admin/A_dashboard/{daftar}','DaftarController@destroy')->middleware('auth');
Route::delete('/admin/A_T_smartphone/{trob_smart}','SmartphoneController@destroy')->middleware('auth');
Route::delete('/admin/A_T_laptop/{trob_lap}','LaptopController@destroy')->middleware('auth');

//edit data
Route::get('/admin/{home}/update/edit_home','HomeController@edit')->middleware('auth');
Route::patch('/admin/update/edit_home/{home}','HomeController@update')->middleware('auth');

Route::get('/admin/{isi_berita}/update/edit_isi_berita','BeritaController@edit')->middleware('auth');
Route::patch('/admin/update/edit_isi_berita/{isi_berita}','BeritaController@update')->middleware('auth');

Route::get('/admin/{video}/update/edit_video','VideoController@edit')->middleware('auth');
Route::patch('/admin/update/edit_video/{video}','VideoController@update')->middleware('auth');

Route::get('/admin/{spek_home}/update/edit_spek_home','SpekController@edit')->middleware('auth');
Route::patch('/admin/update/edit_spek_home/{spek_home}','SpekController@update')->middleware('auth');

Route::get('/admin/{isi_spek}/update/edit_isi_spek','Isi_spekController@edit')->middleware('auth');
Route::patch('/admin/update/edit_isi_spek/{isi_spek}','Isi_spekController@update')->middleware('auth');

Route::get('/admin/{daftar}/update/edit_daftar','DaftarController@edit')->middleware('auth');
Route::patch('/admin/update/edit_daftar/{daftar}','DaftarController@update')->middleware('auth');

Route::get('/admin/{trob_smart}/update/edit_T_smartphone','SmartphoneController@edit')->middleware('auth');
Route::patch('/admin/update/edit_T_smartphone/{trob_smart}','SmartphoneController@update')->middleware('auth');

Route::get('/admin/{trob_lap}/update/edit_T_laptop','LaptopController@edit')->middleware('auth');
Route::patch('/admin/update/edit_T_laptop/{trob_lap}','LaptopController@update')->middleware('auth');

//cari
Route::get('/cari/home','HomeController@home');
Route::get('/cari/video','VideoController@video');
Route::get('/cari/spek_home','SpekController@spek_home');
Route::get('/cari/A_home','AdminController@A_home')->middleware('auth');;
Route::get('/cari/A_isi_berita','AdminController@A_isi_berita')->middleware('auth');
Route::get('/cari/A_spek_home','AdminController@A_spek_home')->middleware('auth');
Route::get('/cari/A_dashboard','AdminController@A_dashboard')->middleware('auth');
Route::get('/cari/A_video','AdminController@A_video')->middleware('auth');
Route::get('/cari/A_isi_spek','AdminController@A_isi_spek')->middleware('auth');
Route::get('/cari/A_T_smartphone','AdminController@A_T_smartphone')->middleware('auth');
Route::get('/cari/A_T_laptop','AdminController@A_T_laptop')->middleware('auth');