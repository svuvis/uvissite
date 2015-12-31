@extends('layouts.master')

@section('title','Apps en Front-end technologie')

@section('content')
  		<div id="blue" style="margin-top:81px">
			<div class="container">
				<div class="row centered">
					<div class="col-lg-8 col-lg-offset-2">
					    <h1 class="h9" style="color: #fff;">APPS EN FRONT-END TECHNOLOGIE</h1>
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
                            QIS bestaat uit verschillende front-end componenten die het gebruikers mogelijk
                            maken om bijvoorbeeld een verzekering aan te vragen of een schade te melden.
                            De gebruikers van deze componenten zijn niet alleen werknemers van verzekeraars
                            en intermediairs maar ook verzekeringnemers die bijvoorbeeld via de website van
                            de verzekeraar zelf een verzekering afsluiten. Keylane|Quinity biedt een aantal
                            uitdagende stageopdrachten waarbij je bijvoorbeeld aan de slag gaat me de laatste
                            generatie front end technologieën (zoals bijvoorbeeld Angular en REST), een app
                            kunt ontwerpen en bouwen voor de gangbare mobiele platformen en stil moet staan
                            bij de vraag hoe je complexe informatie zo intuïtief mogelijk aan gebruikers kunt
                            tonen zonder aan functionaliteit in te boeten. Een overzicht van de stageopdrachten
                            op het gebied van front end technologie kun je hieronder vinden.
                        </p>
                        <h1 style="text-align: left; font-size: 16px;" class="h7">DOCUMENTBEHEER</h1>
                        <p style="text-align: left;">
                            Onderdeel van de administratie in QIS is het opslaan van ingaande en uitgaande
                            documenten. Naarmate het gebruik van deze functionaliteit toeneemt, neemt ook de
                            behoefte aan meer functionaliteit op dit onderdeel toe. Hierbij kun je denken aan:<br />
                            • Het kunnen zoeken in documenten.<br />
                            • Het organiseren van documenten in een mappenstructuur.<br />
                            • Het toekennen van keywords aan documenten ten behoeven van indexering.<br />
                            • Het exporteren van een geheel dossier om offline te kunnen gebruiken.
                        </p>
                        <p style="text-align: left;">
                            Tijdens deze stage bedenk je olossingen voor de aanvullende requirements voor
                            documentbeheer, zet je oplossing om in een concreet voorstel en werk je het voorstel
                            vervolgens uit in een functioneel ontwerp, technisch ontwerp en werkende applicatie.
                        </p>
                        <h1 style="text-align: left; font-size: 16px;" class="h7">GRAFISCHE REPRESENTATIE POLISSTAPEL</h1>
                        <p style="text-align: left;">
                            In QIS administreert de verzekeraar polissen. Deze polissen kunnen gewijzigd worden, en
                            hebben dus een historie. Deze historie kan op verschillende manieren grafisch weergegeven
                            worden: als stapel, als tijdlijn en zelfs op twee tijdsassen. In het huidige systeem
                            ondersteunen we echter alleen de niet grafische weergave als stapel. Tijdens de stage
                            breidt je QIS zodanig uit dat het systeem de gebruiker een grafische representatie biedt
                            van een polis. De grafische weergave moet:<br />
                            • Klikbaar zijn, je kunt bijvoorbeeld navigeren naar voorgaande en volgende jaren.<br />
                            • Acties ondersteunen, je kunt bijvoorbeeld een mutatie toevoegen.
                        </p>
                        <p style="text-align: left;">
                            Vakgebieden: helpdesk, bijbaan<br />
                            Werkervaring: Student<br />
                            Regio: Delft, Amsterdam, Utrecht, Eindhoven, Enschede<br />
                        </p>
                        <p style="text-align: left;">
                            Je definieert de grafische representaties, en realiseert deze op basis van svg-techniek
                            (scalable vector grafics).
                        </p>
                        <h1 style="text-align: left; font-size: 16px;" class="h7">GRAFISCHE REPRESENTATIE SCHADE EN RELATIES</h1>
                        <p style="text-align: left;">
                            QIS biedt verzekeraars de mogelijkheid om schades te registreren en te beheren. Tijdens
                            deze stage breidt je QIS zodanig uit dat het systeem de gebruiker een grafische
                            representatie biedt van een schade en zijn relaties. Hierbij kun je denken aan:<br />
                            • Alle financiële gegevens rondom de schade.<br />
                            • De link naar een eventuele calamiteit.<br />
                            • Eventuele vervolgschades.
                        </p>
                        <p style="text-align: left;">
                            Het systeem moet de gebruiker de data zo intuïtief mogelijk tonen en functionaliteit
                            bieden voor het navigeren in de verschillende relaties. Tijdens deze stage werk je een
                            functioneel en technisch ontwerp uit en zet je het ontwerp om naar een werkende applicatie.
                        </p>
                        <h1 style="text-align: left; font-size: 16px;" class="h7">NIEUWE FRONT-END TECHNOLOGIE</h1>
                        <p style="text-align: left;">
                            Keylane|Quinity gebruikt een eigen framework voor het ontwikkelen van applicaties.
                            Keylane|Quinity heeft het voornemen om de technieken in het front-end te veranderen.
                            Dit betekent dat er ook wijzigingen nodig zullen zijn in het framework. Keylane|Quinity
                            onderhoudt een referentie-applicatie die is gebouwd op basis van dit framework,
                            en de wijzigingen moeten dus worden toegepast in deze referentieapplicatie als
                            proof-of-concept.
                        </p>
                        <p style="text-align: left;">
                            Het doel van deze stage is het ontwerpen van een nieuw front-end voor de
                            referentie-applicatie, het identificeren van de hiervoor benodigde aanpassingen in het
                            framework en het realiseren van de wijzigingen in het framework en front-end van de
                            referentie-applicatie in een aparte omgeving.
                        </p>
                        <h1 style="text-align: left; font-size: 16px;" class="h7">UITBREIDINGEN MOBIELE APP</h1>
                        <p style="text-align: left;">
                            Keylane|Quinity biedt op dit moment een mobiele applicatie aan die een beperkte set
                            aan functionaliteit biedt. Het doel van de stage is om nieuwe functionaliteit uit te
                            werken in een ontwerp en de nieuwe functionaliteit in de app beschikbaar te maken op
                            de drie gangbare platformen:<br />
                            • Android<br />
                            • iOS<br />
                            • Windows Phone
                        </p>
                        <h1 style="text-align: left; font-size: 16px;" class="h7">INTERFACES MET SOCIALE MEDIA</h1>
                        <p style="text-align: left;">
                            QIS biedt een aantal mogelijkheden voor communiceren met partners en klanten. Het aantal
                            communicatiekanalen in de markt groeit echter, waaronder een aantal sociale media. Tijdens
                            deze stage onderzoek je welke media op welke manier in QIS ondersteund kunnen worden, en
                            bewijs je de integratie middels een proof-of-concept.
                        </p>
                        <h1 style="text-align: left; font-size: 16px;" class="h7">"VERGOOGLEN" ZOEKFUNCTIONALITEIT</h1>
                        <p style="text-align: left;">
                            In QIS zijn er zeer veel mogelijkheden voor gebruikers om te zoeken in de opgeslagen
                            gegevens. De zoekaanpak is echter gebaseerd op het zoeken in de gestructureerde gegevens
                            van een relationele database. Soms is er behoefte aan het kunnen zoeken via een meer
                            generieke ingang, zoals ook Google dat bijvoorbeeld doet. De gebruiker moet in staat
                            zijn met behulp van losse woorden te kunnen zoeken in verschillende soorten data,
                            waaronder losse documenten. Tijdens de stage ontwerp en bouw je:<br />
                            • Programmatuur die het mogelijk maakt om informatie te indexeren met een indexserver.<br />
                            • Een zoekfunctie op deze indexserver (proof-of-concept).<br />
                            • Een oplossing voor het zoeken met een indexserver rekening houdend met autorisaties van de gebruiker:
                        </p>
                        <p style="text-align: left;">
                            Het moet niet mogelijk zijn dat de gebruiker via de indexserver resultaten te zien krijgt
                            waar de gebruiker in QIS niet bij mag komen.<br />
                            • Een overzict van de zoekresultaten die op een duidelijke manier aan de gebruiker toont hoe relevant ieder zoekresultaat is.
                        </p>
                    </div>

            	</div>
       		</div>
   		</div>
@endsection

