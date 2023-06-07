<?php

namespace App\Http\Livewire\Pages\Arsip;

use App\Models\Arsip;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateComponent extends Component
{
    use WithFileUploads;
    public $name, $upload, $date, $file;
    public $arsipId;
    public $findArsip;
    public function mount($arsipId)
    {
        $this->findArsip = Arsip::findOrFail($arsipId);
        $this->arsipId = $this->findArsip->id;
        $this->name = $this->findArsip->name;
        $this->upload = $this->findArsip->upload;
        $this->date = $this->findArsip->date;
        $this->file = $this->findArsip->file;
    }
    protected $rules = [
        'name' => 'required|min:1',
    ];
    public function update()
    {
        $this->validate();
        $updateArsip = Arsip::find($this->arsipId);
        $updateArsip->update([
            'name' => $this->name,
            'upload' => $this->upload,
            'date' => $this->date,
            'file' => $this->file
        ]);
        session()->flash('message', 'Update dokumen sukses!');
        return redirect()->back();
    }
    public function render()
    {
        return view('livewire.pages.arsip.update-component')->layout('template.app');
    }
}
