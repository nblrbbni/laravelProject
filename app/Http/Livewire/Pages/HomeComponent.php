<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        return view('livewire.pages.home-component')->layout('template.app');
    }

    // public function arsip(){
    //     return view('livewire.pages.arsip-component')->layout('template.app');
    // }

    // public function galeri(){
    //     return view('livewire.pages.perusahaan-component')->layout('template.app');
    // }

    // public function role(){
    //     return view('livewire.pages.role-component')->layout('template.app');
    // }

    // public function pengguna(){
    //     return view('livewire.pages.pengguna-component')->layout('template.app');
    // }

    // public function klasifikasi(){
    //     return view('livewire.pages.klasifikasi-component')->layout('template.app');
    // }
}
