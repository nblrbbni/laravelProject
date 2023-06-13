<?php

namespace App\Http\Livewire\Pages;

use App\Models\Role;
use Livewire\Component;

class RoleComponent extends Component
{
    public function destroy($roleId)
    {
        $findRole = Role::find($roleId);
        $findRole->delete();
        session()->flash('message', 'Dokumen ' . $findRole->role . ' Berhasil dihapus!');
    }

    public function render()
    {
        $allCategories = Role::query()->latest()->get();
        return view('livewire.pages.role-component', [
            'allCategories' => $allCategories
        ])->layout('template.app');
    }
}