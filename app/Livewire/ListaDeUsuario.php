<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ListaDeUsuario extends Component
{

    protected $listeners = [
        'user::updated' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.lista-de-usuario',[

            'users' => User::all()

        ]);
    }


}
