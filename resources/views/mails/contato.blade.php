@extends('mails.templatePadrao')

@section('titulo', 'Reúne Cursos - ' . $evento->titulo)

@section('texto')

    {{ $mensagem }}
    <br/><br/>
    <br/><br/>
    Att.
    <br/>
    {{ $nome }}
    <br/>
@endsection
