@extends('layouts.master')

@section('title')
Media
@stop

@section('content')
  		<div id="blue" style="margin-top:81px">
			<div class="container">
				<div class="row centered">
					<div class="col-lg-8 col-lg-offset-2">
					<h1 class="h9" style="color: #fff;">MEDIA</h1>
					</div>
				</div><!-- row -->
			</div><!-- container -->
		</div><!--  bluewrap -->

		<div id="r" style="background: #ebebeb;">
			<div class="container">
				<div class="row centered">
					{!! HTML::link('/media/2015','2015',['class' => 'mediabutton']) !!}
					{!! HTML::link('/media/2014','2014',['class' => 'mediabutton']) !!}
                    <br><br>
                </div><!-- row -->
			</div>
		</div>
@stop

