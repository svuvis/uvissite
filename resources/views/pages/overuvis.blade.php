@extends('layouts.master')

@section('title')
Over UVIS
@stop

@section('content')
  		<div id="blue" style="margin-top:81px">
			<div class="container">
				<div class="row centered">
					<div class="col-lg-8 col-lg-offset-2">
					<h1 class="h9" style="color: #fff;">OVER UVIS</h1>
					</div>
				</div><!-- row -->
			</div><!-- container -->
		</div><!--  bluewrap -->

		<div id="r" style="background: #ebebeb;">
			<div class="container">
				<div class="row centered">
					<div class="col-lg-8 col-lg-offset-2">
						<h1 class="h7">UVIS?</h1>
						<p>
						    UVIS staat voor Utrechtse Vereniging Informatica Studenten.
						    Dit betekend echter niet dat wij er alleen zijn voor de
						    Informatica student, maar voor alle ICT opleidingen
						    die te volgen zijn aan de HU.
						</p>
						<h1 class="h7">GESCHIEDENIS</h1>
						<p>
						    Een klein stukje historie gewoon omdat het kan. UVIS bestaat
						    al sinds 6 mei 1998 en is opgericht door de heren 'Edo Meinema,
						    Marc de Vries, Erik de Groot, Peter Bootsma, Chris Neddermeijer,
						    Bas Welman en Robert van de Meulen'. Sinds dien is er een hoop
						    veranderd binnen de vereniging. Zo kwam het een jaar geleden
						    erg dichtbij om de vereniging op te doeken. Gelukkig is dat niet
						    gebeurd en zijn we nu weer een erg actieve vereniging!
						</p>
						<h1 class="h7">DOEL</h1>
						<p>
						    UVIS heeft als doel om iedereen een leuke en gezellige studie
						    te laten beleven. Daarnaast bieden wij net dat beetje meer
						    naast je opleiding. Wij doen niet aan ontgroening en dergelijke.
						    Wel organiseren wij LAN-party's, bedrijfsbezoeken, stage
						    mogelijkheden en natuurlijk ook diverse feestjes. <br>
						    Daarnaast hebben we bij UVIS de ervaring van 100 ICT'ers
						    bij elkaar die je een stuk gerichter kunnen helpen met je
						    studie dan Google.
						</p>
						<h1 class="h7">LID WORDEN?</h1>
						<p>
						    Dus jij ziet lidmaatschap van UVIS wel zitten? Kom eens langs
						    in onze verenigingsruimte op Nijenoord 1, ruimte A.-1.08. en
                            geniet direct van de gezelligheid en de kennis!
                            Of schrijf je nu direct in via {!! HTML::link('/inschrijven','deze pagina') !!}.
						</p>

						<div class="schuin">
                            {!! HTML::image('img/icoontje.png', 'Icoontje', ['class' => 'icoontje']) !!}
						    Geschreven door Charissa van Ingen - Voorzitter UVIS
						</div>
					</div>
				</div>
			</div>
		</div>


@stop

