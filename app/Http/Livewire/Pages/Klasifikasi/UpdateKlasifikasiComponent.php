<?php

namespace App\Http\Livewire\Pages\Klasifikasi;

use Livewire\Component;
use App\Models\Klasifikasi;

class UpdateKlasifikasiComponent extends Component
{
    public $name, $jabatan;
    public $klasifikasiId;
    public $findKlasifikasi;
    public function mount($klasifikasiId)
    {
        $this->findKlasifikasi = Klasifikasi::findOrFail($klasifikasiId);
        $this->klasifikasiId = $this->findKlasifikasi->id;
        $this->name = $this->findKlasifikasi->name;
        $this->jabatan = $this->findKlasifikasi->jabatan;
    }
    protected $rules = [
        'name' => 'required|min:1',
    ];
    public function update()
    {
        $this->validate();
        $UpdateKlasifikasi = Klasifikasi::find($this->klasifikasiId);
        $UpdateKlasifikasi->update([
            'name' => $this->name,
            'jabatan' => $this->jabatan,
        ]);
        session()->flash('message', 'Update dokumen sukses!');
        return redirect(route('klasifikasi'));
    }
    public function render()
    {
        return view('livewire.pages.klasifikasi.update-klasifikasi-component')->layout('template.app');
    }
}