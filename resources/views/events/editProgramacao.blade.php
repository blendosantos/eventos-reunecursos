@extends('template')

@section('body')
    <div class="col-md-12" style="margin-top: 20px">
        <h2>Editar Programação</h2>
    </div>

    <div class="col-md-12" style="margin-top: 20px">
        <form enctype='multipart/form-data' action="{{ url('/admin/edit-programacao/' . $programacao->id) }}" method="POST">
            @csrf
            @include('events.forms.formProgramacao')
            <div class="col-md-12">
                <input type="submit" class="btn btn-primary" value="Editar"/>
            </div>
        </form>
    </div>
@endsection
