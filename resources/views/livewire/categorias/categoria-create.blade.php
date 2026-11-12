<div class="container" style="margin-top: 40px">
<h3>Adicionar Categoria</h3>
<form wire:submit='store' style="margin-top: 50px">
  <div class="mb-3">
    <label for="nome" class="form-label">Nome da Categoria</label>
    <input type="text" class="form-control" id="nome" wire:model='nome'>
  </div>
  
  <button type="submit" class="btn-solid theme-primary">Salvar</button>
</form>
</div>
