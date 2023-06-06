<?php

namespace App\Http\Livewire\Pages\Arsip;

use App\Models\Arsip;
use League\CommonMark\Node\Block\Document;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateComponent extends Component
{
    use WithFileUploads;
    public $name, $upload, $date, $file;
    protected $rules = [
        'name' => 'required|min:1',
    ];
    public function create()
    {
        $this->validate();

        Arsip::create([
            'name' => $this->name,
            'upload' => $this->upload,
            'date' => $this->date,
            'file' => $this->file
        ]);
        session()->flash('message', 'Arsip dokumen sukses!');
        return redirect(back());
    }
    public function render()
    {
        return view('livewire.pages.arsip.create-component')->layout('template.app');
    }
}