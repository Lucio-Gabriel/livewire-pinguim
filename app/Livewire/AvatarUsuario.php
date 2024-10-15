<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class AvatarUsuario extends Component
{

    // traid
    use WithFileUploads;

    public $avatar;

    public function render()
    {
        return view('livewire.avatar-usuario');
    }

    public function save()
    {
        // onde salvamos e temos referencia de onde fica
        $ref = $this->avatar->store('public');
        // $user = auth()->user();
        // $user->avatar = $ref;
        // $user->save();
    }
}