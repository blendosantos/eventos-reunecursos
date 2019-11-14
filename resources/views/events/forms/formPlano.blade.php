<form enctype='multipart/form-data' action="{{ isset($plano) ? url('/admin/edit-plano/' . $plano->id) : url('/admin/plano-curso/' . $evento->id) }}" method="POST">
    @csrf
    <div class="col-md-6">
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" required value="{{ isset($plano) ? $plano->titulo : '' }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="number" class="form-control" id="valor" name="valor" placeholder="Valor" required value="{{ isset($plano) ? $plano->valor : '' }}">
        </div>
    </div>
    <div class="form-group">
        <label for="item3">Descrição 1</label>
        <input type="text" class="form-control" id="item3" name="item3" placeholder="Descrição 3" value="{{ isset($plano) ? $plano->item3 : '' }}">
    </div>
    <div class="form-group">
        <label for="item2">Descrição 2</label>
        <input type="text" class="form-control" id="item2" name="item2" placeholder="Descrição 3" value="{{ isset($plano) ? $plano->item2 : '' }}">
    </div>
    <div class="form-group">
        <label for="item3">Descrição 3</label>
        <input type="text" class="form-control" id="item3" name="item3" placeholder="Descrição 4" value="{{ isset($plano) ? $plano->item3 : '' }}">
    </div>
    <div class="form-group">
        <label for="tempo">Tempo de curso</label>
        <input type="text" class="form-control" id="tempo" name="tempo" placeholder="Tempo de curso" value="{{ isset($plano) ? $plano->tempo : '' }}">
    </div>
    <div class="col-md-12">
        <input type="submit" class="btn btn-primary" value="{{ isset($plano) ? 'Editar' : 'Cadastrar' }}"/>
    </div>
</form>
