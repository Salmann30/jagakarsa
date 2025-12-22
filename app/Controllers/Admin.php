<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        return view('admin/index');
    }
    public function halaman(): string
    {
        return view('admin/halaman');
    }
    public function berita(): string
    {
        return view('admin/berita');
    }
    public function pengaturan(): string
    {
        return view('admin/pengaturan');
    }
}
