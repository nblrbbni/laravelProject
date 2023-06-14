<?php

namespace App\Http\Livewire\Pages\Pengguna;

use Livewire\Component;
use App\Models\Pengguna;

class UpdatePenggunaComponent extends Component
{
    public $name, $jabatan, $email, $password, $roleuser;
    public $penggunaId;
    public $findPengguna;
    public function mount($penggunaId)
    {
        $this->findPengguna = Pengguna::findOrFail($penggunaId);
        $this->penggunaId = $this->findPengguna->id;
        $this->name = $this->findPengguna->name;
        $this->jabatan = $this->findPengguna->jabatan;
        $this->email = $this->findPengguna->email;
        $this->password = $this->findPengguna->password;
        $this->roleuser = $this->findPengguna->roleuser;
    }
    protected $rules = [
        'name' => 'required|min:1',
        'email' => 'required|min:1',
        'password' => 'required|min:1'
    ];
    public function update()
    {
        $this->validate();
        $UpdatePengguna = Pengguna::find($this->penggunaId);
        $UpdatePengguna->update([
            'name' => $this->name,
            'jabatan' =>$this->jabatan,
            'email' =>$this->email,
            'password' =>$this->password,
            'roleuser' =>$this->roleuser,
        ]);
        session()->flash('message', 'Update dokumen sukses!');
        return redirect(route('pengguna'));
    }
    public function render()
    {
        return view('livewire.pages.pengguna.update-pengguna-component')->layout('template.app');
    }
}