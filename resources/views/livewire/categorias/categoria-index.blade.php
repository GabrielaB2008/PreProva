 <div class="container mt-5">

     @if (session()->has('error'))
         <div class="alert alert-danger">
             {{ session('error') }}
         </div>
     @endif

     @if (session()->has('success'))
         <div class="alert alert-success">
             {{ session('success') }}
         </div>
     @endif

     <table class="table table-striped">
         <thead>
             <tr>
                 <th scope="col">ID</th>
                 <th scope="col">Nome</th>
                 <th scope="col">Ações</th>
             </tr>
         </thead>
         <tbody>
             @foreach ($categorias as $c)
                 <tr>
                     <th scope="row">{{ $c->id }}</th>
                     <td>{{ $c->nome }}</td>
                     <td>
                         <a href="{{ route('categoria.edit', ['id' => $c->id]) }}" class="btn btn-sm btn-info">Editar</a>
                         <button wire:click='delete({{ $c->id }})' class="btn btn-sm btn-danger">Excluir</button>
                     </td>
                 </tr>
             @endforeach
         </tbody>
     </table>
 </div>
