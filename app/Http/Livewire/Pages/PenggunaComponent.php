<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\Pengguna;

class PenggunaComponent extends Component
{
    public function destroy($penggunaId)
    {
        $findPengguna = Pengguna::find($penggunaId);
        $findPengguna->delete;
        session()->flash('message', 'Dokumen ' . $findPengguna->pengguna . ' Berhasil dihapus!');
    }

    public function render()
    {
        $allCategories = Pengguna::query()->latest()->get();
        return view('livewire.pages.pengguna-component', [
            'allCategories' => $allCategories
        ])->layout('template.app');
    }
}