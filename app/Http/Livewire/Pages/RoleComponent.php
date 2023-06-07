<?php

namespace App\Http\Livewire\Pages;

use App\Models\Role;
use Livewire\Component;

class RoleComponent extends Component
{
    public function render()
    {
        $allRoleCategories = Role::query()->latest()->get();
        return view('livewire.pages.role-component', [
            'allCategories' => $allRoleCategories
        ])->layout('template.app');
    }
}