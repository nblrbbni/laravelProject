<?php

namespace App\Http\Livewire\Pages\Klasifikasi;

use App\Models\Klasifikasi;
use Livewire\Component;

class CreateKlasifikasiComponent extends Component
{
    public $name, $jabatan;
    protected $rules = [
        'name' => 'required|min:1'
    ];
    public function create()
    {
        $this->validate();

        Klasifikasi::create([
            'name' => $this->name,
            'jabatan' => $this->jabatan
        ]);
        session()->flash('message', 'Berhasil menambahkan klasifikasi!');
        return redirect(back());
    }
    public function render()
    {
        return view('livewire.pages.klasifikasi.create-klasifikasi-component')->layout('template.app');
    }
}