<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang Nazario';
    }

    public function about() {
        return '1941720233 , Nazario Safariesqi Tyo Widjaya , TI2A';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan ID'.($id);
    }
}
