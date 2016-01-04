<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use View;

class PublicController extends Controller
{
    public function index()
    {
        /*User::create(['name' => 'Jelle Breuer','email' => 'mail@jellebreuer.com','password' => 'maxmoons20']);*/
        return View::make('pages.index');
    }
    public function inschrijven()
    {
        return View::make('pages.inschrijven');
    }
    public function bestuur()
    {
        return View::make('pages.bestuur');
    }
    public function activiteiten()
    {
        return View::make('pages.activiteiten');
    }
    public function overuvis()
    {
        return View::make('pages.overuvis');
    }
    public function agenda()
    {
        return View::make('pages.agenda');
    }
    public function commissies()
    {
        return View::make('pages.commissies');
    }
    public function onzesponsors()
    {
        return View::make('pages.onzesponsors');
    }
    public function media()
    {
        return View::make('pages.media');
    }
    public function tweeduizendveertien()
    {
        return View::make('pages.2014');
    }
    public function tweeduizendvijftien()
    {
        return View::make('pages.2015');
    }
    public function whatthehack()
    {
        return View::make('pages.whatthehack');
    }
    public function nerdsinvegas()
    {
        return View::make('pages.nerdsinvegas');
    }
    public function oudefotos()
    {
        return View::make('pages.oudefotos');
    }
    public function vacatures()
    {
        return View::make('pages.vacatures');
    }
    public function ogdhelpdeskmedewerker()
    {
        return View::make('pages.vacatures.ogdhelpdeskmedewerker');
    }
    public function ogdsoftwareontwikkelaar()
    {
        return View::make('pages.vacatures.ogdsoftwareontwikkelaar');
    }
    public function keylaneappsenfrontendtechnologie()
    {
        return View::make('pages.vacatures.keylaneappsenfrontendtechnologie');
    }
    public function keylanewerkenmetfinancielegegevens()
    {
        return View::make('pages.vacatures.keylanewerkenmetfinancielegegevens');
    }
    public function keylanebigdata()
    {
        return View::make('pages.vacatures.keylanebigdata');
    }
    public function keylaneoverige()
    {
        return View::make('pages.vacatures.keylaneoverige');
    }
    public function qienittraineeship()
    {
        return View::make('pages.vacatures.qienittraineeship');
    }
    public function qienittraineeshipalgemeen()
    {
        return View::make('pages.vacatures.qienittraineeshipalgemeen');
    }
}
