<?php

namespace App\Livewire\Categorias;

use App\Models\Categoria;
use Livewire\Component;

class CategoriaEdit extends Component
{
    // função mount{
    // receber id de referência do que será editado (via rota)
    // buscar por id
    // valdar se a pesquisa retorna resultado
    // preencher os campos
    // }

    // função update{
    // receber id de referência do que será editado (via rota)
    // buscar por id
    // valdar se a pesquisa retorna resultado
    // capturar os dados dos campos
    // atualizar
    // retornar e redirecionar
    // }

    public $categoria_id;
    public $nome;

    public function mount($id){
        $categoria = Categoria::find($id);

        if($categoria == null){
            session()->flash('error', 'Categoria não encontrada');
            return redirect()->route('categoria.index');
        }

        $this->categoria_id = $categoria->id;
        $this->nome = $categoria->nome;

    }

    public function update(){
        $categoria = Categoria::find($this->categoria_id);

        if($categoria == null){
            session()->flash('error', 'Categoria não encontrada');
            return redirect()->route('categoria.index');
        }

        $categoria->nome = $this->nome;

        $categoria->update();

        session()->flash('success', 'CategoriAtualizada');
        return redirect()->route('categoria.index');
    }

    public function render()
    {
        return view('livewire.categorias.categoria-edit');
    }
}
