<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\Klasifikasi;

class KlasifikasiComponent extends Component
{
    public function render()
    {
        $allCategories = Klasifikasi::query()->latest()->get();
        return view('livewire.pages.klasifikasi-component', [
            'allCategories' => $allCategories
        ])->layout('template.app');
    }
}
