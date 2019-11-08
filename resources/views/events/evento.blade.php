<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Reúne Cursos : Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Slick slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
	<!-- Montserrat for title -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  	<!-- Start Header -->
	<header id="mu-hero" class="" role="banner" style="background-image: url(assets/images/head-featured-bg.jpg);">
		<!-- Start menu  -->
		<nav class="navbar navbar-fixed-top navbar-default mu-navbar">
		  	<div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>

			      <!-- Logo -->
			      <a class="navbar-brand" href="/">Reúne Cursos</a>

			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      	<ul class="nav navbar-nav mu-menu navbar-right">
			      		<li><a href="#mu-hero">Início</a></li>
				        <li><a href="#mu-about">Sobre</a></li>
				        <li><a href="#mu-schedule">Programação</a></li>
			            <li><a href="#mu-speakers">Palestrante(s)</a></li>
			            <li><a href="#mu-register">Inscrição</a></li>
			            <li><a href="#mu-contact">Contato</a></li>
			      	</ul>
			    </div><!-- /.navbar-collapse -->
		  	</div><!-- /.container-fluid -->
		</nav>
		<!-- End menu -->

		<div class="mu-hero-overlay">
			<div class="container">
				<div class="mu-hero-area">

					<!-- Start hero featured area -->
					<div class="mu-hero-featured-area">
						<!-- Start center Logo -->
						<div class="mu-logo-area">
							<!-- text based logo -->
							<!-- <a class="mu-logo" href="#">Eventoz</a> -->
							<!-- image based logo -->
							<a class="mu-logo" href="#"><img src="assets/images/reune-cursos-logotipo-1.png" alt="logo img"></a>
						</div>
						<!-- End center Logo -->

						<div class="mu-hero-featured-content">

                            <h1>{{$evento->titulo}}</h1>
							<h2>{{$evento->sub_titulo}}</h2>
							<p class="mu-event-date-line">09 de Novembro, 2019. Salvador/BA, BR</p>

							<div class="mu-event-counter-area">
								<div id="mu-event-counter">

								</div>
							</div>

						</div>
					</div>
					<!-- End hero featured area -->

				</div>
			</div>
		</div>
	</header>
	<!-- End Header -->

	<!-- Start main content -->
	<main role="main">
		<!-- Start About -->
		<section id="mu-about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-about-area">
							<!-- Start Feature Content -->
							<div class="row">
								<div class="col-md-6">
									<div class="mu-about-left">
										<img class="" src="assets/images/about.jpg" alt="Men Speaker">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mu-about-right">
										<h2>Sobre o curso</h2>
                                        <p>{{$evento->descricao}}</p>
									</div>
								</div>
							</div>
							<!-- End Feature Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About -->

		<!-- Start Video -->
		<section id="mu-video">
			<div class="mu-video-overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="mu-video-area">
								<h2>Video de apresentação</h2>
								<a class="mu-video-play-btn" href="#"><i class="fa fa-play" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Start Video content -->
			<div class="mu-video-content">
				<div class="mu-video-iframe-area">
					<a class="mu-video-close-btn" href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                    <iframe width="854" height="480" src="{{$evento->url_video}}" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			<!-- End Video content -->

		</section>
		<!-- End Video -->

		<!-- Start Schedule  -->
		<section id="mu-schedule">
			<div class="container">
				<div class="row">
					<div class="colo-md-12">
						<div class="mu-schedule-area">

							<div class="mu-title-area">
								<h2 class="mu-title">Programação</h2>
								<p></p>
							</div>

							<div class="mu-schedule-content-area">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs mu-schedule-menu" role="tablist">
								    <li role="presentation" class="active"><a href="#first-day" aria-controls="first-day" role="tab" data-toggle="tab">09 Nov</a></li>
								</ul>

								<!-- Tab panes -->
								<div class="tab-content mu-schedule-content">
								    <div role="tabpanel" class="tab-pane fade mu-event-timeline in active" id="first-day">
								    	<ul>
								    		<li>
								    			<div class="mu-single-event">
								    				<p class="mu-event-time">13:30 PM</p>
								    				<h3>Introdução</h3>
								    			</div>
								    		</li>
								    		<li>
								    			<div class="mu-single-event">
								    				<img src="assets/images/speaker-1.jpg" alt="event speaker">
								    				<p class="mu-event-time">14:00 PM</p>
								    				<h3>Gerenciadores/Padrão de Projeto</h3>
								    				<span>Slidy e Bloc_pattern</span>
								    			</div>
								    		</li>
								    	</ul>
								    </div>
								</div>

							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Schedule -->

		<!-- Start Speakers -->
		<section id="mu-speakers">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-speakers-area">

							<div class="mu-title-area">
								<h2 class="mu-title">Palestrantes</h2>
								<p></p>
							</div>

							<!-- Start Speakers Content -->
							<div class="mu-speakers-content">

								<div class="mu-speakers-slider">

									<!-- Start single speaker -->
									<div class="mu-single-speakers">
										<img src="assets/images/speaker-1.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Blendo Santos</h3>
											<p>Systems Analyst, Mobile App Developer</p>
											<ul class="mu-single-speakers-social">
												<li><a href="https://fb.com/blendomiller"><i class="fa fa-facebook"></i></a></li>
												<li><a href="https://twitter.com/blendomiller"><i class="fa fa-twitter"></i></a></li>
												<li><a href="https://www.linkedin.com/in/blendo-santos-5a0250ba"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- End single speaker -->

								</div>
							</div>
							<!-- End Speakers Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Speakers -->

		<!-- Start Venue -->
		<section id="mu-venue">
			<div class="mu-venue-area">
				<div class="row">

					<div class="col-md-6">
						<div class="mu-venue-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1870.856444750342!2d-38.44840617712791!3d-12.987529394102118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9f5b7800c77eb974!2sInternacional%20Trade%20Center%20-%20ITC%20Salvador!5e0!3m2!1spt-BR!2sbr!4v1573181057861!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>

					<div class="col-md-6">
						<div class="mu-venue-address">
							<h2>LOCAL <i class="fa fa-chevron-right" aria-hidden="true"></i></h2>
							<h3>{{$evento->local}}</h3>
							<h4>{{$evento->endereco}}</h4>
							<p>{{$evento->ds_local}}</p>
						</div>
					</div>

				</div>
			</div>
        </section>
		<!-- End Venue -->

		<!-- Start Pricing  -->
		<section id="mu-pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-pricing-area">

							<div class="mu-title-area">
								<h2 class="mu-title">Valor do Investimento</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis unde, ut sapiente et voluptatum facilis consectetur incidunt provident asperiores at necessitatibus nulla sequi voluptas libero quasi explicabo veritatis minima porro.</p>
							</div>

							<div class="mu-pricing-conten">
								<div class="row">

									<!-- single price item -->
									<!--<div class="col-md-4">
										<div class="mu-single-price">

											<div class="mu-single-price-head">
												<span class="mu-currency">$</span>
												<span class="mu-rate">12</span>
												<span class="mu-time">/all days</span>
											</div>
											<h3 class="mu-price-title">BASIC</h3>
											<ul>
												<li>Basic Class Ticket</li>
												<li>Access to all sessions</li>
												<li>Free Breakfast</li>
											</ul>
											<a class="mu-register-btn" href="#"> Register Now</a>
										</div>
									</div> -->
									<!-- / single price item -->

                                    <!-- single price item -->
                                    @if(count($evento->planos) == 1)
                                    <div class="col-md-4">&nbsp;</div>
									<div class="col-md-4">
                                            <div class="mu-single-price mu-popular-price">
                                                <!--<span class="mu-price-tag">Popular</span> -->
                                                <div class="mu-single-price-head">
                                                    <span class="mu-currency">R$</span>
                                                    <span class="mu-rate">{{$evento->planos[0]->valor}}</span>
                                                    <span class="mu-time">{{$evento->planos[0]->tempo}}</span>
                                                </div>
                                                <h3 class="mu-price-title">{{$evento->planos[0]->titulo}}</h3>
                                                <ul>
                                                    <li>{{$evento->planos[0]->item1}}</li>
                                                    <li>{{$evento->planos[0]->item2}}</li>
                                                    <li>{{$evento->planos[0]->item3}}</li>
                                                </ul>
                                                @if($evento->status == 1)
                                                <a class="mu-register-btn" href="#mu-register"> Inscrever-se Agora</a>
                                                @else
                                                <a class="mu-register-btn" href="#" style="background: #a04747;border: 1px solid #a04747;"> ENCERRADO</a>
                                                @endif
                                            </div>
                                        </div>
                                    <div class="col-md-4">&nbsp;</div>
                                    @else
                                    @foreach ($evento->planos as $item)
                                    <div class="col-md-4">
                                            <div class="mu-single-price mu-popular-price">
                                                <!--<span class="mu-price-tag">Popular</span> -->
                                                <div class="mu-single-price-head">
                                                    <span class="mu-currency">R$</span>
                                                    <span class="mu-rate">{{$item->valor}}</span>
                                                    <span class="mu-time">{{$item->tempo}}</span>
                                                </div>
                                                <h3 class="mu-price-title">{{$item->titulo}}</h3>
                                                <ul>
                                                    <li>{{$item->item1}}</li>
                                                    <li>{{$item->item2}}</li>
                                                    <li>{{$item->item3}}</li>
                                                </ul>
                                                @if($evento->status == 1)
                                                <a class="mu-register-btn" href="#mu-register"> Inscrever-se Agora</a>
                                                @else
                                                <a class="mu-register-btn" href="#" style="background: #a04747;border: 1px solid #a04747;"> ENCERRADO</a>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                    @endif
									<!-- / single price item -->

									<!-- single price item -->
									<!-- <div class="col-md-4">
										<div class="mu-single-price">

											<div class="mu-single-price-head">
												<span class="mu-currency">$</span>
												<span class="mu-rate">45</span>
												<span class="mu-time">/all days</span>
											</div>
											<h3 class="mu-price-title">PREMIUM</h3>
											<ul>
												<li>Basic Class Ticket</li>
												<li>Access to all sessions</li>
												<li>Free Breakfast</li>
											</ul>
											<a class="mu-register-btn" href="#"> Register Now</a>
										</div>
									</div> -->
									<!-- / single price item -->

								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Pricing -->

        @if($evento->status == 1)
		<!-- Start Register  -->
		<section id="mu-register">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-register-area">

							<div class="mu-title-area">
								<h2 class="mu-title">Formulário de Inscrição</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis unde, ut sapiente et voluptatum facilis consectetur incidunt provident asperiores at necessitatibus nulla sequi voluptas libero quasi explicabo veritatis minima porro.</p>
							</div>

							<div class="mu-register-content">
								<form class="mu-register-form">

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Nome Complento *" id="nome" name="nome" required="">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="CPF *" id="cpf" name="cpf" required="">
											</div>
										</div>
                                    </div>

                                    <div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input type="email" class="form-control" placeholder="Email *" id="email" name="email" required="">
											</div>
										</div>
                                    </div>

                                    <div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Empresa" id="empresa" name="empresa">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="CNPJ" id="cpnj" name="cpnj">
											</div>
										</div>
                                    </div>

                                    <div class="row">
										<div class="col-md-6">
											<div class="form-group">
                                                <select class="form-control" name="grau_instrucao" id="grau_instrucao">
                                                        <option value="0">ENSINO MÉDIO</option>
                                                        <option value="1">SUPERIOR COMPLETO</option>
                                                        <option value="2">PÓS-GRADUACAO</option>
                                                        <option value="3">MESTRADO</option>
                                                    </select>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Profissão Atuação" id="profissao_atuacao" name="profissao_atuacao">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Telefone" id="telefone" name="telefone" required="">
											</div>
										</div>
										<div class="col-md-6">

										<div class="form-group">
											<select class="form-control" name="plano" id="plano">
                                                @foreach($evento->planos as $item)
                                                    <option value="{{$item->id}}">{{$item->titulo . " (R$ " . $item->valor. ")"}}</option>
                                                @endforeach
											</select>
										</div>
										</div>
									</div>

									<button type="submit" class="mu-reg-submit-btn">INSCREVER-SE</button>

					            </form>
							</div>

						</div>
					</div>
				</div>
			</div>
        </section>
        @endif
		<!-- End Register -->

		<!-- Start FAQ -->
		<!-- <section id="mu-faq">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-faq-area">

							<div class="mu-title-area">
								<h2 class="mu-title">FAQ</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint assumenda ut molestias doloremque ipsam, fugit laborum totam, pariatur est cumque at, repudiandae officia ex dolores quas minus optio, iusto soluta?</p>
							</div>

							<div class="mu-faq-content">

								<div class="panel-group" id="accordion">

							        <div class="panel panel-default">
							          <div class="panel-heading">
							            <h4 class="panel-title">
							              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true">
							                <span class="fa fa-angle-down"></span> Lorem ipsum dolor sit amet.
							              </a>
							            </h4>
							          </div>
							          <div id="collapseOne" class="panel-collapse collapse in">
							            <div class="panel-body">
							              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							            </div>
							          </div>
							        </div>

							        <div class="panel panel-default">
							          <div class="panel-heading">
							            <h4 class="panel-title">
							              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
							                <span class="fa fa-angle-up"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							              </a>
							            </h4>
							          </div>
							          <div id="collapseTwo" class="panel-collapse collapse">
							            <div class="panel-body">
							              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							            </div>
							          </div>
							        </div>

							        <div class="panel panel-default">
							          <div class="panel-heading">
							            <h4 class="panel-title">
							              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
							                <span class="fa fa-angle-up"></span> Lorem ipsum dolor sit amet, consectetur.
							              </a>
							            </h4>
							          </div>
							          <div id="collapseThree" class="panel-collapse collapse">
							            <div class="panel-body">
							              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							            </div>
							          </div>
							        </div>

							        <div class="panel panel-default">
							          <div class="panel-heading">
							            <h4 class="panel-title">
							              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
							                <span class="fa fa-angle-up"></span> Lorem ipsum dolor sit amet, consectetur adipisicing.
							              </a>
							            </h4>
							          </div>
							          <div id="collapseFour" class="panel-collapse collapse">
							            <div class="panel-body">
							              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							            </div>
							          </div>
							        </div>

							        <div class="panel panel-default">
							          <div class="panel-heading">
							            <h4 class="panel-title">
							              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
							                <span class="fa fa-angle-up"></span> Lorem ipsum dolor sit amet, consectetur.
							              </a>
							            </h4>
							          </div>
							          <div id="collapseFive" class="panel-collapse collapse">
							            <div class="panel-body">
							              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							            </div>
							          </div>
							        </div>


							    </div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- End FAQ -->

		<!-- Start Sponsors -->
		<!-- <section id="mu-sponsors">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-sponsors-area">

							<div class="mu-title-area">
								<h2 class="mu-title">Our Sponsors</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint assumenda ut molestias doloremque ipsam, fugit laborum totam, pariatur est cumque at, repudiandae officia ex dolores quas minus optio, iusto soluta?</p>
							</div>

							<div class="mu-sponsors-content">
								<div class="row">

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-1.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-2.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-3.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-4.png" alt="Brand Logo">
										</div>
									</div>

										<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-5.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-6.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-7.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-8.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-9.png" alt="Brand Logo">
										</div>
									</div>

										<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-1.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-2.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-3.png" alt="Brand Logo">
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- End Sponsors -->


		<!-- Start Contact -->
		<section id="mu-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-contact-area">

							<div class="mu-title-area">
								<h2 class="mu-heading-title">Contato</h2>
								<p>Está com dúvidas, sugestões e/ou problemas para efetuar a inscrição entre em contato preenchendo o formulário abaixo: </p>
							</div>

							<!-- Start Contact Content -->
							<div class="mu-contact-content">
								<div class="row">

								<div class="col-md-12">
									<div class="mu-contact-form-area">
										<div id="form-messages"></div>
											<form id="ajax-contact" method="post" action="mailer.php" class="mu-contact-form">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Nome Completo" id="name" name="name" required>
												</div>
												<div class="form-group">
													<input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
												</div>
												<div class="form-group">
													<textarea class="form-control" placeholder="Mensagem" id="message" name="message" required></textarea>
												</div>
												<button type="submit" class="mu-send-msg-btn"><span>SUBMIT</span></button>
								            </form>
										</div>
									</div>
								</div>
							</div>
							<!-- End Contact Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact -->

	</main>

	<!-- End main content -->


	<!-- Start footer -->
	<footer id="mu-footer" role="contentinfo">
			<div class="container">
				<div class="mu-footer-area">
					<!--<div class="mu-footer-top">
						<div class="mu-social-media">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>
						</div>
					</div>-->
					<div class="mu-footer-bottom">
						<p class="mu-copy-right">&copy; 2019 - Reúne Cursos</p>
					</div>
				</div>
			</div>

	</footer>
	<!-- End footer -->



    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <!-- Event Counter -->
    <script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="assets/js/app.js"></script>

    <!-- Custom js -->
	<script type="text/javascript" src="assets/js/custom.js"></script>

    <!-- TIME  -->
    <script type="text/javascript">
        (function( $ ){
            /* ----------------------------------------------------------- */
            /*  2. EVENT TIME COUNTER
            /* ----------------------------------------------------------- */

            $('#mu-event-counter').countdown('{{$evento->dt_inicial}}').on('update.countdown', function(event) {
            var $this = $(this).html(event.strftime(''
                + '<span class="mu-event-counter-block"><span>%D</span> Days</span> '
                + '<span class="mu-event-counter-block"><span>%H</span> Hours</span> '
                + '<span class="mu-event-counter-block"><span>%M</span> Mins</span> '
                + '<span class="mu-event-counter-block"><span>%S</span> Secs</span>'));
            });
        })( jQuery );
    </script>

  </body>
</html>
