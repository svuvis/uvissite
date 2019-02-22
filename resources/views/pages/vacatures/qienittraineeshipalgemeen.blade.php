@extends('layouts.master')

@section('title','IT Traineeship')

@section('content')
    <div id="blue" style="margin-top: 153px">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-8 col-lg-offset-2">
                    <h1 class="h9" style="color: #fff;">IT TRAINEESHIP</h1>
                    <a href="{{URL::action('PublicController@vacatures')}}"
                       style="text-decoration: underline; font-style: italic; font-size: 14px;">
                        <i class="glyphicon glyphicon-chevron-left"></i>TERUG NAAR DE VACATUREBANK</a>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!--  bluewrap -->

    <!--  Ongeveer 100 tekens per vacature -->
    <div class="container w">
        <h1 class="h7">DE VACATURE</h1><br />
        <h1 style="text-align: left; font-size: 16px;" class="h7">FUNCTIEOMSCHRIJVING</h1>
        <p style="font-style: italic;">
            "Jouw ontwikkeling in een stroomversnelling"
        </p>
        image
        {!! HTML::image('img/Qien-paars.png', 'Qien', ['style' => 'max-height: 140px;','class' => 'vaclogo']) !!}
        <p style="text-align: left;">
            Ons IT-Traineeship is een uniek en hoogwaardig ontwikkeltraject dat erop gericht is om jou een kickstart van
            jouw IT-carrière te geven. Het traineeship is gebaseerd op één van de volgende programmeertalen; Java,
            .NET (C#), PHP. Naast het leren van één van deze programmeertalen krijg je begeleiding van een ervaren
            coach op het gebied van softskills. Hierbij kan je denken aan het verbeteren van jouw sociale vaardigheden
            en hoe om te gaan met timemanagement. Als jij jouw vakopleidingen hebt afgerond, ben je klaar om aan de
            slag te gaan met IT Projecten bij één van onze opdrachtgevers. Onze opdrachtgevers zijn diverse IT
            dienstverleners en IT afdelingen van grote- en middelgrote bedrijven, met ieder een eigen focus en
            specialisme.
        </p>
        <h1 style="text-align: left; font-size: 16px;" class="h7">INDELING TRAINEESHIP</h1>
        <p style="text-align: left;">
            Ons traineeship is opgedeeld in vier fases. In de eerste fase ga jij IT vakopleidingen volgen, waarbij je
            erkende certificaten behaalt. Na het opdoen van deze benodigde vakkennis stroom jij door naar fase twee en
            ga je meewerken aan IT Projecten bij één van onze opdrachtgevers. Gedurende deze projecten ga jij samen
            met jouw coach kijken waar jij jezelf in wilt specialiseren. In fase drie ga jij gecertificeerde
            vakopleidingen
            volgen die je nodig hebt voor jouw specialisatie. Zodra jij deze certificaten in bezit hebt, ga je bij één
            van onze
            opdrachtgevers aan de slag met IT Projecten binnen jouw specialisme. Na deze specialisatiefase (fase 4) kan
            jij doorstromen bij één van onze opdrachtgevers als software ontwikkelaar, IT Architect of IT Analist.
        </p>
        <h1 style="text-align: left; font-size: 16px;" class="h7">OPLEIDING-EN ERVARINGSEISSEN</h1>
        <p style="text-align: left;">
            Afgeronde HBO/WO opleiding (Beta opleiding is een pré);<br />
            - Starter op de arbeidsmarkt (0-3 jaar werkervaring);<br />
            - Affiniteit met IT;<br />
            - Sterke drive om jezelf te ontwikkelen;<br />
            - Uitstekende beheersing van de Nederlandse taal in woord en geschrift;<br />
            - Je bent iemand die het verschil weet te maken.
        </p>
        <h1 style="text-align: left; font-size: 16px;" class="h7">COMPETENTIES</h1>
        <p style="text-align: left;">
            - Uitstekende communicatieve vaardigheden;<br />
            - Ondernemend;<br />
            - Analytisch;<br />
            - Leergierig;<br />
            - Flexibel;<br />
            - Creativiteit;<br />
            - Een gezonde dosis lef gecombineerd met gezond verstand.
        </p>
        <h1 style="text-align: left; font-size: 16px;" class="h7">AANBOD</h1>
        <p style="text-align: left;">
            Bij Qien kan jij jouw eigen route uitstippelen om dé beste in jouw vakgebied te worden. Naast werkervaring
            krijg jij de kans om vakopleidingen te volgen en word je gecoacht op jouw persoonlijke ontwikkeling. Je
            krijgt
            een aanbieding die is gebaseerd op uitstekende primaire en secundaire arbeidsvoorwaarden.
        </p>
        <h1 style="text-align: left; font-size: 16px;" class="h7">AANBOD</h1>
        <p style="text-align: left;">
            Ben jij geïnteresseerd in ons IT-Traineeship? Neem dan direct contact op met één van onze Recruiters via
            www.qien.nl of bel ons via +31 (0)30 751 47 77. Wij maken graag kennis met jou.
        </p>
    </div>
@endsection
