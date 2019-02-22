@extends('layouts.master')

@section('title')
Commissies
@stop

@section('content')
  		<div id="blue" style="margin-top: 153px">
			<div class="container">
				<div class="row centered">
					<div class="col-lg-8 col-lg-offset-2">
					<h1 class="h9" style="color: #fff;">COMMISSIES</h1>
					</div>
				</div><!-- row -->
			</div><!-- container -->
		</div><!--  bluewrap -->


		<div class="container w">
			<div class="row centered">
				<br><br>
				<div class="col-lg-4">
                    {!! HTML::image('img/feestcie.png', 'Feestcie', ['class' => 'img-circle']) !!}<br />
					<h1 class="h7">Feestcie?</h1>
					<p>
					    Deze commissie organiseert alle feestje van de UVIS!<br>
					    Incl. LAN-Party's en BBQ's.
					</p>
					<h1 class="h7">Leden Feestcie</h1>
					<p>
					    Voorzitter: Jan Goessens<br>
					    Thomas de Groot<br>
					    ...
					</p>
					{{--<p><a href="#"><i class="fa fa-envelope" id="mail"></i></a></p>--}}
				</div><!-- col-lg-3 -->
				<div class="col-lg-4">
                    {!! HTML::image('img/sponcie.png', 'Sponcie', ['class' => 'img-circle']) !!}<br />
					<h1 class="h7">Sponcie?</h1>
					<p>
					    De Sponcie zorgt voor al het contact met de sponsors.<br>
					    Daarnaast regelen zij ook o.a. bedrijfsbezoeken en sprekers.
					</p>
					<h1 class="h7">Leden Sponcie</h1>
					<p>
					    Voorzitter: Charissa van Ingen<br>
					    ...
					</p>
					{{--<p><a href="#"><i class="fa fa-envelope" id="mail"></i></a></p>--}}
				</div><!-- col-lg-3 -->
				<div class="col-lg-4">
                    {!! HTML::image('img/itcie.png', 'ITCie', ['class' => 'img-circle']) !!}<br />
                	<h1 class="h7">ITCie?</h1>
                	<p>
                	    Onze leden van de ITCie zorgen ervoor dat de site altijd up to date is!
                	</p>
                	<h1 class="h7">Leden ITCie</h1>
          			<p>
                	    Voorzitter: Jelle Breuer<br>
                		Charissa van Ingen<br>
                		...
           			</p>
               		{{--<p><a href="#"><i class="fa fa-envelope" id="mail"></i></a></p>--}}
               	</div><!-- col-lg-3 -->
			</div><!-- row -->

		    <div class="row centered">
                <br><br>
                    <div class="col-lg-6">
                        {!! HTML::image('img/uviscie.png', 'UvisCie', ['class' => 'img-circle']) !!}<br />
                        <h1 class="h7">UvisCie?</h1>
                        <p>
                            Het Uvisje is het krantje wat zo'n twee keer per jaar verschijnt. <br>
                            De leden van UvisCie houden zich hier dan ook mee bezig. <br>
                            Daarnaast zorgen ze ook voor nieuws updates over de UVIS via Twitter & Facebook.
                        </p>
                        <h1 class="h7">Leden UvisCie</h1>
                        <p>
                            Voorzitter: Jelle Breuer<br>
                            ...
                        </p>
                        {{--<p><a href="#"><i class="fa fa-envelope" id="mail"></i></a></p>--}}
                    </div><!-- col-lg-3 -->
                    <div class="col-lg-6">
                        {!! HTML::image('img/kascie.png', 'KasCie', ['class' => 'img-circle']) !!}<br />
                        <h1 class="h7">KasCie?</h1>
                        <p>
                            De leden van de kascommissie controleren de financiën van de Uvis.<br>
                        </p>
                        <h1 class="h7">Leden KasCie</h1>
                        <p>
                            Zeger Hoogeboom & Hayo Bluys
                        </p>
                        {{--<p><a href="#"><i class="fa fa-envelope" id="mail"></i></a></p>--}}
                    </div><!-- col-lg-3 -->
                <br><br>
            </div>
		</div><!-- container -->

	<div id="blue">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
					<h1 class="h7" style="color: #fff;">COMMISSIE LID WORDEN?</h1>
					<p>
					    Ben je iemand die graag over één van de bovengenoemde zaken meedenkt?<br>
                        Stuur dan een mailtje naar bestuur@uvis.nl met in het kort in welke commissie(s)
                        je geïnteresseerd bent en je motivatie hiervoor. Dan mailen wij je zo snel
                        mogenlijk terug.
					</p>
				</div>
			</div>
		</div>
	</div>
@stop
