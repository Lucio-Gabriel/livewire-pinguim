<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder as DatabaseEloquentBuilder;
use Illuminate\Contracts\Database\Query\Builder as QueryBuilder;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Query\Builder as DatabaseQueryBuilder;
use Illuminate\Database\Schema\Builder as SchemaBuilder;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ListaDeUsuario extends Component
{
    use WithPagination;

    public ?string $search = null;
    public ?string $searchEmail = null;
    public ?string $sortBy = null;
    public ?string $sortDir = 'asc';

    public ?int $limit = 5;

    protected $listeners = [
        'user::updated' => '$refresh'
    ];

    // regras
    protected $queryString = [
        'search' => ['except' => '', 'as' => 'q'],
        'searchEmail' => ['except' => '', 'as' => 'eq'],
        'limit' => ['except' => '5', 'as' => '1'],
        'sorteBy' => ['except' => ''],
        'sortDir' => ['except' => 'asc']
    ];

    public function updating()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.lista-de-usuario',[

            'users' => User::query()
                    ->when($this->search, fn(Builder $q) => $q->where('name', 'like', '%'. $this->search .'%'))
                    ->when($this->searchEmail, fn(Builder $q) => $q->where('email', 'like', '%'. $this->search .'%'))
                    ->when($this->sortBy, fn(Builder $q) => $q->orderBy($this->sortBy, $this->sortDir))
                    ->paginate($this->limit)
                    // ->get()

        ]);
    }

    public function sort($column)
    {
        if($this->sortBy == $column)
        {
            $this->sortDir = $this->sortDir == 'asc' ? 'desc' : 'asc';
        } else
        {
            $this->sortDir = 'asc';
        }


        $this->sortBy = $column;
    }

}