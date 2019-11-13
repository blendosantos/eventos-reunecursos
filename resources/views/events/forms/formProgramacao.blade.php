<div class="form-group">
    <label for="titulo">Título</label>
    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" required value="{{isset($programacao) ? $programacao->titulo : ''}}">
</div>
<div class="form-group">
    <label for="sub_titulo">Sub Título</label>
    <input type="text" class="form-control" id="sub_titulo" name="sub_titulo" placeholder="Título" required value="{{isset($programacao) ? $programacao->sub_titulo : ''}}">
</div>
<div class="col-md-4">
<div class="form-group">
    <label for="hora">Hora</label>
    <input type="text" class="form-control" id="hora" placeholder="Hora" name="hora" required value="{{isset($programacao) ? $programacao->hora : ''}}">
</div>
</div>
<div class="col-md-2">&nbsp;</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="banner">Imagem de destaque</label>
        <input type="file" id="banner" name="banner">
    </div>
</div>
