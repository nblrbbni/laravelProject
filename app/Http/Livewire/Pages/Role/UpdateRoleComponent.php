<?php

namespace App\Http\Livewire\Pages\Role;

use App\Models\Role;
use Livewire\Component;

class UpdateRoleComponent extends Component
{
    public $role;
    public $roleId;
    public $findRole;
    public function mount($roleId)
    {
        $this->findRole = Role::findOrFail($roleId);
        $this->roleId = $this->findRole->id;
        $this->role = $this->findRole->role;
    }
    protected $rules = [
        'role' => 'required|min:1',
    ];
    public function update()
    {
        $this->validate();
        $UpdateRole = Role::find($this->roleId);
        $UpdateRole->update([
            'role' => $this->role
        ]);
        session()->flash('message', 'Update dokumen sukses!');
        return redirect()->back();
    }
    public function render()
    {
        return view('livewire.pages.role.update-role-component')->layout('template.app');
    }
}
