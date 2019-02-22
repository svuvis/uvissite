@extends('layouts.master')

@section('title')
    Vacatures
@stop

@section('content')
    <div id="blue" style="margin-top: 153px">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-8 col-lg-offset-2">
                    <h1 class="h9" style="color: #fff;">VACATURES</h1>
                    <div class="controls">
                        <label id="h3">Filter:</label>
                        <button class="filter" data-filter="all">Geen</button>
                        <button class="filter" data-filter=".afstuderen" id="afstuderen">Afstuderen</button>
                        <button class="filter" data-filter=".bijbaan" id="bijbaan">Bijbaan</button>
                        <button class="filter" data-filter=".traineeship" id="traineeship">Traineeship</button>
                        {{--<label id="h3">Sorteren:</label>--}}
                        {{--<button class="sort" data-sort="myorder:asc">Asc</button>--}}
                        {{--<button class="sort" data-sort="myorder:desc">Desc</button>--}}
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!--  bluewrap -->

    <!--  Ongeveer 100 tekens per vacature -->

    <div id="Container" class="sandbox">
        <div class="container mix afstuderen">
            <a href="{{URL::action('PublicController@keylaneappsenfrontendtechnologie')}}">
                <div id="inhoud">
                    {!! HTML::image('img/Quinity.png', 'Quinity', ['class' => 'vaclogo']) !!}
                    <label id="h4">AFSTUDEREN BIJ KEYLANE QUINITY</label>
                    <h1 id="h4" style="font-size: 16px">APPS EN FRONT END TECHNOLOGIE</h1>
                    <p id="h5">
                        QIS bestaat uit verschillende front-end componenten die het gebruikers
                        mogelijk maken om bijvoorbeeld een verzekering aan te vragen of een
                        schade te melden. De gebruikers van deze componenten zijn niet alleen
                        werknemers van verzekeraars en intermediairs maar ook verzekeringnemers
                        die bijvoorbeeld via de website van de verzekeraar zelf een verzekering
                        afsluiten. Keylane|Quinity biedt een aantal uitdagende stageopdrachten
                        waarbij je bijvoorbeeld aan de slag gaat me de laatste generatie front
                        end technologieën (zoals bijvoorbeeld Angular en REST), een app kunt
                        ontwerpen en bouwen voor de gangbare mobiele platformen en stil moet
                        staan bij de vraag hoe je complexe informatie zo intuïtief mogelijk aan
                        gebruikers kunt tonen zonder aan functionaliteit in te boeten. Een
                        overzicht van de stageopdrachten op het gebied van front end technologie
                        kun je hieronder vinden...
                    </p>
                    <a href="{{URL::action('PublicController@keylaneappsenfrontendtechnologie')}}"><p id="h6">Lees verder.....</p></a>
                </div>
            </a>
        </div>

        <div class="container mix afstuderen">
            <a href="{{URL::action('PublicController@keylanewerkenmetfinancielegegevens')}}">
                <div id="inhoud">
                    {!! HTML::image('img/Quinity.png', 'Quinity', ['class' => 'vaclogo']) !!}
                    <label id="h4">AFSTUDEREN BIJ KEYLANE QUINITY</label>
                    <h1 id="h4" style="font-size: 16px">WERKEN MET FINANCIELE GEGEVENS</h1>
                    <p id="h5">
                        QIS bevat allerlei financiële gegevens: Hierbij kun je denken aan:<br />
                        Premiebedragen voor de verzekeringen, uitbetaalde bedragen op een
                        schade, binnenkomende en uitgaande betalingen van/aan tussenpersonen, etc.<br />
                        Voor veel van deze gegevens biedt QIS functionaliteit om bijvoorbeeld rapportages te maken of om
                        gegevens financieel af te handelen. Keylane|Quinity biedt een aantal uitdagende stageopdrachten
                        waarbij je aan de slag kan gaan met complexe financiële modellen, rapportages of een rekening
                        courant systeem. Een overzicht van de stageopdrachten kun je hieronder vinden...
                    </p>
                    <a href="{{URL::action('PublicController@keylanewerkenmetfinancielegegevens')}}"><p id="h6">Lees verder.....</p></a>
                </div>
            </a>
        </div>

        <div class="container mix afstuderen">
            <a href="{{URL::action('PublicController@keylanebigdata')}}">
                <div id="inhoud">
                    {!! HTML::image('img/Quinity.png', 'Quinity', ['class' => 'vaclogo']) !!}
                    <label id="h4">AFSTUDEREN BIJ KEYLANE QUINITY</label>
                    <h1 id="h4" style="font-size: 16px">BIG DATA</h1>
                    <p id="h5">
                        Keylane|Quinity is leverancier van e-business totaaloplossingen
                        voor de financiële dienstverlening. Op basis van jarenlange ervaring
                        in de verzekeringbranche is de Quinity Insurance Solution (QIS)
                        ontwikkeld; een complete polis- en schadeadministratie voor
                        verzekeraars, volmachten en intermediairs. QIS is geïmplementeerd
                        bij een groot aantal verzekeraars in Europa.
                        We hebben hoogopgeleide, jonge en enthousiaste medewerkers in dienst.
                        De gemiddelde leeftijd ligt rond de 32 jaar. Keylane|Quinity is gevestigd
                        in een mooi pand aan de Maliebaan in Utrecht...
                    </p>
                    <a href="{{URL::action('PublicController@keylanebigdata')}}"><p id="h6">Lees verder.....</p></a>
                </div>
            </a>
        </div>

        <div class="container mix afstuderen">
            <a href="{{URL::action('PublicController@keylaneoverige')}}">
                <div id="inhoud">
                    {!! HTML::image('img/Quinity.png', 'Quinity', ['class' => 'vaclogo']) !!}
                    <label id="h4">AFSTUDEREN BIJ KEYLANE QUINITY</label>
                    <h1 id="h4" style="font-size: 16px">OVERIGE AFSTUDEEROPTIES</h1>
                    <p id="h5">
                        Geautomatiseerd testen,generator van documentatie, releasemanagementapplicatie,
                        urenadministratie, HR-administratie en relatiemanagement,
                        synchronisatiefunctionaliteit, direct marketing functionaliteit en automatische afhandeling
                        inkomende e-mail communicatie...
                    </p>
                    <a href="{{URL::action('PublicController@keylaneoverige')}}"><p id="h6">Lees verder.....</p></a>
                </div>
            </a>
        </div>

        <div class="container mix traineeship">
            <a href="{{URL::action('PublicController@qienittraineeshipalgemeen')}}">
                <div id="inhoud">
                    {!! HTML::image('img/Qien-paars.png', 'Qien', ['style' => 'max-height: 130px;','class' => 'vaclogo']) !!}
                    <label id="h4">IT TRAINEESHIP</label>
                    <p id="h5">
                        "Jouw ontwikkeling in een stroomversnelling"<br>
                        Ons IT-Traineeship is een uniek en hoogwaardig ontwikkeltraject dat erop gericht is om jou een
                        kickstart van
                        jouw IT-carrière te geven. Het traineeship is gebaseerd op één van de volgende programmeertalen;
                        Java,
                        .NET (C#), PHP. Naast het leren van één van deze programmeertalen krijg je...
                    </p>
                    <a href="{{URL::action('PublicController@qienittraineeshipalgemeen')}}"><p id="h6">Lees verder.....</p></a>
                </div>
            </a>
        </div>

        <div class="container mix traineeship">
            <a href="{{URL::action('PublicController@qienittraineeship')}}">
                <div id="inhoud">
                    {!! HTML::image('img/Qien-paars.png', 'Qien', ['style' => 'max-height: 130px;','class' => 'vaclogo']) !!}
                    <label id="h4">IT TRAINEESHIP</label>
                    <p id="h5">
                        “Ben jij net afgestudeerd en wil jij meewerken aan IT projecten bij klanten als Heineken,
                        HEMA, Desperados en BCC? Volg dan ons traineeship voor Software Ontwikkelaar, IT
                        Architect of IT Analist”...<br>
                    </p>
                    <a href="{{URL::action('PublicController@qienittraineeship')}}"><p id="h6">Lees verder.....</p></a>
                </div>
            </a>
        </div>

        <div class="container mix bijbaan">
            <a href="{{URL::action('PublicController@ogdhelpdeskmedewerker')}}">
                <div id="inhoud">
                    {!! HTML::image('img/OGD.png', 'OGD', ['class' => 'vaclogo']) !!}
                    <label id="h4">HELPDESKMEDEWERKER</label>
                    <p id="h5">
                        OGD is altijd op zoek naar studenten die een bijbaan willen in de ict. Een van de functies waar
                        we altijd meerdere bijbanen in hebben is die van helpdeskmedewerker. De kennis die hiervoor
                        nodig is, doe je op tijdens je werk en de cursussen die we je gratis aanbieden. Vergaande
                        ict-kennis is dus niet nodig om te kunnen solliciteren. En er is altijd wel een project bij jou
                        in de buurt.
                        Als helpdeskmedewerker ben je het aanspreekpunt voor de medewerkers van onze klant. Je werkplek
                        bevindt zich meestal bij onze klant op de ict-afdeling. Je zorgt er samen met de...
                    </p>
                    <a href="{{URL::action('PublicController@ogdhelpdeskmedewerker')}}"><p id="h6">Lees verder.....</p></a>
                </div>
            </a>
        </div>

        <div class="container mix bijbaan">
            <a href="{{URL::action('PublicController@ogdsoftwareontwikkelaar')}}">
                <div id="inhoud">
                    {!! HTML::image('img/OGD.png', 'OGD', ['class' => 'vaclogo']) !!}
                    <label id="h4">SOFTWARE-ONTWIKKELAAR</label>
                    <p id="h5">
                        OGD is altijd op zoek naar studenten die een bijbaan willen in de ict. Wil jij werkervaring
                        opdoen als software-ontwikkelaar terwijl je nog aan het studeren bent? Bij ons kan het. Veel
                        voorkomende talen op onze projecten zijn Java, PHP en de verschillende .NET-varianten. Maar ook
                        andere talen komen voor.
                        Niet alleen kun je bij ons relevante werkervaring opdoen, je kan ook je kennis uitbreiden met
                        onze vele gratis cursussen. Van beginnerscursussen voor PHP, Java of Ruby tot trainingen voor
                        gevorderden op het gebied van design patterns...
                    </p>
                    <a href="{{URL::action('PublicController@ogdsoftwareontwikkelaar')}}"><p id="h6">Lees verder.....</p></a>
                </div>
            </a>
        </div>

        <div class="gap"></div>
        <div class="gap"></div>
    </div>




@stop
@section('js')
    <script>
        $(function () {
            $('#Container').mixItUp();
        });
    </script>
@stop

