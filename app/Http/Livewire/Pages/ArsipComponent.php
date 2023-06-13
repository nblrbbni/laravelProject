<?php

namespace App\Http\Livewire\Pages;

use App\Models\Arsip;
use Livewire\Component;

class ArsipComponent extends Component
{
    public function destroy($arsipId)
    {
        $findArsip = Arsip::find($arsipId);
        $findArsip->delete();
        session()->flash('message', 'Dokumen ' . $findArsip->name. ' Berhasil dihapus!');
    }

    public function render()
    {
        $allCategories = Arsip::query()->latest()->get();
        return view('livewire.pages.arsip-component', [
            'allCategories' => $allCategories
        ])->layout('template.app');
    }
}
