<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\Klasifikasi;

class KlasifikasiComponent extends Component
{
    public function destroy($klasifikasiId)
    {
        $findKlasifikasi = Klasifikasi::find($klasifikasiId);
        $findKlasifikasi->delete();
        session()->flash('message', 'Dokumen ' . $findKlasifikasi->name . ' Berhasil dihapus!');
    }
    public function render()
    {
        $allCategories = Klasifikasi::query()->latest()->paginate(5);
        return view('livewire.pages.klasifikasi-component', [
            'allCategories' => $allCategories
        ])->layout('template.app');
    }
}