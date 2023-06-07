<?php

namespace App\Http\Livewire\Pages\Pengguna;

use Livewire\Component;
use App\Models\Pengguna;

class CreatePenggunaComponent extends Component
{
    public $name, $jabatan, $email, $password, $roleuser;
    protected $rules = [
        'name' => 'required|min:1',
        'email' => 'required|min:1',
        'password' => 'required|min:1',
    ];
    public function create()
    {
        $this->validate();

        Pengguna::create([
            'name' => $this->name,
            'jabatan' => $this->jabatan,
            'email' => $this->email,
            'password' => $this->password,
            'roleuser' => $this->roleuser
        ]);
        session()->flash('message', 'Berhasil menambahkan pengguna');
        return redirect(back());
    }
    public function render()
    {
        return view('livewire.pages.pengguna.create-pengguna-component')->layout('template.app');
    }
}