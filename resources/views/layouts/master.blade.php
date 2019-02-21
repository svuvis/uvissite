<!DOCTYPE html>
<html lang="en">

 <head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
     <link rel="apple-touch-icon" sizes="57x57" href="{{asset('img/favicon/apple-icon-57x57.png')}}">
     <link rel="apple-touch-icon" sizes="60x60" href="{{asset('img/favicon/apple-icon-60x60.png')}}">
     <link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/favicon/apple-icon-72x72.png')}}">
     <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/favicon/apple-icon-76x76.png')}}">
     <link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/favicon/apple-icon-114x114.png')}}">
     <link rel="apple-touch-icon" sizes="120x120" href="{{asset('img/favicon/apple-icon-120x120.png')}}">
     <link rel="apple-touch-icon" sizes="144x144" href="{{asset('img/favicon/apple-icon-144x144.png')}}">
     <link rel="apple-touch-icon" sizes="152x152" href="{{asset('img/favicon/apple-icon-152x152.png')}}">
     <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/favicon/apple-icon-180x180.png')}}">
     <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('img/favicon/android-icon-192x192.png')}}">
     <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon/favicon-32x32.png')}}">
     <link rel="icon" type="image/png" sizes="96x96" href="{{asset('img/favicon/favicon-96x96.png')}}">
     <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon/favicon-16x16.png')}}">
     <link rel="manifest" href="{{asset('img/favicon/manifest.json')}}">
     <meta name="msapplication-TileColor" content="#ffffff">
     <meta name="msapplication-TileImage" content="/ms-icon-144x144.png')}}">
     <meta name="theme-color" content="#ffffff">

	 {!! HTML::style('css/all.css') !!}
	@yield('css')

	<title>@yield('title')</title>
  </head>

  <body>

	<!-- NAVBAR -->
  	<div class="page-wrap">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
			<div class="navbar-header ">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">
                    {!! HTML::image('/img/logo201.png', 'Logo', ['class' => 'logo']) !!}
                </a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="{{set_active('/')}}"><a href="/">Home</a></li>

					<li class="{{set_active(['agenda'])}}">{!! HTML::link('/agenda','Agenda') !!}</li>

					<li>
                    	<a data-toggle="dropdown" href="#">
                    		Info
                    		<span class="caret"></span>
                    	</a>
                    	<ul class="dropdown-menu" role="menu">
                    		<li class="{{set_active(['overuvis'])}}">{!! HTML::link('/overuvis','Over Uvis') !!}</li>
                    		<li class="{{set_active(['inschrijven'])}}">{!! HTML::link('/inschrijven','Inschrijven') !!}</li>
                    		<li class="{{set_active(['bestuur'])}}">{!! HTML::link('/bestuur','Bestuur') !!}</li>
                    		<li class="{{set_active(['commissies'])}}">{!! HTML::link('/commissies','Commissies') !!}</li>
                    		<li>{!! HTML::link('/files/UvisStatuten.pdf','Statuten',['target' => '_blank']) !!}</li>
                    	</ul>
                    </li>

                    <li>
                    	<a data-toggle="dropdown" href="#">
                    		Bedrijven
                    	    <span class="caret"></span>
                    	</a>
                    	<ul class="dropdown-menu" role="menu">
                    		<li class="{{set_active(['onzesponsors'])}}">{!! HTML::link('/onzesponsors','Onze Sponsors') !!}</li>
                    		<li class="{{set_active(['vacatures*'])}}">{!! HTML::link('/vacatures','Vacatures') !!}</li>
                    	</ul>
                    </li>

                    <li class="{{set_active(['media*'])}}">{!! HTML::link('/media','Media') !!}</li>

					<li><a data-toggle="modal" data-target="#myModal" href="#myModal">Contact</a></li>
				</ul>
			</div><!--/.nav-collapse -->
			</div>
		</div>

		 @yield('content')


		<!-- MODAL FOR CONTACT -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header" style="background-color: #00233a;">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:#fff">&times;</button>
				<h4 class="modal-title" id="myModalLabel" style="color: #fff">Contact</h4>
			  </div>
			  <div class="modal-body">
					<div class="row centered">
						<p>Vragen? Neem a.u.b contact met ons op</p>
						<p style="margin-bottom: 0">
							bestuur@uvis.nl<br />
							0616709501<br /><br />
							kvk: 30166928<br />
							<a href="mailto:bestuur@uvis.nl"><i class="fa fa-envelope" id="mail"></i></a>
						</p>
					</div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal" style="border-color: #0072bb; background-color: #0072bb;">Terug</button>
			  </div>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

	</div>

	<footer class="site-footer">
		<div id="f"  style="background-color: #00233a;">
		<div class="container">
			<div class="row centered">
				<a href="https://twitter.com/svuvis" target="_blank"><i class="fa fa-twitter"></i></a><a href="https://www.facebook.com/pages/Sv-UVIS/1501103776815344" target="_blank"><i class="fa fa-facebook"></i></a><a href="mailto:bestuur@uvis.nl"><i class="fa fa-envelope"></i></a>

			</div>
		</div>
	</div>
	</footer>
    {!! HTML::script('js/all.js') !!}
     @yield('js')
  </body>
</html>
