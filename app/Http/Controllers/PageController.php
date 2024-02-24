<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'selamat datang';
    }
    public function about() {
        return 'Fablo Aimar - 2141762118';
    }
    public function article($article) {
        return 'Halaman Artikel dengan ID'.$article;
    }
}