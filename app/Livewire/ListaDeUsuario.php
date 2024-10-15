<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Contracts\Database\Query\Builder as QueryBuilder;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\Builder as DatabaseQueryBuilder;
use Illuminate\Database\Schema\Builder as SchemaBuilder;
use Livewire\Attributes\Url;
use Livewire\Component;

class ListaDeUsuario extends Component
{


    public ?string $search = '';

    protected $listeners = [
        'user::updated' => '$refresh'
    ];

    // regras
    protected $queryString = [
        'search' => ['except' => '', 'as' => 'q']
    ];

    public function render()
    {
        return view('livewire.lista-de-usuario',[

            'users' => User::query()
                    ->when($this->search, fn(EloquentBuilder $q) => $q->where('name', 'like', '%'. $this->search .'%'))
                    ->get()

        ]);
    }


}