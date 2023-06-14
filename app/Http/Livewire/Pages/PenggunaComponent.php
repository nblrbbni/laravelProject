<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\Pengguna;

class PenggunaComponent extends Component
{
    public function destroy($penggunaId)
    {
        $findPengguna = Pengguna::find($penggunaId);
        $findPengguna->delete();
        session()->flash('message', 'Dokumen ' . $findPengguna->pengguna . ' Berhasil dihapus!');
        return redirect(route('pengguna'));
    }

    public function render()
    {
        $allCategories = Pengguna::query()->latest()->paginate(2);
        return view('livewire.pages.pengguna-component', [
            'allCategories' => $allCategories
        ])->layout('template.app');
    }
}