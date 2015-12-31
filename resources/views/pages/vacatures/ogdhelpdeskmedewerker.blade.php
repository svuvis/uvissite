@extends('layouts.master')

@section('title','Bijbaan Helpdeskmedewerker')

@section('content')
  		<div id="blue" style="margin-top:81px">
			<div class="container">
				<div class="row centered">
					<div class="col-lg-8 col-lg-offset-2">
					    <h1 class="h9" style="color: #fff;">BIJBAAN HELPDESKMEDEWERKER</h1>
                        <a href="{{URL::action('PublicController@vacatures')}}" style="text-decoration: underline; font-style: italic; font-size: 14px;">
                            <i class="glyphicon glyphicon-chevron-left"></i>TERUG NAAR DE VACATUREBANK</a>
					</div>
				</div><!-- row -->
			</div><!-- container -->
		</div><!--  bluewrap -->

		<!--  Ongeveer 100 tekens per vacature -->

        <div id="r" style="background: #ebebeb;">
        	<div class="container">
        	    <div class="row centered">
                    <div class="col-lg-6">
        				<h1 class="h7">BEDRIJFSPROFIEL</h1>
                        {!! HTML::image('img/OGD.png', 'OGD', ['class' => 'vaclogo']) !!}<br />
        				<p style="text-align: left;">
                            Heb jij affiniteit met techniek? Ben jij op zoek naar een leuke bijbaan met tal van mogelijkheden?
                        </p>
                        <p style="text-align: left;">
                            OGD is bijna altijd op zoek naar slimme, gemotiveerde studenten van hbo-en wo-niveau die naast
                            hun studie parttime willen werken. Als je een beetje handig bent met computers kom je al gauw in
                            aanmerking voor leuke klussen bij uitdagende klanten. De bijbanen zijn heel variërend, van
                            probleemoplossend helpdeskwerk tot het ontwikkelen van applicaties.
                            Bovendien kun je snel doorgroeien naar belangrijkere rollen.
                            Zo verdien je niet alleen aardig bij, maar doe je ook al relevante werkervaring op.
                            Dat helpt je na je studie bij het zoeken naar een vaste baan, zowel binnen OGD als daarbuiten.
                            Daarnaast ben je als OGD’er natuurlijk welkom op al onze borrels en onze uitjes!
                        </p>
                        <p style="text-align: left;">
                            Al achthonderd ict’ers zijn er inmiddels achter gekomen dat ze OGD’er zijn.
                            OGD’ers zijn er in allerlei vormen, parttime en fulltime: system engineers, technisch specialisten,
                            consultants, projectleiders, ontwikkelaars, servicemanagers, noem maar op.
                            Door je vakkennis en liefde voor techniek krijg je de kans te werken bij gave klanten
                            in de industrie, zakelijke dienstverlening, overheid, onderwijs en zorg.
                        </p>
                        <p style="text-align: left;">
                            Belangrijk bij OGD is de ontwikkeling van iedereen die hier werkt.
                            Daarom bieden we ook veel gratis opleidingen en cursussen aan, ook voor studenten!
                            Daarnaast is ons motto Samen Slimmer; niet alleen met onze klanten, maar vooral met elkaar.
                            Want twee weten altijd meer dan een. Ook op de werkvloer.
                            Samen slimmer met je collega’s: je wordt omringd door slimme mensen die een passie hebben voor techniek.
                            Net als jij! Mensen die hard werken en die successen met elkaar vieren.
                            OGD zit vol ict’ers die met een kritische blik, creatief kijken naar ict-oplossingen.
                            OGD’ers zijn mensen die elkaar zonder aarzeling de meest uiteenlopende technische vraagstukken voorleggen
                            en vervolgens tot in de late uurtjes, met een biertje, discussiëren over het antwoord.
                            Het is belangrijk elkaar te blijven inspireren, en je wordt dus vaak gewezen op ontwikkelingen op
                            technisch gebied. Jij bent ook zo dat jij de interessante zaken die je tegenkomt met je collega’s deelt.
                        </p>
                        <p style="text-align: left;">
                            Ben jij minimaal 2 volledige werkdagen per week beschikbaar en minimaal tweedejaars HBO/WO student?
                            Dan biedt OGD jou.
                        </p>
                        <p style="text-align: left;">
                            - Tal van mogelijkheden op het gebied van bijbanen en startersfuncties<br />
                            - Veel opleidings-, ontwikkelings- en doorgroeimogelijkheden<br />
                            - Uitdagende klussen bij grote klanten<br />
                            - Leuke (team)uitjes en gezellige borrels!<br />
                            Interesse? Kijk eens rond op www.ogd.nl/werken-bij-ogd/bijbaan/ of bel naar 088 650 00 00
        				</p>
                    </div>

                    <div class="col-lg-6">
                        <h1 class="h7">DE VACATURE</h1><br />
        				<p style="text-align: left;">
                            OGD is altijd op zoek naar studenten die een bijbaan willen in de ict.
                            Een van de functies waar we altijd meerdere bijbanen in hebben is die van helpdeskmedewerker.
                            De kennis die hiervoor nodig is, doe je op tijdens je werk en de cursussen die we je gratis aanbieden.
                            Vergaande ict-kennis is dus niet nodig om te kunnen solliciteren.
                            En er is altijd wel een project bij jou in de buurt.
                        </p>
                        <p style="text-align: left;">
                            Als helpdeskmedewerker ben je het aanspreekpunt voor de medewerkers van onze klant.
                            Je werkplek bevindt zich meestal bij onze klant op de ict-afdeling.
                            Je zorgt er samen met de overige ict’ers voor dat iedereen bij de klant kan werken en eventuele
                            problemen met de ict snel en goed worden opgelost. Over het algemeen werk je samen met een aantal
                            andere OGD’ers op dezelfde locatie, maar het kan ook voorkomen dat je zelfstandig gaat werken in
                            een bestaand team bij een van onze klanten.
                        </p>
                        <p style="text-align: left;">
                            We bieden je…<br />
                            - opdrachten bij jou in de buurt<br />
                            - uitgebreide carrièreopties tijdens en na je studie<br />
                            - veel plezier in en naast je werk<br />
                            - gratis cursussen en trainingen<br />
                            - een goed salaris<br />
                        </p>
                        <p style="text-align: left;">
                            Je bent een OGD'er want je bent…<br />
                            - minimaal tweedejaars student<br />
                            - handig met computers<br />
                            - nu of binnenkort minimaal twee werkdagen per week beschikbaar<br />
                        </p>
                        <p style="text-align: left;">
                            Vakgebieden: helpdesk, bijbaan<br />
                            Werkervaring: Student<br />
                            Regio: Delft, Amsterdam, Utrecht, Eindhoven, Enschede<br />
                        </p>
                        <p style="text-align: left;">
                            Interesse? Je kunt een mailtje sturen naar info@ogd.nl of bellen met 088 650 00 00
                        </p>
                    </div>
            	</div>
       		</div>
   		</div>
@endsection