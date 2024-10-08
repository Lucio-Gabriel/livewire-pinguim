<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Count extends Component
{

    // propriedades vai ser compartilhada com a view

    public string $name = 'Gabriel';

    public function render()
    {
        return view('livewire.count', [
            'users' => User::all()
        ]);
    }

    // propriedades computadas
    // public function getLastNameProperty()
    // {
    //     return 'Lucio';
    // }

    public function submit()
    {
        User::factory()->create([
            'name' => $this->name
        ]);
    }

    public function send()
    {
        // emitidindo para minha class tod
        $this->emitTo(Todo::class, 'mudaai', $this->name);
    }

    public function toggle(string $type)
    {
        if($type == 'LOWER'){
            $this->name = str($this->name)->lower();
        }
        else{
            $this->name = str($this->name)->upper();
        }
    }

}