@extends('layouts.master')

@section('title','Overige Afstudeeropties')

@section('content')
  		<div id="blue" style="margin-top: 153px">
			<div class="container">
				<div class="row centered">
					<div class="col-lg-8 col-lg-offset-2">
					    <h1 class="h9" style="color: #fff;">OVERIGE AFSTUDEEROPTIES</h1>
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
                        <h1 class="h7">GEAUTOMATISEERD TESTEN</h1><br />
        				<p style="text-align: left;">
                            QIS is een groot standaardpakket waar we met veel ontwikkelaars tegelijk aan werken.
                            Elk kwartaal leveren we een nieuwe versie uit naar onze klanten. Om de kwaliteit van
                            deze software te kunnen garanderen, voeren we voor elke versie die we opleveren een
                            serie regressietesten uit. Met jouw hulp willen we deze testen graag uitbreiden en
                            (verder) automatiseren. Het doel van deze stage is om de regressietesten te verbeteren.
                            Dit doe je aan de hand van een echte praktijksituatie. Je zoekt de beste manier en
                            tools voor deze verbeteringsslag. In deze stage werk je samen met ontwikkelaars en
                            testspecialisten. Tijdens deze opdracht kun je bijvoorbeeld verschillende tools met
                            elkaar vergelijken en laat je met behulp van een voorbeeld zien wat de mogelijkheden
                            zijn.
                        </p>
                        <h1 class="h7">GENERATOR VAN DOCUMENTATIE</h1><br />
                        <p style="text-align: left;">
                            In QIS zijn productdefinities van verzekeringsproducten volledig configureerbaar.
                            Voordat we producten inrichten in QIS maken we een ontwerp. Dat ontwerp dient tevens
                            als documentatie. In de toekomst willen we een deel van de documentatie automatisch
                            genereren vanuit de inrichting die vastligt in de database van QIS. Het doel van deze
                            stage is het ontwerpen en bouwen van een rapportagecomponent. Hiervoor maak je gebruik
                            van Java-technologie in combinatie met SQL en reporting libraries.
                        </p>
                        <h1 class="h7">RELEASEMANAGEMENTAPPLICATIE</h1><br />
                        <p style="text-align: left;">
                            Keylane|Quinity levert QIS aan een groot aantal verschillende klanten (verzekeraars).
                            Keylane|Quinity stelt op kwartaalbasis een nieuwe versie van QIS beschikbaar, met
                            daarin nieuwe functionaliteit, verbeteringen en bug-fixes vanuit verschillende klanten.
                            Per release houden we release notes bij met alle doorgevoerde wijzigingen; wat de
                            functionele en technische consequenties voor de klant zijn, wanneer het een en ander
                            getest is, etcetera
                        </p>
                        <p style="text-align: left;">
                            Dit beheer gebeurt momenteel in grote Excel-sheets. Dit heeft een aantal nadelen:<br />
                            • het is moeilijk te achterhalen wat relevant is voor een bepaalde klant; niet
                            elke klant gebruikt alle functionaliteit van QIS en zit op dezelfde versie van de
                            programmatuur.<br />
                            • het is in Excel niet mogelijk om een goede koppeling te leggen met nieuwe versies
                            van documentatie, testgevallen et cetera.<br />
                            • met meerdere personen in één Excel-sheet werken is niet ideaal.
                        </p>
                        <p style="text-align: left;">
                            De stage omvat het (functioneel en technisch) ontwerpen en realiseren van een eigen
                            releasemanagementapplicatie voor QIS. Hiervoor maak je gebruik van Java-technologie
                            in combinatie met SQL.
                        </p>
                        <h1 class="h7">URENADMINISTRATIE, HR-ADMINISTRATIE EN RELATIEMANAGEMENT</h1><br />
                        <p style="text-align: left;">
                            Keylane|Quinity beschikt over een aantal interne systemen voor het voeren van
                            personeelsadministratie, urenregistratie en het beheren van relaties. Voor deze
                            systemen liggen er een aantal verzoeken voor uitbreiding en aanpassen van het systeem.
                            Het doel van deze stage is om de wensen in kaart te brengen, dit om te zetten in een
                            ontwerp en om vervolgens de uitbreidingen te realiseren.
                        </p>
                        <h1 class="h7">SYNCHRONISATIEFUNCTIONALITEIT</h1><br />
                        <p style="text-align: left;">
                            In QIS zijn productdefinities van verzekeringsproducten volledig configureerbaar.
                            QIS bevat een synchronisatiecomponent waarmee productdefinities gesynchroniseerd
                            kunnen worden van de ene omgeving naar een andere omgeving, bijvoorbeeld van een
                            testomgeving naar een productieomgeving. Deze component bestaat al, maar de performance
                            is onvoldoende. Om deze component te verbeteren maak je een (functioneel en technisch)
                            ontwerp voor een nieuwe opzet van de component om vervolgens de nieuwe component te
                            realiseren.
                        </p>
                        <h1 class="h7">DIRECT MARKETING FUNCTIONALITEIT</h1><br />
                        <p style="text-align: left;">
                            QIS bevat functionaliteit om e-mail te versturen. Wanneer er echter sprake is van hoog
                            volume e-mail verkeer, moeten een aantal zaken extra goed geregeld worden. De benodigde
                            functionaliteit wil Keylane|Quinity onderbrengen in een bulk-e-mail-module. Voor de
                            functionaliteit van de module heeft Keylane|Quinity al een aantal requirements
                            opgesteld, maar wellicht zijn er andere relevante zaken die daar nog aan moeten
                            worden toegevoegd. Het doel van de stage is om een dergelijke module te definiëren,
                            de werkbaarheid van de module aan te tonen met een proof-of-concept om vervolgens te
                            starten met de realisatie in QIS.
                        </p>
                        <h1 class="h7">AUTOMATISCHE AFHANDELING INKOMENDE E-MAIL COMMUNICATIE</h1><br />
                        <p style="text-align: left;">
                            Het QIS systeem bevat functionaliteit om binnenkomende mail automatisch af te handelen. Dit doet het
                            systeem door op een beperkt aantal kenmerken in de mail te letten. Het systeem kan op dit moment niets
                            met berichten die het systeem niet herkent. Keylane|Quinity wil graag functionaliteit aan het systeem
                            toevoegen waarbij het systeem alle inkomende berichten kan categoriseren en kan toekennen aan
                            een bepaalde relatie, polis of schade. Het systeem maakt de match door toepassing van heuristische
                            zoekmethoden. Aandachtspunt hierbij is:<br />
                            • Het zoekalgoritme moet eenvoudig aanpasbaar zijn.<br />
                            • Het systeem moet grote volumes kunnen verwerken.<br />
                            • De relevantie van ieder bericht moet duidelijk zichtbaar zijn.<br />
                            Tijdens deze stage maak je een ontwerp (zowel functioneel als technisch), en werk je aan de realisatie van
                            het systeem.
                        </p>
                    </div>
            	</div>
       		</div>
   		</div>
@endsection

