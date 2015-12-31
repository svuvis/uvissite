@extends('layouts.master')

@section('title','IT Traineeship')

@section('content')
  		<div id="blue" style="margin-top:81px">
			<div class="container">
				<div class="row centered">
					<div class="col-lg-8 col-lg-offset-2">
					    <h1 class="h9" style="color: #fff;">IT TRAINEESHIP</h1>
                        <a href="{{URL::action('PublicController@vacatures')}}" style="text-decoration: underline; font-style: italic; font-size: 14px;">
                            <i class="glyphicon glyphicon-chevron-left"></i>TERUG NAAR DE VACATUREBANK</a>
					</div>
				</div><!-- row -->
			</div><!-- container -->
		</div><!--  bluewrap -->

		<!--  Ongeveer 100 tekens per vacature -->
        <div class="container w">
            <h1 class="h7">DE VACATURE</h1><br />
            {!! HTML::image('img/Qien-paars.png', 'Qien', ['style' => 'max-height: 140px;','class' => 'vaclogo']) !!}
            <p style="font-style: italic;">
                “Ben jij net afgestudeerd en wil jij meewerken aan IT projecten bij klanten als Heineken,
                HEMA, Desperados en BCC? Volg dan ons traineeship voor Software Ontwikkelaar, IT
                Architect of IT Analist”.
            </p>
            <p style="text-align: left;">
                Wij zijn per direct op zoek naar 16 ambitieuze, recent afgestudeerde IT Talenten, die het een uitdaging vinden
                om, namens onze opdrachtgever, aan IT projecten bij grote klanten deel te nemen. Onze opdrachtgever is
                een toonaangevende IT- dienstverlener in het bouwen van software oplossingen op basis van Microsoft
                technologie. Plezier in het werk zie je bij onze opdrachtgever zowel achter als naast je pc. Als werkgever is zij
                meerdere keren uitgeroepen tot de beste werkgever van het jaar!
            </p>
            <p style="text-align: left;">
                Ons traineeship is opgedeeld in de volgende fasen:
            </p>
            <h1 style="text-align: left; font-size: 16px;" class="h7">FASE 1 (1,5 MAAND)</h1>
            <p style="text-align: left;">
                Het volgen van vakopleidingen en het behalen van erkende certificaten. De volgende
                vakopleidingen komen onder andere aan bod:<br />
                - 3 gecertificeerde Microsoft.NET/C# opleidingen;<br />
                - SQL database opleiding;<br />
                - Gestructureerd leren programmeren middels een Agile/Scrum training;<br />
                - Introductie met programmeren in de Microsoft cloud, middels Windows Azure training.<br />
            </p>
            <h1 style="text-align: left; font-size: 16px;" class="h7">FASE 2 (2,5 MAAND)</h1>
            <p style="text-align: left;">
                Onder begeleiding van een ervaren senior ontwikkelaar werkervaring opdoen, door
                deelname aan verschillende IT projecten;
            </p>
            <h1 style="text-align: left; font-size: 16px;" class="h7">FASE 3 (1 MAAND)</h1>
            <p style="text-align: left;">
                Specialisatiecursus, op basis van de marktoplossingen van de opdrachtgever. Hier
                leer je specifieke software te ontwikkelen/ programmeren voor bijvoorbeeld
                systeemintegratie, CRM OF WEB applicaties.
            </p>
            <h1 style="text-align: left; font-size: 16px;" class="h7">FASE 4 (4 MAANDEN)</h1>
            <p style="text-align: left;">
                Het deelnemen aan IT projecten op basis van de gekozen specialisatie.
            </p>
            <p style="text-align: left;">
                Gedurende het traineeship krijg jij begeleiding van een ervaren coach die ruime aandacht heeft voor jou als
                trainee. Daarnaast werken wij, aan de hand van coaching sessies, samen aan jouw communicatieve- en
                sociale vaardigheden. Deze coaching sessies zijn zowel individueel als met jouw collega IT trainees. Ten
                slotte word je gedurende dit traineeship vakinhoudelijk begeleid door een buddy die jou alle fijne kneepjes
                van het vak softwareontwikkelaar kan bijbrengen. Na afronding van ons 9 maanden durende traineeship ga jij
                je bij onze opdrachtgever verder ontwikkelen als software ontwikkelaar, IT architect of IT Analist.
            </p>
            <h1 style="text-align: left; font-size: 16px;" class="h7">OPLEIDING-EN ERVARINGSEISEN</h1>
            <p style="text-align: left;">
                - Afgeronde HBO/WO opleiding (Beta opleiding is een pré);<br />
                - Starter op de arbeidsmarkt (0-3 jaar werkervaring);<br />
                - Affiniteit met IT;<br />
                - Sterke drive om jezelf te ontwikkelen;<br />
                - Uitstekende beheersing van de Nederlandse taal in woord en geschrift;<br />
                - Je bent iemand die het verschil weet te maken.
            </p>
            <h1 style="text-align: left; font-size: 16px;" class="h7">COMPETENTIES</h1>
            <p style="text-align: left;">
                - Analytisch;<br />
                - Flexibel;<br />
                - Ondernemend;<br />
                - Leergierig;<br />
                - Creativiteit;<br />
                - Goede communicatieve vaardigheden;<br />
                - Een gezonde dosis lef gecombineerd met gezond verstand.
            </p>
            <h1 style="text-align: left; font-size: 16px;" class="h7">AANBOD</h1>
            <p style="text-align: left;">
                Bij Qien en onze opdrachtgever kan jij jouw eigen route uitstippelen om dé beste in jouw vakgebied te
                worden. Naast werkervaring krijg jij de kans om vakopleidingen te volgen en wordt je gecoacht op jouw
                persoonlijke ontwikkeling. Je krijgt een aanbieding die is gebaseerd op uitstekende primaire en secundaire
                arbeidsvoorwaarden.
            </p>
            <h1 style="text-align: left; font-size: 16px;" class="h7">SOLLICITEREN</h1>
            <p style="text-align: left;">
                Ben jij geïnteresseerd in ons IT-Traineeship? Wacht dan niet te lang met solliciteren, want het aantal plekken
                bij onze opdrachtgever is beperkt. Neem direct contact op met één van onze Recruiters via www.qien.nl of bel
                ons via +31 (0)30 751 47 77. Wij maken graag kennis met jou.
            </p>
        </div>
@endsection