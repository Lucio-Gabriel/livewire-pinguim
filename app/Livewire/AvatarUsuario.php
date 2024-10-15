<?php

namespace App\Livewire;

use Illuminate\Container\Attributes\Storage;
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

        $this->avatar->store('local');

        // onde salvamos e temos referencia de onde fica
        // $ref = $this->avatar->store('public');
        // $user = auth()->users();
        // $user->avatar = $ref;
        // $user->save();
    }

    // public function download()
    // {
    //     return Storage::download(
    //         auth()->user()->avatar()
    //     );
    // }
}