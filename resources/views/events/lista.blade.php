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
  </head>
  <body>

	<!-- Start main content -->
	<main role="main">
		<!-- Start About -->
		<section id="mu-about">
			<div class="container">
				<div class="row">
					<div class="col-md-12" style="margin-top: 20px">
                        <h2>Lista de Cursos</h2>
					</div>
                    <div class="col-md-12" style="margin-top: 20px">
                        <a href="{{ url('admin/cadastro') }}" class="btn btn-primary btn-lg">Novo</a>
                    </div>
                    <div class="col-md-12" style="margin-top: 20px">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Título</th>
                                    <th scope="col">Sub Título</th>
                                    <th scope="col">Data Ínicio</th>
                                    <th scope="col" width="100">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($eventos as $e)
                                    <tr>
                                        <th scope="row">{{ $e->id }}</th>
                                        <td>{{ $e->titulo }}</td>
                                        <td>{{ $e->sub_titulo }}</td>
                                        <td>{{ date_format(date_create($e->dt_inicial), "d/m/Y H:i:s") }}</td>
                                        <td>
                                            <a href="{{ url('admin/edit/' . $e->id) }}"><i class="fa fa-edit" title="Editar" style="color: #0008ff;"></i></a>
                                            @if($e->status == 3)
                                            <a href="{{ url('admin/active/' . $e->id) }}"><i class="fa fa-ban" title="Ativar" style="color: #d60404;"></i></a>
                                            @elseif($e->status == 1)
                                            <a href="{{ url('admin/inactive/' . $e->id) }}"><i class="fa fa-check" title="Encerrar" style="color: #058003;"></i></a>
                                            @endif
                                            <a href="{{ url('admin/delete/' . $e->id) }}"><i class="fa fa-trash" title="Excluir" style="color: #d60404;"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
					</div>
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
