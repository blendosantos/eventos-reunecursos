@extends('template')

@section('body')
    <div class="col-md-12" style="margin-top: 20px">
        <h2>Cadastro de Cursos</h2>
    </div>
    <div class="col-md-12" style="margin-top: 20px">
        <form enctype='multipart/form-data' action="{{ isset($evento) ? url('/admin/edit/' . $evento->id) : url('/admin/cadastro') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" required value="{{ isset($evento) ? $evento->titulo : '' }}">
            </div>
            <div class="form-group">
                <label for="sub_titulo">Sub Título</label>
                <input type="text" class="form-control" id="sub_titulo" placeholder="Sub Título" name="sub_titulo" required value="{{ isset($evento) ? $evento->sub_titulo : '' }}">
            </div>
            <div class="form-group">
                <label for="local">Local</label>
                <input type="text" class="form-control" id="local" placeholder="Local" name="local" required value="{{ isset($evento) ? $evento->local : '' }}">
            </div>
            <div class="form-group">
                <label for="descricao">Sobre o curso</label>
                <textarea class="form-control" id="descricao" placeholder="Descrição" name="descricao" required>{{ isset($evento) ? $evento->descricao : '' }}</textarea>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" placeholder="Endereço" name="endereco" required value="{{ isset($evento) ? $evento->endereco : '' }}">
            </div>
            <div class="form-group">
                <label for="ds_local">Descrição do Local</label>
                <input type="text" class="form-control" id="ds_local" placeholder="Descrição do Local" name="ds_local" value="{{ isset($evento) ? $evento->ds_local : '' }}">
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <label for="link_geolocalizacao">Link Geolocalização</label>
                <input type="text" class="form-control" id="link_geolocalizacao" placeholder="Link Geolocalização" name="link_geolocalizacao" required value="{{ isset($evento) ? $evento->link_geolocalizacao : '' }}">
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <label for="url_video">URL Vídeo</label>
                <input type="text" class="form-control" id="url_video" placeholder="URL Vídeo" name="url_video" required value="{{ isset($evento) ? $evento->url_video : '' }}">
            </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="dt_inicial">Data/Hora Ínicio</label>
                    <input type="datetime-local" class="form-control" id="dt_inicial" placeholder="Data/Hora Ínicio" name="dt_inicial" required value="{{ isset($evento) ? date('Y-m-d\TH:i:s', strtotime($evento->dt_inicial)) : ''}}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="dt_final">Data/Hora Final</label>
                    <input type="datetime-local" class="form-control" id="dt_final" placeholder="Data/Hora Final" name="dt_final" {{ isset($evento) ? '' : 'required' }} value="{{ isset($evento) && $evento->dt_final != "" ? date('Y-m-d\TH:i:s', strtotime($evento->dt_final)) : ''}}">
                </div>
            </div>
            <div class="col-md-4">
            <div class="form-group">
                <label for="carga_horaria">Carga Horaria</label>
                <input type="text" class="form-control" id="carga_horaria" placeholder="Carga Horaria" name="carga_horaria" {{ isset($evento) ? '' : 'required' }} value="{{ isset($evento) ? $evento->carga_horaria : '' }}">
            </div>
            </div>
            <div class="form-group">
                <label for="publico_alvo">Público Alvo</label>
                <input type="text" class="form-control" id="publico_alvo" placeholder="Público Alvo" name="publico_alvo" value="{{ isset($evento) ? $evento->publico_alvo : '' }}">
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <label for="imagem_destaque">Imagem de destaque</label>
                <input type="file" id="imagem_destaque" name="imagem_destaque" {{ isset($evento) ? '' : 'required' }}>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <label for="banner">Banner de Fundo Topo</label>
                <input type="file" id="banner" name="banner">
            </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-primary" value="{{ isset($evento) ? 'Editar' : 'Cadastrar' }}"/>
            </div>
        </form>
    </div>

    @if(isset($evento))

    <div style="margin-top: 20px;border-bottom: 2px solid #000;">&nbsp;</div>

    <div class="col-md-12" style="margin-top: 20px">
        <h2>Cadastro da Programação</h2>
    </div>
    <div class="col-md-12" style="margin-top: 20px">
        <form enctype='multipart/form-data' action="{{ url('/admin/detalhe-curso/' . $evento->id) }}" method="POST">
            @csrf
            @include('events.forms.formProgramacao')
            <div class="col-md-12">
                <input type="submit" class="btn btn-primary" value="Cadastrar"/>
            </div>
        </form>
    </div>

    <div class="col-md-12" style="margin-top: 20px">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Título</th>
                    <th scope="col">Sub Título</th>
                    <th scope="col">Hora</th>
                    <th scope="col" width="100">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($evento->programacao as $e)
                    <tr>
                        <th scope="row">{{ $e->id }}</th>
                        <td>{{ $e->titulo }}</td>
                        <td>{{ $e->sub_titulo }}</td>
                        <td>{{ $e->hora }}</td>
                        <td>
                            <a href="{{ url('admin/edit-detalhe/' . $e->id) }}"><i class="fa fa-edit" title="Editar" style="color: #0008ff;"></i></a>
                            <a href="{{ url('admin/delete-detalhe/' . $e->id) }}"><i class="fa fa-trash" title="Excluir" style="color: #d60404;"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
    </div>
    @endif


    @if(isset($evento))
    <div style="margin-top: 20px;border-bottom: 2px solid #000;">&nbsp;</div>

    <div class="col-md-12" style="margin-top: 20px">
        <h2>Cadastro dos Palestrantes</h2>
    </div>
    <div class="col-md-12" style="margin-top: 20px">
        <form enctype='multipart/form-data' action="{{ url('/admin/palestrante-curso/' . $evento->id) }}" method="POST">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" required>
                </div>
            </div>
            <div class="form-group">
                <label for="especificacao">Especificações</label>
                <input type="text" class="form-control" id="especificacao" name="especificacao" placeholder="Especificações" required>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="linkedin">Linkedin</label>
                    <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Linkedin" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="twitter">Twitter</label>
                    <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Twitter" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="instagram">Instagram</label>
                    <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram" required>
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
                <input type="submit" class="btn btn-primary" value="Cadastrar"/>
            </div>
        </form>
    </div>

    <div class="col-md-12" style="margin-top: 20px">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col" width="100">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($evento->palestrantes as $e)
                    <tr>
                        <th scope="row">{{ $e->palestrante->id }}</th>
                        <td>{{ $e->palestrante->nome }}</td>
                        <td>{{ $e->palestrante->email }}</td>
                        <td>
                            <a href="{{ url('admin/edit-palestrante/' . $e->id) }}"><i class="fa fa-edit" title="Editar" style="color: #0008ff;"></i></a>
                            <a href="{{ url('admin/delete-palestrante/' . $e->id) }}"><i class="fa fa-trash" title="Excluir" style="color: #d60404;"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
    </div>
    @endif

    @if(isset($evento))
    <div style="margin-top: 20px;border-bottom: 2px solid #000;">&nbsp;</div>

    <div class="col-md-12" style="margin-top: 20px">
        <h2>Cadastro de Planos</h2>
    </div>
    <div class="col-md-12" style="margin-top: 20px">
        <form enctype='multipart/form-data' action="{{ url('/admin/plano-curso/' . $evento->id) }}" method="POST">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="valor">Valor</label>
                    <input type="number" class="form-control" id="valor" name="valor" placeholder="Valor" required>
                </div>
            </div>
            <div class="form-group">
                <label for="item1">Descrição 1</label>
                <input type="text" class="form-control" id="item1" name="item1" placeholder="Descrição 1">
            </div>
            <div class="form-group">
                <label for="item1">Descrição 1</label>
                <input type="text" class="form-control" id="item1" name="item1" placeholder="Descrição 1">
            </div>
            <div class="form-group">
                <label for="item1">Descrição 1</label>
                <input type="text" class="form-control" id="item1" name="item1" placeholder="Descrição 1">
            </div>
            <div class="form-group">
                <label for="tempo">Tempo de curso</label>
                <input type="text" class="form-control" id="tempo" name="tempo" placeholder="Tempo de curso">
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-primary" value="Cadastrar"/>
            </div>
        </form>
    </div>

    <div class="col-md-12" style="margin-top: 20px">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Valor</th>
                    <!--<th scope="col" width="100">Ações</th>-->
                </tr>
            </thead>
            <tbody>
                @foreach($evento->planos as $e)
                    <tr>
                        <th scope="row">{{ $e->id }}</th>
                        <td>{{ $e->titulo }}</td>
                        <td>{{ $e->valor }}</td>
                        <!--<td>
                            <a href="{{ url('admin/edit-palestrante/' . $e->id) }}"><i class="fa fa-edit" title="Editar" style="color: #0008ff;"></i></a>
                            <a href="{{ url('admin/delete-palestrante/' . $e->id) }}"><i class="fa fa-trash" title="Excluir" style="color: #d60404;"></i></a>
                        </td>-->
                    </tr>
                @endforeach
            </tbody>
            </table>
    </div>
    @endif
@endsection
