<?php

namespace App\Livewire\Categorias;

use App\Models\Categoria;
use Livewire\Component;

class CategoriaIndex extends Component
{
    public $pesquisa_nome = '';

    public function delete($categoria_id){
        $categoria = Categoria::find($categoria_id);

        if($categoria == null){
            session()->flash('error', 'Categoria não encontrada');
            return redirect()->route('categoria.index');
        }

        $categoria->delete();

        session()->flash('success', 'Categoria Excluída');
        return redirect()->route('categoria.index');
    }

    public function render()
    {
        $categorias = Categoria::all();
        // $categorias = Categoria::where('nome', 'like', $this->pesquisa_nome)->get();
        return view('livewire.categorias.categoria-index', compact('categorias'));
    }
}
