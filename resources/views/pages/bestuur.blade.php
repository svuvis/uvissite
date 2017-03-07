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
                    {!! HTML::image('/img/unknown.jpg', 'Charissa', ['class' => 'img-circle']) !!}
					<h1 class="h7">William Loosman</h1>
					 <p>Voorzitter 2016-2017</p>
					<p><a href="mailto:bestuur@uvis.nl"><i class="fa fa-envelope" id="mail"></i></a></p>
				</div><!-- col-lg-3 -->

				<div class="col-lg-4">
                    {!! HTML::image('/img/nigel.png', 'Jelle', ['class' => 'img-circle']) !!}
					<h1 class="h7">Nigel van Hattum</h1>
                    <p>Secretaris 2016-2017</p>
					<p><a href="mailto:bestuur@uvis.nl"><i class="fa fa-envelope" id="mail"></i></a></p>
				</div><!-- col-lg-3 -->

				<div class="col-lg-4">
                    {!! HTML::image('/img/unknown.jpg', 'jan', ['class' => 'img-circle']) !!}
					<h1 class="h7">Sander de Bruin</h1>
                    <p>Penningmeester 2016-2017 </p>
					<p><a href="mailto:bestuur@uvis.nl"><i class="fa fa-envelope" id="mail"></i></a></p>
				</div><!-- col-lg-3 -->

			</div><!-- row -->
            <div class="row centered">
                <br><br>
                <div class="col-lg-4">
                    {!! HTML::image('/img/olivier.png', 'Charissa', ['class' => 'img-circle']) !!}
                    <h1 class="h7">Olivier Verwoerd</h1>
                     <p>Algemeen lid 2016-2017</p>
                    <p><a href="mailto:bestuur@uvis.nl"><i class="fa fa-envelope" id="mail"></i></a></p>
                </div><!-- col-lg-3 -->

                <div class="col-lg-4">
                    {!! HTML::image('/img/unknown.jpg', 'Jelle', ['class' => 'img-circle']) !!}
                    <h1 class="h7">Menno van Moort</h1>
                    <p>Algemeen lid 2016-2017</p>
                    <p><a href="mailto:bestuur@uvis.nl"><i class="fa fa-envelope" id="mail"></i></a></p>
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
					    Elk bestuur komt en gaat, dus wil jij graag het bestuur van 2017-2018 worden?
					    Stel jezelf dan nu verkiesbaar. Dit doe je door een mailtje te sturen naar het huidig
					    bestuur (bestuur@uvis.nl) met daarin in het kort welke positie je ambieert en motivatie.
					    Vervolgens sturen wij jou een mailtje terug met meer info.
					</p>
				</div>
			</div>
		</div>
	</div>
@stop