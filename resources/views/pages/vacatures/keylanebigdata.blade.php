@extends('layouts.master')

@section('title','Apps en Front-end technologie')

@section('content')
  		<div id="blue" style="margin-top:81px">
			<div class="container">
				<div class="row centered">
					<div class="col-lg-8 col-lg-offset-2">
					    <h1 class="h9" style="color: #fff;">BIG DATA</h1>
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
                        {!! HTML::image('img/Quinity.png', 'Quinity', ['class' => 'vaclogo']) !!}
                        <p style="text-align: left;">
                            Think Talent,<br />
                            act Career.
                        </p>
                        <p style="text-align: left;">
                            Keylane|Quinity maakt werk van talent! Hoe? Heel simpel! We bieden je vanaf je eerste dag een scala aan opleiding, training en begeleiding.<br />
                            Keylane|Quinity heeft momenteel ruim 150 medewerkers. De gemiddelde leeftijd ligt rond de 32 jaar. Collegialiteit vinden we erg belangrijk, dat merk je in hoe we met elkaar omgaan. Want als we elkaar helpen dan komen we allemaal een stapje verder. Dat merk je zodra je bij ons binnenstapt. De sfeer is ongedwongen, relaxed. Maar vergis je niet: de gedrevenheid van onze medewerkers is hoog. We willen naar de top en doen er alles aan om onze projecten te laten slagen en onze ambities waar te maken. Motivatie, inzet en een sterke drive om verder te komen zijn voor ons van groot belang.<br />
                            Op ons kantoor in Utrecht zal het je  aan niets ontbreken. Je krijgt een mooie werkplek en dagelijks staat er een verse lunch klaar. Na het werk is er regelmatig een borrel op kantoor of een uitje met je collega’s buiten de deur. Bij Keylane|Quinity behoort dit allemaal tot de standaard.
                        </p>
                        <p style="text-align: left;">
                            Ben je op zoek naar een leuke stage of afstudeeropdracht die perfect aansluit op je studie? Bij Keylane|Quinity hebben we diverse interessante opdrachten beschikbaar op gebied van:<br />
                            • Apps en Front-end technologie<br />
                            • Werken met financiële gegevens<br />
                            • Big Data technologie
                        </p>
                        <p style="text-align: left;">
                            Naast deze onderwerpen hebben we nog tal van andere diverse technische uitdagingen omschreven. Je leest deze op onze website. De taken tijdens een stage/afstudeerperiode zijn als volgt:<br />
                            Je ontwerpt, ontwikkelt en/of realiseert extra functionaliteit in QIS of ontwerpt en bouwt aan nieuwe of bestaande interne applicaties binnen Keylane|Quinity. Ontwikkeling vindt plaats op basis van het Keylane|Quinity framework (gebaseerd op Java Enterprise Edition).<br />
                            Afhankelijk van de beschikbare tijd is het ook mogelijk om een gedeelte van een stage-opdracht uit te voeren en je alleen bezig te houden met het uitwerken van de requirements en het maken van een functioneel ontwerp of juist alleen de bouw van de applicatie.
                        </p>
                        <p style="text-align: left;">
                            Wat bieden wij?<br />
                            Onze stagevergoeding is 500 euro netto per maand. We bieden een leuke, jonge leeromgeving, een mooi ingerichte werkplek (nabij het centrum van Utrecht), flexibele werktijden en goede begeleiding. En als het bevalt kun je na je afstuderen wellicht bij Keylane|Quinity aan de slag als bijvoorbeeld software engineer of consultant.
                        </p>
                        <p style="text-align: left;">
                            Contact:<br />
                            Kijk voor meer informatie op <a href="http://www.werkenbijkeylanequinity.nl">www.werkenbijkeylanequinity.nl</a> of neem contact op met Tessa van Rijnsoever of Fleur Aalbersberg via telefoonnummer 030-2335999 of stuur een e-mail naar werkenbijquinity@keylane.com. Of volg ons op Twitter of Facebook en blijf op de hoogte van onze vacatures en activiteiten.
                        </p>

                    </div>

                    <div class="col-lg-6">
                        <h1 class="h7">DE VACATURE</h1><br />
        				<p style="text-align: left;">
                            Keylane|Quinity levert voor QIS een management informatie systeem onder de naam
                            Data Mart. Data Mart biedt standaard management rapportages maar ook ad hoc
                            analyses aan en bestaat uit een grote verzameling tabellen. Daarnaast omvat het
                            systeem programma’s die gegevens importeren en de gegevens voorbereiden voor de
                            rapportages. Keylane|Quinity biedt een aantal stageopdrachten waarbij je werkt
                            aan complexe datamodellen waarbij snelheid even belangrijk is als flexibiliteit
                            van rapportages.
                        </p>
                        <h1 style="text-align: left; font-size: 16px;" class="h7">PERFORMANCE OPTIMALISATIE VAN DATA MART</h1>
                        <p style="text-align: left;">
                            Keylane|Quinity levert voor QIS een management informatie systeem onder de naam
                            Data Mart. Data Mart faciliteert standaard management rapportages en ad hoc analyses.
                            Op dit moment is de performance van het Data Mart product nog voldoende. Keylane|Quinity
                            ziet echter een trend in het steeds zwaarder worden van het gebruik. Het systeem
                            bevat steeds meer data en de ad hoc analyses worden steeds complexer. Keylane|Quinity
                            wil daarom onderzoeken welke maatregelen nodig en mogelijk zijn om de performance
                            verder te verbeteren. Hierbij kan gedacht worden aan het klaarzetten van
                            tussenresultaten, aanpassingen in het datamodel of zelfs het toepassen van geheel
                            nieuwe technologie als column based storage.
                        </p>
                        <p style="text-align: left;">
                            Gedurende deze stage analyseer je de huidige processen, doe je onderzoeken naar
                            mogelijke performance verbeteringen en werk je deze uit in een voorstel. Hierna
                            toon je van een aantal van deze voorstellen aan dat dit een positief effect heeft
                            op de performance door middel van een proof of concept.
                        </p>
                        <h1 style="text-align: left; font-size: 16px;" class="h7">RAPPORTAGE-VIEWER</h1>
                        <p style="text-align: left;">
                            Keylane|Quinity levert voor QIS een management informatie systeem onder de naam Data
                            Mart. Data Mart faciliteert standaard management rapportages en ad hoc analyses. De
                            rapporten van Data Mart zijn gemaakt met open-source tool BIRT (eclipse).
                            Keylane|Quinity wil onderzoeken of het mogelijk is om de BIRT viewer te integreren
                            in QIS als volwaardig rapportage-portaal. Hierbij zijn een aantal zaken van belang:</br>
                            • Visuele integratie binnen QIS.</br>
                            • Data-benadering via Keylane|Quinity framework in verband met database-
                            onafhankelijkheid en beveiliging.</br>
                            Authenticatie gebaseerd op QIS-authenticatie en autorisatie op basis van QIS-autorisaties.</br>
                        </p>
                        <p style="text-align: left;">
                            Tijdens deze stage onderzoeken je of een integratie mogelijk is binnen deze
                            randvoorwaarden, en realiseer je voor de genoemde onderdelen een proof-of-concept.
                        </p>
                        {!! HTML::image('img/WerkenBij2.png', 'Quinity', ['class' => 'vacimg', 'style' => 'max-width: 100%']) !!}
                        <h1 style="text-align: left; font-size: 16px;" class="h7">FACILITEREN VAN GROOTSCHALIGE REKENKLUSSEN IN RELATIONELE DATABASES</h1>
                        <p style="text-align: left;">
                            Door regels van toezichthouders binnen de verzekeringsbranche is het steeds vaker
                            noodzakelijk de gehele verzekeringsportefeuille door te rekenen op bepaalde
                            eigenschappen. Uiteraard moet dit in korte tijd uitgevoerd kunnen worden, en mag het
                            maar een beperkte impact hebben op het operationele systeem. Er zijn frameworks voor
                            het faciliteren van grootschalige rekenklussen in een scale-out model (zoals Apache
                            Hadoop, gebaseerd op google-principes), maar dat werkt in beginsel bestandsgebaseerd.
                            Voor QIS geldt dat de gegevens uit een relationele database afkomstig zijn en dat de
                            resultaten in de regel ook weer in een relationele database moeten worden opgeslagen.
                            Dit is oplosbaar met een export naar bestandssysteem aan het begin van een proces,
                            rekenen op basis van Hadoop, en importeren van het resultaat. Tijdens deze stage
                            onderzoek je of er efficiëntere oplossingen zijn waarbij zo’n export- en importstap
                            niet nodig is en werk je de oplossing uit in een proof of concept.
                        </p>
                    </div>
            	</div>
       		</div>
   		</div>
@endsection

