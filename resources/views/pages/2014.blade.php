@extends('layouts.master')

@section('title','(Media) 2014')

@section('content')
  		<div id="blue" style="margin-top:81px">
			<div class="container">
				<div class="row centered">
					<div class="col-lg-8 col-lg-offset-2">
                        <h1  class="h9" style="color: #fff;">2014</h1>
					</div>
				</div><!-- row -->
			</div><!-- container -->
		</div><!--  bluewrap -->

		<div id="r" style="background: #ebebeb;">
			<div class="container">
				<div class="row centered">
                    {!! HTML::link('/media/2015','2015',['class' => 'mediabutton']) !!}
                    <br>
                    <br>
                    <br>
                    {!! HTML::link('/media/2014/whatthehack','What the H@ck',['class' => 'mediabutton']) !!}
                    <br>
                    <br>
                    <p>
                        UVIS wil graag iedereen bedanken die bij dit evenement aanwezig was, wij hebben het erg naar ons zin gehad en we hopen jullie ook!
                    </p>
                    <br><br>
                </div><!-- row -->
			</div>
		</div>
@endsection

