@extends('layouts.master')

@section('title')
Bestuur
@stop

@section('content')
  		<div id="blue" style="margin-top:81px">
			<div class="container">
				<div class="row centered">
					<div class="col-lg-8 col-lg-offset-2">
					<h1 class="h9" style="color: #fff;">BESTUUR</h1>
					</div>
				</div><!-- row -->
			</div><!-- container -->
		</div><!--  bluewrap -->


		<div class="container w">
			<div class="row centered">
				<br><br>
				<div class="col-lg-4">
                    {!! HTML::image('/img/ik.jpg', 'Charissa', ['class' => 'img-circle']) !!}
					<h1 class="h7">Charissa van Ingen</h1>
					 <p>Voorzitter 2014-2015</p>
					<p><a href="mailto:voorzitter@uvis.nl"><i class="fa fa-envelope" id="mail"></i></a></p>
				</div><!-- col-lg-3 -->

				<div class="col-lg-4">
                    {!! HTML::image('/img/jelle.jpg', 'Jelle', ['class' => 'img-circle']) !!}
					<h1 class="h7">Jelle Breuer</h1>
                    <p>Secretaris 2014-2015</p>
					<p><a href="mailto:secretaris@uvis.nl"><i class="fa fa-envelope" id="mail"></i></a></p>
				</div><!-- col-lg-3 -->

				<div class="col-lg-4">
                    {!! HTML::image('/img/jan.jpg', 'jan', ['class' => 'img-circle']) !!}
					<h1 class="h7">Jan Goessens</h1>
                    <p>Penningmeester 2014-2015 </p>
					<p><a href="mailto:penningmeester@uvis.nl"><i class="fa fa-envelope" id="mail"></i></a></p>
				</div><!-- col-lg-3 -->

			</div><!-- row -->
			<br>
			<br>
		</div><!-- container -->
	
	<div id="blue">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
					<h1 class="h7" style="color: #fff;">BESTUUR WORDEN?</h1>
					<p>
					    Elk bestuur komt en gaat, dus wil jij graag het bestuur van 2015-2016 worden?
					    Stel jezelf dan nu verkiesbaar. Dit doe je door een mailtje te sturen naar het huidig
					    bestuur (bestuur@uvis.nl) met daarin in het kort welke positie je ambieert en motivatie.
					    Vervolgens sturen wij jou een mailtje terug met meer info.
					</p>
				</div>
			</div>
		</div>
	</div>
@stop