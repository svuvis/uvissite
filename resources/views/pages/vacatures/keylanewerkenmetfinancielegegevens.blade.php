@extends('layouts.master')

@section('title','Apps en Front-end technologie')

@section('content')
  		<div id="blue" style="margin-top: 153px">
			<div class="container">
				<div class="row centered">
					<div class="col-lg-8 col-lg-offset-2">
					    <h1 class="h9" style="color: #fff;">WERKEN MET FINANCIELE GEGEVENS</h1>
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
                            Think Talent,<br>
                            act Career.
                        </p>
                        <p style="text-align: left;">
                            Keylane|Quinity maakt werk van talent! Hoe? Heel simpel! We bieden je vanaf je eerste dag een scala aan opleiding, training en begeleiding.<br>
                            Keylane|Quinity heeft momenteel ruim 150 medewerkers. De gemiddelde leeftijd ligt rond de 32 jaar. Collegialiteit vinden we erg belangrijk, dat merk je in hoe we met elkaar omgaan. Want als we elkaar helpen dan komen we allemaal een stapje verder. Dat merk je zodra je bij ons binnenstapt. De sfeer is ongedwongen, relaxed. Maar vergis je niet: de gedrevenheid van onze medewerkers is hoog. We willen naar de top en doen er alles aan om onze projecten te laten slagen en onze ambities waar te maken. Motivatie, inzet en een sterke drive om verder te komen zijn voor ons van groot belang.<br>
                            Op ons kantoor in Utrecht zal het je  aan niets ontbreken. Je krijgt een mooie werkplek en dagelijks staat er een verse lunch klaar. Na het werk is er regelmatig een borrel op kantoor of een uitje met je collega’s buiten de deur. Bij Keylane|Quinity behoort dit allemaal tot de standaard.
                        </p>
                        <p style="text-align: left;">
                            Ben je op zoek naar een leuke stage of afstudeeropdracht die perfect aansluit op je studie? Bij Keylane|Quinity hebben we diverse interessante opdrachten beschikbaar op gebied van:<br>
                            • Apps en Front-end technologie<br>
                            • Werken met financiële gegevens<br>
                            • Big Data technologie
                        </p>
                        <p style="text-align: left;">
                            Naast deze onderwerpen hebben we nog tal van andere diverse technische uitdagingen omschreven. Je leest deze op onze website. De taken tijdens een stage/afstudeerperiode zijn als volgt:<br>
                            Je ontwerpt, ontwikkelt en/of realiseert extra functionaliteit in QIS of ontwerpt en bouwt aan nieuwe of bestaande interne applicaties binnen Keylane|Quinity. Ontwikkeling vindt plaats op basis van het Keylane|Quinity framework (gebaseerd op Java Enterprise Edition).<br>
                            Afhankelijk van de beschikbare tijd is het ook mogelijk om een gedeelte van een stage-opdracht uit te voeren en je alleen bezig te houden met het uitwerken van de requirements en het maken van een functioneel ontwerp of juist alleen de bouw van de applicatie.
                        </p>
                        <p style="text-align: left;">
                            Wat bieden wij?<br>
                            Onze stagevergoeding is 500 euro netto per maand. We bieden een leuke, jonge leeromgeving, een mooi ingerichte werkplek (nabij het centrum van Utrecht), flexibele werktijden en goede begeleiding. En als het bevalt kun je na je afstuderen wellicht bij Keylane|Quinity aan de slag als bijvoorbeeld software engineer of consultant.
                        </p>
                        <p style="text-align: left;">
                            Contact:<br>
                            Kijk voor meer informatie op <a href="http://www.werkenbijkeylanequinity.nl">www.werkenbijkeylanequinity.nl</a> of neem contact op met Tessa van Rijnsoever of Fleur Aalbersberg via telefoonnummer 030-2335999 of stuur een e-mail naar werkenbijquinity@keylane.com. Of volg ons op Twitter of Facebook en blijf op de hoogte van onze vacatures en activiteiten.
                        </p>

                    </div>

                    <div class="col-lg-6">
                        <h1 class="h7">DE VACATURE</h1><br>
        				<p style="text-align: left;">
                            QIS bevat allerlei financiële gegevens: Hierbij kun je denken aan:<br />
                            • Premiebedragen voor de verzekeringen.<br />
                            • Uitbetaalde bedragen op een schade.<br />
                            • Binnenkomende en uitgaande betalingen van/aan tussenpersonen.<br />
                            • Etc.
                        </p>
                        <p style="text-align: left;">
                            Voor veel van deze gegevens biedt QIS functionaliteit om
                            bijvoorbeeld rapportages te maken of om gegevens financieel af
                            te handelen. Keylane|Quinity biedt een aantal uitdagende
                            stageopdrachten waarbij je aan de slag kan gaan met complexe
                            financiële modellen, rapportages of een rekening courant systeem.
                            Een overzicht van de stageopdrachten kun je hieronder vinden.
                        </p>
                        <h1 style="text-align: left; font-size: 16px;" class="h7">IMPLEMENTEREN PROGNOSE MODEL FINANCIELE RESULTATEN</h1>
                        <p style="text-align: left;">
                            Verzekeringsmaatschappijen die zich richten op schadeverzekeringen, willen per
                            periode de premie die hoort bij de periode kunnen relateren aan de schades van
                            dezelfde periode. Hiermee kan de verzekeringsmaatschappij per periode het financiële
                            resultaat bepalen. Na afloop van een periode zal het echter in de regel zo zijn
                            dat er schades hebben plaatsgevonden die nog geclaimd worden, maar nog niet
                            bekend zijn bij de maatschappij. Maatschappijen houden hiervoor een financiële
                            voorziening aan die IBNR wordt genoemd (Incurred But Not Reported, dit zijn
                            schades die wel hebben plaatsgevonden maar nog niet zijn gemeld).
                        </p>
                        <p style="text-align: left;">
                            De meeste maatschappijen bepalen deze voorziening achteraf buiten de primaire
                            systemen. Dit heeft echter tot gevolg dat de informatie niet in de primaire
                            systemen aanwezig is, en dus ook niet inzichtelijk zijn in rapportages die
                            gebaseerd zijn op informatie uit de primaire systemen. QIS bevat functionaliteit
                            om IBNR-voorziening automatisch te bepalen, maar deze functionaliteit is minimaal.
                            Keylane|Quinity heeft de ambitie om deze functionaliteit te verbeteren en uit
                            te breiden. Gedurende de stage ontwerp je een prognose model (uiteraard met
                            ondersteuning van ontwerpers van Keylane|Quinity), maak je op basis van het
                            model een functioneel- en technisch ontwerp en realiseer je de oplossing in Java.
                        </p>
                        <h1 style="text-align: left; font-size: 16px;" class="h7">FINANCIELE GEGEVENS PER VOLMACHT PORTEFEUILLE</h1>
                        <p style="text-align: left;">
                            Keylane|Quinity levert QIS aan verzekeringsmaatschappijen voor het voeren van de
                            verzekeringsadministratie. Er zijn echter ook een aantal grote volmachten die
                            gebruik maken van QIS. Een volmacht is een partij die onderdeel is van de
                            verkoopketen en de administratie voert, maar die de premie afstaat aan een
                            verzekeringsmaatschappij. Uiteraard komt ook de schadelast voor rekening
                            van die verzekeringsmaatschappij. QIS bevat functionaliteit om alle bedragen
                            die zijn verwerkt in de financiële administratie van de volmacht volgens de
                            juiste regels toe te wijzen aan de rechthebbende maatschappij. De maatschappijen
                            hebben echter ook behoefte aan gegevens over de portefeuille op een bepaald
                            moment in termen van aantallen en premies. Hiervoor is aanvullende functionaliteit
                            nodig. Tijdens deze stage maak je een (functioneel en technisch) ontwerp voor de
                            aanvullende functionaliteit en realiseer je de oplossing.
                        </p>
                        <h1 style="text-align: left; font-size: 16px;" class="h7">PERIODEVERLIEZEN PER RISICODRAGER</h1>
                        <p style="text-align: left;">
                            {!! HTML::image('img/WerkenBij1.png', 'Quinity', ['class' => 'vacimg']) !!}
                            Verzekeraars willen voor het beoordelen van hun resultaat opbrengsten uit de
                            polisadministratie afzetten tegen verliezen uit de schadeadministratie. QIS biedt
                            functionaliteit die op basis van premie en provisie vanuit de polisadministratie
                            periodiek periodeopbrengsten berekent. QIS biedt ook functionaliteit die op basis
                            van de schadelast uit de schadeadministratie periodiek periodeverliezen berekent.
                            Veelal dragen maatschappijen niet alleen het risico dat verzekeringen met zich mee
                            brengen. Een verzekeraar kan bijvoorbeeld als volmacht voor een andere verzekeraar
                            optreden en dus zelf geen risico dragen , of kan de verzekeraar een deel van het
                            risico herverzekeren en daarmee risico af dragen naar andere verzekeraars. Een (deel
                            van) de premieopbrengsten en de schadelast komt in dat geval terecht bij een andere
                            risicodrager. QIS biedt functionaliteit om de verdeling over deze risicodragers te
                            berekenen. Hierbij biedt QIS ook de mogelijkheid om periodeopbrengsten per
                            risicodrager te berekenen.
                        </p>
                        <p style="text-align: left;">
                            Keylane|Quinity wil aan QIS nu ook functionaliteit toevoegen die periodeverliezen
                            per risicodrager berekent en inzichtelijk maakt. Tijdens deze stage maak je een
                            ontwerp (zowel functioneel als technisch), en werk je aan realisatie van het
                            ontwerp en de integratie met QIS.
                        </p>
                        <h1 style="text-align: left; font-size: 16px;" class="h7">REKENING COURANT SYSTEEM</h1>
                        <p style="text-align: left;">
                            Verzekeraars hebben veelal te maken met een aantal relaties waarmee ze veel
                            financiële transacties verrekenen. Om te voorkomen dat al deze transacties
                            individueel door de bancaire systemen gaan lopen (met alle bijhorende kosten van
                            dien) werken verzekeraars vaak met een onderlinge rekening courant (kortweg RC):
                            Transacties worden gedurende een periode in deze RC geboekt, en het saldo wordt
                            aan het einde van de periode daadwerkelijk verrekend via de bank.
                        </p>
                        <p style="text-align: left;">
                            Keylane|Quinity wil aan QIS een RC-systeem toevoegen. Tijdens deze stage maak je
                            een ontwerp (zowel functioneel als technisch) en werk je de realisatie van het
                            systeem en de integratie met QIS uit.
                        </p>

                    </div>
            	</div>
       		</div>
   		</div>
@endsection

