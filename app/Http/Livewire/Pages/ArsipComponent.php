<?php

namespace App\Http\Livewire\Pages;

use App\Models\Arsip;
use Livewire\Component;

class ArsipComponent extends Component
{
    public function render()
    {
        $allCategories = Arsip::query()->latest()->get();
        return view('livewire.pages.arsip-component', [
            'allCategories' => $allCategories
        ])->layout('template.app');
    }
}