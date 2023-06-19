<?php

namespace App\Http\Livewire\Pages\Arsip;

use App\Models\Arsip;
use Livewire\Component;
use Livewire\WithFileUploads;
use League\CommonMark\Node\Block\Document;

class CreateComponent extends Component
{
    use WithFileUploads;
    public $name, $tipe, $upload, $date, $file;
    protected $rules = [
        'name' => 'required|min:1',
    ];
    public function create()
    {
        $this->validate();

        Arsip::create([
            'name' => $this->name,
            'tipe' => $this->tipe,
            'upload' => $this->upload,
            'date' => $this->date,
            'file' => $this->file
        ]);
        session()->flash('message', 'Update dokumen sukses!');
        return redirect(route('arsip'));
    }

    public function render()
    {
        return view('livewire.pages.arsip.create-component')->layout('template.app');
    }
}