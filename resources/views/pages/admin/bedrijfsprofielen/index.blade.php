@extends('layouts.admin.master')

@section('title','Bedrijfsprofielen')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="h9" style="margin-top: 15px">Bedrijfsprofielen
                    <a href="{{action('BedrijfsprofielenController@create')}}" class="btn btn-success btn-circle btn-lg">
                        <i class="fa fa-plus" style="line-height: 30px"></i>
                    </a>
                </h1>

            </div>
        </div>
        <div class="row">
            <div class="panel-body" style="padding-left: 30px">
                <div class="panel-group" id="accordion">
                    @if(count($profiles) != 0)
                        @foreach($profiles as $profile)
                            <div class="panel panel-default" style="margin-top: 5px !important;">
                                <div class="panel-heading">
                                    <h4 class="panel-title" style="height: 34px;line-height: 34px">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$profile->id}}" style="color: #428bca">{!! $profile->title !!}</a>
                                        {!! Form::model($profiles, ['method' => 'DELETE', 'action' => ['BedrijfsprofielenController@destroy', $profile->id], 'style' => 'float: right']) !!}
                                        {!! Form::submit('Verwijderen', ['class' => 'btn btn-danger', 'style' => 'float: right']) !!}
                                        {!! Form::close() !!}
                                        <a href="{{action('BedrijfsprofielenController@edit',$profile->id)}}" class="btn btn-warning" style="float: right; margin-right: 15px;color: white">Aanpassen</a>
                                    </h4>
                                </div>
                                <div id="collapse{{$profile->id}}" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        {!! $profile->body !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>Er zijn op dit moment geen profielen</p><br /><br />
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection