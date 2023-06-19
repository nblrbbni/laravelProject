<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('livewire.pages.home-component');
    }
    public function arsip()
    {
        return view('livewire.pages.arsip-component');
    }

    public function galeri()
    {
        return view('livewire.pages.perusahaan-component');
    }

    public function role()
    {
        return view('livewire.pages.role-component');
    }

    public function pengguna()
    {
        return view('livewire.pages.pengguna-component');
    }

    public function klasifikasi()
    {
        return view('livewire.pages.klasifikasi-component');
    }
}