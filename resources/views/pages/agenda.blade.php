@extends('layouts.master')

@section('title')
Agenda
@stop

@section('content')
    <div id="blue" style="margin-top:81px">
	    <div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
                    <h1 class="h9" style="color: #fff;">AGENDA</h1>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!--  bluewrap -->

	<div id="r" style="background: #ebebeb;">
		<div class="container">
			<div class="row centered">
				<div id="timeline">
					<div class="row timeline-movement timeline-movement-top">
					</div>

                    <!--volgende item -->
                    <div class="row timeline-movement">
                        <div class="timeline-badge">
                            <span class="timeline-balloon-date-day">26</span>
                            <span class="timeline-balloon-date-month">JUN</span>
                        </div>
                        <div class="col-sm-6  timeline-item">
                            <div class="row">
                                <div class="col-sm-11">
                                    <div class="timeline-panel credits">
                                        <ul class="timeline-panel-ul">
                                            <li>
                                                <span class="importo" style="font-weight:bold">
                                                    {!! HTML::image('img/Superhelden.jpg', 'Superhelden', ['width' => '100%']) !!}
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6  timeline-item" style="margin-top:0">
                            <div class="row">
                                <div class="col-sm-offset-1 col-sm-11">
                                    <div class="timeline-panel debits">
                                        <ul class="timeline-panel-ul">
                                            <li><h1 class="h8">Superhelden EIndfeest!
                                                    <a class="facebooklink" href="https://www.facebook.com/events/470687286413959/"><i class="fa fa-facebook-square"></i></a>
                                                </h1></li>
                                            <li>
                                                <p>
                                                    Het einde van het studiejaar is al bijna in zicht.
                                                    Dus genoeg redenen voor een goed eindfeest!
                                                </p>
                                                <p>
                                                    Voorverkoop kaartjes: 3,- voor leden, 4,- voor niet leden.
                                                    Deurverkoop kaartjes: 5,- voor iedereen.
                                                    Kaartje van te voren kopen? Dit kan bij het bestuur te vinden in lokaal A-1.08 of stuur een mailtje naar <a href="mailto:bestuur@uvis.nl">bestuur@uvis.nl</a>.
                                                </p>
                                                <p>
                                                    Van 22:00 - 05:00<br />
                                                    Waar? In de poema.<br />
                                                    Adres: Drieharingstraat 22, 3511 BJ<br />
                                                </p>
                                                <p style="font-weight: bold;">
                                                    Euroknaller: tot <i class="glyphicon glyphicon-time"></i> 00:00 kost een biertje slechts €1,-.
                                                </p>
                                                <div class="kleiner">

                                                </div>
                                            </li>
                                            <li><div class="kleiner"><i class="glyphicon glyphicon-time"></i> 26/06/2015 22:00 - 05:00</div></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




				</div>
				<br />
                <br />
                <br />

                <div class="verberg" onclick="showStuff('show', this); return false;">
                    <br /><a href=""><h1 class="h9a">oude agendapunten <i class="fa fa-folder"></i></h1></a><br />
                </div>

                <div id="show" style="display:none;">
                    <div class="verberg" onclick="showStuff('show', this); return true;">
                        <br /><a href=""><h1 class="h9a">oude agendapunten <i class="fa fa-folder-open"></i></h1></a><br />
                    </div>
                    <!--Dit is verborgen-->
				    <div id="timeline">
                        <div class="row timeline-movement timeline-movement-top"></div>

                        <!--volgende item -->
                        <div class="row timeline-movement">
                            <div class="timeline-badge">
                                <span class="timeline-balloon-date-day">20</span>
                                <span class="timeline-balloon-date-month">FEB</span>
                            </div>
                            <div class="col-sm-6  timeline-item">
                                <div class="row">
                                    <div class="col-sm-11">
                                        <div class="timeline-panel credits">
                                            <ul class="timeline-panel-ul">
                                                <li>
                                                    <span class="importo" style="font-weight:bold">
                                                        {!! HTML::image('img/media/2014/Lanparty.png', 'Lan-party', ['width' => '100%']) !!}
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6  timeline-item" style="margin-top:0">
                                <div class="row">
                                    <div class="col-sm-offset-1 col-sm-11">
                                        <div class="timeline-panel debits">
                                            <ul class="timeline-panel-ul">
                                                <li><h1 class="h8">Lan-party
                                                        <a class="facebooklink" href="https://www.facebook.com/events/335921236613263/"><i class="fa fa-facebook-square"></i></a>
                                                    </h1></li>
                                                <li>
                                                    <p>
                                                        Eindelijk organiseren we de lang verwachte LAN-PARTY!<br />
                                                        Wil jij er bij zijn?<br />
                                                        Stuur dan een mailtje naar <a href="mailto:bestuur@uvis.nl">bestuur@uvis.nl</a><br />
                                                        Of meldt je aan via facebook!<br />
                                                        Wees wel snel met aanmelden want er is maar plek voor 30 studenten!<br />
                                                        <br />
                                                        Vergeet niet te stemmen op jouw favoriete game, zie de poll op de facebook evenements pagina.<br />
                                                        <br />
                                                        Tijd: van 18:00 tot 06:00<br />
                                                        Adres: Ptolemaeuslaan 70 te Utrecht, bij het bedrijf YMOR<br />
                                                        Prijs: Helemaal GRATIS!<br />
                                                    </p>
                                                    <div class="kleiner">

                                                    </div>
                                                </li>
                                                <li><div class="kleiner"><i class="glyphicon glyphicon-time"></i> 20/2/2015 18:00 - 06:00</div></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--volgende item -->
                        <div class="row timeline-movement">
                            <div class="timeline-badge">
                                <span class="timeline-balloon-date-day">04</span>
                                <span class="timeline-balloon-date-month">FEB</span>
                            </div>
                            <div class="col-sm-6  timeline-item">
                                <div class="row">
                                    <div class="col-sm-11">
                                        <div class="timeline-panel credits">
                                            <ul class="timeline-panel-ul">
                                                <li>
                                                    <span class="importo" style="font-weight:bold">
                                                        {!! HTML::image('img/media/2014/NerdsInVegas.png', 'Nerds in Vegas', ['width' => '100%']) !!}
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6  timeline-item" style="margin-top:0">
                                <div class="row">
                                    <div class="col-sm-offset-1 col-sm-11">
                                        <div class="timeline-panel debits">
                                            <ul class="timeline-panel-ul">
                                                <li>
                                                    <h1 class="h8">Nerds in Vegas
                                                    <a class="facebooklink" href="https://www.facebook.com/events/749631781780714/?ref_dashboard_filter=upcoming"><i class="fa fa-facebook-square"></i></a>
                                                    </h1>
                                                </li>
                                                <li>
                                                    <p>
                                                        {!! HTML::link('/nerdsinvegas','Fotos bekijken?', ['class' => 'link']) !!}
                                                    </p>
                                                    <p>
                                                        Poker en Startrek, Champagne en Fristi, Bikini Babes en Sokken in Sandalen.
                                                        De deuren van Club LUX gaan op woensdag 4 februari 2015 om 23:00 (tot 04:00)
                                                        open voor alle Nerds die het Vegas gevoel willen ervaren.<br />
                                                        <br />
                                                        Leden van sv Codex, Forum en UVIS: € 3,-<br />
                                                        Niet-leden/deurverkoop: € 5,-<br />
                                                        <br />
                                                        We gokken dat het een geweldige avond wordt dus trek je smoking of sandalen uit de kast en wees er bij!<br />
                                                        <br />
                                                        Remember, what happens in Vegas... it stays a nerd.<br />
                                                    </p>
                                                    <p>
                                                        Kaartje kopen? Stuur een mailtje naar <a href="mailto:bestuur@uvis.nl">bestuur@uvis.nl</a><br />
                                                        Dan zetten wij je op de lijst!<br />
                                                        Of kom gezellig langs bij A-1.08 dan schrijven we je direct in!
                                                    </p>
                                                </li>
                                                <li><div class="kleiner">
                                                <i class="glyphicon glyphicon-time"></i> 03/2/2015 23:00 - 04:00
                                                </div></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--volgende item -->
                        <div class="row timeline-movement">
                            <div class="timeline-badge">
                                <span class="timeline-balloon-date-day">03</span>
                                <span class="timeline-balloon-date-month">FEB</span>
                            </div>
                            <div class="col-sm-6  timeline-item">
                                <div class="row">
                                    <div class="col-sm-11">
                                        <div class="timeline-panel credits">
                                            <ul class="timeline-panel-ul">
                                                <li>
                                                    <span class="importo" style="font-weight:bold">
                                                        {!! HTML::image('img/media/2014/DagjeDefensie.png', 'Dagje Defensie', ['width' => '100%']) !!}
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6  timeline-item" style="margin-top:0">
                                <div class="row">
                                    <div class="col-sm-offset-1 col-sm-11">
                                        <div class="timeline-panel debits">
                                            <ul class="timeline-panel-ul">
                                                <li><h1 class="h8">Dagje Defensie met UVIS
                                                <a class="facebooklink" href="https://www.facebook.com/events/873932832637026/?ref_dashboard_filter=upcoming"><i class="fa fa-facebook-square"></i></a>
                                                </h1></li>
                                                <li>
                                                    <p>
                                                        De gemaakte foto's en filmpjes komen zo snel mogelijk online te staan.
                                                    </p>
                                                    <p>
                                                        Wil jij graag een dagje mee naar Defensie? Dat kan!<br />
                                                        Plaats: Prins Bernhardkazerne te Amersfoort<br />
                                                        Adres: Barchman Wuytierslaan 198, 3818LN<br />
                                                        Prijs: € 3,- voor leden & € 6,- voor niet leden<br />
                                                    </p>
                                                    <p>
                                                        Je kunt je inschrijven door een mailtje te sturen naar <a href="mailto:bestuur@uvis.nl">bestuur@uvis.nl</a><br />
                                                        Of kom gezellig langs bij A-1.08 dan schrijven we je direct in!
                                                    </p>
                                                    <div class="kleiner">
                                                        Programma: <br />
                                                        08:50 - Verzamel / vertrekpunt vanaf Utrecht Centraal. <br />
                                                        09:45 - Ontvangst in het auditorium gebouw op de Bernhardkazerne. <br />
                                                        10:00 - Presentatie over Defensie (algemeen) <br />
                                                        11:00 - Presentatie en demonstratie over operationele IT-Systemen ELIAS, TITAAN <br />
                                                        12:00 - Lunch, deze wordt verzorgt door Defensie. <br />
                                                        13:00 - Schieten in schietsimulator en een rondleiding door trainings- en simulatie-omgeving VBS2 en TACTIS. <br />
                                                        16:00 - Afsluiting en evaluatie. <br />
                                                        17:00 - Borrel in Utrecht, café nog onbekend. <br />

                                                        De bedoeling is om met z'n allen met de trein te gaan. Wil je met de auto gaan, dan kan dit natuurlijk ook.<br />

                                                    </div>
                                                </li>
                                                <li><div class="kleiner"><i class="glyphicon glyphicon-time"></i> 03/2/2015 8:50 - 17:00</div></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--volgende item -->
                        <div class="row timeline-movement">
                            <div class="timeline-badge">
                                <span class="timeline-balloon-date-day">18</span>
                                <span class="timeline-balloon-date-month">DEC</span>
                            </div>
                            <div class="col-sm-6  timeline-item">
                                <div class="row">
                                    <div class="col-sm-11">
                                        <div class="timeline-panel credits">
                                            <ul class="timeline-panel-ul">
                                                <li>
                                                    <span class="importo" style="font-weight:bold">
                                                        {!! HTML::image('img/media/2014/college.png', 'ALV + Ledenborrel', ['width' => '100%']) !!}
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6  timeline-item" style="margin-top:0">
                                <div class="row">
                                    <div class="col-sm-offset-1 col-sm-11">
                                        <div class="timeline-panel debits">
                                            <ul class="timeline-panel-ul">
                                                <li><h1 class="h8">ALV + Ledenborrel</h1></li>
                                                <li>
                                                    <p>
                                                        Graag ziet UVIS al haar leden tijdens de algemene leden vergadering.<br />
                                                        Om iedereen er van op de hoogte te stellen wat de nieuwste veranderingen zijn bij UVIS.<br />
                                                        Natuurlijk wordt de ALV afgesloten door middel van een ledenborrel!
                                                        Tijd en plaats volgt nog. Houd hiervoor de website / facebook / twitter in de gaten.
                                                    </p>
                                                </li>
                                                <li><div class="kleiner"><i class="glyphicon glyphicon-time"></i> 18/12/2014 Tijd nog niet bekend</div></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--volgende item -->
                        <div class="row timeline-movement">
                            <div class="timeline-badge">
                                <span class="timeline-balloon-date-day">09</span>
                                <span class="timeline-balloon-date-month">OCT</span>
                            </div>
                            <div class="col-sm-6  timeline-item">
                                <div class="row">
                                    <div class="col-sm-11">
                                        <div class="timeline-panel credits">
                                            <ul class="timeline-panel-ul">
                                                <li><span class="importo" style="font-weight:bold"><img src="{{{{asset('storage/media/whatthehack/001k.png')}}" alt="What the H@ck event foto" width="100%" /></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6  timeline-item" style="margin-top:0">
                                <div class="row">
                                    <div class="col-sm-offset-1 col-sm-11">
                                        <div class="timeline-panel debits">
                                            <ul class="timeline-panel-ul">
                                                <li><h1 class="h8">What the H@ck event</h1></li>
                                                <li>
                                                    <p>
                                                        {!! HTML::link('/whatthehack','Fotos bekijken?',['class' => 'link']) !!}
                                                    </p>
                                                    <p>
                                                        Tijdens dit event mag iedereen die meegaat met de nieuwe domotica/Hue lampen van Philips spelen.
                                                        We gaan dan nadenken over een leuke/intelligente toepassing van de lampen via een app.<br />
                                                    </p>
                                                    <div class="kleiner">
                                                        Voorbeelden:<br />
                                                        · Morse sturen via de lampen<br />
                                                        · Diverse spellen waarbij meerdere Hue lampen een rol spelen<br />
                                                        · Automatisch inschakelen van lampen als Smartphone ‘snacht wordt opgepakt<br />
                                                    </div>
                                                    <p><br>
                                                        Daarna kunnen we gelijk beginnen met een Beta van die app maken met de beschikbare Libary.
                                                        Dan komt er een Jury die aan het beste groepje een prijs uitreikt.
                                                        Tussendoor word iedereen voorzien van pizza en achteraf gaan we natuurlijk borrelen!
                                                        Als je mee wil komen stuur a.u.b een email naar bestuur@uvis.nl.
                                                    </p>
                                                </li>
                                                <li><div class="kleiner"><i class="glyphicon glyphicon-time"></i> 09/10/2014 Tijd nog niet bekend</div></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				<br />
				<br />
				<br />
				</div>
		    </div>
		</div>
	</div>

	<div id="blue">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
					<h1 class="h7" style="color: #fff;">LID WORDEN?</h1>
					<p> Wat heeft UVIS voor jou te bieden?
						Gezelligheid, Ruimte voor je projectgroep,
						Kennis van ouderejaars, Connecties met
						bedrijven, Te gekke LAN's, Vrienden op je
						opleiding! en vele activiteiten, zie agenda.<br />
						Dus jij ziet lidmaatschap van UVIS wel
						zitten? Kom eens langs in onze verenigings
						ruimte op Nijenoord 1, ruimte A.-1.08. en
						geniet direct van de gezelligheid en de
						kennis!</p>
				</div>
			</div>
		</div>
	</div>





@stop

@section('js')
<script>
function showStuff(id, btn) {
    //hide
    document.getElementById(id).style.display = 'block';
    btn.style.display = 'none';
}
</script>
@stop
