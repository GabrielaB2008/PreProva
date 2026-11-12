<?php

namespace App\Livewire\Categorias;

use App\Models\Categoria;
use Livewire\Component;

class CategoriaCreate extends Component
{
    public $nome;

    public function store(){
        Categoria::create([
            'nome' => $this->nome
        ]);

        session()->flash('success','Categoria Cadastrada');
        return redirect()->route('categoria.index');
    }

    public function render()
    {
        return view('livewire.categorias.categoria-create');
    }
}
