<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Reúne Cursos</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="{{ url('assets/images/favicon.ico') }}"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Slick slider -->
    <link href="{{ url('assets/css/slick.css') }}" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="{{ url('assets/css/theme-color/default-theme.css') }}" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
	<!-- Montserrat for title -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif] -->

    <style>
        .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
            position: relative;
            min-height: 1px;
            padding-right: 0;
            padding-left: 0;
        }
    </style>
  </head>
  <body>

	<!-- Start main content -->
	<main role="main">
		<!-- Start About -->
		<section id="mu-about">
			<div class="container">
				<div class="row">
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
                                    <input type="datetime-local" class="form-control" id="dt_inicial" placeholder="Data/Hora Ínicio" name="dt_inicial" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="dt_final">Data/Hora Final</label>
                                    <input type="datetime-local" class="form-control" id="dt_final" placeholder="Data/Hora Final" name="dt_final" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="carga_horaria">Carga Horaria</label>
                                <input type="text" class="form-control" id="carga_horaria" placeholder="Carga Horaria" name="carga_horaria" required value="{{ isset($evento) ? $evento->carga_horaria : '' }}">
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="publico_alvo">Público Alvo</label>
                                <input type="text" class="form-control" id="publico_alvo" placeholder="Público Alvo" name="publico_alvo" value="{{ isset($evento) ? $evento->publico_alvo : '' }}">
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="imagem_destaque">Imagem de destaque</label>
                                <input type="file" id="imagem_destaque" name="imagem_destaque" required>
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

                    <div style="margin-top: 20px;border-bottom: 2px solid #000;">&nbsp;</div>

                    @if(isset($evento))
                    <div class="col-md-12" style="margin-top: 20px">
                        <form enctype='multipart/form-data' action="{{ url('/admin/detalhe-curso/' . $evento->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="titulo">Título</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" required>
                            </div>
                            <div class="form-group">
                                <label for="sub_titulo">Sub Título</label>
                                <input type="text" class="form-control" id="sub_titulo" name="sub_titulo" placeholder="Título" required>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="hora">Hora</label>
                                <input type="text" class="form-control" id="hora" placeholder="Hora" name="hora" required>
                            </div>
                            </div>
                            <div class="col-md-2">&nbsp;</div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="banner">Imagem de destaque</label>
                                    <input type="file" id="banner" name="banner">
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

                    <div style="margin-top: 20px;border-bottom: 2px solid #000;">&nbsp;</div>

                    @if(isset($evento))
                    <div class="col-md-12" style="margin-top: 20px">
                        <form enctype='multipart/form-data' action="{{ url('/admin/palestrantes-curso/' . $evento->id) }}" method="POST">
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
				</div>
			</div>
		</section>
        <!-- End About -->

	</main>


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="{{ url('assets/js/slick.min.js') }}"></script>
    <!-- Event Counter -->
    <script type="text/javascript" src="{{ url('assets/js/jquery.countdown.min.js') }}"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="{{ url('assets/js/app.js') }}"></script>

    <!-- Custom js -->
	<script type="text/javascript" src="{{ url('assets/js/custom.js') }}"></script>
  </body>
</html>
