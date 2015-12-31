@extends('...master')

@section('title')
UVIS - Ideal
@stop

@section('css')
<style>
body {
height: 84.4%;
min-height:84.4%;
}
</style>
@stop

@section('content')
<div id="blue" style="margin-top:81px">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-8 col-lg-offset-2">
            <h1>UVIS BETALEN</h1>
            </div>
        </div><!-- row -->
    </div><!-- container -->
</div><!--  bluewrap -->

<div class="container wb" style="margin-top:30px;margin-bottom:30px">
    <div class="row centered">
        <div class="timeline-panel debits" style="border: 1px solid #d4d4d4;
    border-radius: 3px;
    background-color: #FFFFFF;
    color: #666;
    padding: 20px;
    position: relative;
    -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
    box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
    margin:20px;
    margin-bottom:70px;">
                <span class="causale">
                    <?php
                        $mollie = new Mollie_API_Client;
                        $mollie->setApiKey(Config::get('mollie.api_key'));
                        $issuers = $mollie->issuers->all();
                    ?>
                    {{ Form::open(array('route' => 'ideal')) }}
                        <label for="issuer">Kies uw bank:</label>
                        <select class="form-control" style="text-align: center;" name="issuer">';
                    <?php
                        foreach ($issuers as $issuer)
                        {
                            if ($issuer->method == Mollie_API_Object_Method::IDEAL)
                            {
                                echo '<option value=' . htmlspecialchars($issuer->id) . '>' . htmlspecialchars($issuer->name) . '</option>';

                            }
                        }
                    ?>
                    {{ Form::hidden('studentnummer', $studentNummer) }}
                    </select><button type="submit" class="btn btn-default" style="margin-top: 20px;">Betaal</button>
                    {{ Form::close() }}
                </span>
        </div>
    </div>
</div>
@stop