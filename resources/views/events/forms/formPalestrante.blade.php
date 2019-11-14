
@extends('template')


@section('body')
    <form enctype='multipart/form-data' action="{{ isset($palestrante) ? url('/admin/edit-palestrante/' . $palestrante->id . '/' . $idEvento) : url('/admin/palestrante-curso/' . $idEvento) }}" method="POST">
        @csrf
        <div class="col-md-6">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required value="{{ isset($palestrante) ? $palestrante->nome : '' }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" required value="{{ isset($palestrante) ? $palestrante->email : '' }}">
            </div>
        </div>
        <div class="form-group">
            <label for="especificacao">Especificações</label>
            <input type="text" class="form-control" id="especificacao" name="especificacao" placeholder="Especificações" required value="{{ isset($palestrante) ? $palestrante->especificacao : '' }}">
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="facebook">Facebook</label>
                <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook" required value="{{ isset($palestrante) ? $palestrante->facebook : '' }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="linkedin">Linkedin</label>
                <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Linkedin" required value="{{ isset($palestrante) ? $palestrante->linkedin : '' }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="twitter">Twitter</label>
                <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Twitter" required value="{{ isset($palestrante) ? $palestrante->twitter : '' }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="instagram">Instagram</label>
                <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram" required value="{{ isset($palestrante) ? $palestrante->instagram : '' }}">
            </div>
        </div>
        <div class="col-md-1">&nbsp;</div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" id="foto" name="foto">
            </div>
        </div>
        <div class="col-md-12">
            <input type="submit" class="btn btn-primary" value="{{ isset($palestrante) ? 'Editar' : 'Cadastrar' }}"/>
        </div>
    </form>
@stop
