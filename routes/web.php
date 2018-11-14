<?php

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

Route::get('/{timezone?}', function ($timezone = null) {
    if (!empty($timezone)) {

        //khoi tao gia tri gio theo mui gio UTC
        $time = new DateTime(date('Y-m-d h:i:s'), new DateTimeZone('UTC'));

        // Thay doi ve mui gio duoc chon
        $time->setTimezone(new DateTimeZone(str_replace('-','/',$timezone)));

        //Hien thi gio theo dinh dang mong muon
        echo 'Múi giờ bạn chọn ' . $timezone . 'hiện tại đang là:' . $time->format('d-m-YH:i:s');

    }
    return view('index');
});
