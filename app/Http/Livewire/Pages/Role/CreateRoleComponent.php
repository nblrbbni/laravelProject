<?php

namespace App\Http\Livewire\Pages\Role;

use App\Models\Role;
use Livewire\Component;

class CreateRoleComponent extends Component
{
    public $role;
    protected $rules = [
        'role' => 'required|min:1'
    ];
    public function create()
    {
        $this->validate();

        Role::create([
            'role' => $this->role
        ]);
        session()->flash('message', 'Berhasil menambahkan role!');
        return redirect(route('role'));
    }
    public function render()
    {
        return view('livewire.pages.role.create-role-component')->layout('template.app');
    }
}
