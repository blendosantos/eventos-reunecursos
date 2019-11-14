@extends('template')

@section('body')
    <div class="col-md-12" style="margin-top: 20px">
        <h2>Editar Programação</h2>
    </div>

    <div class="col-md-12" style="margin-top: 20px">
        @include('events.forms.formPlano')
    </div>
@endsection
