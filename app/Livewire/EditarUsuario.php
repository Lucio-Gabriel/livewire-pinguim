<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class EditarUsuario extends Component
{
    //  Com essa função sempre esperamos o usuario como propriedade
    public ?User $user = null;

    //   quando quisermos carregar elementos chamamos o mount
    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.editar-usuario');
    }

    public  function edit()
    {
        $this->user->name = fake()->name;

        $this->user->save();

        $this->enitUp('user::updated');
    }
}
