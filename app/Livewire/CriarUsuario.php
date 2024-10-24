<?php

namespace App\Livewire;

use App\Rules\CustomRule;
use Livewire\Component;

class CriarUsuario extends Component
{

    public ?string $name = null;
    public ?string $email = null;

    // propriedade  para o AlipneJS
    public bool $saving = false;

    // podemos colocar todas as nossas regras aqui
    protected function rules()
    {
        return [
        'name' => ['required', 'min:3', 'max:255'],
        'email' => ['required', 'email', 'max:255', new CustomRule()],
        ];
    }

    public function render()
    {
        return view('livewire.criar-usuario');
    }

    public function updated($prop)
    {
        $this->validateOnly($prop);
    }

    public function save()
    {

        $this->saving = true;
        // simulando o tempo de loanding para meu user
        sleep(2);

        $this->validate();

        // adicionando erro na hora
        if($this->name == 'Nome'){
            $this->addError('name', 'Não podemos aceitar essse nome!');
            dump('Não aceitamos', $this->errorBag);
        }


        echo('oi');
    }

    // nossa regra costumizada


}